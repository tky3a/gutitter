@extends('layouts.application')
@section('content_area')
  @foreach ($contents as $content)
    <div class="card horizontal">
      <div class="card-image">
        <p>image</p>
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>{{ $content }}</p>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  @endforeach
@endsection
