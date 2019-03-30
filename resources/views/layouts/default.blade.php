<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kallefoto @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/master.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  </head>


  <body>

    @if (Request::is('index') || Request::is('/'))
      <header id="opp" style="height: 85vh; ">
    @else

    <header id="opp">
  @endif

  @if (Request::is('index') || Request::is('/'))
    <nav>
  @else
    <nav class="nav_background">
    @endif
    <a href="/" class="understrek">Heim</a>
      <div class="dropdown">
        <span>Stadar<i class="arrow right"></i></span>
        <div class="dropdown_content">
          <ul>
            @foreach ($subpages as $subpage)
              <li style="list-style-type: none;"><a class="understrek" href="/{{ strtolower($subpage->title) }}">{{ $subpage->title }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    <a href="/om" class="understrek">Om Kallefoto</a>
    <a href="/kontakt" class="understrek kontakt_a">Kontakt meg</a>
    </nav>

@if (Request::is('index') || Request::is('/'))
    <h1>Kallefoto</h1>
@endif

  <div class="pil_breidd"><a class="pil_a" href="#ned"><div class="fas fa-arrow-circle-down pil"></div></a></div>

</header>

@yield('body')

<footer>
  <p>Kontakt meg på: kallebilde@gmail.com eller tlf: 97194135. Alle rettigheitar tilhøyrer Karl Johan Ølnes<br>
  Copyright Kallefoto {{ date('Y') }}</p>
  <hr>
  <p class="findingfutures">Designa og utvikla av <a href="https://findingfutures.eu/" target="_blank">Finding Futures</a>.</p>
</footer>

<script>
 $(document).ready(function(){
   $("a").on('click', function(event) {
     if (this.hash !== "") {
       event.preventDefault();
       var hash = this.hash;
       $('html, body').animate({
         scrollTop: $(hash).offset().top
       }, 1200, function(){
         window.location.hash = hash;
       });
     }
   });
 });
</script>

</body>
</html>
