
@include('headerA')

<center>
<br>
<br>
<br>
<br>

<section>
        <h2>Administrador</h2>
        <h4>Productos</h4>
      <div class="container mt-4">
        <div class="card">
          <div class="card-header, success">
                  <i class="fa fa-users"></i> Productos
          </div>
              <div class="card-body" >
                  <table class="table table-striped table-hover table-sm" >
                      <thead class="thead-dark">
                          <tr>
                              <th style="width:20%;" scope="col">ID</th>
                              <th style="width:20%;" scope="col">Nombre</th>
                              <th style="width:20%;" scope="col">Precio</th>
                              <th style="width:15%;" scope="col">img</th>
                              <th style="width:20%;" scope="col">Detalle</th>
                              <th style="width:15%;" scope="col">Borrar</th>
                              <th style="width:10%;" scope="col">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($comp as $usu)
                          <tr>
                              <th scope="row">{{$usu->id_producto}}</th>
                              <td scope="row">{{$usu->nombre}}</td>
                              <td scope="row">{{$usu->precio}}</td>
                              <td scope="row"><img src="{{ asset('img/'.$usu->img) }}" alt="{{$usu->img}}" width="80" height="70"></td>
                              <td scope="row"><a href="{{ route('profil', ['id' => $usu->id_producto]) }}">Detalle</a></td>
                              <td scope="row"><a href="{{ route('borrar', ['id' => $usu->id_producto]) }}">Borrar </a></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  
              </div>
          </div>
        </div>
      </div>
      
     <br>
     <br>
     <br>
     
        

        <br>
        
        </section>
        <div>
        <a href="{{ route('ProductosAlta') }}"><i class="fa fa-users"></i>Nuevo2</a>
      </div>
        </center>
        @include('footer')
        
      




