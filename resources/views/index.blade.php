@extends('layouts.default')

@section('title')
  Heim
@endsection

@section('body')

<div class="background"></div>

<main id="ned">

<div class="grid">

  <div class="info">

    <div class="info_grid">
      <h2>Kva eg tilbyr:</h2>
  		<div class="breidd">
        <i class="fas fa-image ikon"></i>
  			<div class="title">Fotografi</div>
  			<div class="tekst">Bilete kan tingast på lerret, fotopapir, glas eller stålplater. Alt etter dine ynskjer.</div>
  		</div>

  		<div class="breidd">
        <i class="fas fa-birthday-cake ikon"></i>
  			<div class="title">Store dagar</div>
  			<div class="tekst">Fødselsdagar, konfirmasjonar og bryllup er dagar som må markerast, gjerne med eit fint bilde.</div>
  		</div>

  		<div class="breidd" style="border-right: none;">
        <i class="fas fa-users ikon"></i>
  			<div class="title">Hendingar</div>
  			<div class="tekst">Treng du bilete til til brosjyrar, kalendarar og blad? Ta kontakt for ein hyggeleg prat.</div>
  		</div>
    </div>
  	</div>
</div>
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


  <div class="pil_breidd"><a class="pil_a" href="#ned"><div class="fas fa-arrow-circle-up"></div></a></div>
  </main>

@endsection
