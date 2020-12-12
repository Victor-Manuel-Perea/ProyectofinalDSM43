<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency Bootstrap Template - login</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="css/stayle.css">

@include('headerU')
 <br>
 <br>
 <br>
 <br>

    <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Fafrica el Tigre</h5>
                <form class="form-signin"  action="{{ route('validar')}}" method="POST">
                    {{ csrf_field() }}<!--// en cada formulario tenemos que colocar esta lina-->
                  <div class="form-label-group">
                    <input type="email" name='correo' id="inputEmail" class="form-control" placeholder="Email" value="{{ old('correo')}}">
                    <label for="inputEmail">Email</label>
                  </div>

                  <div class="form-label-group">
                    <input type="password" name='pass' id="inputPassword" class="form-control" placeholder="Contraseña"value="{{ old('pass')}}">
                    <label for="inputPassword">Contraseña</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
                  </div>
                  <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Sign in</button>
                  <!--<hr class="my-4">
                  <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                  <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>-->
                  <a href="{{route ('nuevo2')}}">¿No tienes una cuenta? ¡Reguistrate!</p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </body>
    </html>