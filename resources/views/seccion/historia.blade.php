@extends('plantilla')

@section('titulo')
    {{$titulo}}
@endsection

@section('contenido')
    <div class="row justify-content-around mt-3 rounded text-white" style="background-color: rgb(0,0,0,0.8);">
        <div class="col-md-12 mt-3 mb-2">
            <h1 class="display-4">{{$titulo}}</h1>
            <hr class="bg-primary">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/historia01.jpg') }}" class="img-fluid mx-auto d-block rounded" title="Hunter x Hunter">
        </div>
        <div class="col-md-9">
            <p class="lead text-justify">
                Doce años antes del inicio de la historia, Ging Freecss abandonó a su hijo Gon en manos de su tía Mito en   Isla Ballena. Gon, quien siempre creyó que sus padres habían muerto, descubre un día gracias al aprendiz de su padre, Kite, que este aún se encuentra con vida y se ha convertido en uno de los mejores cazadores,​ individuos de élite y acreditados para el rastreo de tesoros secretos, bestias exóticas e, incluso, otros individuos. Motivado por esta revelación, Gon decide dejar su hogar y presentarse al examen de cazador,9​ una serie de desafíos que buscan probar las habilidades, supervivencia y trabajo en equipo de sus participantes. <br>​Durante el examen, Gon conoce y se hace amigo de tres de los otros participantes: Kurapika, el último miembro del clan Kurta, que desea convertirse en cazador con el fin de vengar a su familia y recuperar los ojos escarlata que fueron robados de sus cuerpos por un grupo de mercenarios conocidos como Gen'ei Ryodan; Leorio, que tan solo quiere ser cazador para poder pagar sus estudios de medicina; y Killua Zoldyck, un joven que abandonó su anterior vida como miembro de la más famosa familia de asesinos.
            </p>
        </div>
        <div class="col-md-12">
            <hr class="bg-primary">            
        </div>
        <div class="col-md-8">
            <p class="lead text-justify">
                En el mundo de Hunter x Hunter hay monstruos, bestias mágicas, tesoros ocultos, lugares malditos, parajes inexplorados y, en general, misterios. Hay un grupo de personas más atraídas por estas cuestiones; personas que buscan desentrañar el poder, los secretos y todo lo que yace oculto. A estas personas les llaman Cazadores (Hunters) y hacen parte de una Asociación.11​
                <br>
                Para ser Cazador, se deben aprobar dos exámenes realizados por el Comité Seleccionador de la Asociación de Cazadores: uno oficial y uno secreto.12​ El examen oficial se lleva a cabo periódicamente a comienzos de enero, y para aplicar se debe realizar un proceso de inscripción antes de las fiestas de año nuevo13​. Los exámenes oficiales son dispares porque el número de las fases y la naturaleza de las pruebas dependen del juicio de los examinadores; y los examinadores cambian cada año pues son Cazadores profesionales voluntarios. Según el doceavo presidente de la Asociación de Cazadores, Isaac Netero, los tres criterios principales del examen son: fuerza física (agilidad, flexibilidad, resistencia, percepción), fuerza mental (voluntad, adaptabilidad, juicio, creatividad) y, el más importante, impresión general (cualquier otro intangible)14​. Quien pase el examen oficial le es otorgado el título de Cazador y obtiene una licencia oficial, que es vitalicia según los mandamientos vigentes. Sin embargo, se debe cumplir exitosamente con el examen secreto: entrenamiento en los principios básicos del Nen13​.
            </p>    
            
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/historia02.png') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
            <img src="{{ asset('images/historia03.png') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
        </div>
        <div class="col-md-12">
            <hr class="bg-primary">            
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/historia04.jpg') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
            <img src="{{ asset('images/historia05.jpg') }}" class="img-fluid mx-auto d-block rounded mb-3" title="Hunter x Hunter">
        </div>
        <div class="col-md-8">
            <p class="lead text-justify">
                El Nen es la técnica que permite explotar la fuerza espiritual en el mundo de Hunter x Hunter, y en esto reside el poder que los diferentes personajes usan para combatir entre sí​. En principio, se trata de un potencial humano; por tanto, se explica, con entrenamiento todos pueden desarrollar Nen. Incluso, se dice en la obra, hay registros de personas que desarrollan Nen de manera involuntaria, debido a su talento y esfuerzo en algún área específica: pintura, deportes, artesanía, etcétera​. Hay cuatro principios básicos para aprender Nen: Ten (Barrera), que consiste en hacer permanecer el aura al rededor del usuario, en un constante flujo; Zetsu (Anular), que permite al usuario bloquear el flujo del aura; Ren (Mejorar), que expulsa el aura de manera ofensiva; y Hatsu (Actuar), que proyecta el uso del aura en una acción específica, según la función que determine el usuario​.
                <br>
                Los principios mayores permiten al usuario de Nen aplicar sus propios desarrollos a la técnica, basado en su naturaleza y sus intenciones. Existen seis categorías para clasificar el uso de Nen: Potenciación (incrementa resistencia y fuerza del usuario o de objetos), Transmutación (transforma el aura en materia), Emisión (proyecta el aura fuera de sí, en diferentes formas), Conjuración (materializa el aura a manera de objetos con cualidades especiales), Manipulación (controla mediante el aura a otros o a otras cosas), y Especialización (uso del aura por fuera de las categorías anteriores).
                <br>
                El mundo ficcional de Hunter x Hunter está representado por un mapa similar al del mundo real, en una vista invertida del sentido convencional. Sin embargo, en esta obra se plantea que hay una parte del mundo sin explorar llamado "continente oscuro".
            </p>
        </div>
    </div>
@endsection