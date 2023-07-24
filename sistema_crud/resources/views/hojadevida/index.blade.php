@if (Session::has('Mensaje'))
    {{ Session::get('mensaje') }}
@endif

        <table border="1px solid #C00">

            <thead class="table-light">
                <caption>Hoja de Vida</caption>
                <tr>
                    <th>#</th>
                    <th>Tipodoc</th>
                    <th>documento</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>telefono</th>
                    <th>Estado_civil</th>
                    <th>Sexo</th>
                    <th>direccion</th>
                    <th>mail</th>
                    <th>Perfil_Profesional</th>
                    <th>documento</th>
                    <th>colegio</th>
                    <th>año</th>
                    <th>institucion</th>
                    <th>años</th>
                    <th>habilidades</th>
                    <th>Nombre_empresa</th>
                    <th>nombre</th>
                    <th>descrip</th>
                    <th>fecha_inicio</th>
                    <th>fecha_Final</th>
                    <th>Nombre_empresa1</th>
                    <th>descrip1</th>
                    <th>fecha_inicio1</th>
                    <th>fecha_Final1</th>
                    <th>Nombre_empresa2</th>
                    <th>descrip2</th>
                    <th>fecha_inicio2</th>
                    <th>fecha_Final2</th>
                    <th>Idioma</th>
                    <th>nivel</th>
                    <th>refe_perso_nom</th>
                    <th>refe_apellido</th>
                    <th>refe_tel</th>
                    <th>refe_fami</th>
                    <th>refe_faapell</th>
                    <th>refe_tel_fa</th>
                    <th>foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($hojadevida as $hojadevida)
                    <tr class="table-primary">
                        <td>{{ $hojadevida->id }}</td>
                        <td><img src="{{ asset('storage') . '/' . $hojadevida->foto }}" width="100"
                            alt=""></td>
                        
                        <td>{{ $hojadevida->Tipodoc }}</td>
                        <td>{{ $hojadevida->documento }}</td>
                        <td>{{ $hojadevida->nombre }}</td>
                        <td>{{ $hojadevida->apellido }}</td>
                        <td>{{ $hojadevida->telefono }}</td>
                        <td>{{ $hojadevida->Estado_civil }}</td>
                        <td>{{ $hojadevida->Sexo }}</td>
                        <td>{{ $hojadevida->direccion }}</td>
                        <td>{{ $hojadevida->mail }}</td>
                        <td>{{ $hojadevida->Perfil_Profesional }}</td>
                        <td>{{ $hojadevida->documento }}</td>
                        <td>{{ $hojadevida->colegio }}</td>
                        <td>{{ $hojadevida->año }}</td>
                        <td>{{ $hojadevida->institucion }}</td>
                        <td>{{ $hojadevida->años }}</td>
                        <td>{{ $hojadevida->habilidades }}</td>
                        <td>{{ $hojadevida->Nombre_empresa }}</td>
                        <td>{{ $hojadevida->nombre }}</td>
                        <td>{{ $hojadevida->descrip }}</td>
                        <td>{{ $hojadevida->fecha_inicio }}</td>
                        <td>{{ $hojadevida->fecha_Final }}</td>
                        <td>{{ $hojadevida->Nombre_empresa1 }}</td>
                        <td>{{ $hojadevida->descrip1 }}</td>
                        <td>{{ $hojadevida->fecha_inicio1 }}</td>
                        <td>{{ $hojadevida->fecha_Final1 }}</td>
                        <td>{{ $hojadevida->Nombre_empresa2 }}</td>
                        <td>{{ $hojadevida->descrip2 }}</td>
                        <td>{{ $hojadevida->fecha_inicio2 }}</td>
                        <td>{{ $hojadevida->fecha_Final2 }}</td>
                        <td>{{ $hojadevida->Idioma }}</td>
                        <td>{{ $hojadevida->nivel }}</td>
                        <td>{{ $hojadevida->refe_perso_nom }}</td>
                        <td>{{ $hojadevida->refe_apellido }}</td>
                        <td>{{ $hojadevida->refe_tel }}</td>
                        <td>{{ $hojadevida->refe_fami }}</td>
                        <td>{{ $hojadevida->refe_faapell }}</td>
                        <td>{{ $hojadevida->refe_tel_fa }}</td>
                        <td>
                            <a href="{{ url('/hojadevida/' . $hojadevida->id . '/edit') }}">
                                Editar
                            </a>
                            <form action="{{ url('/hojadevida/' . $hojadevida->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('Deseas borrar este registro')"
                                    value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        <br>
        <br>
        <br>
<a href="{{ url('/empleados/')}}"> contactos</a>
<br>
<br>
<a href="{{ url('/hojadevida/create')}}"> Crear Hoja de vida</a>
</body>

</html>
