<main id="ned">

  <h2>{{ $subpage->title }}</h2>

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
