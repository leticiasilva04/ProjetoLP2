@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $event->title }}</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Imagem do Animal:</label>
      <input type="file" id="image" name="image" class="form-control-file">
      <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
    </div>
    <div class="form-group">
      <label for="title">Nome:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do animal" value="{{ $event->title }}">
    </div>
    <div class="form-group">
      <label for="date">Data de nascimento:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ date_create($event->date)->format('Y-m-d') }}">
    </div>
    <div class="form-group">
      <label for="city">Endereço:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local" value="{{ $event->city }}">
    </div>
    <div class="form-group">
      <label for="description">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="Descreva o animal">{{ $event->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="items">Mais Informações:</label>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Castrado" {{ in_array('Castrado', $event->items) ? "checked" : "" }}> Castrado
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Vacinado" {{ in_array('Vacinado', $event->items) ? "checked" : "" }}> Vacinado
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Vermifugado" {{ in_array('Vermifugado', $event->items) ? "checked" : "" }}> Vermifugado
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Deficiente" {{ in_array('Deficiente', $event->items) ? "checked" : "" }}> Deficiente
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="N/A" {{ in_array('N/A', $event->items) ? "checked" : "" }}> Nenhuma das Anteriores
      </div>
    </div>

    <div class="form-group">
      <label for="species">Espécie:</label>
      <input type="text" class="form-control" id="species" name="species" placeholder="Espécie do animal" value="{{ $event->species }}">
    </div>
    <div class="form-group">
      <label for="breed">Raça:</label>
      <input type="text" class="form-control" id="breed" name="breed" placeholder="Raça do animal" value="{{ $event->breed }}">
    </div>
    <div class="form-group">
      <label for="gender">Sexo:</label>
      <select name="gender" id="gender" class="form-control">
        <option value="Macho" {{ $event->gender == "Macho" ? "selected='selected'" : "" }}>Macho</option>
        <option value="Fêmea" {{ $event->gender == "Fêmea" ? "selected='selected'" : "" }}>Fêmea</option>
      </select>
    </div>
    <div class="form-group">
      <label for="size">Porte:</label>
      <select name="size" id="size" class="form-control">
        <option value="Pequeno" {{ $event->size == "Pequeno" ? "selected='selected'" : "" }}>Pequeno</option>
        <option value="Médio" {{ $event->size == "Médio" ? "selected='selected'" : "" }}>Médio</option>
        <option value="Grande" {{ $event->size == "Grande" ? "selected='selected'" : "" }}>Grande</option>
      </select>
    </div>
    <!-- Fim da adição dos campos -->
    <input type="submit" class="btn btn-primary" value="Editar Animal">
  </form>
</div>

@endsection