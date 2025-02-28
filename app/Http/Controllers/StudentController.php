<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // fionction affichant le formulaire
    public function create(){
        return view('students.create');
    }

    // fonction pour enregistrer le nouveau étudiant
    public function store(Request $request){
        dd($request->all());
    }
}
