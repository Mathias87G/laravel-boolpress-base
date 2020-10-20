@extends('layouts.app')
@section('content')
  @if (session('insert'))
    <div class="alert alert-success">
      {{ session('insert')}}
    </div>
  @endif

<h2>Elenco Post</h2>
@foreach ($posts as $post)
  <p>Titolo: {{$post->title}}</p>
  <p>Post: {{$post->body}}</p>
@endforeach
@endsection
