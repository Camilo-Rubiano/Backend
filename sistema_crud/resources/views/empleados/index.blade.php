@if (Session::has('Mensaje'))
{{ Session::get('mensaje') }}
@endif
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoja de vida</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Hoja de vida</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
    <div class="page-content">
        <div>
            <div class="profile-page">
                <div class="wrapper">
                    <div class="page-header page-header-small" filter-color="green">
                        <div >
                            <div class="content-center">
                                <div class="cc-profile-image"><a href="#"></a></div>
                                <div class="h2 title">Jeisson Camilo Rubiano Alvarado</div><a
                                    class="btn btn-primary smooth-scroll mr-2" href="{{ url('empleados/create')}}" data-aos="zoom-in"
                                    data-aos-anchor="data-aos-anchor" >Contateme </a>                                                                    
                                    
                            </div>
                            <div class="section">
                                <div class="container">
                                    <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon"
                                            href="#" rel="tooltip" title="Follow me on Facebook"><i
                                                class="fa fa-facebook"></i></a><a
                                            class="btn btn-default btn-round btn-lg btn-icon" href="#"
                                            rel="tooltip" title="Follow me on Twitter"><i
                                                class="fa fa-twitter"></i></a><a
                                            class="btn btn-default btn-round btn-lg btn-icon" href="#"
                                            rel="tooltip" title="Follow me on Google+"><i
                                                class="fa fa-google-plus"></i></a><a
                                            class="btn btn-default btn-round btn-lg btn-icon" href="#"
                                            rel="tooltip" title="Follow me on Instagram"><i
                                                class="fa fa-instagram"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>             
                <div class="section" id="Ingresar Datos de Personales">
                    <div class="container">
                        <div class="card" data-aos="fade-up" data-aos-offset="10">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="card-body">
                                        <div class="h4 mt-0 title">Perfil Profesional</div>
                                    <br>
                                    <br>
                                     <img src="{{ asset('images/TXfftTqFLUg75EbMCbO1Ytc6lEDdedEP3TyBMAkH.jpg') }}" width="100" alt="Imagen">

                                   
                                    <br>
                                    <br>
                                    <br>
                                        <p><div class="col-sm-8"><label id="Perfil_Profesional">  Se crear un perfil profecional de  varias</label></div>
                                       
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card-body">
                                        <div class="h4 mt-0 title">Datos Basicos</div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-4"><strong class="text-uppercase">Tipo de Documento:</strong></div>
                                            <div class="col-sm-8"><label  id="Tipodoc" >CC</label></div>
                                            </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Documento:</strong></div>
                                            <div class="col-sm-8"><label id="documento">23943849</label></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Nombre Completo:</strong></div>
                                            <div class="col-sm-8"><label id="nombre">Jeisson Camilo</label></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Apellido:</strong></div>
                                            <div class="col-sm-8"><label id="apellido"> Rubiano </label></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Telefono:</strong></div>
                                            <div class="col-sm-8"><label  id="telefono" >3123456577</label></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Estado civil:</strong></div>
                                            <div class="col-sm-8"><label  id="Estado_civil" >Soltero</label></div>
                                            
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Sexo:</strong></div>
                                            <div class="col-sm-8"><label  id="Sexo" >M</label></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Direccion:</strong></div>
                                            <div class="col-sm-8"><label  id="direccion" >Calle 34 # 1234 ></label></div>                                       
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                            <div class="col-sm-8"><label  id="mail" >Jeison@hotmail.com.co></label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="skill">
                    <div class="container">
                        <div class="h4 text-center mb-4 title">Esperiencia Laboral</div>
                        <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">Nombre de Empresa </span>

                                                <div class="col-sm-8"><label  id="Nombre_empresa" >Gloria Azul</label></div>
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">Fecha </span>
                                                <div class="col-sm-8"><label  id="fecha_inicio" >2013 || 2016 </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">Descripción </span>

                                                <div class="col-sm-8"><label  id="descrip" >Se trabajo como call center durante 3 años</label></div>
                                            
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge"> Nombre de Empresa </span>
                                                <div class="col-sm-8"><label  id="Nombre_empresa1" >Veronica hay fue</label></div>
                                        </div>
                                    </div>
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">Descripcion </span>
                                                <div class="col-sm-8"><label  id="Nombre_empresa1">Se trabaja como desarrollador</label></div>
                                                
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge"> Fecha </span>
                                                <div class="col-sm-8"><label  id="fecha_inicio1" >2016|| 2020 </label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="skill">
                    <div class="container">
                        <div class="h4 text-center mb-4 title">Contatos Personal y Familiar </div>
                        <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">Referencia Personal Nombre</span>

                                                <div class="col-sm-8"><label  id="refe_perso_nom" >Jose</label></div>
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">Telefono </span>

                                                <div class="col-sm-8"><label  id="refe_tel" >3148690631</label></div>
                                            
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">Apellido </span>
                                                <div class="col-sm-8"><label  id="refe_apellido" >Cardenas</label></div>
                                        </div>
                                    </div>                                   
                                </div>
                                <br>
                                <br>
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">Referencia Familiar Nombre</span>
                                                <div class="col-sm-8"><label  id="refe_fami" >Maria</label></div>
                                        </div>
                                    </div>
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">Apellido </span>
                                                <div class="col-sm-8"><label  id="refe_faapell" >Buen nombre</label></div>
                                                
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge"> Telefono </span>
                                                <div class="col-sm-8"><label  id="refe_tel_fa" >300249595</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                
            </div>
        </div>
        <footer class="footer">
            <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i
                        class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link "
                    href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a
                    class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x"
                        aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i
                        class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>                     
                           
     </body>
                      
</html>

<div class="card">
    <h5 class="card-header"> Contactos </h5>
     <div class="card-body">
        <h5 class="card-title"> Contactos </h5>
        <p class="card-text">
            <div class="table table-responsive">

                <table>
                    <thead>
                        <th>#</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>telefono</th>
                        <th>mail</th>
                        <th>Descripcion</th>
                        <th>Editar</th>
                    </thead>  
                    <tbody> 
                        @foreach ($empleados as $empleado)                       
                            <tr class="table-primary">
                                <td>{{ $empleado->id }}</td>   
                                <td>{{ $empleado->nombre }}</td>
                                <td>{{ $empleado->apellido }}</td>
                                <td>{{ $empleado->telefono }}</td>
                                <td>{{ $empleado->mail }}</td>
                                <td>{{ $empleado->descripcion }}</td> 

                                <td>
                                    <a href="{{ url('/empleados/' . $empleado->id . '/edit') }}">
                                        Editar
                                    </a>
                                    <form action="{{ url('/empleados/' . $empleado->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" onclick="return confirm('Deseas borrar este registro')"
                                            value="Borrar">
                                    </form>
                                </td>
                            </tr>             

                        @endforeach
                                        
                    </tbody> 
                </table>
            </div> 
       </p> 
    </div>   
</div> 

