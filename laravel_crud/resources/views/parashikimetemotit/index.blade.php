@extends('parashikimetemotit.layout')
@section('content')
    <div class="container">
        @if(session('flash_message'))
        <div id="flash-message" class="alert alert-success" >
        {{ session('flash_message') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Uebaplikacioni per Menaxhimin e Parashikimeve te Motit (UMPM)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/parashikimiMotit/create') }}" class="btn btn-success btn-sm" title="Shto te re Parashikimin e Motit">
                            <i class="fa fa-plus" aria-hidden="true"></i> Shto te dhenat e Parashikimit te motit
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>qytetiparashikuar_umpm</th>
                                        <th>temperatura_umpm</th>
                                        <th>lageshtia_umpm</th>
                                        <th>veprimet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($parashikimetemotit as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->qytetiparashikuar_umpm }}</td>
                                        <td>{{ $item->temperatura_umpm }}</td>
                                        <td>{{ $item->lageshtia_umpm }}</td>
                                        <td>

                                            <a href="{{ url('/parashikimiMotit/' . $item->id . '/edit') }}" title="Modifiko te dhenat e Parashkimit te Motit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifiko</button></a>
                                            <form method="POST" action="{{ url('/parashikimiMotit' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Fshij te dhenat e Parashikimit te Motit" onclick="return confirm(&quot;Konfirmo fshierjen e te dhenave te ketij parashikimi?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Fshij</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    document. addEventListener('DOMContentLoaded', function () {

const flashMessage = document.getElementById( 'flash-message');

if (flashMessage) {
    setTimeout (() => {
    flashMessage.style. transition = 'opacity 1s ease';
    flashMessage. style.opacity = '0';

setTimeout (() => {
    flashMessage.remove();
    }, 1000);
    },5000);
 }}
 );
</script>
@endsection
