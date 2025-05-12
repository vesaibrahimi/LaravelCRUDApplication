@extends('parashikimetemotit.layout')
@section('content')
<div class="card">
  <div class="card-header">Faqja e Parashikimeve te Motit </div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">qytetiparashikuar_umpm : {{ $parashikimetemotit->qytetiparashikuar_umpm }}</h5>
        <p class="card-text">temperatura_umpm : {{ $parashikimetemotit->temperatura_umpm }}</p>
        <p class="card-text">lageshtia_umpm : {{ $parashikimetemotit->lageshtia_umpm }}</p>
  </div>

    </hr>

  </div>
</div>
