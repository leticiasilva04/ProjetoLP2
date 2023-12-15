@extends('layouts.main')

@section('title', $event->title)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
        <div class="col-md-12" id="description-container">
        <h3>Sobre o animal:</h3>
        <p class="event-description">{{ $event->description }}</p>
      </div>
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $event->title }}</h1>
        <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
        <p class="events-participants"><ion-icon name="people-outline"></ion-icon> {{ count($event->users) }} pessoa(s) interessada(s)</p>
        <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Divulgado por: {{ $eventOwner['name'] }}</p>
        @if(!$hasUserJoined)
          <form action="/events/join/{{ $event->id }}" method="POST">
            @csrf
            <a href="/events/join/{{ $event->id }}" 
              class="btn btn-primary" 
              id="event-submit"
              onclick="event.preventDefault();
              this.closest('form').submit();">
              Estou Interessado(a)!
            </a>
          </form>
        @else
          <p class="already-joined-msg">Você já demonstrou interesse nesse animal!</p>
        @endif
        <h3>Informações do animal:</h3>
        <ul id="items-list">
         
          <li><ion-icon name="play-outline"></ion-icon> <span><strong>Espécie:</strong> {{ $event->species }}</span></li>
          <li><ion-icon name="play-outline"></ion-icon> <span><strong>Raça:</strong> {{ $event->breed }}</span></li>
          <li><ion-icon name="play-outline"></ion-icon> <span><strong>Sexo:</strong> {{ $event->gender }}</span></li>
          <li><ion-icon name="play-outline"></ion-icon> <span><strong>Porte:</strong> {{ $event->size }}</span></li>
          
        </ul>
        <h3>Outros:</h3>
        <ul id="items-list">
          @foreach($event->items as $item)
            <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span></li>
          @endforeach
         
        </ul>
      </div>
     
    </div>
  </div>

@endsection