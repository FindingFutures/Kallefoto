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

  <!-- SEO & Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110310303-8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110310303-8');
  </script>
</head>


<body id="opp">

@if (Request::is('index') || Request::is('/'))
  <header id="opp">
@else
  <header>
@endif

    <nav class="nav_background">
    <a href="/" class="understrek">Heim</a>
      <div class="dropdown">
        <span>Stadar<i class="arrow right"></i></span>
        <div class="dropdown_content">
          <ul>
            @foreach ($subpages as $subpage)
              <li style="list-style-type: none;"><a class="svart_understrek" href="/{{ strtolower($subpage->title) }}">{{ $subpage->title }}</a></li>
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

<footer id="footer">
  <div class="">
    <p>Kontakt meg på: kallebilde@gmail.com, tlf: 97194135 eller <a href="/kontakt">her</a>.<br> Alle rettigheitar tilhøyrer Karl Johan Ølnes<br>
    Copyright Kallefoto {{ date('Y') }}</p>
  </div>
  <form class="contact_form" action="{{ Route('contact.create') }}" method="POST">
    @if (Session::has('success'))
      <p class="success">{{ Session('success') }}</p>
    @endif
    @if (Session::has('error') or $errors->any())
      @foreach ($errors->all() as $error)
          <p class="error">{{ $error }}</p>
      @endforeach
    @endif
    <h4>Kontakt meg her:</h4>
    @csrf
    <input type="text" name="name" value="" placeholder="Navn" required>
    <input type="text" name="email" value="" placeholder="E-Mail" required>
    <input type="text" name="phone" value="" placeholder="Mobilnummer" required>
    <textarea name="body" placeholder="Melding" required></textarea>
    <button type="submit" name="submit">Send</button>
  </form>

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
