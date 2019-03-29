<h1>Nytt kontaktskjema mottatt på Kallefoto.no</h1>
<hr>
<div class="box">
  <p><b>Navn:</b> {{ $contact->name }}</p>
  <p><b>Epost:</b> {{ $contact->email }}</p>
  <p><b>Mobil:</b> {{ $contact->phone }}</p>
  <hr>
  <p><b>Melding:</b><br>{{ $contact->body }}</p>
</div>
