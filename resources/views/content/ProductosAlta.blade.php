@include('headerA')
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
                <form name="nuevo" action="{{route('guardar2')}}" method="POST" enctype="multipart/form-data">
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
                                    <label for="precio" class="text-dark">Precio</label>
                                    <input type="text" class="form-control form-control-sm" id="precio" name="precio" aria-describedby="precio_help" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="descripcion" class="text-dark">Descripcion</label>
                                    <input type="text" class="form-control form-control-sm" id="descripcion" name="descripcion" aria-describedby="descripcion_help" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img" class="text-dark">img</label>
                            <input type='file' class="form-control form-control-sm" id="img" name="img" aria-describedby="telefono_help" required>
                        </div>
                             <div class="card-footer text-muted">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
    </body>
    @include('footer')