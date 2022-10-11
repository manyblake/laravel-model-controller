@extends('layouts.app')

@section('metaTitle', 'Home')

@section('content')
<div class="container">
  <ul>
    @foreach ($movies as $movie)
      <li>
        <p>Titolo: {{ $movie->title }}</p>
        <p>Voto: {{ $movie->vote }} {{ $movie->date }}</p>
      </li>
    @endforeach
  </ul>
</div>

@endsection