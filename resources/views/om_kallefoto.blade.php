@extends('layouts.default')

@section('title')
  - Om
@endsection

@section('seo')

  <meta name="description" content="{{ Config::get('app.description') }}" />
  <meta name="keywords" content="kallefoto, sogndal foto, sogndal, karl johan ølnes"/>

  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="{{ Config::get('app.name')}} - Om">
  <meta itemprop="description" content="{{ Config::get('app.description') }}">
  <meta itemprop="image" content="{{ asset('assets/bilder/loftesnesbrui.jpg') }}">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://kallefoto.no">
  <meta property="og:type" content="website">
  <meta property="og:title" content="{{ Config::get('app.name')}} - Om">
  <meta property="og:description" content="{{ Config::get('app.description') }}">
  <meta property="og:image" content="{{ asset('assets/bilder/loftesnesbrui.jpg') }}">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ Config::get('app.name')}} - Om">
  <meta name="twitter:description" content="{{ Config::get('app.description') }}">
  <meta name="twitter:image" content="{{ asset('assets/bilder/loftesnesbrui.jpg') }}">

@endsection

<main id="ned">

<div class="grid_om">
  <h1 class="om_title">Karl Johan Ølnes</h1>
  <p class="om_p">{{ $about->body }}</p>
  <div class="kalle_bilde"><img src="https://images.unsplash.com/photo-1553531768-695dbbeb5f94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1269&q=80"></div>
</div>

  </main>
</html>
