<b> creacion hoja de vida </b>

<form action="{{ url('/hojadevida')}}" method="post" enctype="multipart/form-data">
@csrf
@include('hojadevida.form',['modo'=> 'Crear']);
</form>

