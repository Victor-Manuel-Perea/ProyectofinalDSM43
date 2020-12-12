

    
    <center>
    <form name="editar" action="{{ route('salvar2',['id'=>$usu->id_producto]) }}" method="POST" >
        {{ csrf_field()}}<!--// es una validacion o tokent para que laravel nos de acceso a ese formularioen cada formulario tenemos que colocar esta lina-->
        {{ method_field('PUT') }} 
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
                            <input type='file' name='img1'placeholder="ejemplo: avatar1.jpg"><br>
                                <input type='hidden' name='img2'value=" {{ $usu->img }}"><br>
                                <br>
                        </div>
                        
        <input type='submit' value="Salvar"><br>
        <br><br>
        <br><br>
    </form>
    </center>