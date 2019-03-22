@extends('layouts.default')

@section('title')
  - Leikanger
@endsection

@section('body')

<main id="ned">

  <h2>Leikanger</h2>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  <nav class="under_nav">
    <a href="#" class="svart_understrek">Fjærland</a>
    <a href="#" class="svart_understrek">Kvåle</a>
    <a href="#" class="svart_understrek">Barsnes</a>
    <a href="#" class="svart_understrek">Sogndalsdalen</a>
  </nav>

  <div class="bilder_galleri">
    <div>
    <img src="https://unsplash.it/1920/3000?random">
    <img src="https://unsplash.it/1920/1081?random">
    <img src="https://unsplash.it/1920/2500?random"></div>
    <div><img src="https://unsplash.it/1920/1200?random">
    <img src="https://unsplash.it/1920/2300?random">
    <img src="https://unsplash.it/1920/2950?random"></div>
    <div><img src="https://unsplash.it/1920/1400?random">
    <img src="https://unsplash.it/1920/1080?random">
    <img src="https://unsplash.it/1920/1800?random">
    <img src="https://unsplash.it/1920/2001?random"></div>
    <div class="rad_4"><img src="https://unsplash.it/1925/1005?random">
    <img src="https://unsplash.it/1920/1985?random">
    <img src="https://unsplash.it/1920/1505?random">
    <img src="https://unsplash.it/1920/1990?random"></div>
  </div>


    <div class="pil_breidd"><a class="pil_a" href="#opp"><div class="fas fa-arrow-circle-up"></div></a></div>
  </main>

@endsection
