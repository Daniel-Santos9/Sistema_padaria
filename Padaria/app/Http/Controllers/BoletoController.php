<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Boleto;
use App\Model\Pagamento;
use Illuminate\Support\Facades\Validator;

class BoletoController extends Controller
{
    private $pagamento;
    private $boleto;

    public function __construct(Pagamento $pagamento, Boleto $boleto)
    {
        $this->middleware('auth');
        $this->pagamento = $pagamento;
        $this->boleto = $boleto;
    }

    public function show()
    {
        $boletos = $this->boleto->with('pagamento')->get();
        return view('boleto.show',compact('boletos'));
    }

    public function create()
    {
        return view('boleto.create');
    }

    public function store(Request $res)
    {
        $validador = Validator::make($res->all(), [
            'valor' => 'required|numeric',
            'data' => 'required|date',
            'des' => 'required|string|max:255',
            'nf' => 'required|numeric',
        ]);

        if($validador->fails())
        {
            return redirect()->route('boleto.create')
                ->withErrors($validador)
                ->withInput();
        }else
        {
            $boleto_ins = Pagamento::create([
                'vencimento' => $res->input('data'),
                'administrador_id' => auth()->id(),
                'descricao' => $res->input('des'),
                'valor' => $res->input('valor')
            ])
                ->boleto()
                ->create([
                    'NF'=>$res->input('nf')
                ]);

            if($boleto_ins)
            {
                return redirect()->route('boleto.show')
                    ->withInput()
                    ->with('inser',true);
            }
            return 'NÃO FUNCIONOU!!' ;
        }
    }
}
