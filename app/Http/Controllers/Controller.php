<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Dossier;
use DB;
use App\Http\Requests;
use Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ajouter(){

        return view('ajouter');
    }
    public function ajouterdossier(Request $request){
        $numero = $request->input('numero');
        $titreDossier = $request->input('titreDossier');
        $service = $request->input('service');
        $dateCreation = $request->input('dateCreation');
        $instance = $request->input('instance');
        $etat = $request->input('etat');
        $document = $request->file('document');
        
        $destinationPath = public_path('/pdf/'); // upload path
        // Upload Orginal Image
        $name = rand();        
        $profilePdf =$name.'.' .$document->getClientOriginalExtension();
        $request->file('document')->move($destinationPath, $profilePdf);
        $data = array('numero'=>$numero,'titreDossier'=>$titreDossier,'service'=>$service,'dateCreation'=>$dateCreation,'instance'=>$instance,'etat'=>$etat,'document'=>$profilePdf);
        Dossier::create($data);
        return view('ajouter');
    }
    public function ouvrir(Request $request){
        $dossier = Dossier::all();
        return view('ouvrir',compact('dossier'));
    }
    public function download(Request $request){
        $id = $request->input('id');
        $name = Dossier::where('id',$id)->get();
        foreach($name as $n){
            $down = $n->document;
        }
        $file= public_path(). "/pdf/".$down;
      $headers = array(
                'Content-Type: application/pdf',
              );
      return Response::download($file, 'Telecharger.pdf', $headers);
    }
    public function recherche(Request $request){
        $numero = $request->input('numero');
        $dossier = Dossier::where('numero',$numero)->get();
        return view('result',compact('dossier'));
    }
    public function statistique(){
        $var1 = Dossier::where('etat','option1')->count();
        $var2 = Dossier::where('etat','option2')->count();
        $var3 = Dossier::where('etat','option3')->count();
        return view('statistique',compact('dossier','var1','var2','var3'));
    }
}
