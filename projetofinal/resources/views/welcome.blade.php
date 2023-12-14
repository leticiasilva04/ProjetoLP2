@extends('layouts.main')

@section('title', 'Adocão')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um animal</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Animais em busca de um lar!</h2>
    <p class="subtitle">Você pode navegar pelas fotos e perfis dos animais disponíveis, conhecer suas personalidades e necessidades específicas.</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants"> {{ count($event->users) }} Interessados</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum animal com {{ $search }}! <a href="/">Ver outros animais</a></p>
        @elseif(count($events) == 0)
            <p>No momento, não temos animais disponíveis para adoção. Estamos trabalhando para ajudar animais a encontrar lares amorosos. Fique atento a futuros animais cadastrados e atualizações em nosso site.</p>
        @endif
    </div>
</div>




@endsection

