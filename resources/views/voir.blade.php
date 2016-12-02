@extends('layouts.main')
@section('content')
 <div class="row">
   <div class="col-md-8 col-md-offset-2">
     <div class="panel panel-primary">
   <div class="panel-heading">Fiche client N° {{ $client->id }} crée le : {{ $client->created_at}}</div>
   <div class="panel-body">
     <ul class="list-group">
       <li class="list-group-item">NOM : {{ $client->nom}}</li>
       <li class="list-group-item">CIN : {{ $client->cin}}</li>
       <li class="list-group-item">Fonction : {{ $client->fonction}}</li>
       <li class="list-group-item">Email : {{ $client->email}}</li>
       <li class="list-group-item">Total des commandes : {{ $client->commandes->count()}}</li>
 </ul>
   </div>

 </div>
 <table class="table table-striped table-bordered primary">
   <tr>
     <td>Produit</td>
     <td>Quntité</td>
     <td>Date</td>
     <td></td>
     <td></td>
   </tr>
   @foreach ($client->commandes as $commande)
     <tr>
       <td>{{ $commande->produit }}</td>
       <td>{{ $commande->quantite}}</td>
       <td>{{ $commande->created_at}}</td>
       <td>{{ $commande->client->nom}}</td>
       <td>{{ $commande->client->commandes->count()}}</td>
     </tr>
   @endforeach


 </table>
 <a href="{{ url('/')}}" class="btn btn-warning"> Retour</a>
   </div>
 </div>
@stop
