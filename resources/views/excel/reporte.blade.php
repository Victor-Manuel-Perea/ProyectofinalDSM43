<center>
    <h1>Reporte de Usuarios por busqueda </h1>
    <hr>
    <form name='buscar' action="{{ route('reporte') }} " method='GET'>
    {{ csrf_field() }}<!--// en cada formulario tenemos que colocar esta lina-->
    Buscar por nombre: <input type="text" name='buscar'><br>
    <input type="submit" value="buscar">
    </form>
    @if($reporte != 0)
    <a href="{{ route('excel03', ['buscar' => $buscar]) }}"> Reporte 03 -Excel</a><br>
    @endif
    <br>
    <hr>
    <h1>Reporte De Todos los Usuarios</h1>
    <a href="{{ route('excel01') }}"> Reporte excel01</a><br>
    <hr>
    <h1>Reporte De usuarios paginados</h1>
    {{ $usus->render() }}
    
        @foreach($usus as $usu)
           {{ $usu-> id_usuario}} || {{ $usu-> primer_apellido}}, {{ $usu->nombre}} 
           {{ $usu->id_tipo_usuario}} 
           || <a href="{{ route('excel02', ['id' => $usu->id_usuario]) }}">Excel03</a>
           <br> <br>
        @endforeach
        <br><br>

        <a href="{{ $usus->url(1) }}">  inicio </a>
        <a href="{{ $usus->previousPageUrl() }}"> <- anterior </a>
       ( {{ $usus->currentPage()}})
        <a href="{{ $usus->nextPageUrl()}}">|| siguiente -></a>
        <a href="{{ $usus->url($usus->total())}}">|| fin </a>
        <hr>
        <br><br>
    </center>