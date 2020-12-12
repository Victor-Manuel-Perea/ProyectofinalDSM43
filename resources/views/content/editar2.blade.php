

    <center>
    <form name="editar2" action="{{ route('salvar1',['id'=>$usu->id_usuario]) }}" method="POST" >
        {{ csrf_field()}}<!--// es una validacion o tokent para que laravel nos de acceso a ese formularioen cada formulario tenemos que colocar esta lina-->
        {{ method_field('PUT') }} 
        Nombre: <input type='text' name='nombre'placeholder="ejemplo: Areli" value="{{ $usu->nombre}}"><br>
        Apellido paterno: <input type='text' name='primer_apellido 'placeholder="ejemplo: Hernandez" value="{{ $usu->primer_apellido}}"><br>
        Apellido materno: <input type='text' name='segundo_apellido'placeholder="ejemplo: Hernandez" value="{{ $usu->segundo_apellido}}"><br>
        Telefono: <input type='text' name='telefono'placeholder="ejemplo: 2381277851" value="{{ $usu->telefono }}"><br>
        E-mail: <input type='text' name='email'placeholder="ejemplo: al221910333@gmail.com" value="{{ $usu->email }}"><br>
        Pass: <input type='text' name='pass'placeholder="ejemplo: areli123" value="{{ $usu->pass }}"><br>
        

        <input type='submit' value="Salvar"><br>
        <br><br>
        <br><br>
    </form>
    </center>