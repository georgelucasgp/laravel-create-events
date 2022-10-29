@extends('layouts.main')

@section('title', 'HDC Events')
@section('content')
    <div id="search-container" class="col-md12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" class="form-control" name="search" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="sub-title">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="https://picsum.photos/200/300?random=1" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">10/09/2020</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection