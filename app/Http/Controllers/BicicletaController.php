<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bicicleta;

class BicicletaController extends Controller
{
  public function salvar(Request $req)
  {
      $this->validate($req, [
          'fabricante'  => 'required|max:250',
          'modelo'      => 'required|max:250',
          'cor'         => 'required|max:250',
          'marcha'      => 'max:1',
          'marca'       => 'max:250',
          'proprietario'=> 'required|max:250',
          'celular'     => 'required|max:250',
          'email'       => 'max:250|email'
      ],[
          'required' => 'Campo :attribute obrigatório',
          'max'      => 'Tamanho máximo de :attribute é :max',
          'email'    => 'O campo :attribute deve ser um email válido'
      ]);

      $bicicleta = Bicicleta::findOrNew($req->id);
      $bicicleta->fabricante    = $req->fabricante;
      $bicicleta->modelo        = $req->modelo;
      $bicicleta->cor           = $req->cor;
      $bicicleta->marcha        = $req->marcha;
      $bicicleta->marca         = $req->marca;
      $bicicleta->proprietario  = $req->proprietario;
      $bicicleta->celular       = $req->celular;
      $bicicleta->email         = $req->email;

      $bicicleta->save();

      if ($req->id == 0) {
        $mensagens = ["Cadastro da Bicicleta efeuado com Sucesso!!"];
      }
      else {
        $mensagens = ["Aleração de Dados da Bicicleta efeuada com Sucesso!!"];
      }

      $bicicletas = Bicicleta::orderby('id')->get();

      return view('lista', [
          'bicicletas' => $bicicletas,
          'mensagens'  => $mensagens
      ]);
  }

  public function listar()
  {
      $bicicletas = Bicicleta::orderby('id')->get();
      $mensagens = [];

      return view('lista', [
          'bicicletas'  => $bicicletas,
          'mensagens'   => $mensagens
      ]);
  }

  public function novo()
  {
      $bicicleta = new Bicicleta();
      $bicicleta->id = 0;

      return view('novo', [
          'bicicleta'  => $bicicleta
      ]);
  }

  public static function editar(Bicicleta $bicicleta)
  {
      return view("novo", [
          'bicicleta'   => $bicicleta
      ]);
  }

  public function excluir(Bicicleta $bicicleta)
  {
      try {
          $bicicleta->delete();
          $mensagens = ["Bicicleta excluída com Sucesso!"];
      } catch (\Exception $e) {
          //echo 'Exceção capturada: ',  $e->getMessage(), "\n";
          $mensagens = ["Não foi possível excluir a Bicicleta!"];
      }

      $bicicletas = Bicicleta::orderby('id')->get();

      return view('lista', [
          'bicicletas' => $bicicletas,
          'mensagens'  => $mensagens
      ]);
  }
}
