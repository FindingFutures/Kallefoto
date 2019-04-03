<head>
  <link rel="stylesheet" href="/css/kontakt.scss">
</head>

@extends('layouts.default')

@section('title')
  - Om
@endsection

<main id="ned">

  <h2>Karl Johan Ølnes</h2>

  <p>{{ $about->body }}</p>

  <div class="bilde_kalle">
    <div>
    <img src="https://unsplash.it/1920/1080?random"></div>
  </div>


    <div class="pil_breidd"><a class="pil_a" href="#opp"><div class="fas fa-arrow-circle-up"></div></a></div>
  </main>
