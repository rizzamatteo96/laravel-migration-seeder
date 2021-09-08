@extends('layout.app')
@section('title', 'Details')
    
@section('content')
  <a href="{{route('travels-page')}}" class="btn btn-dark mb-5"> Torna alla lista dei viaggi </a>

  <h2>{{$travels->title}}</h2>
  <p>{{$travels->description}}</p>
  <p>Data di partenza: {{$travels->departure_date}}</p>  
  <p>Durata del viaggio: {{$travels->days}} giorni</p>
  <p>Tipo di viaggio: {{$travels->travel_type}}</p>
  <p>Tipo di trasporto: {{$travels->transportation}}</p>
  <p>Prezzo del viaggio: {{$travels->price}}€</p>
@endsection