<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
	public function __construct(){
		$this->middleware('auth');

	}


	public function affiche()
	{
		//$listClient=Client::find(1)->client;

		$listClient=Client::where('user_id',Auth::user()->id)->get();

		return view('client.profil', ['clients'=>$listClient]);
	}

	public function tabBordClient()
	{
		return view('client.tabBordClient');
	}
	
}
