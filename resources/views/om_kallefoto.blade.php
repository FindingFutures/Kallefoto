@extends('layouts.default')

@section('title')
  - Om
@endsection

@section('body')

<main id="ned">

  <h2>Om Kallefoto</h2>

  <p>{{ $about->body }}</p>

  <div class="bilde_kalle">
    <div>
    <img src="https://unsplash.it/1920/1080?random">
    <img src="https://unsplash.it/1920/1081?random">
    <img src="https://unsplash.it/1920/1082?random"></div>
  </div>


    <div class="pil_breidd"><a class="pil_a" href="#opp"><div class="fas fa-arrow-circle-up"></div></a></div>
  </main>

@endsection
