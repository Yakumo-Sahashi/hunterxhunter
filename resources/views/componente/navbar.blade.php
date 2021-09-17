<nav class="navbar navbar-expand-lg navbar-light  scrorev-nav-control menu" style="background-color: rgb(0,0,0,0.8)" ;>
    <div class="container-fluid text-center">
        <a class="navbar-brand" href="/"><img loading="lazy" src="{{asset('images/favicon.png') }}" width="30px"
                height="30px"> <img loading="lazy" src="{{asset('images/hunter.png') }}" width="20%"></a>
        <!-- Boton de hamburgesa al cambiar el tamaño de pantalla -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <!-- Opciones de barra de navegacion -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-dark" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark" href="informacion">Informacion</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark" href="historia">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark" href="personajes">Personajes</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark" href="episodios">Episodios</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark" href="manga">Manga</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark" href="opening">Openings</a>
                </li>
            </ul>
             <!-- 
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="btn btn-dark" href="login"> Iniciar Sesion</a>
                </li>
            </ul>-->
        </div>
    </div>
</nav>
