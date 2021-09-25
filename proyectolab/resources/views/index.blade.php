<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8"/>
     <title>Registro Académico del DCYT</title>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
     <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
     <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
     <link rel="stylesheet" href="css/login.css">
     <link rel="stylesheet" href="css/style.css">

</head>
<body class="login">
       
        
        <div class="content">
            <div class="log container-fluid">
                <!-- @if(session('datos'))
                msj de guadado que viene del register
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ session('datos') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
                </div>
                @endif-->
            
                <form method="POST" action="{{route('user.login')}}">
                    @csrf
                    <h4 class="form-title"><b> Iniciar Sesión </b></h4>

                    <div class="form-group">
                        <label class="control-label"><h5>Usuario:</h5></label>

                        <div class="input-icon">
                            <i class="fas fa-user"></i>
                            
                            <input class="form-control @error('username') is-invalid @enderror"  type="text"  placeholder="Ingrese su usuario" id="username" name="username" value="{{old('username')}}"/>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><h5>Contraseña:</h5></label>
                        <div class="input-icon">
                            <i class="fas fa-lock"></i>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Ingrese su contraseña"  id="password" name="password"  value="{{old('password')}}"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <hr />
                    <div class="form-actions">
                        <button class="btn btn-primary btn-block"> <b>Ingresar</b> </button>
                    </div>

                    <div>
                        <a href="#"> <h5>He olvidado mi contraseña</h5> </a>
                    </div>
                </form>
            </div>
            
            <div class="benv container-fluid">
                <img src="/proyectolab/public/image/UclaLogo.png" alt="Logo">
                <h1><b>Bienvenido/a.</b></h1>
                <h3>Te damos la bienvenida al sistema de registro de pensum del programa de Registro Academico de la Universidad Centrooccidental "Lisandro Alvarado"</h3>
                <h3>Un entorno amigable y fácil de usar para hacer que tus gestión de pensum sea tan eficiente como sea posible</h3>
                <h3>Ucla, Una voz del pensamiento</h3>
            </div>
            
            
                        
            
           
        </div>

        
        <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/dist/js/adminlte.min.js"></script>

</body>
</html>
