@extends('layouts.main')

@section('title', 'Criar Evento')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um Evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Imagem do Evento:</label>
                <input id="image" name="image" class="form-control" type="file">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade">
            </div>
            <div class="mb-3">
                <label for="private" class="form-label">O evento é privado?:</label>
                <select name="private" id="private" class="form-select">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição:</label>
                <textarea class="form-control" name="description" id="description" placeholder="Observações do evento"></textarea>
            </div>
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>
@endsection
