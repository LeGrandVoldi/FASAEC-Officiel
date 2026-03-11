<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class MenusController extends Controller
{
    public function index_1(){
        return view("menus.le-fasaec");
    }
    public function index_2(){
        return view("menus.droits-protection-sociale");
    }
    public function index_3(){
        return view("menus.artistes-numerique-ia");
    }
    public function index_4(){
        return view("menus.aides-accompagnement");
    }
    public function index_5(){
        return view("menus.actualites");
    }
    public function index_6(){
        return view("menus.gestion-actualites.index");
    }
    public function index_7(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $emailExiste = DB::table('gestion_pubs')
            ->where('email', $request->email)
            ->exists();

        if ($emailExiste) {
            $encryptedEmail = Crypt::encryptString($request->email);

            return response()->json([
                'status' => 'success',
                'crypt'  => $encryptedEmail,
                'redirect' => route('dashboard', $encryptedEmail)
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Mail introuvable'
        ]);

    }
    public function index_8($email){

        // 1️⃣ Vérifier si c'est chiffré
        try {
            $decodedEmail = Crypt::decryptString($email);
        } catch (\Exception $e) {
            // Si ce n'est pas chiffré, on considère que c'est un email brut
            $decodedEmail = $email;
        }

        $emailExiste = DB::table('gestion_pubs')
            ->where('email', $decodedEmail)
            ->exists();

        if ($emailExiste) {
            return view("menus.gestion-actualites.admin.index");
        }
        else{
              return view("menus.gestion-actualites.index");
        }


    }
    public function index_9(){
        return view("menus.contact");
    }

}
