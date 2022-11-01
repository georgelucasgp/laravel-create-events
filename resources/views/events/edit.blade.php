@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)'
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="image" class="form-label">Imagem do Evento:</label>
                <input id="image" name="image" class="form-control" type="file">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview img-thumbnail">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data do Evento</label>
                <input id="date" name="date" class="form-control" type="date"
                    value="{{ $event->date->format('Y-m-d') }}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento"
                    value="{{ $event->title }}">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade"
                    value="{{ $event->city }}">
            </div>
            <div class="mb-3">
                <label for="private" class="form-label">O evento é privado?:</label>
                <select name="private" id="private" class="form-select">
                    <option value="0">Não</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : '' }}>Sim</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição:</label>
                <textarea class="form-control" name="description" id="description" placeholder="Observações do evento">{{ $event->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="flexCheckDefault">
                    Adicione Itens de Infraestrutura:
                </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="items[]" value="cadeiras">Cadeiras
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="items[]" value="brindes">Brindes
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="items[]" value="palco">Palco
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="items[]" value="Open Food">Open Food
                </div>
            </div>
            <input type="submit" value="Editar Evento" class="btn btn-primary">
        </form>
    </div>
@endsection
