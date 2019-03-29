@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('success') }}
            </div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {{ implode('', $errors->all(':message')) }}
            </div>
          @endif
          <div class="title">
            Dashbord
          </div>
          <hr>
          <div class="card">
            <div class="card-header">
              Undersider
            </div>
            <div class="card-body">
              <div class="row justify-content-center">
                @foreach ($subpages as $subpage)
                  <a href="/admin/about/{{ $subpage->title }}" class="mr-3 btn btn-md btn-primary">
                    {{ $subpage->title }}
                  </a>
                @endforeach
              </div>
            </div>
          </div>
          <hr>

          <div class="card mb-3">
            <div class="card-header">
              Last opp bilde
            </div>
            <div class="card-body">
              <form class="form" method="POST" action="/upload/image" enctype="multipart/form-data">
                @csrf
                <p style="font-size: 12px; margin: 0;">Bilde burde vere under 8MB</p>
                <div class="row mb-3">
                  <div class="col">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="file" name="image" value="" class="form-control">
                  </div>
                  <div class="col">
                    <select class="form-control" name="subpage_id">
                      <option value="" disabled selected>Velg ein</option>
                      @foreach ($subpages as $subpage)
                        <option value="{{ $subpage->id }}">{{ $subpage->title }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
              </form>
            </div>
          </div>

          <hr>

          <div class="card">
            <div class="card-header">
              Om
            </div>
            <div class="card-body">
              <form class="form" method="POST" action="/admin/om/1" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <label for="form-control">Tekst</label>
                <textarea name="body" rows="8" cols="80" class="form-control mb-3">{{ $about->body }}</textarea>
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
