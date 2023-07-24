<form action="{{ url('/hojadevida/'.$hojadevida->id)}}" method="post" enctype="multipart/form-data" >
@csrf
{{ method_field('PATCH')}}
@include('hojadevida.form',['modo'=> 'Editar']);

</form>