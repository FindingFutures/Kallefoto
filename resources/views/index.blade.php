@extends('layouts.default')

@section('title')
  Heim
@endsection

@section('body')

<div class="background">

</div>

<main id="ned">

  <h2>Galleri</h2>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


<div class="bilder_galleri">
  <div class="">
    @php
      $num = 0;
    @endphp
    @foreach ($images as $image)
      @php
        $num ++;
      @endphp
      @if ($num % 2 != 0 && $num % 3 != 0)
        <img src="{{ asset('/images/subpages/' . $image->small_image) }}" alt="">
      @endif
    @endforeach
  </div>

  <div class="">
    @php
      $num = 0;
    @endphp
    @foreach ($images as $image)
      @php
        $num ++;
      @endphp
      @if ($num % 2 == 0 && $num % 3 !== 0)
        <img src="{{ asset('/images/subpages/' . $image->small_image) }}" alt="">
      @endif
    @endforeach
  </div>

  <div class="">
    @php
      $num = 0;
    @endphp
    @foreach ($images as $image)
      @php
        $num ++;
      @endphp
      @if ($num % 3 == 0)
        <img src="{{ asset('/images/subpages/' . $image->small_image) }}" alt="">
      @endif
    @endforeach
  </div>
</div>


  <div class="pil_breidd"><a class="pil_a" href="#opp"><div class="fas fa-arrow-circle-up"></div></a></div>
  </main>

@endsection
