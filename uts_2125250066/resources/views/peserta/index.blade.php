@extends('layout.master')
@section('title', 'Kampus Merdeka')
@section('content')

<div class="row">
  <div class="col-lg-4">
  @foreach ($dataPeserta as $item )
    <div class="card mt-2" style="width: 300px">
      <div class="card-header">
        Kampus Merdeka
      </div>
      <div class="row">
        <div class="col">
          <div class="card-body ">
            <img src="{{ $item->url_foto }}" class="card-img-top" alt="">
            <h5 class="card-title">{{ $item->nama }}</h5>
            <p class="card-text">{{ $item->email}}</p>
            <a href="https://mdp.ac.id/?gclid=CjwKCAjwrdmhBhBBEiwA4Hx5g5VybSNvP6bDuCBTr_ORNWCasLHpaGO2bGq3jC3W1asQYgUm-ErTUhoCjk8QAvD_BwE" style="text-decoration: none">{{$item->asal_pt }}</a>
          </div>
        </div>
      </div>
      
    </div>
  @endforeach
  </div>
</div>
@endsection
