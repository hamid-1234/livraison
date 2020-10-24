<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livreur;

class LivreurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listLivreur=Livreur::all();
        return view('Livreur.index', ['livreurs'=>$listLivreur]);

      //  return view('livreur.index');

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('livreur.create');//
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  






      $livreur = new livreur();
      $livreur->Nom_Personnel =$request->input('nom_personnel');
      $livreur->magazine =$request->input('magazine');
      $livreur->E_Mail =$request->input('email');
      $livreur->ville =$request->input('ville');
      $livreur->Phone =$request->input('phone');
      $livreur->RC =$request->input('RC');
      $livreur->RIB =$request->input('RIB');
      $livreur->Address =$request->input('address');
      $livreur->Site_Web =$request->input('Site_Web');
      $livreur->user_id =12;


      if ($request->hasfile("CIN_Recto")) {
        $file = $request->file("CIN_Recto")->store('image');
        $livreur->CIN_Recto=  $file;
    }
    if ($request->hasfile("CIN_versso")) {
        $file = $request->file("CIN_versso")->store('image');
        $livreur->CIN_versso=  $file;
    }

    $livreur->save();
    session()->flash('success','l\'livreurà été bine enregistré');
    return redirect('/livreurs');
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
    {
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
        //
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
