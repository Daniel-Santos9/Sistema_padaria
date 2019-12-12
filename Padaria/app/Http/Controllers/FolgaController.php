<?php

namespace App\Http\Controllers;

use App\Model\Folga;
use App\Model\Funcionario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FolgaController extends Controller
{
    private $folga;
    private $func;

    public function __construct(Folga $folga, Funcionario $funcionario)
    {
        $this->middleware('auth');
        $this->folga= $folga;
        $this->func = $funcionario;
    }

    public function show()
    {
        $folgas = $this->folga->with('funcionario')->get();
        return view('folga.show',compact('folgas'));
    }

    public function create()
    {
        $funcionarios = $this->func->all();
        return view('folga.create',compact('funcionarios'));
    }

    public function store(Request $res)
    {
        $validador = Validator::make($res->all(), [
            'data' => 'required|date',
            'turno' => 'required|numeric|min:0',
            'func' => 'required|numeric|min:1',
        ]);

        if($validador->fails())
        {
            return redirect()->route('folga.create')
                ->withErrors($validador)
                ->withInput();
        }else
        {
            $funcionario = $this->func->find($res->input('func'));

            if($res->input('turno') ==0)
            {
                $this->folga->Turno = 'M';
            }
            elseif($res->input('turno') ==1)
            {
                $this->folga->Turno = 'T';
            }
            else
            {
                $this->folga->Turno = 'N';
            }
            $this->folga->Dia = $res->input('data');

            $folga_ins = $funcionario->folgas()->save($this->folga);

            if($folga_ins)
            {
                return redirect()->route('folga.show')
                    ->withInput()
                    ->with('inser',true);
            }
            return 'NÃO FUNCIONOU!!' ;
        }
    }
}
