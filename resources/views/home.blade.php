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
            Dashboard
          </div>
          <hr>
          <div class="card">
            <div class="card-header">
              Undersider
            </div>
            <div class="card-body">
              <div class="row justify-content-center">
                <a href="/admin/about/{title}" class="mr-3 btn btn-md btn-primary">
                  Sogndal
                </a>
                <a href="/admin/about/{title}" class="mr-3 btn btn-md btn-primary">
                  Luster
                </a>
                <a href="/admin/about/{title}" class="btn btn-md btn-primary">
                  Leikanger
                </a>
              </div>
              <div class="row justify-content-center mt-3">
                <a href="/admin/about/{title}" class="mr-3 btn btn-md btn-primary">
                  Balestrand
                </a>
                <a href="/admin/about/{title}" class="btn btn-md btn-primary">
                  Bilar og Dyr
                </a>
              </div>
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

          <div class="card">
            <div class="card-header">
              Bilde
            </div>
            <div class="card-body">
              <form class="form" method="POST" action="/upload/image" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <input type="file" name="image" value="">
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
