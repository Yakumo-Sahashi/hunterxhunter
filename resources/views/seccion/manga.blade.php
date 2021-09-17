@extends('plantilla')

@section('titulo')
    {{$titulo}}
@endsection

@section('contenido')
    <div class="row justify-content-around mt-3 rounded text-white" style="background-color: rgb(0,0,0,0.7);">
        <div class="col-md-12 mt-3 mb-2">
            <h1 class="display-4">{{$titulo}}</h1>
            <hr class="bg-primary">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/manga01.jpg') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
        </div>
        <div class="col-md-8">
            <p class="lead text-justify">
                El manga de Hunter × Hunter se publicó por primera vez en marzo de 1998 por la editorial Shueisha, en su revista de edición semanal Shūkan Shōnen Jump.​ A octubre de 2018, Shueisha ha compilado 380 capítulos en 36 volúmenes en el formato tankōbon. A principios de diciembre de 2011, Shūeisha comenzó a publicar nuevas ediciones del manga en el formato de revista. La editorial publicó un volumen por mes hasta alcanzar un total de seis volúmenes, los cuales abarcan hasta el final del arco de Greed Island.36​ En diciembre de 2012, Togashi escribió una historia titulada Kurapika Tsuioku-hen (クラピカ追憶編 "Las memorias de Kurapika") que se usó como precuela para la primera película animada de la serie. ​Sui Ishida, autor de Tokyo Ghoul, escribió un capítulo de 69 páginas centrado en el pasado de Hisoka. La historia se publicó digitalmente en la revista virtual Shonen Jump+ el 2 de junio de 2016.
                <br>
                Las versiones en español del manga han sido editadas por la editorial Panini en España,​ y por Grupo Editorial Vid​ y posteriormente por Editorial Panini en México y Colombia.
            </p>
        </div>
        <div class="col-md-12">
            <hr class="bg-primary">
        </div>
        <div class="col-md-8">
            <p class="lead text-justify">
                Hunter × Hunter es uno de los dos títulos más famosos de Togashi (el otro es Yū Yū Hakusho). En junio de 2007, los primeros veinte volúmenes del manga han vendido sobre 36 958 000 copias combinadas en Japón solamente.​ El lanzamiento del volumen veintiséis del manga fue el manga más vendido en las dos primeras semanas de su lanzamiento a la venta,96​97​ y ha vendido más de 900 000 copias a partir del 3 de noviembre de 2008.​ El manga también ha sido traducido en diferentes idiomas, en muchos países de todo el mundo.
                <br>
                El manga ha vendido más de 68,8 millones de copias solo en Japón.
            </p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/manga02.png') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
        </div>

        <div class="col-md-12">
            <hr class="bg-primary">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/manga03.jpg') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
        </div>
        <div class="col-md-9">
            <p class="lead text-justify">
                La franquicia de Hunter × Hunter se ha extendido tanto que incluso se han escrito múltiples libros suplementarios, todos ellos lanzados a la venta por la editorial Shūeisha. Para el primer anime, el escritor y guionista Nobuaki Kishikan creó tres libros que se publicaron entre diciembre de 1999 y agosto de 2001.​ Además, una guía para este mismo anime, titulada Hunter x Hunter Characters Book: World × Character × Blessing (Hunter × Hunter キャラクターズブック World × Character × Blessing), fue publicada en enero de 2001.​ Para el manga se publicó otra guía, Hunter × Hunter: Hunters Association Official World and Character Guide (Hunter × Hunter ハンター協会公式発行ハンターズ・ガイド), el 4 de junio de 2004.
        </div>
    </div>
@endsection