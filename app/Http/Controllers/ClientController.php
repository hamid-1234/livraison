<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Auth;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //
        $listClient=Client::all();
        return view('client.index', ['clients'=>$listClient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');//
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





        $client = new Client();
        $client->Nom_Personnel =$request->input('nom_personnel');
        $client->magazine =$request->input('magazine');
        $client->E_Mail =$request->input('email');
        $client->ville =$request->input('ville');
        $client->Phone =$request->input('phone');
        $client->RC =$request->input('RC');
        $client->RIB =$request->input('RIB');
        $client->Address =$request->input('address');
        $client->Site_Web =$request->input('Site_Web');
        $client->user_id =Auth::user()->id;


        if ($request->hasfile("CIN_Recto")) {
            $file = $request->file("CIN_Recto")->store('image');
            $client->CIN_Recto=  $file;
        }
        if ($request->hasfile("CIN_versso")) {
            $file = $request->file("CIN_versso")->store('image');
            $client->CIN_versso=  $file;
        }

        $client->save();
        session()->flash('success','l\'clientà été bine enregistré');



        $user_type=$request->input('user_type');


        
    return redirect('/profil_client'); //
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { $client=Client::find($id);
        return view('client.edat',['client'=>$client]);
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


       $client=Client::find($id);

       $client->Nom_Personnel =$request->input('nom_personnel');
       $client->magazine =$request->input('magazine');
       $client->E_Mail =$request->input('email');
       $client->ville =$request->input('ville');
       $client->Phone =$request->input('phone');
       $client->RC =$request->input('RC');
       $client->RIB =$request->input('RIB');
       $client->Address =$request->input('address');
       $client->Site_Web =$request->input('Site_Web');
       $client->user_id =Auth::user()->id;


       if ($request->hasfile("CIN_Recto")) {
        $file = $request->file("CIN_Recto")->store('image');
        $client->CIN_Recto=  $file;
    }
    if ($request->hasfile("CIN_versso")) {
        $file = $request->file("CIN_versso")->store('image');
        $client->CIN_versso=  $file;
    }

    $client->save();
    session()->flash('success','l\'clientà été bine enregistré');
    return redirect('/clients'); //
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
