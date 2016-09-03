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

    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
    @endif

    <div class="container">
      <h2>Cadastro - Bicicletas</h2>
      <form class="form" action="salvar" method="POST" >
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$bicicleta->id}}" />
        <div class="form-group">
           <label for="fabricante">Fabricante:</label>
           <input type="text" class="form-control" id="fabricante" name="fabricante" value="{{old('fabricante', $bicicleta->fabricante)}}" required>
        </div>
        <div class="form-group">
           <label for="modelo">Modelo:</label>
           <input type="text" class="form-control" id="modelo" name="modelo" value="{{old('modelo', $bicicleta->modelo)}}" required>
        </div>
        <div class="form-group">
           <label for="cor">Cor:</label>
           <input type="text" class="form-control" id="cor" name="cor" value="{{old('cor', $bicicleta->cor)}}" required>
        </div>
        <div class="form-group">
           <label for="marcha">Marcha:</label>
           <input type="text" class="form-control" id="marcha" name="marcha" value="{{old('marcha', $bicicleta->marcha)}}" >
        </div>
        <div class="form-group">
           <label for="marca">Marca do Câmbio:</label>
           <input type="text" class="form-control" id="marca" name="marca" value="{{old('marca', $bicicleta->marca)}}" >
        </div>
        <div class="form-group">
           <label for="proprietario">Proprietário:</label>
           <input type="text" class="form-control" id="proprietario" name="proprietario" value="{{old('proprietario', $bicicleta->proprietario)}}" required>
        </div>
        <div class="form-group">
           <label for="celular">Celular:</label>
           <input type="text" class="form-control" id="celular" name="celular" class="phone" value="{{old('celular', $bicicleta->celular)}}" required>
        </div>
        <div class="form-group">
           <label for="email">Email:</label>
           <input type="email" class="form-control" id="email" name="email" value="{{old('email', $bicicleta->email)}}">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Gravar</button>
      </form>
    </br>
    </div> <!-- /container -->


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
