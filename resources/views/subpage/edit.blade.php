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
            <a href="/admin" class="btn btn-sm btn-primary float-right">
              Gå Heim
            </a>
          </div>
          <hr>
          <div class="card">
            <div class="card-header">
              {{ $subpage->title }}
            </div>
            <div class="card-body">
              <form class="" action="{{ Route('subpage.edit', $subpage->id) }}" method="post">
                @csrf
                @method('put')
                <label for="body">Om {{ $subpage->title }}</label>
                <textarea name="body" rows="8" cols="80" class="form-control">{{ $subpage->body }}</textarea>
                <button type="submit" name="button" class="btn btn-sm btn-success mt-3">Oppdater</button>
              </form>
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
                      <option selected value="{{ $subpage->id }}">{{ $subpage->title }}</option>
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
              Bilder
            </div>
            <div class="card-body">
              <div class="row">
                @foreach ($subpage->images as $image)
                  <div class="col col-sm-6 mb-2">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('/images/subpages/' . $image->small_image) }}" alt="">
                        <div class="card-body">
                          <form class="" action="{{ Route('image.destroy', $image->id) }}" method="post">
                            @csrf
                            @method('put')
                            <button type="submit" name="button" class="btn btn-sm btn-danger">Slett</button>
                          </form>
                        </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
