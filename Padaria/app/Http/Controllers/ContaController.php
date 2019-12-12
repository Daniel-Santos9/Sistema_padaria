<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Conta;

class ContaController extends Controller
{
  private $conta;

  function __construct(Conta $con)
  {
      $this->middleware('auth');
      $this->conta = $con;
  }

  public function show()
  {
    $contas = $this->conta->all();
    return view('conta.show',compact('contas'));
  }

  public function create()
  {
      return view('conta.create');
  }

  public function store(Request $res)
  {
    $validador = Validator::make($res->all(), [
        'bc' => 'required|numeric|max:1|min:0',
        'ac' => 'required|numeric',
        'tc' => 'required|numeric|max:1|min:0',
        'nc' => 'required|numeric',
        'sc' => 'required|numeric',
    ]);

    if($validador->fails())
    {
      return redirect()->route('conta.create')
          ->withErrors($validador)
          ->withInput();
    }else
    {
      if($res->input('bc') == 0){
        $this->conta->Banco = 'Banco do Brasil';
      }
      else
      {
        $this->conta->Banco = 'Banco do Bradesco';
      }

      $this->conta->Agencia = $res->input('ac');
      $this->conta->Tipo = $res->input('tc');
      $this->conta->Numero = $res->input('nc');
      $this->conta->Saldo = $res->input('sc');
      $this->conta->administrador_id = auth()->id();

      $conta_ins = $this->conta->save();
      if($conta_ins)
      {
        return redirect()->route('conta.show')
            ->withInput()
            ->with('inser',true);
      }
      return 'NÃO FUNCIONOU!!' ;
    }
  }

}
