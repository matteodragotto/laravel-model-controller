@extends("layouts.master")

@section('title')
  Homepage
@endsection

@section('main')

<div class="container">
  <div class="row row-cols-3">
    @foreach ($movies as $movie)
    <div class="col">
      <div class="card border-2 border-primary mb-3">
        <div class="card-body">
          <h5 class="card-title">{{$movie['title']}}</h5>
          <p class="card-text">Titolo originale: {{$movie['original_title']}}</p>
          <p class="card-text">Nazionalità: {{$movie['nationality']}}</p>
          <p class="card-text">Data: {{$movie['date']}}</p>
          
        </div>
        <div class="bg-info">
          @php
            $maxRating = 10 - $movie['vote'];
            echo str_repeat("<i class='fa-solid fa-star'></i>", round($movie['vote'])) . str_repeat("<i class='fa-regular fa-star'></i>", round($maxRating));
          @endphp
        </div>
      </div>
    </div>
        
    @endforeach
  </div>
</div>
@endsection