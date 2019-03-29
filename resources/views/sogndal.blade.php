@extends('layouts.default')

@section('title')
  - {{ $subpage->title }}
@endsection

@section('body')

  @include('layouts.subpages')

@endsection
