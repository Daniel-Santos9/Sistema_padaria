<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\FluxoDiario;
use Illuminate\Support\Facades\Validator;

class FluxoDiarioController extends Controller
{
    private $fd;

    function __construct(FluxoDiario $fd)
    {
          $this->middleware('auth');
          $this->fd = $fd;
    }

    public function show()
    {
        $fluxos = $this->fd->all();
        return view('fluxo.show',compact('fluxos'));
    }
    public function create()
    {
      return view('fluxo.create');
    }

    public function store(Request $res)
    {
      $validador = Validator::make($res->all(), [
              'cf' => 'required|numeric',
              'sd' => 'required|numeric',
              'redi' => 'required|numeric',
              'cartao' => 'required|numeric',
              'rd' => 'required|numeric',
              'rc' => 'required|numeric',
              'td' => 'required|numeric',
              'tg' => 'required|numeric',
              'dia'=> 'unique:fluxo_diario'
          ]);

      if($validador->fails())
      {
          return redirect()->route('fluxo.create')
              ->withErrors($validador)
              ->withInput();
      }else
      {
          $this->fd->Cofre = $res->input('cf');
          $this->fd->Dia = $res->input('dia');
          $this->fd->Saldo = $res->input('sd');
          $this->fd->Cartao = $res->input('cartao');
          $this->fd->Rendimento = $res->input('redi');
          $this->fd->Retirada_dia = $res->input('rd');
          $this->fd->Retirada_cofre = $res->input('rc');
          $this->fd->Total_vendas = $res->input('td');
          $this->fd->Total_geral = $res->input('tg');
          $this->fd->administrador_id = auth()->id();

          $fd_ins = $this->fd->save();

          if($fd_ins)
          {
              return redirect()->route('fluxo.show')
                  ->withInput()
                  ->with('inser',true);
          }
          return 'NÃO FUNCIONOU!!' ;
      }
    }
}
