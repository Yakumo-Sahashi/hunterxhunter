@extends('plantilla')

@section('titulo')
    {{$titulo}}
@endsection

@section('contenido')
    <div class="row justify-content-around mt-3 rounded text-white" style="background-color: rgb(0,0,0,0.8);">
        <div class="col-md-12 mt-3 mb-1">
            <h1 class="display-4">{{$titulo}}</h1>
            <hr class="bg-primary">          
        </div>
        <div class="col-md-9">
            <p class="lead text-justify">
                Hunter × Hunter (ハンター×ハンター) es una serie de anime basado en el manga de Hunter × Hunter, producido por Madhouse Studios. Esta serie es la nueva adaptación del manga y opta por empezar desde el primer episodio, en lugar de continuar en donde se queda la serie de Nippon Animation en 1999. El director de la serie es Hiroshi Kōjina; el argumento de la historia está hecho por Jun Maekawa, y los diseños de personajes por Takahiro Yoshimatsu.
            </p>
            <p class="lead text-justify">
                En julio de 2011, se anunció una segunda adaptación al anime de Hunter × Hunter. En lugar de continuar con la historia hasta donde había sido animada en los OVA, esta reinició la historia del manga desde el principio, con el fin de adaptarla más fielmente al manga. Dirigida por Hiroshi Kōjina y ahora producido por Madhouse, cuenta con Jun Maekawa como guionista y Takahiro Yoshimatsu como diseñador de personajes. Este reboot comenzó a emitirse el 2 de octubre de 2011 por Nippon Television y finalizó en el 23 de septiembre de 2014, adaptando hasta el capítulo número 339 del manga, terminó con un total de 148 episodios emitidos. La serie fue lanzada en BD disc y DVD contando con 14episodios (capítulos 13 y 2exclusivos de TV).
            </p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/portadaHxH.jpg') }}" class="img-fluid mx-auto d-block rounded" title="Hunter x Hunter">
        </div>
        <div class="col-md-12 mt-3">
            <h1 class="display-4">Películas</h1>
            <hr class="bg-primary">
        </div>
        <div class="col-md-5">
            <img src="{{ asset('images/info02.jpg') }}" class="img-fluid mx-auto d-block rounded" title="Hunter x Hunter 2011">
        </div>
        <div class="col-md-7">
            <p class="lead text-justify">
                Antes de la producción de la primera serie de anime, Hunter × Hunter fue adaptado a una animación original por el estudio Pierrot, bajo la dirección de Noriyuki Abe. Emitida en el «Jump Super Anime Tour» de 1998 junto con animaciones originales de Seikimatsu Leader den Takeshi! y One Piece,​ esta sigue la historia del manga hasta que Gon deja Isla Ballena.
                <br><br>
                En marzo de 2012 se anunció que la serie sería adaptada a una película animada con una historia original, Hunter × Hunter: Phantom Rouge (劇場版 HUNTER×HUNTER 緋色の幻影-ファントム・ルージュ- Gekijō-ban HUNTER×HUNTER Hiiro no Genei -Fantomu Rūju-?).​ Con una producción a cargo del estudio Madhouse y con la compañía japonesa Tōhō se encargó de su distribución.​ La historia se enfoca en los esfuerzos de Gon y sus amigos para recuperar los ojos escarlata de Kurapika, que fueron robados por Omokage, un miembro de Gen'ei Ryodan.
                <br><br>
                Tras el debut de Hunter × Hunter: Phantom Rouge, se anunció la producción de una segunda película animada.​ Titulada Hunter × Hunter: The Last Mission (ハンター X ハンター: ザ・ラスト・ミッション?), contó con Keiichiro Kawaguchi como director y Nobuaki Kishima como guionista.​ La película se estrenó en los cines japoneses el 27 de diciembre de 2013. La historia se centra en Netero, el presidente de la Asociación de Cazadores, y de como Gon y sus amigos descubren los oscuros secretos de su pasado.
            </p>
        </div>

        <div class="col-md-12 mt-3">
            <h1 class="display-4">Banda sonora</h1>
            <hr class="bg-primary">
        </div>
        
        <div class="col-md-7">
            <p class="lead text-justify">
                La música de la banda sonora del primer anime de Hunter × Hunter, así como la de todas sus animaciones originales, fue compuesta por Toshihiko Sahashi. Estos álbumes fueron lanzados a la venta por la compañía japonesa Marvelous Entertainment entre el 22 de diciembre de 1999 y el 16 de marzo de 2001. Los tres álbumes que pertenecen al anime contienen, en su totalidad, ciento treinta y dos pistas, incluyendo temas de apertura y cierre. El álbum para la primera animación original contó con dieciocho pistas, mientras que el de la segunda animación tuvo treinta.​ Además, múltiples CD dramas y una serie de radio drama titulada Hunter × Hunter R fue lanzada a la venta durante la adaptación del anime.​
                <br>
                Por su parte, la música de la segunda adaptación del anime está compuesta por Yoshihisa Hirano.
            </p>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('images/infoHxH.jpg') }}" class="img-fluid mx-auto d-block rounded" title="Hunter x Hunter">
        </div>
    </div>
@endsection