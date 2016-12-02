@extends('layouts.main')
@section('content')
 <div class="row">
   <div class="col-md-8 col-md-offset-2">
     <div class="panel panel-primary">
   <div class="panel-heading">Creation de client</div>
   <div class="panel-body">
     <form action="{{ url('/contact/new')}}" method="POST">
       {{ csrf_field()}}
          <div class="form-group">
          <label for="nom">CIN</label>
          <input name="cin" type="text" class="form-control" placeholder="CIN du client">
          </div>
          <div class="form-group">
          <label for="nom">Nom</label>
          <input name="nom" type="text" class="form-control" placeholder="Nom du client">
          </div>
          <div class="form-group">
          <label for="fonction">fonction</label>
          <input name="fonction" type="text" class="form-control" placeholder="fonction du client">
          </div>
          <div class="form-group">
          <label for="email">email</label>
          <input name="email" type="email" class="form-control" placeholder="email du client">
          </div>
           <button type="submit" class="btn btn-default">Enregistrer</button>
     </form>
   </div>
 </div>
   </div>
 </div>
@stop
