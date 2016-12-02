@extends('layouts.main')
@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @if(Session::has('message'))
      <script>
         $(function(){
             swal("{{ Session::get('message')}}", " ", "success")
         });

      </script>
       @endif
      <a href="{{ url('/contact/new')}}" class="btn btn-primary">Ajouter</a>
      <table class="table table-bordered table-striped">
        <tr>
          <td>Nom</td>
          <td>CIN</td>
          <td>Fonction</td>
          <td>Total des commandes</td>
          <td>Actions</td>
        </tr>
        @foreach ($clients as $client)
          <tr>
            <td>{{ $client->nom}}</td>
            <td>{{ $client->cin}}</td>
            <td>{{ $client->fonction}}</td>
            <td>{{ $client->commandes->count()}}</td>
            <td><a href="{{ url('/contact/'.$client->id.'/supprimer')}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
            <a href="" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></a>
            <a href="{{ url('/contact/'.$client->id.'/voir')}}" class="btn btn-success"><i class="glyphicon glyphicon-eye-open"></i></a></td>
          </tr>
        @endforeach

      </table>
    </div>
  </div>
@endsection
