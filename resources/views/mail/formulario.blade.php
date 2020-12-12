@include('header')
     <center>
     <h1>Envia de correos (Gmail)</h1>
     <a href="{{ route('enviar1') }}"> Envia 01</a>
     <br><br>
    <h2>Enviar 02</h2>
    <form name="enviar" action="{{ route('enviar2')}}" method="POST">
        {{ csrf_field() }}<!--// Sirve para poder agregar un campo en cada formulario tenemos que colocar esta lina-->
        Nombre: <input type='text' name='nombre'placeholder="" ><br>
        Correo: <input type='text' value="correo" placeholder="" ><br>
        Asunto: <input type='text' value="asunto" placeholder="" ><br>
        Mensaje: <textarea name='mensaje' ></textarea><br>
        <input type='submit' value="enviar"><br>
        <br><br>
    </form>
    </center>

@include('footer')