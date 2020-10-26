<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
    </head>
    <body>
        <h1>@yield('header')</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid"src="{{asset('imagens/entrada1.jpg')}}">    
                    
                   


                </div>
            </div>
            <div class="row">
                
                  

                    
                        <div class="col-md-2">
                    <a href="{{route('entrada.index')}}"><i style="color:black" class="fas fa-home"></i>Inicio</a>
                            </div>
                        <div class="col-md-2">
                    <a href="{{route('noticias.index')}}"><i style="color:black" class="far fa-newspaper"></i>Notícias</a>
                        </div>
                        <div class="col-md-2">
                    <a href="{{route('empresa.index')}}"><i style="color:black" class="fas fa-industry"></i>Empresa</a>
                        </div>
                        <div class="col-md-2">
                    <a href="{{route('ondestamos.index')}}"><i style="color:black" class="fas fa-map-marked-alt"></i>Localização</a>
                        </div>
                        <div class="col-md-2">
                    <a href="{{route('contactos.index')}}"><i style="color:black" class="fas fa-phone-alt"></i>Contactos</a>
                        </div>
                <a href="{{route('formulario.index')}}"><i style="color:black" class="fas fa-user-circle"></i>Formulário</a>
                        
                    </div>
              
              
        </div>
            @yield('conteudo')
            

        
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.js')}}"></script>
    </body>

</html>