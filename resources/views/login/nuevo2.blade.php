@include('headerU')
<br>
<br>
<br>
<br>
<body class="card-body">
    <div class="card text-center">
        <div class="card-header bg-success">
            <h2 class="text-black text-uppercase font-sans-serif "> Con la mejor disponibilidad a tu servicio</h2>
        </div>
        <div class="card-body">
    <div class="row justify-content-md-center">
            <div class="col-sm-6">
                <form name="nuevo" action="{{route('guardar1')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}<!--// en cada formulario tenemos que colocar esta lina-->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="nombre" class="text-dark">Nombre</label>
                                    <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="primer_apellido" class="text-dark">Primer Apellido</label>
                                    <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido_help" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="segundo_apellido" class="text-dark">Segundo Apellido</label>
                                    <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido_help" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="text-dark">Telefono</label>
                            <input type="tel" class="form-control form-control-sm" id="telefono" name="telefono" aria-describedby="telefono_help" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-dark">Email</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email" aria-describedby="email_help" required>
                        </div>
                        <div class="form-group">
                            <label for="contrasena" class="text-dark">Contraseña</label>
                            <input placeholder="Mayor a 8 Caracteres" type="password" class="form-control form-control-sm" id="contrasena" name="pass" aria-describedby="contrasena_help" required>
                        </div>
                        <select name="id_tipo_usuario" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="2">3</option>
                       </select>
                        <div class="card-footer text-muted">
                            <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-person"></i> Registrar</button>
                        </div>
                        <a href="{{route ('login')}}">¿Ya tienes una cuenta? ¡Inicia Sesion!</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
 