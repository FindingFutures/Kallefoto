@section('seo')

  <meta name="description" content="{{ Config::get('app.description') }}" />
  <meta name="keywords" content="kallefoto, sogndal foto, sogndal, karl johan ølnes"/>

  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="{{ Config::get('app.name')}} - {{ $subpage->title }}">
  <meta itemprop="description" content="{{ Config::get('app.description') }}">
  <meta itemprop="image" content="{{ asset('assets/bilder/loftesnesbrui.jpg') }}">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://kallefoto.no">
  <meta property="og:type" content="website">
  <meta property="og:title" content="{{ Config::get('app.name')}} - {{ $subpage->title }}">
  <meta property="og:description" content="{{ Config::get('app.description') }}">
  <meta property="og:image" content="{{ asset('assets/bilder/loftesnesbrui.jpg') }}">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ Config::get('app.name')}} - {{ $subpage->title }}">
  <meta name="twitter:description" content="{{ Config::get('app.description') }}">
  <meta name="twitter:image" content="{{ asset('assets/bilder/loftesnesbrui.jpg') }}">

@endsection

<main id="ned">

  <h2 style="margin-top: 5vh;">{{ $subpage->title }}</h2>

  <p>{{ $subpage->body }}</p>

  <div class="bilder_galleri">

    <div class="">
      @php
        $num = 0;
      @endphp
      @foreach ($subpage->images as $image)
        @php
          $num ++;
        @endphp
        @if ($num % 2 != 0 && $num % 3 != 0)
          <img class="lazyImage" data-src="{{ asset('/images/subpages/' . $image->small_image) }}" alt="Bilde frå {{ $subpage->title }}, teke av Kallefoto">
        @endif
      @endforeach
    </div>

    <div class="">
      @php
        $num = 0;
      @endphp
      @foreach ($subpage->images as $image)
        @php
          $num ++;
        @endphp
        @if ($num % 2 == 0 && $num % 3 !== 0)
          <img class="lazyImage" data-src="{{ asset('/images/subpages/' . $image->small_image) }}" alt="Bilde frå {{ $subpage->title }}, teke av Kallefoto">
        @endif
      @endforeach
    </div>

    <div class="">
      @php
        $num = 0;
      @endphp
      @foreach ($subpage->images as $image)
        @php
          $num ++;
        @endphp
        @if ($num % 3 == 0)
          <img class="lazyImage" data-src="{{ asset('/images/subpages/' . $image->small_image) }}" alt="Bilde frå {{ $subpage->title }}, teke av Kallefoto">
        @endif
      @endforeach
    </div>

  </div>

    <div class="pil_breidd"><a class="pil_a" href="#ned"><div class="fas fa-arrow-circle-up"></div></a></div>
  </main>
