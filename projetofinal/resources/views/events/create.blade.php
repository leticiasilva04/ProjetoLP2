@extends('layouts.main')

@section('title', 'Cadastrar Animal')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastre um animal e o ajude a encontrar um lar!</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem do Animal:</label>
      <input type="file" id="image" name="image" class="form-control-file">
    </div>
    <div class="form-group">
      <label for="title">Nome do Animal:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do animal">
    </div>
    <div class="form-group">
      <label for="date">Data de Nascimento:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="city">Endereço:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local para adoção">
    </div>
    <div class="form-group">
      <label for="species">Espécie:</label>
      <input type="text" class="form-control" id="species" name="species" placeholder="Espécie do animal">
    </div>
    <div class="form-group">
      <label for="breed">Raça:</label>
      <input type="text" class="form-control" id="breed" name="breed" placeholder="Raça do animal">
    </div>
    <div class="form-group">
      <label for="gender">Sexo:</label>
      <select name="gender" id="gender" class="form-control">
        <option value="Macho">Macho</option>
        <option value="Fêmea">Fêmea</option>
      </select>
    </div>
    <div class="form-group">
      <label for="size">Porte:</label>
      <select name="size" id="size" class="form-control">
        <option value="Pequeno">Pequeno</option>
        <option value="Médio">Médio</option>
        <option value="Grande">Grande</option>
      </select>
    </div>

    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="Descreva o animal"></textarea>
    </div>
    <div class="form-group">
      <label for="title"> Mais Informações:</label>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Castrado"> Castrado
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value=" Vacinado"> Vacinado
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Vermifugado"> Vermifugado
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Deficiente"> Deficiente
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Saudável"> Saudável
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar">
  </form>
</div>

@endsection

