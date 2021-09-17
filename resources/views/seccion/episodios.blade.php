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
        <div class="col-md-12">
            <h1>Sagas Hunter x Hunter</h1>
            <table class="table table-hover table-sm table-responsive-lg aling mt-3 text-white">
                <thead>
                    <tr class="text-center">
                        <th>Saga</th>
                        <th>Episodios</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                    </tr>
                </thead>
                <tr class="text-center">
                    <td>
                        Examen del cazador
                    </td>
                    <td>
                        21 (1-21)
                    </td>
                    <td>
                        2 de octubre de 2011
                    </td>
                    <td>
                        4 de marzo de 2012
                    </td>
                </tr>	
                <tr class="text-center">
                    <td>
                        Familia Zoldyck y torre del cielo
                    </td>
                    <td>
                        16 (22-37)
                    </td>
                    <td>
                        11 de marzo de 2012
                    </td>
                    <td>
                        29 de junio de 2012
                    </td>
                </tr>
                <tr class="text-center">
                    <td>
                        York Shin
                    </td>
                    <td>
                        21 (38-58)
                    </td>
                    <td>
                        8 de julio de 2012
                    </td>
                    <td>
                        9 de diciembre de 2012
                    </td>
                </tr>
                <tr class="text-center">
                    <td>
                        Greed Island
                    </td>
                    <td>
                        17 (59-75)
                    </td>
                    <td>
                        16 de diciembre de 2012
                    </td>
                    <td>
                        14 de abril de 2013
                    </td>
                </tr>	
                <tr class="text-center">
                    <td>
                        Hormigas Quimera
                    </td>
                    <td>
                        60 (76-135)
                    </td>
                    <td>
                        21 de abril de 2013
                    </td>
                    <td>
                        24 de junio de 2014
                    </td>
                </tr>
                <tr class="text-center">
                    <td>
                        Elección del décimo tercer presidente
                    </td>
                    <td>
                        13 (136-148)
                    </td>
                    <td>
                        1 de julio de 2014
                    </td>
                    <td>
                        23 de septiembre de 2014
                    </td>
                </tr>	
            </table>
        </div>

        <div class="col-md-12 mt-3 mb-2">
            <hr class="bg-primary">
        </div>
        <div class="col-md-8">
            <p class="lead text-justify">
                Hunter × Hunter (ハンター×ハンター) es una serie de anime basado en el manga de Hunter × Hunter, producido por Madhouse Studios. Esta serie es la nueva adaptación del manga y opta por empezar desde el primer episodio, en lugar de continuar en donde se queda la serie de Nippon Animation en 1999. El director de la serie es Hiroshi Kōjina; el argumento de la historia está hecho por Jun Maekawa, y los diseños de personajes por Takahiro Yoshimatsu.
            </p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/episodio01.jpg') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
        </div>
    </div>
@endsection