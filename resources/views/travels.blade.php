@extends('layout.app')
@section('title', 'Travel Page')

@section('content')

  <div class="row row-cols-1 row-cols-md-2 g-4">
    @foreach ($travels as $travel)
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{$travel->title}}</h5>
            <p class="card-text">{{$travel->description}}</p>
            <p class="card-text"><small class="text-muted">{{$travel->price}} €</small></p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

@endsection