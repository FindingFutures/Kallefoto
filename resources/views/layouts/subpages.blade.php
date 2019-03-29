<main id="ned">

  <h2>{{ $subpage->title }}</h2>

  <p>{{ $subpage->body }}</p>

  <div class="bilder_galleri">
    @foreach ($subpage->images as $image)
      <img src="{{ asset('/images/subpages/' . $image->small_image) }}" alt="">
    @endforeach
  </div>

    <div class="pil_breidd"><a class="pil_a" href="#opp"><div class="fas fa-arrow-circle-up"></div></a></div>
  </main>
