@extends('plantilla')

@section('titulo')
    {{$titulo}}
@endsection

@section('contenido')
    <div class="row justify-content-around mt-3 rounded text-white" style="background-color: rgb(0,0,0,0.7);">
        <div class="col-md-12 mt-3 mb-2">
            <h1 class="display-4">Personajes principales</h1>
            <hr class="bg-primary">
        </div>
        <div class="col-md-9">
            <h3><b>Gon Freecss (ゴン＝フリークス)</b></h3>
            <p class="lead text-justify">
                Gon Freecss es un niño de doce años que desea convertirse en un cazador para encontrar a su padre, el legendario cazador Ging Freecss. Al haber pasado mucho tiempo en el bosque mientras era más joven, se le da muy bien tratar con animales. Además, posee extraordinarios sentidos del olfato y vista. En las versiones japonesas sus seiyū son Junko Takeuchi para el primer anime y Megumi Han para el segundo; en el doblaje hispanoamericano su voz es dada por Leonardo Salas, y en el español por Carlos Lladó.
            </p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/GonFreecss.jpg') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
            <p class="text-center">Gon Freecss</p>
        </div>

        <div class="col-md-12 mb-2">
            <hr class="bg-primary">
        </div>
        <div class="col-md-9">
            <h3><b>Killua Zoldyck (キルア＝ゾルディック)</b></h3>
            <p class="lead text-justify">
                Killua Zoldyck es un niño de doce años y mejor amigo del protagonista, Gon Freecss. Killua pertenece a una famosa familia de asesinos, la familia Zoldyck. Evitando tener el mismo futuro, decidió participar en el examen de cazador. Es muy ágil y fuerte en combate. Tiene una actitud bastante alegre y serena, en momentos de peligro suele ser frío y calculador. En las versiones japonesas sus seiyū son Kanako Mitsuhashi para el primer anime y Mariya Ise para el segundo; en el doblaje hispanoamericano su voz es dada por Carlos Alberto Gutiérrez, y en el español por Carmen Calvell.
            </p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/KilluaZoldyck.jpg') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
            <p class="text-center">Killua Zoldyck</p>
        </div>

        <div class="col-md-12 mb-2">
            <hr class="bg-primary">
        </div>
        <div class="col-md-9">
            <h3><b>Kurapika (クラピカ)</b></h3>
            <p class="lead text-justify">
                Kurapika es el último miembro del clan Kuruta, conocidos por sus ojos escarlata (緋色の眼 Hiiro no me). Su objetivo es perseguir y destruir al grupo responsable de la destrucción de su clan, el Gen'ei Ryodan. En las versiones japonesas sus seiyū son Yuki Kaida para el primer anime y Miyuki Sawashiro para el segundo; en el doblaje hispanoamericano su voz es dada por Bernardo Duque, y en el español por Jordi Navarro.
            </p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/Kurapika.jpg') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
            <p class="text-center">Kurapika</p>
        </div>

        <div class="col-md-12 mb-2">
            <hr class="bg-primary">
        </div>
        <div class="col-md-9">
            <h3><b>Leorio Paladiknight (レオリオ＝パラディナイト)</b></h3>
            <p class="lead text-justify">
                Leorio Paladiknight es un adolescente que en un principio comenta estar participando en el examen de cazador exclusivamente por dinero, pero más tarde revela que es porque desea convertirse en un médico, y necesita el dinero para pagar sus estudios. Leorio es una persona muy inteligente, que está dispuesto a ayudar a sus amigos sin importar que suceda. En las versiones japonesas sus seiyū son Hozumi Gōda para el primer anime y Keiji Fujiwara para el segundo; en el doblaje hispanoamericano su voz es dada por Orlando Arenas, y en el español por Tasio Alonso.
            </p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/LeorioPaladiknight.jpg') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
            <p class="text-center">Leorio Paladiknight</p>
        </div>

    </div>
@endsection