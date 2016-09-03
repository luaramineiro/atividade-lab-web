<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Controle Bicicletas - Trabalho Lab Web</title>

    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Load jQuery UI CSS  -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PHP</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="/">Listar</a></li>
            <li><a href="novo">Incluir</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    @if($mensagens != [])
    <div class="alert alert-success">
      <ul>
          @foreach($mensagens as $mensagem)
          <li>{{ $mensagem }}</li>
          @endforeach
      </ul>
    </div>
    @endif

    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Fabricante</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Marcha</th>
            <th>Marca Câmbio</th>
            <th>Proprietário</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bicicletas as $bicicleta)
          <tr>
            <td>{{$bicicleta->fabricante}}</td>
            <td>{{$bicicleta->modelo}}</td>
            <td>{{$bicicleta->cor}}</td>
            <td>{{$bicicleta->marcha}}</td>
            <td>{{$bicicleta->marca}}</td>
            <td>{{$bicicleta->proprietario}}</td>
            <td>{{$bicicleta->celular}}</td>
            <td>{{$bicicleta->email}}</td>
            <form action="/{{$bicicleta->id}}" method="POST">
               {{ method_field('DELETE') }}
               {{ csrf_field() }}
              <td><a href="/{{$bicicleta->id}}"><button type="button" class="btn btn-info">Alterar</button></a>
                  <a href="/#"><button type="submit" class="btn btn-danger">Excluir</button></a>
              </td>
           </form>
          </tr>
           @endforeach
        </tbody>
      </table>
    </div>


    <!-- jQuery JS -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="{{ URL::asset('js/jquery/jquery.maskedinput.js') }}" type="text/javascript"></script>
		<!-------------->
		<script src="{{ URL::asset('js/script/script.js" type="text/javascript"></script>

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

  </body>
</html>
