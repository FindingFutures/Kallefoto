<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/kontakt.scss">
</head>

@extends('layouts.default')

@section('title')
  - Om
@endsection

<main id="ned">

<div class="grid_om">
  <h1>Karl Johan Ølnes</h1>
  <p>{{ $about->body }}</p>
  <div class="kalle_bilde"><img src="https://images.unsplash.com/photo-1553531768-695dbbeb5f94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1269&q=80"></div>
</div>


    <div class="pil_breidd"><a class="pil_a" href="#opp"><div class="fas fa-arrow-circle-up"></div></a></div>
  </main>
</html>
