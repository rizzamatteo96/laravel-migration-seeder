@extends('layout/app')
@section('title', 'History Page')

@section('content')
  <div>
    {{-- @dd($years) --}}

    <div class="row row-cols-4 g-2">
    
      @foreach ($years as $year)
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$year->year}}</h5>
              <p class="card-text">Year bill: {{$year->year_bill}}€</p>
              <p class="card-text">Pullman acquired: {{$year->new_pullman}}</p>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
@endsection