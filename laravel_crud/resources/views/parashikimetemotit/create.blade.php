@extends('parashikimetemotit.layout')
@section('content')
<div class="card">
  <div class="card-header">Faqja e shtimit te te dhenave te Parashikimit te motit</div>
  <div class="card-body">

      <form action="{{ url('parashikimiMotit') }}" method="post">
        {!! csrf_field() !!}
        <label>qytetiparashikuar_umpm</label></br>
        <input type="text" name="qytetiparashikuar_umpm" id="qytetiparashikuar_umpm" class="form-control"></br>
        <label>temperatura_umpm</label></br>
        <input type="text" name="temperatura_umpm" id="temperatura_umpm" class="form-control"></br>
        <label>lageshtia_umpm</label></br>
        <input type="text" name="lageshtia_umpm" id="lageshtia_umpm" class="form-control"></br>
        <input type="submit" value="Ruaj" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
