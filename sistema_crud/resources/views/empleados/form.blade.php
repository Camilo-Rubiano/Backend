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
                                        class="btn btn-primary smooth-scroll mr-2" href="{{ url('empleados')}}"> Inicio</a>
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
                                <div class="row">
                                    <div class="section" id="contact">
        <div class="cc-contact-information" style="background-image: url('images/staticmap.png')">
            <div class="container">
                <div class="cc-contact">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card mb-0" data-aos="zoom-in">
                                <div class="h4 text-center title">Registro de Contacto</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">                                                                                                                  
                                                <br>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" name="nombre" value="{{isset($empleados->nombre)?$empleados->nombre:''}}" id="nombre">                                                                    
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="apellido">Apellido</label>
                                                        <input type="text" name="apellido" value="{{isset($empleados->apellido)?$empleados->apellido:''}}" id="apellido">
                                                        
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="telefono">Telefono</label>
                                                        <input type="text" name="telefono" value="{{isset($empleados->telefono)?$empleados->telefono:''}}"  id="telefono" >
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="mail">Mail</label>
                                                        <input type="text" name="mail"  value="{{isset($empleados->mail)?$empleados->mail:''}}" id="mail">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label for="descripcion">Descripcion</label>
                                                        <input type="text" name="descripcion" value="{{isset($empleados->descripcion)?$empleados->descripcion:''}}" id="descripcion">
                                                    </div>
                                                </div>
                                                
                                                <br>
                                                <br>                                                                                                        
                                                <input type="submit" value="{{ $modo }} datos" >
                                                
                                          
                                        </div>
                            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <p class="mb-0"><strong>Direccion </strong></p>
                                            <p class="pb-2"><strong>Avenida Siempre viva</strong></p>
                                            <p class="mb-0"><strong>Telefono</strong></p>
                                            <p class="pb-2">3148575895</p>
                                            <p class="mb-0"><strong>Email</strong></p>
                                            <p>Jeiss@company.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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


