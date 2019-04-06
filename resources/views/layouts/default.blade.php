<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="utf-8">
  <title>Kallefoto @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ mix('/css/master.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  @yield('seo')

{{-- Structured Data --}}
<script async type="application/ld+json">
  {
    "@context": "http://schema.org/",
    "@type": "Person",
    "name": "Karl Johan Ølnes",
    "alternateName": "Kallefoto",
    "url": "https://kallefoto.no",
    "image": "",
    "jobTitle": "Photographer"
  }
</script>

  <!-- SEO & Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110310303-8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110310303-8');
  </script>

  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000"
    },
    "button": {
      "background": "#186359"
    }
  },
  "theme": "edgeless",
  "position": "bottom-right",
  "content": {
    "message": "Denne nettstaden bruker cookies, slik at du får den beste opplevinga.",
    "dismiss": "Sjønner!",
    "link": "Lær meir"
  }
})});
</script>
</head>


<body>

@if (Request::is('index') || Request::is('/'))
  <header id="opp" class="topImage" style="background-position: center 0px;">
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
              <li class="understrek_dropdown" style="list-style-type: none;"><a href="/{{ strtolower($subpage->title) }}">{{ $subpage->title }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    <a href="/om" class="understrek">Om Kallefoto</a>
    <a href="#kontakt_meg" class="understrek kontakt_a">Kontakt meg</a>
    </nav>

    @if (Request::is('index') || Request::is('/'))
      <h1>Kallefoto</h1>
    @endif

    @if (Request::is('index') || Request::is('/'))
      <a href="#" onclick="goDown();" aria-label="scrollDown"><div class="fas fa-arrow-circle-down pil"></div></a>
    @else
      <div class="pil_breidd"><a class="pil_a" href="#ned"><div class="fas fa-arrow-circle-down pil"></div></a></div>
    @endif


    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 1920 605" style="enable-background:new 0 0 1920 605;" xml:space="preserve">
    <style type="text/css">
    	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#002323;}
    </style>
    <path class="st0" d="M0,604.7v-165l45.1-0.1l2.1-4.6c4.7-11.7,8.4-22.1,19.3-32.9c0.7-0.7-0.8-3.6,0-4.2c2.5-2.1,14.8-7,12.8-15.5
    	c-0.3-1.4-15,0-16.2,0c3.4-5.6,6.3-8.6,9.4-16.9c1.5-4-0.5-8.2,1.7-11.3c0.8-1.1,12.2-0.9,6.8-9.8c-0.2-0.4-0.6-0.5-1-0.4l-0.2,0.1
    	v0.1c0,0.4,0,0.6,0,0.7c-0.6,3.1-0.6,6.4-4.8,6.4c-6.4,0-10-1.4-15.1-3.2c2,3.6,2.6,10.9-0.6,14.3c-3,3.1-6.7-1-7.9,2.1
    	c-1,2.5-2.8,6.5-6.6,4.2c-7.1-4.1-6.3-8.7,0.6-15.9c1.3-1.3,4.8,0.5,4.8-0.5c0-4.1-0.3-6.6,2.4-10.1c1.7-2.2,6.7-4.7,6-7.4
    	c-0.6-2.8,0.3-5.1,2.6-6.4l1-0.4l0.3-0.8c3.6-7.3,13.4-9.9,16.8-18.5l0.1-0.2l-1.5,0.5c-2.1,0.8-3.6,1.9-3.7,3.6
    	c-0.4,5-6.6,6.9-8.7,2.2c-1.6,2.8-1.9,5.3-6.2,5.5c-1.1,0.1-9-1-8.3-2.2c2.4-4.3,8.4-6.5,13.7-7.7c1.1-0.2,0.5-5.7,3.7-6.6
    	c1.5-0.4,5.9,1.1,6.2,0c1.1-4,2.8-5.7,6.2-6.4H81l0-0.1c0.2-0.8,0.4-1.6,0.9-2.1c3.5-4.1,7.8-0.1,9.4-7c0.3-1.3,0.6-2.7,1-4.1l0.2-1
    	l-4,1.4c-2.3,0.9-12.8,11.5-7.9,0.4c0.2-0.4,0.6-0.7,0.8-1.1c1.4-2.8,4.8-1.9,5.8-3.6c0.7-1.1,2.4-3.2,4.4-5l2.7-2.1l0.1-1.5
    	c0-5-1.6-8.7-7.3-8.7c-9.4,0,0.3,14.8-8.7,12.8l-0.3-0.1l-0.3,1.9c-0.4,0.9-1,1.4-2.1,1.5c-3.2,0.3-4.4-1.6-6.7-2.9
    	c1.5,2.7,3,4.8,2.5,8.4c-0.4,3.2-5.2-1.5-5.8,0c-2.1,5.5,6.9,10.9-3.7,10.9c-2.7,0-2.1-5-2.1-6.9c0-2.6-2.9-2.3-4.6-3.3
    	c-3.3-1.9-0.5-13.4,2.9-14.6h2.5c1.8-1.1-1.4-11,3-12.8l0.5-0.1l0.4-0.4c2.1-2.1,5.1-4.4,8.2-6.8l3.6-2.7l-2.8,0.8
    	c-5,1.4-9.9,2.8-15.3,4.9c-3.7,1.4-1.1-4-0.8-4.7c2-5.3,11,0.1,13.3-3.3c2.6-3.8,6.5-3.7,11.6-4.4c1-0.1,2.1-0.4,3.2-0.8l0.4-0.2
    	l0.1-0.1c3.7-3.6,5.8-6.7,7.9-10.8c1.2-2.4,0.7-5-0.5-7.6l-0.3-0.5l-0.4,0.8c-1.7,1.5-7.2-1.3-8.3-2.2c-2.2-1.6-2.1,22.9-11.2,6.9
    	c-0.7,1.2-9.1,16.8-9.1,5.8c0-2.4-0.9-6.3,1.2-7.7c2-1.3,6.6-1.4,7.9-3.3c2.6-3.7,1.2-6.7,5.8-9.1c1.6-0.9,1.9,0.8,3.3,0.4
    	c2.1-0.6,1.7-2.9,2.8-4.3l0,0l-0.1-0.5c-0.3-1.8,0.7-3.3,3.8-4.2c5.8-1.7,7.3-4.1,7.6-6.3l0-0.8l-0.3,0c-0.8,0-1.5,0.2-2.6,0.5
    	c-0.9,0.3-6.2,2.8-6.7,2.2c-2.3-2.7,2.6-2.7,3.3-3.3c1.5-1.3,3-5.1,5.1-8.1l1.3-1.5c-1.4-1.2-2.2-2.6-2.7-4.1l-0.3-1.5l-1.7,0.3
    	c-1.2,0.5,0.1,2.4-0.8,3.3c-0.6,0.6-4.5-0.3-5.4,0c-3.1,0.9,3.6,10.8-3.3,11.3c-2.9,0.2-11.2-2.2-12.1,0.7c-0.5,1.6-0.2,7.3-2.9,7.3
    	c-7.6,0,1.5-7-0.4-8c-1.3-0.7-4.8-1-5-2.2c-1.3-7.8,11.3-6.8,11.6-8c0.4-1.5,3.5-4,5.4-3.7c1.2,0.2,1.5-5.5,4.6-6.6
    	c1.5-0.5,3,0.9,4.2,1.1c1.5,0.3,2.9-0.5,4.5-1.2l1.6-0.4l0.4-2.2c0.5-2.1,1.1-4,1.5-5.5c-5.6,1.3-7.3-3.2-6.7-8.7l0-0.4l-0.3,0
    	c-0.4,0.1-0.6,0.5-0.6,1.2c0,1.2,0.5,3.8-0.8,4.4c-1.7,0.8-4.9-1.3-4.2,0.4c0.4,1,0.7,4.4-1.2,4c-1.5-0.3-3.5-3.1-4.6-2.9
    	c-4.1,0.7-1.6,4.7-2.9,5.5h-3.7c-0.9,0.3-4,3.1-4.6,3.7c1.1-1,1-4.6,1.7-6.2c2.1-5.4,7.6-10.6,14.1-10.6c-3-2.6,4.6-9.5,7.9-8.7
    	l2,0.6l0.3-0.5c1.8-3.3,5.8-1.2,7.2-3.7c3.5-5.8,2.1-31.9,5.5-38.5c1.5-2.9,3.8,21,2.4,27.5c-1.2,5.6,5,7.3,5,16.6
    	c0,7.2,0,10.6,0.2,13.3l0,0.3l3.6,0.4c3.5,0.4,5.3,3.7,7.1,3.7c3,0,9.5-0.2,11.2,1.8c0.7,0.8,2.7,8.2,2.9,9.1
    	c1.3,7-15.4-4.7-13.3-6.6c-4.1,1.2-7.1-1.2-9.7-2.4l-1.1-0.3l0.2,1.2c0.1,0.5,0.1,0.9,0.2,1.5c0.6,3.7,4.4,7.6,7.6,11.3l1.6,1.9
    	l0.3,0c2-0.5,3.7-2.5,6.2-1.2c3.7,2,7.8,6.6,1.2,8c3,0,5.7-0.4,7.5,1.5c2.2,2.5-0.7,5.4,1.2,6.2c1,0.4,8.1,3.7,3.3,4.4
    	c-11.2,1.6-12.8-5.8-16.3-10.3l-1.9-2l-0.3,0.3c-2.6,2.5-8.5,5.2-8.8,7.3c2.5-0.1,4.2,1.3,5.5,3.3l0.4,0.6l0.9,0.1
    	c1.7,0.4,2.8,1.8,4.7,4.3h-0.4c3,0,10.3,3.4,9.1,5.5c2.9,0,1.9,2.9,1.2,4c-2.8,4.9,9.5-1.6,7.9,4c-1.3,4.7-6.9,3-9.6,6.6
    	c-3.3,4.3-1.2,7.5-3.3,0c-2.5-8.6-1.6-2.3-7.1-4.7c-0.3-0.1-0.6-0.4-0.8-0.8l-0.2-0.8l-0.7,0.6c-1.9,1.5-5.2,2.9-10.3,5.3
    	c-0.1,0.2-0.2,0.4-0.3,0.6l0,0.1l1.5,1.2c3.3,1.8,6.7-0.8,9.2,1.8c0.9,0.9,3.6,6.1,2.5,7.6c-0.9,1.2-4-0.9-4.6-1.4
    	c-1-0.9-2.4-1.6-3.9-2.5l-3.7-2.1l0.5,0.6c2.4,2.4,6.7,4.5,8.5,7.8l0.5,1.3l3.4-0.2c3.2-0.2,6.4-0.3,9.6-0.1
    	c4.1,0.3,7.2,3.7,9.1,6.6c1,1.4,4,1.9,5,4.4c1.7,4.2-0.4,10.2-1.2,14.6c-1.4,7.6-5.1,2.2-6.7-1.5c-0.5-1.3-0.6-10.4-1.7-9.5
    	c-1.5,1.3-3.5,1.4-5.3,0.7l-0.1,0l0,0.6c0.1,2.6-0.1,5.5,0.6,8.6c0.8,3.5,0,5.7-1,7.6l-0.2,0.5l1.6,1.9c0.5,0.8,0.8,1.6,1,2.3
    	c0.5,1.7,5-1.2,7.9-1.5c4.3-0.4,8.4,4.9,5.4,8.4c3.7,0,5.7,5.3,2.5,6.2c-3.5,1-3.6-3.3-5.4-3.3c-2.6,0-6.3-0.6-3.7-5.1
    	c-1.4,1.2-4,3.2-6.2,2.5c-1.2-0.4-2.4-1-3.4-1.9l-0.6-0.7l0.1,1.4c0.1,3.6-1,7.1-6.4,13.3l-0.8,0.9l2.4,2.3c1.2,1.9,1.9,4.3,3,6.2
    	c1.4,2.5,9.6-5.4,12.7-2.6c1.9,1.7,2.2,4.4,2.4,6.9c0.8,9-6,14.2-6,23.3c-4.2-5.6-6.7-10.6-6.7-18.6c-1.1,2.5-1.5,8.3-3.6,9.5
    	c-1.8,1-3.8-2.1-5.5-5.8l-1.6-4l-0.3,1.5c-0.6,3.3-0.7,7.4-0.2,11.6l0.4,2.4l4.6,1.4c4.3,1.5,8.3,3.5,11.8,5.8l3.7,2.8l0.4-0.9
    	c0.3-0.5,0.6-1,0.9-1.2c3-3.2,4.1-8.1,7.1-11.9c2.7-3.4,6.4-1.8,7.6-7.9c0.8-4,2.4-9,3.8-12.8c-7.1,1.1-3.6-4.1-0.9-6.9
    	c1.9-2,0.5-3.1,2.3-5.4c0.8-1,1.5,0.6,2.4,1.5c1.5,1.6,2.3,2.7,2.3,5.9c0,5,3.1,4,3.8,6.9c1.4,5.7,4.3,10.6,6.1,14.8
    	c1.9,4.4-3.2,4.8-1,9.9c1.6,3.6,3.5,1.3,5.7,2.9c1.8,1.3,0.6,3.3,1.4,5.4c0.9,2.5-1.9,3-1.4,4.9c0.3,1.1,2.9,2.3,4.7,3.6l0.1,0.2
    	l0.3-12.1c0-2.3,4.4-1.3,5.8-2.2c2.3-1.5,3-3.7,4-5.8c0.2-0.3,0.5-0.5,1-0.6h0.1l0-0.2c0.2-4,10.9-5.9,11.7-9.5
    	c0.7-2.8-1.9-4.2-3-6.6l-0.2-0.7l-0.1-0.1c-0.4-0.6-0.8-1.4-1.1-2.3c-2.2,3.8,0.1,15.3-9.1,11.2c0,2-5,14.2-8.4,9.3
    	c-3.3-4.8,0.2-15.9,4-18.6c1.1-0.8,3.6-0.1,3.3-1.3c-0.5-1.8-2.1-4.3,0-5.7c1.7-1.2,4.3-2,5.8-0.6c0-5.7,3-7.3,7.8-8.1l1.7-0.2
    	l-0.3-0.3c-2-1.2-9.6-1.3-7.1-7.1c2.4-5.5,4.6-6.9,6.8-8.1l0.6-0.3l-3.5,0.6c-1.7,0.1-3.4,0-5-0.2c-0.3,0-3.6,10.4-4.7,11.8
    	c-0.9,1.1-4-0.3-4,3.2c-4.5-11.9,6.7-24.9,16.1-30.4c0.1,0,0.2-2.7,0.4-2.9c1.9-2.3,5.9-3.4,9.5-4l0.4-0.1l0.4-1.3
    	c0.3-0.8,0.5-1.6,0.9-2.4c1.3-2.9-2.2-7.4-4.6-11.6l-0.1-0.1l-0.2,0.4c-0.9,0.8-2.2,1.2-3.8,1.2c-2.2,0,2.1,2.5,2.8,4.4
    	c0.7,1.9,0.4,4.1,0,5.4c-1.2,4.1-7.2-0.4-8.9-2c3.8,9.9-14,6.4-8.4,3.9c-8.4-7.3,10.6-13.7,11.7-17.6c0.4-1.3,2.8-5.7,3.9-5.9
    	l2.9-0.2l1.3-1.1l1.1-0.9l-0.2,0c-4.2-1-8.8-4.5-10-1.7c-1.3,2.8-2.5,8-5.6,9.3c-1.2,0.5-2.2,0.4-2.8-0.5c-3.1-5.5,6-16.1,11.2-16.6
    	c4.1-0.4,6.6-1.5,9.2-2.9l2.4-1.3l0.2-1.1c0.6-2.5,1.7-4.1,3.3-5.9l0.6-0.7l-0.3-1.2c-0.9-4.4,0.7-4.7-0.3-10
    	c-0.8-4.1,3.3-2.9,3.9-5.9c0.4-1.9-3-7.7,0-6.9c2.1,0.6,3,4.2,2.2,5.9c-1.2,2.8,2.4,2.6,3.9,4.9c4.2,6.2-3.9,3.8-3.9,7.4l0.2,2.3
    	l0.5,0.7c2.9,4.3,0.5,6.6,4.4,10.7c2.7,2.8,5.7,6.7,6.6,9.9l0.2,0.6l0.3,0.3c3.2,3,7.6,8.5,8,10.3c0.5,3.1,0.1,11.8-4.5,7.8
    	c-1.4-1.3-1.3-4.1-1.7-6.4c-0.5-3.2-5.8-2-6.7-5.9l-0.5-1.6h-0.1c-1.1,0-2.3-0.1-3.7-0.3c2.2,6.2,4.7,13.7,6.5,20.7l0.3,1.3l4.1,1.4
    	c4,1.3,11.1,2.8,12.3,6.9c0.6,2.3-2.5,4.2-0.6,5.9c0.6,0.5,10.1,10.8,3.3,10.8c-5.2,0-5.8-4.6-7.3-8.3c-0.1-0.2-4.7,3.2-6.7,3.9
    	c-2.1,0.8-0.6-8.8-0.6-11.2c-0.8,0.7-1.6,1.1-2.3,1.3l-0.9,0l-0.1,0.5c-1.1,6.1-7.1,4.1-2.5,10c6.4,8-3.1,2.7,3.3,9.5
    	c0.7,0.8,1.9,2.5,2.7,4.5l0.3,0.9l1,1.1c1.1,1.4,2.1,2.6,3,2.7c5.4,0.8,7.7,4.4,7.7,9.3c0,6.6,1.3,3.2,7.7,6.4
    	c3.9,2,5.5,3.8,6.2,7.7l2.3,1.2l2.2-1.1c1.6-0.9,3-2.2,3.7-5.7c0.9-4.6,2.7-10.3,4.3-14.8c-8.1,1.2-4.2-4.7-1.1-7.9
    	c2.2-2.3,0.6-3.6,2.7-6.3c0.9-1.2,1.7,0.6,2.7,1.7c1.7,1.8,2.7,3.1,2.7,6.8c0,5.8,3.5,4.5,4.4,7.9c1.6,6.6,5,12.3,7,17.1
    	c2.2,5.1-3.6,5.5-1.1,11.4c1.8,4.2,4,1.6,6.5,3.4c2.1,1.6,0.7,3.8,1.6,6.3c1,2.9-2.2,3.5-1.6,5.7c0.6,2.6,12,5.4,5.4,9.7
    	c-2.5,1.7-7.1,1.6-9.8,2.8c-2.9,1.4,2.5,4.4,5.4,8.5c2.1,2.9,3.6,8.1,6,10.2c6.5,5.9,15.3,10.2,1.1,10.2c4,0,9,5.7,2.7,5.7
    	c-5,0-9.8,0-14.1,1.1c5.7,0,29.6,4.6,19,10.2c1.3,1.4,6.8,5.2,9.2,6.2c0.7,0.3,5.4,0.9,5.4,1.1c0.4,1.6-2.3,1.9-2.7,3.4
    	c-0.3,1.1,6.2,4.9,7,7.4c-10.5,0-18.5-2.8-29.8-2.8c10.5,0,14.2,16.5,22.8,16.5c-1.2,1.2-1.5,2.5-1.2,3.7l0.6,1.1l0,0l9.4,0
    	l10.1-1.7l3.1-3.2l1.8-0.8l-0.9-0.8c-0.3-0.3-0.6-0.6-0.9-1c-3-3.7-17.9,2.4-14-2.6c7.2-9.1,9.3-16.6,19.1-24.3l0.4-0.3l-3.8,1.7
    	c-2.7,1.5-4,5.3-7.3,6c-1.4,0.3-2.2-0.3-3,0.4c-1.6-1.4-2.3-2.6-1.7-5.3c-0.3-2.5-1.1-5-1.3-7.5c-0.7-9.4,7.4-6.8,12-12.8
    	c1.3-1.6,2.5-4.8,4.3-6c2-1.4,5.6-0.4,8.5-0.3l1.4-0.2l0.9-1.4c1.4-2.4-0.5-5,1.6-6.9c0.8-0.7,11.8-0.6,6.6-6c-1-1-3.2,1.1-4.1,0
    	c-0.3-0.3-0.3-0.7-0.3-1.2l0-0.1l-0.9,0.2c-0.6,0.2-1.3,0.5-2.2,0.9c-3.4,1.7-4.1,5.7-7.7,6.4c-6,1.2-0.7-1.2-5.6-3.4
    	c-4.5-2-8.6-1.5-13.7-0.7l-1.6,0.4l0.3,1.5c-1.4-0.4-1.8-1-0.6-1.5l0.2-0.1l-0.1-0.5c-0.4-4.7,3.4-10.2,5.2-14.2
    	c2.5-5.6,16.1-15.9,22.3-10.5c0.4,0.3,3-1.6,3.4-1.9c0.9-0.5,1.9-1.1,2.9-1.8l2.3-1.5l0.2-1.1c0.2-0.5,0.4-1,0.8-1.3
    	c3.4-2.5,7.5-0.1,9-4.3c1.3-3.7-5.7-6.4-6.2-9.6c-0.1-0.6,0.3-1.3,0.8-2l0.2-0.2l-1.4-0.9c0,9.1-9.4,15.7-9.4,1.9
    	c-1.3,3.4-1.7,7.3-5.6,9c-1.1,0.5-0.6-1.8-1.7-2.3c-1.6-0.7-0.9,6.4-4.7,4.1c-2.3-1.4-2.1-3.6-1.1-5.7l0.6-1.1l-0.2,0.1
    	c-3.6,1.3-0.7-9.2,0.8-10.8c2-2,4-3.4,6-4.6l0.6-0.4l1.1-1.9c0.5-0.6,1.2-1.1,2.1-1.2l1.9-0.1l0.4-0.3c1-0.8,2-1.7,3-2.8l0.7-0.8
    	l0-1.4c0-1.9,0.4-2.6,2.9-2.8l0.5,0l0.7-0.8l-0.7-0.9c-0.6-1.6,0.7-2.9,2.6-3.8l1.9-0.7l0.7-1.2c1.4-2.7,2.3-5.3,1.7-7.5
    	c-1-3.3-12.7-2.4-12-6.3c0.6-3,6.7-1.5,10-4.2c4.5-3.6,6.5-11.2,7.9-15.1c-12.3,1.8-6.3-7.1-1.6-12.1c2.5-2.7,1.8-4.4,2.6-6.8
    	l0.5-0.9l-0.2-0.2c-0.7-0.2-2-0.3-1.2-1.6c1.2-2.1,3.1-12.2,5.6-11.6c0.5,0.1,0.8,3.8,0.9,4.1c0.2,2.7-1.7,3.2-1.7,4.5
    	c0,0.7,2.1,1.1,2.1,1.9c0,0.6-0.1,1.4-0.3,2.2l-0.3,0.9l0.3,0.4c2.6,2.7,4.1,4.7,4.1,10.3c0,8.8,5.4,6.9,6.6,12.1
    	c0.2,0.7-2.9,8.4-1.3,10c2.9,2.9,10.9,0.5,8.6,4.2l-0.1,0.1l2,0.3c5.8,1,13.7,2.6,10.7,7.8c3.6,1.6,2.5,3.1,0,5.3
    	c-1.1,0.9-3.6-5.5-4.7-5.3c-0.6,0.1-1.8,2.2-3,2.6c-4.6,1.5-3-4-5.1-3.7c-2,0.3-4.5,2.7-6.8,1.1l-1.6-1.6L414,282
    	c-1.8,1-3,1.8-2.7,2.3c2.4,5.8,26.5,7,21,8.4c-11.9,2.9-11.2,2.4-7.4,11.3c2.8,6.4,6.1,2.3,9.9,5.2c3.1,2.3,1.1,5.7,2.5,9.5
    	c1.5,4.3-3.3,5.3-2.5,8.6c0.8,3.4,14.1,7.1,10.7,12.3l-0.3,0.4l0,0.1c2.1,2.7,5.4,3.1,3.9,7.5c-0.5,1.6-2.5,3.1-0.9,4.5
    	c2.5,2.2,1.2,3-0.4,5.6c-1.4,2.1-6.9-5.5-8.1-6.8c-1.4-1.5-4-6.8-4.7-3.7c-0.4,1.7-3,2-6.4,1.9l-1.3-0.1l0.4,0.7
    	c1.7,2.4,6,5.7,8.7,9.5c0.8,1.1,1.5,2.5,2.2,3.9l1.7,3.5l1.4-1.1c4.2-2.2,11.6,0.5,13,4.2c2.4-2.8,6.7-2.6,9.9,0
    	c4.6,3.8,7.7,10.9,13.7,13.5c-1.3,2.4,6.7,5.2-1.3,7.5c-1.4,0.4-2.4,0.7-3.9,0.8c-4.8,0.2-7.4-1.1-11.1-3.7
    	c-1.6-1.2-3.4-4.1-3.4-2.3v1.2l0.1,0.1c0.1,0.3,0.1,0.6,0.1,0.9l-0.2,0.3l0,3.7c-0.2,2-0.7,3.9-2.1,5.4c-2.1,2.3-5,3.1-8.2,2.8
    	l-4.8-1l-3.3,0.1c-3.6,0.2-7.1,0.7-10.3,1.5c8.7,0,44.9,7,28.8,15.5c2.1,2.1,10.4,7.9,14,9.5c1,0.5,8.1,1.3,8.2,1.7
    	c0.3,1.2-0.6,1.9-1.6,2.6l-0.6,0.6l9.1,0.5l0.5,0.1l1.8-0.6c3.8-0.8,7.4-1.3,9.2-1.3c-2.1-0.6-4.4-0.8-6.8-1l-2.2-0.1l-3.2,0.6
    	c-2.2,0.2-4-0.3-5.3-1.9c-0.8-1-1.1-2.2-1.1-3.6l0.2-2.5l-0.1-0.2c0-0.2,0-0.4,0.1-0.6l0.1-0.1l0.1-0.8c0.1-1.3-1.2,0.7-2.4,1.5
    	c-2.6,1.8-4.4,2.6-7.6,2.5c-1-0.1-1.6-0.2-2.5-0.5c-5.2-1.6,0.3-3.4-0.5-5c4.1-1.8,6.5-6.5,9.8-9c2.2-1.7,5.1-1.9,6.6,0
    	c1.1-2.5,6.1-4.3,8.8-2.8l0.8,0.7l1.3-2.3c0.6-0.9,1.1-1.8,1.7-2.6c2-2.6,5-4.7,6.3-6.3l0.3-0.4l-0.9,0.1c-2.3,0.1-4-0.1-4.2-1.2
    	c-0.3-2-2.3,1.5-3.3,2.5c-0.9,0.9-4.9,5.9-5.7,4.5c-1-1.7-1.8-2.3,0-3.7c1.2-0.9-0.1-1.9-0.3-3c-0.8-2.9,1.4-3.2,2.9-5l0-0.1
    	l-0.2-0.2c-2-3.5,7-5.9,7.7-8.2c0.7-2.2-2.5-2.9-1.2-5.7c1.1-2.5-0.1-4.7,2.1-6.3c2.7-1.9,4.7,0.8,6.8-3.4c3-5.9,3.5-5.6-4.3-7.5
    	c-3.6-0.9,12.5-1.7,14.4-5.6c0.2-0.3-0.6-0.9-1.7-1.5l-0.3-0.2l-1.1,1.1c-1.6,1-3.2-0.6-4.5-0.8c-1.4-0.2-0.6,3.5-3.6,2.5
    	c-0.8-0.3-1.5-1.7-1.9-1.7c-0.7-0.2-2.7,4.1-3.4,3.5c-1.5-1.4-2.2-2.4,0.2-3.5c-1.7-3.4,3.6-4.5,7.5-5.2l1.4-0.2l-0.1-0.1
    	c-1.4-2.5,3.8-0.8,5.9-2.8c1.1-1.1-0.5-6.2-0.4-6.6c1.1-3.4,4.5-2.2,5-8c0.3-3.8,1.4-5,3.2-6.9c1.1-1.1,2-2.9,2.8-1.7
    	c2,2.7,0.2,3.9,2.3,6.3c2.9,3.3,6.4,9.2-1.7,8c0.8,2.6,1.7,7.7,4.5,10c2.1,1.8,6.2,0.8,6.5,2.8c0.3,2.6-7.5,2-8.2,4.2
    	c-0.5,1.4-0.1,3.2,0.8,5l0.4,0.8l1.2,0.5c1.2,0.6,2,1.5,1.5,2.6l-0.5,0.6l0.4,0.5l0.4,0c1.7,0.1,1.9,0.6,1.8,1.8l-0.1,1l0.4,0.5
    	c0.6,0.7,1.2,1.3,1.8,1.8l0.3,0.2l1.2,0.1c0.6,0.1,1,0.4,1.3,0.8l0.6,1.3l0.4,0.2c1.3,0.8,2.5,1.7,3.8,3.1c0.9,1,2.3,8,0,7.1
    	l-0.2-0.1l0.4,0.8c0.5,1.4,0.6,2.9-1,3.7c-2.6,1.5-1.8-3.2-2.9-2.7c-0.7,0.3-0.6,1.8-1.2,1.5c-2.5-1.1-2.6-3.7-3.3-6
    	c-0.7,9.2-6.6,4.8-6.2-1.2l-1,0.6l0.1,0.1c0.3,0.4,0.5,0.9,0.4,1.3c-0.5,2.1-5.3,3.9-4.6,6.3c0.8,2.8,3.7,1.2,5.8,2.9
    	c0.3,0.2,0.4,0.5,0.5,0.8l0.1,0.7l1.4,1c0.6,0.4,1.2,0.8,1.8,1.2c0.3,0.2,1.9,1.5,2.2,1.2c4.4-3.6,12.9,3.3,14.3,7
    	c1,2.6,3.2,6.3,2.7,9.4l-0.1,0.3l0.1,0c0.8,0.3,0.5,0.7-0.5,1l0.3-1l-1.1-0.2c-3.3-0.5-6-0.8-9.1,0.5c-3.3,1.4,0.1,3-3.9,2.2
    	c-2.3-0.5-2.6-3.1-4.8-4.2c-0.6-0.3-1-0.5-1.4-0.6l-0.6-0.1l0,0.1c0,0.3-0.1,0.6-0.3,0.8H531c-3.7,3.6,3.6,3.6,4.1,4
    	c1.3,1.2-0.1,3,0.8,4.6l0.5,0.9l0.9,0.1c1.9,0,4.3-0.7,5.6,0.2c1.2,0.8,1.8,2.9,2.5,4c2.8,3.9,8.3,2.2,7.4,8.5
    	c-0.3,1.7-0.9,3.3-1.2,5c0.3,1.8-0.3,2.6-1.4,3.5c-0.5-0.4-1.1,0-2-0.2c-2.1-0.5-2.8-3-4.5-4l-2.4-1.1l0.3,0.2l4.8,5.8l22.4,1.4
    	c7.7,0.4,15.1,0.5,22.3,0.7l4.1,0l3.4-5.2c1.8-2.3,4.9-4,3.4-4.8c-1.5-0.7-4-0.7-5.4-1.6c-3.5-2.4,3-4,3.4-5.4
    	c0.4-1.2-1.4-1.6-0.7-3.2c0.6-1.4-0.1-2.6,1.2-3.5c1.5-1.1,2.6,0.4,3.8-1.9c1.7-3.3-1.6-3.5-0.2-6.4c0.4-0.8,5.7-2,5.4-2.7
    	c-0.3-2-6.1,0.5-5.7-0.3c0.4-0.7,3.4-3.2,5.5-2.7c1.1-1-0.8-2.9-0.5-3.8c0.6-1.9,2.5-1.2,2.8-4.4c0.1-2.1,0.7-2.8,1.8-3.8
    	c0.6-0.6,1.1-1.6,1.6-0.9c1.1,1.5,0.1,2.2,1.3,3.5c1.6,1.8,3.6,5.1-0.9,4.5c0.3,0.9-0.3,1.9,1.7,6.2c0.4,0.8-2,3.7-1.5,4.6
    	c0.4-0.2,1.1-0.2,2.1,0.1l1.6,0.6l0.2-0.3c0.8-0.9,3.1-2.7,4.8-2.2c1-0.9-1-2.7-0.7-3.7c0.4-1.8,2.3-1.2,2.3-4.2
    	c0-2,0.5-2.7,1.4-3.6c0.5-0.6,1-1.5,1.4-0.9c1.1,1.4,0.3,2.1,1.4,3.3c1.7,1.7,3.8,4.9-0.6,4.2c0.3,0.9-0.2,1.8,2,5.9
    	c0.4,0.8-1.6,3.6-1.1,4.4c1.2-0.9,8.1,2.3,8.7,4.4l0,0.2l0.1-0.1c0.4-0.5,1.7-1.9,1.4-2.7c-0.1-0.5-1.8-0.3-1.7-0.9
    	c0.1-0.4,1-0.2,1.4-0.6c0.6-0.5,0.9-1.6,1.1-2.1c-1.8,0.3-0.9-1-0.2-1.7c0.5-0.5,0.1-0.8,0.6-1.3c0.2-0.2,0.4,0.1,0.6,0.4
    	c0.4,0.4,0.6,0.7,0.6,1.5c0,1.2,0.8,1,0.9,1.7c0,0.1-0.4,1.2-0.2,1.4c0.4,0.4,1.6,0.1,1.2,0.6c-0.4,0.7-1.8,1.1-1.7,1.3
    	c0.3,0.8,3.7,1,3,1.2c-1.7,0.4-1.6,0.3-1,1.6c0.4,0.9,0.9,0.3,1.4,0.7c0.4,0.3,0.2,0.8,0.4,1.3c0.2,0.6-0.5,0.8-0.4,1.2
    	c0.1,0.6,2.6,1.2,1.2,2.1c-0.5,0.4-1.5,0.3-2.1,0.6c-0.6,0.3,0.5,0.9,1.2,1.8c0.4,0.6,0.8,1.7,1.3,2.2c1.4,1.3,3.3,2.2,0.2,2.2
    	c0.9,0,1.9,1.2,0.6,1.2c-1.1,0-2.1,0-3,0.3c1.2,0,6.4,1,4.1,2.2c0.3,0.3,1.5,1.1,2,1.3c0.1,0.1,1.2,0.2,1.2,0.2
    	c0.1,0.4-0.5,0.4-0.6,0.7c-0.1,0.2,1.3,1.1,1.5,1.6c-2.3,0-4-0.6-6.4-0.6c2.2,0,3,3.5,4.9,3.5l0.2,1.4l23.5,0.4
    	c23.6,0.8,28.9,25,52.4,22.6c31.9-5.7,52.2,22.8,87.5,23.1c35-15,61.3-23.4,109.6-21.1l353.5,10.6l30.1-32.9
    	c14.1-2.5,15.4,3.3,19.3,7l31.7-8.7l0.9-1.1c4.2-2.6,7-5.5,10.6-8.3c1.6-1.2,3.6-1.6,4.5-2.5c-3.1-1.3-7.1-1.1-8.8-3.2
    	c-1.1-1.4-6.6,0.9-5.2-0.9c3-3.8,3.6-6.9,8.8-10.2c0.3-0.2-0.3-0.8,0-1c0.9-0.5,5.3-1.6,4.5-3.5c-0.1-0.3-5.3,0-5.8,0
    	c1.2-1.3,2.2-2,3.3-3.8c0.5-0.9-0.2-1.9,0.6-2.5c0.3-0.3,4.3-0.2,2.4-2.2h-1.5c-0.4-0.5,0.4-1.4,0-1.9c-0.8-1-5.5,1.3-5.5-0.6
    	c0-3,5.6-3.2,6.7-6c0.3-0.9,0-2.1,0.6-2.5c1.2-0.9,2.8,0,3.3-1.6c0.9-2.4-4-3.7-10.3-2.5c-0.9-2.1,8.7-3.5,10.4-2.8
    	c1.6-2.1-7.4-4-7.6-3.6c0.5-1,7.9-1.8,8.4-2.2c0.7-1.8-9.5-0.6-9.4-0.4c-0.3-2.2,7.7-6,9.1-5c0.5-0.9-1.6-3.8-1.2-4.6
    	c2.3-4.2,1.8-5.2,2.1-6.2c-4.5,0.7-2.3-2.6-0.6-4.4c1.2-1.3,0.3-2,1.5-3.5c0.5-0.6,1,0.4,1.5,1c1,1,1.5,1.7,1.5,3.8
    	c0,3.2,2,2.5,2.4,4.5c0.3,1-1.8,2.9-0.7,3.8c1-0.3,2.3,0.2,3.3,0.9l1.6,1.5l0.3-0.2c3.1-1.8,7.5-3.2,8.6-6.4c0.5-1.6,0-3.7,1.1-4.5
    	c2.2-1.7,5,0,6-2.9c1.5-4.3-7.1-6.6-18.4-4.5c-1.6-3.7,15.6-6.2,18.6-5c2.8-3.8-13.2-7.1-13.6-6.5c0.9-1.8,14.2-3.1,15.1-3.9
    	c1.3-3.2-17.1-1.1-16.9-0.6c-0.6-3.9,13.8-10.8,16.3-9c0.9-1.6-2.9-6.8-2.1-8.2c4.1-7.5,3.2-9.3,3.8-11c-8.1,1.2-4.2-4.7-1.1-8
    	c2.2-2.3,0.6-3.6,2.7-6.2c0.9-1.2,1.7,0.6,2.7,1.7c1.7,1.8,2.7,3.1,2.7,6.8c0,5.8,3.5,4.6,4.4,8c0.4,1.7-3.2,5.1-1.3,6.9
    	c3.7-0.9,8.8,3.6,9.4,4.8c0.6,1.3-9.6-3.1-10.3,0.5c-0.6,1.3,8.7,3.6,9.3,4.9c2.2,5.1-3.6,5.5-1.1,11.4c1.8,4.2,4,1.5,6.5,3.4
    	c2.1,1.5,0.7,3.8,1.6,6.2c1,2.9-2.2,3.5-1.6,5.7c0.6,2.6,12,5.4,5.4,9.7c-2.6,1.7-7.1,1.6-9.8,2.8c-2.9,1.4,2.5,4.5,5.4,8.5
    	c2.1,2.9,3.6,8.1,6,10.2c0.8,0.7,1.7,1.4,2.5,2.1h0l0,0c1.2-1.2,2.7-2.4,4.7-3.6c0.4-0.2-0.4-1.2,0-1.4c0.7-0.4,2.6-1,4.3-1.8
    	l1.3-0.9l-0.4-0.7c-0.1-0.5,0-0.9,0.3-1.4l0.6-0.6l-0.6-0.1c-2.3-0.1-6.8,0.2-7.3,0.2c1.8-1.9,3.3-2.9,5-5.7
    	c0.8-1.3-0.3-2.8,0.9-3.8c0.4-0.4,6.5-0.3,3.6-3.3h-2.3c-0.6-0.7,0.6-2.1,0-2.9c-1.2-1.6-8.2,1.9-8.2-1c0-4.5,8.5-4.8,10-9.1
    	c0.5-1.3,0-3.1,0.9-3.8c1.9-1.4,4.2,0,5-2.4c1.3-3.6,3.7-8.6-2.3-8.6c-5.4,0,0.9,5.7-5.8,4.1c-3.2-0.8-8.3-4.2-7.4-5.1
    	c1.4-1.5,6.9-3.7,10.3-5.5c3.5-1.8,5-3.1,6.5-4.9c2.6-3.3-9.3-7.4-2.7-8.6c8.3-1.6,0.1-4.6,7.2-4.9c-7.3-1.2-4.3-5.4-3.6-7.4
    	c-4.8,0.7-4.2-3.7-1.9-6.2c1-1.1,3.1-0.4,3.9-1.2c1.9-2,1.1-10.8,2.9-13c0.8-1,2,7.1,1.3,9.3c-0.6,1.9,2.7,2.5,2.7,5.6
    	c0,4.9,0.1,4.6,0.8,7.5c0.5,2,5.4,4.2,6.2,6c0.4,1-5.1,2.4-5.3,3.3c3.5-0.1,4.2,3.3,5,5c1,2.3-0.1,2.6-6.4,4.4
    	c-1.9,2.2,4.5,2.9,5.5,5.1c0.4,0.9,0.8,1.4,1.2,1.7l1.2,0.4l1.9-4.3c1.2-3.4,6.4-2.1,6.4-7.9c0-3.7,1.4-5,4-6.8
    	c1.5-1.1,2.6-2.9,4-1.7c3.1,2.7,0.7,3.9,4,6.3c4.5,3.2,10.3,9.2-1.6,7.9l4.9,11.4l0.8-0.4l-0.1-0.2c-0.8-5.1,2.9-11.2,4.5-15.5
    	c0.6-1.5,1.9-3.4,3.6-5.2l0.2-0.2l-1.5,0.1c-4.6-0.4-1.3-5.3,1.4-8.1c2.2-2.3,0.6-3.6,2.7-6.2c0.9-1.2,1.7,0.6,2.7,1.7
    	c1.7,1.8,2.7,3.1,2.7,6.8l0,0.1l5.2-2c2.4-0.3,4.6,0.1,6.4,1.6c0.4,0.4,3.1-1.8,3.6-2c1-0.6,2-1.2,3-2l2.3-1.7l0.1-1.2
    	c0.1-0.6,0.4-1,0.8-1.4c3.5-2.8,8.2-0.1,9.5-4.7c1.1-4.1-6.7-7-7.6-10.5c-0.1-0.7,0.2-1.4,0.7-2.1l0.2-0.2l-1.6-1
    	c0.7,10-9.1,17.2-10.2,2c-1.1,3.7-1.3,8-5.4,9.9c-1.1,0.5-0.8-1.9-2.1-2.5c-1.8-0.8-0.5,7-4.8,4.5c-2.6-1.5-2.6-3.9-1.7-6.2l0.6-1.2
    	l-0.3,0.1c-3.8,1.4-1.5-10.1,0-11.8c2-2.2,4.1-3.7,6.2-5l0.6-0.4l1-2.1c0.5-0.7,1.2-1.2,2.2-1.3l2-0.1l0.5-0.4c1-0.9,2-1.8,3-3
    	l0.7-0.9l-0.1-1.6c-0.1-2,0.2-2.8,3-3l0.6,0l0.7-0.9l-0.8-1c-0.8-1.7,0.5-3.2,2.5-4.2l2-0.7l0.7-1.3c1.4-2.9,2.1-5.8,1.2-8.2
    	c-1.3-3.7-14.1-2.6-13.6-6.9c0.4-3.2,7.2-1.7,10.6-4.6c4.6-3.9,6.2-12.3,7.5-16.5c-13.4,2-7.5-7.8-2.8-13.2
    	c3.4-3.9,0.5-5.9,3.7-10.3c1.4-1.9,2.9,1,4.7,2.8c3.1,3,4.9,5.1,5.3,11.3c0.7,9.6,6.4,7.6,8.2,13.2c0.3,0.8-2.5,9.2-0.6,10.9
    	c3.4,3.2,12,0.5,9.8,4.6l-0.1,0.1l2.3,0.4l7.6,2l0.8-1.6c1.1-2.2,2.2-4.3,3.1-6.2c4.8-10.8,30.9-30.6,42.8-20.2
    	c0.7,0.6,5.7-3.1,6.6-3.6c1.8-1,3.6-2.1,5.6-3.4l4.3-2.9l0.3-2c0.3-1,0.8-1.8,1.6-2.4c6.5-4.9,14.5-0.1,17.4-8.3
    	c2.5-7.1-10.9-12.3-11.9-18.4c-0.2-1.2,0.5-2.5,1.6-3.7l0.3-0.4l-2.7-1.7c0,17.6-18.1,30.1-18.1,3.6c-2.5,6.5-3.3,14.1-10.7,17.3
    	c-2.1,0.9-1.2-3.4-3.3-4.3c-3.1-1.3-1.7,12.2-9.1,7.9c-4.5-2.6-4-6.8-2.2-10.9l1.2-2.1l-0.5,0.3c-6.9,2.5-1.3-17.7,1.6-20.7
    	c3.8-4,7.7-6.5,11.5-8.9l1.1-0.7l2.1-3.7c1-1.2,2.3-2.1,4-2.3l3.6-0.1l0.9-0.6c1.9-1.5,3.8-3.2,5.7-5.3l1.3-1.6l-0.1-2.8
    	c0-3.6,0.8-4.9,5.7-5.3l1.1,0l1.3-1.6l-1.3-1.7c-1.2-3,1.4-5.5,5-7.4l3.6-1.3l1.4-2.4c2.8-5.2,4.4-10.3,3.2-14.4
    	c-1.8-6.4-24.4-4.5-23-12.1c1.1-5.7,12.9-2.9,19.3-8.1c8.7-6.9,12.5-21.6,15.2-29.1c-23.7,3.6-12.2-13.7-3.2-23.2
    	c6.5-6.8,1.7-10.4,7.9-18.2c2.7-3.4,4.9,1.8,7.9,5c5,5.3,7.9,9,7.9,19.9c0,16.9,10.3,13.3,12.6,23.2c0.3,1.3-5.6,16.1-2.5,19.2
    	c5.6,5.6,21,1,16.5,8l-0.2,0.3l3.9,0.6c11.2,1.9,26.3,5,20.6,14.9c6.9,3,4.7,5.9,0,10.1c-2,1.8-7-10.5-9-10.1
    	c-1.1,0.2-3.4,4.3-5.8,5c-8.9,2.9-5.8-7.7-9.9-7.2c-3.8,0.5-8.7,5.1-13.2,2.2l-3.1-3.2l-1,0.6c-3.4,2-5.7,3.5-5.3,4.5
    	c4.6,11.2,51,13.5,40.4,16.1c-23,5.7-21.6,4.6-14.1,21.8c5.3,12.2,11.7,4.5,19,9.9c6,4.5,2.1,11,4.7,18.2c2.2,6.2-2.4,8.8-4.2,12.4
    	l-0.5,3.9l4.8-2.3c10.7-5.3,15.3-9.1,19.9-14.5c8.2-9.7-26.5-21.8-6.7-25.5c24.7-4.6,1-13.5,22.1-14.6c-21.3-3.5-12-15.9-9.5-22
    	c-14.2,2.1-11.8-10.8-4.7-18.4c3.1-3.3,9.2-1.2,11.6-3.7c5.8-5.8,5-31.9,10.5-38.5c2.4-2.9,4.9,21,2.3,27.5c-2.2,5.6,7.5,7.3,7,16.6
    	c-0.7,14.4-0.4,13.7,1.2,22.1c1.1,5.9,15.5,12.3,17.4,17.6c1.1,3.1-15.5,6.9-16.1,9.7c10.4-0.2,12,9.8,13.9,14.9
    	c2.6,6.9-0.8,7.6-19.5,13c-6.1,6.5,12.8,8.5,15.3,15.2c4,10.4,9.7,3.8,15.7,8.4c4.9,3.8,1.3,9.3,3.2,15.5c2.2,7.1-5.8,8.6-4.7,14.1
    	c1.2,6.4,28.9,13.3,12.2,23.9c-6.5,4.1-17.7,3.9-24.6,7c-7.4,3.4,5.6,11,12.3,21.1c4.8,7.3,7.9,20.1,13.5,25.3
    	c15.4,14.5,36.6,25.3,1.4,25.3c10,0,21.5,14.1,6,14.1c-12.3,0-24.4,0-35.1,2.8c14.2,0,72.8,11.5,45.7,25.3
    	c3.2,3.5,16.3,12.9,22,15.5c1.7,0.7,13.2,2.2,13.3,2.8c0.7,3.9-6,4.6-7.1,8.5c-0.8,2.7,14.8,12,16.5,18.3c-19.5,0-35.3-4-53.8-5.9
    	l-8.7-0.5l3.1,4.3l2.4,1.5c13.9,11.5,21.9,34.4,37.9,34.4c-1.5,1.5-2.5,3.1-3.1,4.6l-0.2,2l0,0l22.2,0l10.7,0.2l-0.4,162.3L0,604.7z
    	 M635.7,438l0.9-0.7h-0.1c-0.3,0-0.6,0.1-0.8,0.3C635.7,437.6,635.7,437.8,635.7,438L635.7,438z M635.3,432.1l0.2-0.3
    	c0.4-0.6,1-1.2,2-1.9c0.1-0.1-0.1-0.3,0-0.4c0.3-0.2,2-0.6,1.7-1.3H637c0.5-0.5,0.9-0.8,1.3-1.5c0.2-0.3-0.1-0.7,0.2-1
    	c0.1-0.1,1.7-0.1,0.9-0.9h-0.6v-0.4l-0.3,0c-4.9-0.5-8.3,0.7-7.6,2.7c0.5,1.5,2,0.6,3.2,1.5c0.6,0.4,0.3,1.6,0.6,2.4
    	C634.8,431.5,635,431.8,635.3,432.1L635.3,432.1z M1398,429.1l0.2-0.1l-0.6-0.1L1398,429.1z M616.7,425.6l0-0.3
    	c-0.1-0.9-1.4-1.3-0.9-2.6l0-0.1l-0.5,0.3c-0.5,0.4-0.6,1-0.5,1.6c0.2,0.8,0.7,0.9,1.3,1L616.7,425.6z M637.9,422.8l1.4-1.1
    	c0.1-0.3,0-0.8,0.2-1c0.5-0.4,1.1,0,1.3-0.6c0.2-0.5-0.8-0.9-0.9-1.4c-0.1-0.4,1-0.8,0.3-0.8c-1,0-1.1-0.2-2,0.4l-0.3,0.2l0,0
    	c0.1,0.1,0.1,0.1,0.2,0.2c0,0-0.1,0-0.1,0h-0.3l-0.8,0.5c-0.2,0.1-0.3,0.1-0.3,0l0-0.3l-0.5,0.1c-2.5,0.6-6.2,1.8-5.2,3.2
    	c0.9-0.4,4.2-0.1,6.8,0.6L637.9,422.8z M615.2,419.1c0.4-0.2,1.3-0.2,2.5-0.1l0.2,0l0.8,0c0.6,0,1.1-0.3,1.6-1.4
    	c0.2-0.4,0.3-0.7,0.3-1v-0.7l-2,0.5C616.4,417,614.5,418,615.2,419.1z M636.8,418l0.1-0.3l1.9-1.5l-0.2,0c-1.8-0.4-9.2-1-8.6,0.5
    	C630.4,416.9,634.5,417.3,636.8,418L636.8,418z M620,414.3l-0.6-1.2c0-0.2-0.1-0.5,0-0.8l0-0.1h0c-2.5-0.1-4.8,0-4.5,0.9
    	c0.2,0.2,2.2,0.5,4.1,0.9L620,414.3z M622.1,410.2l0.2-0.1c1.2-0.5,2.4-1,2.2-1.3c-0.3-1.4-3.4-0.4-4.8-0.2l-0.2,0l1.1,0.5
    	L622.1,410.2z M1448.7,404.7l3.6-2.1l-3.1-0.8l-4.2-2l-6.9,0.1c-2.4,0.1-4.6,0.4-6.8,1c2.9,0,10.3,1.2,15.6,3L1448.7,404.7z
    	 M136.2,402l0.2-0.3l2.3-3.5l-0.1,0c-3.7,0.3-7.3,1.1-10.7,2.4c1.1,0,2.7,0.2,4.6,0.5L136.2,402z M260.1,400.8l3.1-3.7l3.9-3
    	l-1.7-0.1c-4.6-0.1-9-0.1-9.1,0.4c-0.6,1.6-0.1,3,0.9,4.2L260.1,400.8z M1394.9,398.7l2.6-1.1c2-1,3.6-2.4,3-4.1
    	c-0.1-0.2-1.4-0.3-3.1-0.2h-0.3l-4.6,1.3c-0.8,0.4-0.5,1,0.3,1.8L1394.9,398.7z M271,390.2l3-1.3c2-1,3.6-2.4,3-4.1
    	c-0.2-0.5-9.5,0-10.3,0c2.2-2.3,4-3.5,6-6.8c1-1.6-0.3-3.3,1.1-4.5c0.5-0.4,7.8-0.4,4.3-4h-2.7c-0.7-0.9,0.7-2.5,0-3.4
    	c-1.5-1.9-9.8,2.3-9.8-1.1c0-5.4,10.1-5.7,11.9-10.8c0.5-1.6,0-3.7,1.1-4.5c2.2-1.7,5,0,6-2.8c1.5-4.3,4.4-10.2-2.7-10.2
    	c-4.8,0-6.8,4.2-10.8,5.6l-1.9,0.1l1.3,1.1c0.7,1.2,0.5,8.1,0,8c-2.3-0.7-4.9-2.5-6.9-3.8c-1.7-1.1-2.8-2.1-4.4-3.2l-2.9-3.3
    	l0.1,0.7c0.2,4.1-4.1,2.2-4.1,10.3c0,6.3,9.9,4.4,7.1,7.8c-1.3,1.6,1.3,4.7,0,6.3c-1.1,1.4-3.8-1.2-5,0c-6.4,6.7,7.1,6.6,8,7.4
    	c2.6,2.2,0.2,5.4,2,8.4c1.9,3.1,3.6,5.2,5.4,7.1L271,390.2z M1395.3,387.9L1395.3,387.9c0.3-0.4,0.5-0.8,0.8-1.2
    	c1-1.6-0.3-3.3,1.1-4.5c0.5-0.5,7.8-0.4,4.3-4h-2.7c-0.7-0.9,0.7-2.5,0-3.4c-0.9-1.2-4.5,0-7.1,0.2h-0.2l-0.1,0.7
    	c-0.5,0.8-0.9,1.7-0.2,3.3c1,2.4,2.2,0.9,3.6,1.9c1.1,0.9,0.4,2.1,0.9,3.5c0.6,1.6-1.2,2-0.9,3.2L1395.3,387.9z M151.3,386.9
    	l0.3-0.1c1.7-0.9,3.1-2.1,2.6-3.6c0,0-0.2-0.1-0.4-0.1L153,383l-1.7,0.4c-1.5,0.2-3.3,0.3-5.4,0.3c1.6,0,3.3,0.9,4.7,2.2
    	L151.3,386.9z M154.9,372.4l1-0.7c0.2-0.4,0-1-0.7-1.8c-0.4-0.4-1.2,0.1-1.9,0.2l-0.2-0.1l1.3,1.7L154.9,372.4z M1503.7,372.3
    	l0.4-0.4c0.5-0.5,0.8-1.1,1.1-1.7c0.5-1.6,0-3.7,1.1-4.6c0.8-0.6,1.7-0.8,2.6-0.9l0.8-0.2l0.1-0.8l0.7-0.6l-2.5-0.5
    	c-5.2,0-6.8,1.5-6.8,3.5L1503.7,372.3z M1389.7,371.6l0.4-0.5c0.2-0.2,0.4-0.5,0.7-0.7l0.9-0.7l-1.8-0.4c-1.4-0.3-3-0.4-3.2,0.6
    	c-0.2,0.4,1.1,0.9,2.4,1.4L1389.7,371.6z M152.7,369.4l-0.1-0.2c0.1-0.8,0.6-1.7,0.2-2.3c-0.2-0.2-0.4-0.3-0.7-0.4l-0.4,0l-0.2,1.3
    	l0.5,0.6L152.7,369.4z M185.6,367.5l5.3-9.9c4.4-6.2,11.8-11,11.6-14l-0.1-0.3l-1.4-0.3c-1.5-0.4-2.1,1.7-2.6,2.2
    	c-1.3,1.7-3.3,2.9-5.2,4.3l-3.4,3.6l0.4,0.5c0.1,0.8-0.3,1.6-1.7,2.6c-2.2,1.4-6.2,1.4-8.5,2.5c-2.5,1.2,2.2,3.9,4.7,7.4
    	L185.6,367.5z M152.5,359.1l1.3-1.1c0.4-0.4,0.7-0.9,0.9-1.5c0.2-0.7,0.2-1.5,0.3-2.2l0.1-0.7L154,354c-0.4,0.3-0.7,0.9-1,1.7
    	L152.5,359.1z M138.3,353.2l0.4-3.1c0.1-1.5,0.1-2.9-0.2-4.4c-0.5-2.9-4.2,0.5-5.5,1.1c-0.6,0.3-1.2,0.5-1.7,0.6l-0.9,0l1.9,1.6
    	c1.7,1.4,3.6,2.6,5.3,3.9L138.3,353.2z M160.7,350.2L160.7,350.2c1.4-3.8,3.9-9-2.3-9c-4.2,0-5.9,3.7-9.4,4.9l-1.2,0.2l1,1
    	c1.4,1.6,8.9-1.4,11.8,2.6L160.7,350.2z M1536.8,347.3l0.3-0.5c1.4-2.7-0.9-5.5,1.3-7.5c0.8-0.7,12.8-0.6,6.7-6.6
    	c-1.1-1.1-3.4,1.2-4.5,0c-0.3-0.4-0.4-0.8-0.4-1.3l0-0.1l-0.9,0.2c-0.7,0.2-1.4,0.6-2.3,1l-3,3l0,0.8c-0.6,2.5-3.4,3.8-1.5,8.3
    	c0.9,2.1,1.9,2.5,3,2.6L1536.8,347.3z M265.3,336.9l0.8-1.5c1.7-1.8,2.9-4.1,4.1-6.5l1.9-3.3l-6.6-4.3c-2.1-1.6-4.2-3-6.8-3.9
    	c-5.3-1.8-6.2,5.6-8,1c-0.9-2.2-2.1-8.6-4-10.2c-1.7-1.5-5,3-7.7,3.6l-1,0l0.4,1.7l0.7,2.3l0.6,1.1c2.3,4.4,5.6,1.2,10.2,2.9
    	c4,1.5,10.4,8.5,9.1,12.5c-0.3,1.1,1.8,2.1,4.1,3.4L265.3,336.9z M1606,333.1l1.4-1.2l3.2-0.7l0.2-0.2c1.9-1.8,4.1-3.7,6.4-5.5
    	l0.9-0.6l-7.3,3.3c-1.3,0.7-2.5,1.7-3.5,2.9l-1.5,1.7L1606,333.1z M1603.7,295.6l1-0.6c1.3-1,2.5-2.2,3.6-3.6
    	c2.5-3.2,4.7-9.2,8.2-11.5c3.9-2.7,10.7-0.7,16.4-0.6l2.7-0.4l1.7-2.7c2.8-4.7-0.9-9.7,3.2-13.3c1.5-1.3,22.6-1.1,12.6-11.6
    	c-1.9-2-6.2,2.1-7.9,0c-0.5-0.6-0.6-1.4-0.6-2.3l0-0.3l-1.7,0.4c-1.2,0.4-2.6,1-4.2,1.8c-6.5,3.2-7.9,10.9-14.8,12.3
    	c-11.6,2.3-1.4-2.4-10.7-6.5c-8.7-3.8-16.5-2.9-26.3-1.4l-3.1,0.7l0.6,2.9c-2.7-0.8-3.5-1.9-1.1-2.8l0.5-0.1l-0.2-0.9l0-0.6
    	l-2.6,1.6c-0.8,1.5,0.6,3.8,3.1,8.7c3.5,6.9,6.8,2.6,11.2,5.7c3.6,2.6,1.7,6.3,3.5,10.4c2,4.7-3.2,5.8-2,9.4
    	c0.3,0.9,1.4,1.9,2.9,2.9L1603.7,295.6z M1584,249.9l0.3-1.8l1.1-3.1l-2,0c-1.8-1-1.5-4.3-3.3-4.1c-2.2,0.3-4.7,2.9-7.4,1.2
    	l-1.9-1.8l-0.6,0.3c-1.9,1.1-3.1,2-2.8,2.5c1.6,3.2,9,5.1,15.2,6.4L1584,249.9z M1749.4,234.3l0.7-3.6c0.3-2.1,0.7-3.9,2.1-4.9
    	c1.4-1,2.9-1.6,4.4-1.9l3.6-0.5l-1-1.2c-2.7-2.9-7.7-13.1-9.1-7.2c-0.8,3.3-5.7,3.9-12.3,3.6l-2.5-0.1l0.8,1.3
    	c1.6,2.3,4.5,5,7.6,8.1L1749.4,234.3z M1772.5,203.9l0.3-1.8c0.1-1.2,0-2.4-0.3-3.5l-1.4-2.3l0.2,0.5c0.1,1.2-0.2,2.4-1,3.6
    	l-0.6,0.7l0.1,0.1L1772.5,203.9z"/>
    </svg>

  </header>

@yield('body')

<footer id="footer">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 1920 222" style="enable-background:new 0 0 1920 222;" xml:space="preserve">
  <style type="text/css">
  	.st0{fill:#002323;}
  </style>
  <path class="st0" d="M0.4,0v201.2c0.7-0.7,1.3-1.4,1.7-2c0.8,4.4,4.6,9.4,3.6,15c4.1-6.1,8.1-15.1,18.8-15.1
  	c-0.4,6.9,0.3,14.2,3.3,20.8c10.7-2.3,16.3-12.1,19.2-20.5c-2,5.3,1.7,6.1-3.3,12.1c18-21.6,23.7-0.9,39.7,2.6
  	c2.1-5.5,3-11.3,3.2-17.1c2-1.4,4.3-2.9,5.7-4.2c0.1,0.5,6.9,12,5.5,12.5c9-1.8,15.9-10.7,18.2-7.3c4.5,6.5,9.2,18.4,9.2,18.4
  	s13.8-2.6,14.8-9.2c0.4,5.9,2.2,11.5,7.2,14.8c5.4-8.6,7.2-17.7,10.9-26.8c8.3,6.9,12,20.6,23.7,22.9c0.5-7.3,0.3-14.9,0.2-22.3
  	c1.9,4.2,7.5,8.6,9.8,12.7c10.5-4.6,10.4-14.3,17.4-21.6c1.9,4.6,7.1,10.2,8,15.5c1.3-7.6,1.3-16.9,8.6-22.6
  	c2.1,3.7,8.2,6.7,10.3,9.8c7.3-5.6,11.7-13.6,16.6-20.9c1.1,3.4,5.4,8.1,6.2,12.3c3.1-5.8,5.6-12.2,7.2-18.5
  	c2.6,2.9,7.5,2.8,9.9,9.2c8.7-4.8,13.1-14.1,19.2-20.5c0.8,4.6,3.8,10.3,2.2,16.2c8.8-6,14.9-13.8,20.1-21.8
  	c-2.6,4.6-1.8,7.3-2.3,12.6c13.5-5.2,14.5-18,24.2-26.4c1.9,4.4,8,11.8,9.2,14.8c3.8-5.6,8.1-12.8,10.4-17.6c1.3,2.6,4.4,6,6.8,9.4
  	c-0.5,2.2-0.8,4.5-0.3,6.7c1.1-0.8,1.9-1.7,2.9-2.6c0.2,0.4,0.4,0.9,0.6,1.3c0.5-1.1,1-2.1,1.5-3.1c0.3-0.2,0.6-0.5,0.9-0.7
  	c1.5,1.5,1.8,3.9,1.6,5.9c2.5-0.8,3.8-3.7,5.5-5.6c0.1,3.3,0.4,6.6,0.7,9.7c2.8-4.1,6.6-6.9,10.9-9.1c-1.1,0-2.1,0-3.2,0
  	c1.9-1.4,3.7-2.9,5.5-4c0.6,0.6,1.2,1.3,1.7,2.1c-1.4,0.6-2.7,1.2-4,1.9c1.7,0,3.4,0,5.1-0.1c1,1.6,1.9,3.2,3.3,4.5
  	c0.9-1.6,1.8-3.2,2.8-4.9c0.5,0,1-0.1,1.5-0.1c0.5,2,0,4.2,1.3,5.7c2.5-2.3,5.1-4.5,7.7-6.8c1.4-0.2,2.7-0.4,4.1-0.7
  	c1.1,1.8,1.9,3.8,2.3,5.4c0.7-2.1,1.4-4.6,2.8-6.5c0.1,0,0.2,0,0.3-0.1c2.3,1.1,3,3.7,4.4,5.3c2.2-2.1,3.1-4.6,3.1-7.3
  	c0.4,2.4,0.2,5.1,0.4,7.6c2.8-2.5,4.2-6.4,5.3-9.7c0.2-0.1,0.5-0.2,0.7-0.3c1.2,2.8,1.3,6.1,2.5,8.9c4.2-3.5,7.6-8.6,10.5-12.9
  	c1.3-1.9,4.2-5,4.3-7.5c0.1-0.2,0.3-0.3,0.4-0.5c8.2,3.1,5.5,13.2,7.7,18.8c4.3-0.5,8.9-9.2,11.2-12.1c0.5,4.5,4.2,9.5,7.5,13.1
  	c4.1-3.8,2.8-10,6.2-13.9c3.2,2.2,3.7,6.4,4.6,9.3c3.8-3.2,2.3-8.9,4-12.8c2.1,3.4,0.4,7.8,1.5,11.5c4.2-3.9,6.6-9.8,9.3-14.4
  	c2.4-4.2,4.5-8.6,6.3-13c0.8,0.2,1.6,0.4,2.4,0.6c-0.8,2.5-1.7,5-2.2,7.3c-1.1,5.1-3.2,11.2-3.2,16.3c6.8-5.3,13.8-12.2,19.3-18.9
  	c3.7,1.7,6.2,3.8,6.9,6.2c1.5-3.3,4.2-4.3,8.2-7c0.3,4.6,5.2,9.3,5.9,13c1.6-2.3,6.8-5.4,8.7-8.8c3.8,6.4,6.8,13.2,7.8,20.1
  	c2.4-5.2,7.1-10.8,9.3-16.2c3.3,6.8,6.2,13.6,10.5,20c3.7-5.2,9.6-9.1,12.9-14.5c8.5,7.2,7.7,20.7,12.2,30.6c3-3.3,7.8-4,9.3-10.8
  	c3.7,7,8.5,14.1,14.8,18.6c2.9-5.7,4.7-12.5,5.3-19c10.5,2.2,17.4,12.1,24,19c17.4-6.8,12.9-27.9,21.6-38.4c3,5.9,4.1,12.4,3.6,19
  	c10.5-10.4,15.8-25.7,24.2-38c-1.3,6.7,0.7,12.4,2.9,18.6c1.7-3.1,8-6.9,9.9-11.2c7.7,3.8,13.6,10.2,17.3,17.1
  	c6.7-7.5,8.7-19.5,13.6-27c0.4,7,0.3,14.2,0.9,21.2c7.7-5.3,13.2-14.9,21.1-20.5c3.2,4.4,6.6,7.5,7.6,12c0.1-3,0.6-6,0.7-8.7
  	c8.1,6.3,19.7,8.9,22.2-2c1.3,2,4.9,3.8,6.2,7c4-5.8,10.7-7.9,15-10.8c-0.8,4.6,1.8,10.5,0.9,15.1c3.7-3.5,10.9-7.3,13.7-11.3
  	c-0.6,10,2.6,19.4,5.9,28.8c2.4-3.6,6.6-9.1,8.6-13.8c-1.7,4.9-0.9,8.8-1.3,13.9c10.2-4.7,14.9-15.2,17.4-24.5
  	c1.2,4.6,6.8,8.1,8.6,10.9c5.6-6,10-12.7,14.8-18.6c2.2,4.2,7.1,7.1,8.5,12.3c1.3-3.6,5.9-7.3,7.4-10.7c1.2,1.6,5.2,4.3,6.8,6.7
  	c4.4-4.9,11-10.1,14.2-14.6c0,6.4,3.3,9.6,5.1,13.3c1.4-6.1,4.5-11,5.8-17.1c8.7,6.6,4.9,16.8,14.3,23.3c6-4.9,8-12.3,7.9-19.4
  	c6.7,4.2,11,10.1,13.6,16.6c2.8-4.8,6.4-9.3,8.1-14.3c-2.7,6-3,11.9-2.1,18.2c6.8-5.8,13.6-12.3,16.9-20.3
  	c-0.5,6.9-0.4,13.9,0.3,20.7c5.3-5,8.1-13.5,11.2-19.1c1.4,5.2,5.7,11.3,7.4,15.2c0.8-6.1,3.6-11.2,5.6-16.6
  	c-1,6.9,1.4,13.2,7.2,18.1c1.7-4.4,6.4-9.2,6.7-14.3c4,6.4,7.1,13.3,10.5,20.1c0.6-4.3,2.8-9,2.3-14.2c2.2,5.9,6.1,10.9,9.9,16.2
  	c0.5-2,1-3.7,1.5-5.4c10.1,0.3,17-5,20.7-12.6c-0.4,1-0.4,3.5-0.3,5.3c0.1-0.6,0.3-1.2,0.6-1.8c3.1-1.6,6.5-1.1,9.6-3.5
  	c0.8,6.6,5,12.5,11.7,14.5c0.4-4,2.3-7,2.8-10.7c2.2,5.2,6.8,12.1,9.4,16.6c0.7-3,2.3-5.9,3-8.9c1.1,5.4,5.4,11.1,8,16.6
  	c2-2.1,6.9-4.1,9.2-6.8c1.8,5.4,6.4,12.1,9.3,16.5c0.4-2.6,1.6-4.8,2.4-7c1.4,4.3,5.7,6.9,8,10.8c2.1-2.1,9.5-4.9,11.7-7.3
  	c1.5,3.9,6,7.6,7.4,10.8c1-2.4,3.9-5.5,4.8-8.3c7.6,11.8,14.3,26.4,24.8,37.5c0.6-3.1,2.2-5.2,2.8-8.4c4.9,5.1,10.1,12,14.3,16.6
  	c1-10.7-1.2-22.1,3.1-32.2c1.1,6.7,5.7,10,9.1,14.7c1.3-3.6,4.6-7.1,5.5-10.9c0.7,5.3,5.4,9.9,7.4,14.3c2.3-4.1,8-7.8,9.8-12.3
  	c3.1,10.4,6.5,20.8,14.2,29.7c3.7-6.2,5.2-13.4,8.5-20.1c1.9,4,7.5,9.7,8.7,12.8c2.6-7.2,5.4-15.1,5.9-22.6
  	c3.4,6.1,7.2,12.3,11.2,18.2c5.1-5.5,6.6-12.9,5.4-20.2c2.9,7.8,5,15.1,9.3,22.2c1.4-4.9,5.6-9.3,6-14.7c5.1,4.8,8,13.8,11.3,19
  	c-0.3-4,1.1-8.9,1.1-12.8c1.2,4.8,5.6,9.7,7.3,14.7c4.1-3.4,11.2-6.3,13.8-11.3c-0.1,5.8,2.5,11.2,2.9,16.7
  	c1.9-6.1,4.3-9.9,4.9-16.2c2.8,11.6,7.8,21.2,22.4,27.7c-1.4-7.9,0.1-16.4,2.2-23.8c4.4,7.1,7.7,15.6,9.9,23.9
  	c2.3-7.9,5-16.1,7.4-24c0.9,6.3,2.4,12.2,2.9,18.6c9.8-5.7,13.4-15.8,18.7-24.4c-0.3,7.5-0.3,15.7,3.6,22.5
  	c5.5-5.6,9.8-13.7,14.3-20.6c0.6,4.8,2.4,8.1,4,12.2c-3.5-10.7,1.5-23.8,8.7-33.4c4.7,6.4,7.6,13.1,9.8,20.5
  	c4.7-5,8.2-11.6,11.7-18.5c4,7,6.8,16.4,11.7,22.4c1.2-5.8,5-9.5,7.4-14.8c2.3,7.5,7.6,14.4,10.4,22.1c0.2-6.9,2.3-13.6,5-20.1
  	c-0.2,5.4,3.4,11.3,7.9,16.6c4.7-5.8,8.8-15.3,11.1-22.5c0.2,4,2.8,7.4,3.6,10.4c2.1-3.7,7.4-8.1,9.4-12.2c0.2,5.6,3,10.7,2.8,16.6
  	c7-4.9,12.4-11.2,14.1-18.5c1.4,4.7,5.8,9.7,8.1,14.7c1.9-3.3,6.2-5.7,7.3-10.9c5.5,7.3,8.8,14.9,14.4,22c1.6-6.3,6-18,7.2-20.9
  	c1.5,9,3.1,17.9,4.9,26.8c4.5-7.3,8.9-14.3,9.8-22.1c1.9,6,6.2,12.3,9.4,16.7c1.9-5.9,3.4-11.4,3-17.6c0.9,2,5.7,13.3,7.4,19.1
  	c2.7-9.7,10.4-18.5,14.1-27.9c1.1,6.8,2,13.9,4.9,20.2c4.2-9.9,6.5-19.3,10.5-28.5c5.7,7.4,10.8,15.5,17.3,22.6
  	c-0.2-7.3-0.2-14.6-0.3-21.9c3.9,5.5,7.5,12.2,9.9,18c5.3-8.8,8.9-19.2,7.3-29.6c3.4,6.2,5.5,13.8,10,20
  	c4.3-8.4,10.2-16.8,10.4-25.9c2.3,5.8,6.8,12.4,11.2,16.7c-0.3-8.6,1.8-16.2,2.8-24.4c3.4,6.1,5.5,13.1,7.5,20
  	c2.8-4.6,9.3-13.6,9.7-15.1c1.4,5.7,4.2,10.2,5.6,15.7c1.4-3.9,4.1-8.2,4.4-13.7c0.7,3.1,9.1,13.4,14.2,17.6
  	c-0.2-5.4,1.2-11.2,0.4-16.7c3.6,7.2,5.6,15.3,11.8,20.4c4-5.9,5.5-13.2,5.4-20.4c3.6,6.5,7.4,13.6,11.7,18.7
  	c3.5-6,5.6-12.5,6.1-19.1c2.9,6.7,8.4,16.6,11.8,24.5c-0.1-10.1-0.4-20.4,0.5-30.3c5.1,7.4,7.6,18.4,16,24.8
  	c1.7-2.5,4.4-4.6,6.1-7.3c6.1,5.6,7.7,16.2,18.7,17c1-2.6,2.3-4.6,3.4-7.2c4,4.4,10.7,9.8,16.2,13.1c2.1-2.3,6.3-3.9,7.9-5.3
  	c5,5.1,10.9,9.7,17.2,13.6c1-1.1,2.3-2.3,3.6-3.7V0H0.4z M1061.9,113.3c0.3-4.6,1.1-10.5,2.1-11.6c-0.7,4.3,0.8,8.2,1.9,12.1
  	C1064.7,113.4,1063.5,113.1,1061.9,113.3z M1068.5,114.7c0.4-2,0.7-4,0.4-6.4c0,2.2,0.6,4.6,0.6,6.7
  	C1069.2,114.9,1068.9,114.8,1068.5,114.7z"/>
  </svg>


  <form class="contact_form" action="{{ Route('contact.create') }}" method="POST">
    @if (Session::has('success'))
      <p class="success">{{ Session('success') }}</p>
    @endif
    @if (Session::has('error') or $errors->any())
      @foreach ($errors->all() as $error)
          <p class="error">{{ $error }}</p>
      @endforeach
    @endif
    <h3 id="kontakt_meg">Kontakt meg her:</h3>
    @csrf
    <label for="name">Navn
    <input type="text" name="name" value="" placeholder="Navn" required></label>
    <label for="email">E-Mail
    <input type="text" name="email" value="" placeholder="E-Mail" required></label>
    <label for="phone">Mobilnummer
    <input type="text" name="phone" value="" placeholder="Mobilnummer" required></label>
    <label for="body">Melding
    <textarea name="body" placeholder="Melding" required></textarea></label>
    <button type="submit" name="submit">Send</button>
  </form>
  <div class="">
    <p>Kontakt meg på: kallebilde@gmail.com eller tlf: 97194135<br> Alle rettigheitar tilhøyrer Karl Johan Ølnes<br>
    Copyright Kallefoto {{ date('Y') }}</p>
  </div>
  
  <hr>
</footer>
  <p class="findingfutures">Designa og utvikla av <a rel="noopener" href="https://findingfutures.eu/" target="_blank">Finding Futures</a>.</p>



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

<script type="text/javascript" src="{{ asset('js/jquery.lazy.min.js') }}"></script>

<script type="text/javascript">
  $('.lazyImage').Lazy({
    scrollDirection: 'vertical',
    effect: 'fadeIn',
    visibleOnly: true,
    onError: function(element) {
        console.log('error loading ' + element.data('src'));
    }
  });
</script>

</body>
</html>
