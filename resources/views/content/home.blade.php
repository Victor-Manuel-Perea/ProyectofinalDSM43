
@include('headerA')

<center>
<br>
<br>
<br>
<br>

<section>
        <h2>Administrador</h2>
        <h4>Usuarios</h4>
      <div class="container mt-4">
        <div class="card">
          <div class="card-header, success">
                  <i class="fa fa-users"></i> Usuarios
          </div>
              <div class="card-body" >
                  <table class="table table-striped table-hover table-sm" >
                      <thead class="thead-dark, table-success">
                          <tr>
                              <th style="width:20%;" scope="col">ID</th>
                              <th style="width:20%;" scope="col">Nombre</th>
                              <th style="width:20%;" scope="col">Primer apellido</th>
                              <th style="width:20%;" scope="col">Detalle</th>
                              <th style="width:15%;" scope="col">Editar</th>
                              <th style="width:15%;" scope="col">Borrar</th>
                              <th style="width:10%;" scope="col">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($comp as $usu)
                          <tr>
                              <th scope="row">{{$usu->id_usuario}}</th>
                              <td scope="row">{{$usu->nombre}}</td>
                              <td scope="row">{{$usu->primer_apellido}}</td>
                              <td scope="row"><a href="{{ route('detalle', ['id' => $usu->id_usuario]) }}">Detalle</a></td>
                              <td scope="row"><a href=" {{ route('editar', ['id' => $usu->id_usuario]) }}">Editar </a></td>
                              <td scope="row"><a href="{{ route('borrar1', ['id' => $usu->id_usuario]) }}">Borrar </a></td>
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
        <a href="{{ route('alta') }}"><i class="fa fa-users"></i>Nuevo2</a>
        </div>
        </center>
        @include('footer')
        
      




