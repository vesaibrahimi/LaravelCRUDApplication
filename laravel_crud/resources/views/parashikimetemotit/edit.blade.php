@extends('parashikimetemotit.layout')
@section('content')
<div class="card">
  <div class="card-header">Faqja e modifikimit te te dhenave te Parashikimit te motit</div>
  <div class="card-body">

      <form action="{{ url('parashikimiMotit/' .$parashikimetemotit->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$parashikimetemotit->id}}" id="id" />
        <label>qytetiparashikuar_umpm</label></br>
        <input type="text" name="qytetiparashikuar_umpm" id="qytetiparashikuar_umpm" value="{{$parashikimetemotit->qytetiparashikuar_umpm}}" class="form-control"></br>
        <label>temperatura_umpm</label></br>
        <input type="text" name="temperatura_umpm" id="temperatura_umpm" value="{{$parashikimetemotit->temperatura_umpm}}" class="form-control"></br>
        <label>lageshtia_umpm</label></br>
        <input type="text" name="lageshtia_umpm" id="lageshtia_umpm" value="{{$parashikimetemotit->lageshtia_umpm}}" class="form-control"></br>
        <input type="submit" value="Modifiko" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
