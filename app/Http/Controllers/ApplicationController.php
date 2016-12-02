<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Client;

class ApplicationController extends Controller
{

    public function index(){
      $clients=Client::all();
     return view('welcome',compact('clients'));
    }
    public function contact(){
     return view('contact');
    }


    public function new(){
     return view('new');
    }

    public function save(Request $request){
       $client = new Client();
       $client->nom=$request->input('nom');
       $client->cin=$request->input('cin');
       $client->fonction=$request->input('fonction');
       $client->email=$request->input('email');
       $client->save();
       Session::flash('message','Client enregistré avec succès!');
       return redirect('/');
    }


  public function supprimer($id){
    $client=Client::find($id);
    $client->delete();
    Session::flash('message','Client summprimé avec succès!');
    return redirect('/');
    }

  public function voir($id){
    $client=Client::find($id);
    return view('voir',compact('client'));
    }
}
