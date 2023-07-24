
<div><br>
<label for="Tipodoc">Tipo Documento</label>
<input type="text" name="Tipodoc" value="{{isset($hojadevida->Tipodoc)?$hojadevida->Tipodoc:''}}" id="Tipodoc">

<br>
<label for="documento">Documento</label>
<input type="text" name="documento" value="{{isset($hojadevida->documento)?$hojadevida->documento:''}}"  id="documento">
<br>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{isset($hojadevida->nombre)?$hojadevida->nombre:''}}" id="nombre">
<br>
<label for="apellido">Apellido</label>
<input type="text" name="apellido" value="{{isset($hojadevida->apellido)?$hojadevida->apellido:''}}" id="apellido">
<br>
<label for="telefono">Telefono</label>
<input type="text" name="telefono" value="{{isset($hojadevida->telefono)?$hojadevida->telefono:''}}" id="telefono" >
<br>
<label for="Estado_civil">Estado civil</label>
<input type="text" name="Estado_civil" value="{{isset($hojadevida->Estado_civil)?$hojadevida->Estado_civil:''}}" id="Estado_civil" >
<br>
<label for="Sexo">Sexo</label>
<input type="text" name="Sexo" value="{{isset($hojadevida->Sexo)?$hojadevida->Sexo:''}}" id="Sexo" >
<br>
<label for="direccion">Direccion</label>
<input type="text" name="direccion" value="{{isset($hojadevida->direccion)?$hojadevida->direccion:''}}" id="direccion" >
<br>
<label for="mail">Mail</label>
<input class="form-control" type="text" name="mail" value="{{isset($hojadevida->mail)?$hojadevida->mail:''}}" id="mail" >
<br>
<label for="Perfil_Profesional">Perfil Profesional</label>
<input type="text" name="Perfil_Profesional" value="{{isset($hojadevida->Perfil_Profesional)?$hojadevida->Perfil_Profesional:''}}"  id="Perfil_Profesional" >
<br>
<br>
<label><b><N1>Estudios</N1></b>></label>
<br>
<br>
<label for="colegio">Colegio</label>
<input type="text" name="colegio"  value="{{isset($hojadevida->colegio)?$hojadevida->colegio:''}}"    id="colegio" >
<br>
<label for="año">Año</label>
<input type="text" name="año" value="{{isset($hojadevida->año)?$hojadevida->año:''}}"  id="año" >
<br>
<label for="institucion">institucion</label>
<input type="text" name="institucion"  value="{{isset($hojadevida->institucion)?$hojadevida->institucion:''}}"   id="institucion" >
<br>
<label for="años">Año</label>
<input type="text" name="años" value="{{isset($hojadevida->años)?$hojadevida->años:''}}"   id="años" >
<br>
<br>
<label for="habilidades"> Ingresa tus Habilidades</label>
<input type="text" name="habilidades" value="{{isset($hojadevida->habilidades)?$hojadevida->habilidades:''}}"   id="habilidades" >
<br>
<br>
<label><b><N1>Esperiencia Laboral</n1></b></label>
    <br>
    <br>
<label for="Nombre_empresa">Nombre Empresa</label>
<input type="text" name="Nombre_empresa" value="{{isset($hojadevida->Nombre_empresa)?$hojadevida->Nombre_empresa:''}}"   id="Nombre_empresa" >
<br>
<label for="descrip">Descripcion de sus labores</label>
<input type="text" name="descrip" value="{{isset($hojadevida->descrip)?$hojadevida->descrip:''}}"   id="descrip" >
<br>
<label for="fecha_inicio">Fecha Inicio</label>
<input type="text" name="fecha_inicio" value="{{isset($hojadevida->fecha_inicio)?$hojadevida->fecha_inicio:''}}"  id="fecha_inicio" >
<br>
<label for="fecha_Final">Fecha Final</label>
<input type="text" name="fecha_Final" value="{{isset($hojadevida->fecha_Final)?$hojadevida->fecha_Final:''}}" id="fecha_Final" >
<br>
<label for="Nombre_empresa1">Nombre Empresa</label>
<input type="text" name="Nombre_empresa1" value="{{isset($hojadevida->Nombre_empresa1)?$hojadevida->Nombre_empresa1:''}}" id="Nombre_empresa1" >
<br>
<label for="descrip1">Descripcion de sus labores</label>
<input type="text" name="descrip1" value="{{isset($hojadevida->descrip1)?$hojadevida->descrip1:''}}" id="descrip1" >
<br>
<label for="fecha_inicio1">Fecha Inicio</label>
<input type="text" name="fecha_inicio1" value="{{isset($hojadevida->fecha_inicio1)?$hojadevida->fecha_inicio1:''}}" id="fecha_inicio1" >
<br>
<label for="fecha_Final1">Fecha Final</label>
<input type="text" name="fecha_Final1" value="{{isset($hojadevida->fecha_Final1)?$hojadevida->fecha_Final1:''}}" id="fecha_Final1" >
<br>
<label for="Nombre_empresa2">Nombre Empresa</label>
<input type="text" name="Nombre_empresa2" value="{{isset($hojadevida->Nombre_empresa2)?$hojadevida->Nombre_empresa2:''}}" id="Nombre_empresa2" >
<br>
<label for="descrip2">Descripcion de sus labores</label>
<input type="text" name="descrip2" value="{{isset($hojadevida->descrip2)?$hojadevida->descrip2:''}}" id="descrip2" >
<br>
<label for="fecha_inicio2">Fecha Inicio</label>
<input type="text" name="fecha_inicio2" value="{{isset($hojadevida->fecha_inicio2)?$hojadevida->fecha_inicio2:''}}" id="fecha_inicio2" >
<br>
<label for="fecha_Final2">Fecha Final</label>
<input type="text" name="fecha_Final2" value="{{isset($hojadevida->fecha_Final2)?$hojadevida->fecha_Final2:''}}" id="fecha_Final2" >
<br>
<label for="Idioma">Idiomas hablados</label>
<input type="text" name="Idioma" value="{{isset($hojadevida->Idioma)?$hojadevida->Idioma:''}}" id="Idioma" >
<br>
<label for="nivel">Nivel</label>
<input type="text" name="nivel" value="{{isset($hojadevida->nivel)?$hojadevida->nivel:''}}" id="nivel" >
<br>
<label><b><N1>Referencia Personal</n1></b></label><br>
    <br>
<label for="refe_perso_nom">Nombre </label>
<input type="text" name="refe_perso_nom" value="{{isset($hojadevida->refe_perso_nom)?$hojadevida->refe_perso_nom:''}}" id="refe_perso_nom">
<br>
<label for="refe_apellido">Apellido</label>
<input type="text" name="refe_apellido" value="{{isset($hojadevida->refe_apellido)?$hojadevida->refe_apellido:''}}" id="refe_apellido">
<br>
<label for="refe_tel">Telefono</label>
<input type="text" name="refe_tel" value="{{isset($hojadevida->refe_tel)?$hojadevida->refe_tel:''}}" id="refe_tel" >
<br>
<label><b><N1>Esperiencia Familiar</n1></b></label>
    <br>
    <br>
<label for="refe_fami">Nombre </label>
<input type="text" name="refe_fami" value="{{isset($hojadevida->refe_fami)?$hojadevida->refe_fami:''}}" id="refe_fami">
<br>
<label for="refe_faapell">Apellido</label>
<input type="text" name="refe_faapell" value="{{isset($hojadevida->refe_faapell)?$hojadevida->refe_faapell:''}}" id="refe_faapell">
<br>
<label for="refe_tel_fa">Telefono</label>
<input type="text" name="refe_tel_fa" value="{{isset($hojadevida->refe_tel_fa)?$hojadevida->refe_tel_fa:''}}" id="refe_tel_fa">
<br>
<label for="foto">Ingresar Foto</label>
@if (isset($hojadevida->foto))
<img src=" {{asset('storage').'/'.$hojadevida->foto}}" width="100" alt="" >
@endif
<input type="file" name="foto" value="" id="foto">
<br>
<br>
<input type="submit" value="{{ $modo }} datos" >
<a href="{{ url('hojadevida')}}">Regresar</a>
<br>
<br>
<a href="{{ url('/empleados/create')}}"> EMPLEADOS</a>
</div>