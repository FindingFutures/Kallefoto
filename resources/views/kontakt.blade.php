@extends('layouts.default')

@section('title')
  - Kontakt
@endsection

@section('body')

<h1>Kontakt meg her:</h1>
<form class="contact_form" action="{{ Route('contact.create') }}" method="POST">
  @csrf
  <input type="text" name="name" value="" placeholder="Navn" required>
  <input type="text" name="email" value="" placeholder="E-Mail" required>
  <textarea name="body" placeholder="Melding" required></textarea>
  <button type="submit" name="submit">Send</button>
</form>

@endsection
