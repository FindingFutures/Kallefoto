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
  <p class="om_p">Eg er ein sjølvlært amatørfotograf som har hatt stor interesse for fotografering heilt sidan 2002. For nokre år sidan starta eg firmaet mitt «Kallefoto».<br><br>
Naturen er ei viktig inspirasjonskjelde for meg, difor er mange av bileta mine frå naturen. Eg har i tillegg til naturfotografering drive med fotografering av arbeidsprosessar som t.d. bygginga av nye Loftesnesbrua i Sogndal. Eg har også teke bilete til bruk i brosjyrar, kalendrar og blad. Ved familiehendingar har eg også vore fotograf, derav konfirmasjonar, fødselsdagar og bryllaup.<br><br>
Dei siste åra har eg laga ein kalender med bilete frå Sogndal der overskotet har gått til Kreftforeininga.<br><br>
Eg redigera ikkje bileta mine, difor er biletet slik eg såg motivet den dagen. Dei har då den mest naturlege utsjånaden.<br><br>
I 2014 hadde eg ein fotoutstilling på Sogndal Storsenter. Bileta mine fekk god kritikk og alle vart selde.<br><br>
Kundane mine har vore/er privatpersonar, organisasjonar, bedrifter og institusjonar. Ynskjer du eit bilete er det berre å ta kontakt.</p>
  <div class="kalle_bilde"><img src="https://scontent.fosl2-1.fna.fbcdn.net/v/t1.0-9/56169761_1064979773692432_6284807004078735360_n.jpg?_nc_cat=103&_nc_ht=scontent.fosl2-1.fna&oh=272ae035aa089c2879880b4cf8e4c1b6&oe=5D08F208"></div>
</div>



  </main>
</html>
