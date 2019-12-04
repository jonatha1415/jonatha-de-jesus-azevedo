<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::all();
        return view('aluno',compact('alunos'));
    }
}
