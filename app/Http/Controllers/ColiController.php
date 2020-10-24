<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coli;
use Auth;

class ColiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $listColi=Auth::user()->colis;

       // $listColi=Coli::where('user_id',Auth::user()->id)->get();
     return view('coli.index', ['colis'=>$listColi]);
        //
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {return view('coli.create');//
        //
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $coli = new Coli();

        $coli->Nom_destinataire =$request->input('Nom_destinataire');
        $coli->prénom_destinataire =$request->input('prénom_destinataire');
        $coli->Adresse_destinataire =$request->input('Adresse_destinataire');
        $coli->Ville_destinataire =$request->input('Ville_destinataire');
        $coli->phon_destinataire =$request->input('phon_destinataire');
        $coli->statu =$request->input('statu');
        $coli->prix =$request->input('prix');
        $coli->user_id =Auth::user()->id;

        $coli->save();
        session()->flash('success','l\'colià été bine enregistré');
    return redirect('/colis'); // //
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
    { $coli=Coli::find($id);
        return view('coli.edat',['coli'=>$coli]);
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

       $coli=Coli::find($id);











       $coli->Nom_destinataire =$request->input('Nom_destinataire');
       $coli->prénom_destinataire =$request->input('prénom_destinataire');
       $coli->Adresse_destinataire =$request->input('Adresse_destinataire');
       $coli->Ville_destinataire =$request->input('Ville_destinataire');
       $coli->phon_destinataire =$request->input('phon_destinataire');
       $coli->statu =$request->input('statu');
       $coli->prix =$request->input('prix');
       $coli->client_id =$request->input('client_id');




       $coli->save();
       session()->flash('success','l\'colià été bine enregistré');
    return redirect('/colis'); //
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
