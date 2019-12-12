<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cheque;
use App\Model\Pagamento;
use Illuminate\Support\Facades\Validator;

class ChequeController extends Controller
{
    private $pagamento;
    private $cheque;

    public function __construct(Pagamento $pagamento, Cheque $cheque)
    {
        $this->middleware('auth');
        $this->pagamento = $pagamento;
        $this->cheque = $cheque;
    }

    public function show()
    {
        $cheques = $this->cheque->with('pagamento')->get();
        return view('cheque.show',compact('cheques'));
    }

    public function create()
    {
        return view('cheque.create');
    }

    public function store(Request $res)
    {
        $validador = Validator::make($res->all(), [
            'valor' => 'required|numeric',
            'data' => 'required|date',
            'des' => 'required|string|max:255',
            'nc' => 'required|numeric',
        ]);

        if($validador->fails())
        {
            return redirect()->route('cheque.create')
                ->withErrors($validador)
                ->withInput();
        }else
        {
            $cheque_ins = Pagamento::create([
                'vencimento' => $res->input('data'),
                'administrador_id' => auth()->id(),
                'descricao' => $res->input('des'),
                'valor' => $res->input('valor')
            ])
                ->cheque()
                ->create([
                    'numero'=>$res->input('nc')
                ]);

            if($cheque_ins)
            {
                return redirect()->route('cheque.show')
                    ->withInput()
                    ->with('inser',true);
            }
            return 'NÃO FUNCIONOU!!' ;
        }
    }
}
