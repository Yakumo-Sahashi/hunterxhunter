@extends('plantilla')

@section('titulo')
    {{$titulo}}
@endsection

@section('contenido')
    <div class="row justify-content-between mt-3 rounded" style="background-color: rgb(0,0,0,0.7);">
        <div class="col-md-12 mt-2">
            <h1 class="text-white">Hunter x Hunter 2011 Opening 1</h1>
            <hr class="bg-primary">
        </div>
        <div class="col-md-3 text-white align-self-center">
            <img src="{{ asset('images/favicon.png')}}" title="Gon" class="img img-fluid py-2">
            <hr class="bg-primary">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" scrolldelay="50" behavior="right"><b>BIENVENID@ a Hunter x Hunter</b></marquee>
            <hr class="bg-primary">
        </div>
        <div class="col col-md-9">
            <div class="mt-3 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/faqmNf_fZlE" frameborder="0" allow="accelerometer; autoplay; encrypted-media;" allowfullscreen></iframe>
                </div>
            </div>	
        </div>
    </div>

    <div class="row justify-content-between mt-3 rounded" style="background-color: rgb(0,0,0,0.7);">
        <div class="col-md-12 mt-2">
            <h1 class="text-white">Hunter x Hunter Gon VS Pitou</h1>
            <hr class="bg-primary">
        </div>
        <div class="col col-md-9">
            <div class="mt-3 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/WbMB6DYtXeA" frameborder="0" allow="accelerometer; autoplay; encrypted-media;" allowfullscreen></iframe>
                </div>
            </div>	
        </div>
        <div class="col-md-3 text-white align-self-center">
            <img src="{{ asset('images/gon.png')}}" title="Gon" class="img img-fluid py-2">
            <hr class="bg-primary">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" scrolldelay="50" behavior="right"><b>Disfruta la batalla</b></marquee>
            <hr class="bg-primary">
        </div>
    </div>

    <div class="row justify-content-between mt-3 rounded" style="background-color: rgb(0,0,0,0.7);">
        <div class="col-md-12 mt-2">
            <h1 class="text-white">Hunter x Hunter Feitan vs Zazan</h1>
            <hr class="bg-primary">
        </div>
        <div class="col col-md-9">
            <div class="mt-3 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/GxFftljP5fs" frameborder="0" allow="accelerometer; autoplay; encrypted-media;" allowfullscreen></iframe>
                </div>
            </div>	
        </div>
        <div class="col-md-3 text-white align-self-center">
            <img src="{{ asset('images/gon.png')}}" title="Gon" class="img img-fluid py-2">
            <hr class="bg-primary">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" scrolldelay="50" behavior="right"><b>Disfruta la batalla</b></marquee>
            <hr class="bg-primary">
        </div>
    </div>

    <div class="row justify-content-between mt-3 rounded" style="background-color: rgb(0,0,0,0.7);">
        <div class="col-md-12 mt-2">
            <h1 class="text-white">Hunter x Hunter Kurapika vs Uvogin</h1>
            <hr class="bg-primary">
        </div>
        <div class="col col-md-9">
            <div class="mt-3 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/RdYud7REEVs" frameborder="0" allow="accelerometer; autoplay; encrypted-media;" allowfullscreen></iframe>
                </div>
            </div>	
        </div>
        <div class="col-md-3 text-white align-self-center">
            <img src="{{ asset('images/gon.png')}}" title="Gon" class="img img-fluid py-2">
            <hr class="bg-primary">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" scrolldelay="50" behavior="right"><b>Disfruta la batalla</b></marquee>
            <hr class="bg-primary">
        </div>
    </div>
@endsection