<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CandidatoController extends Controller
{

    public function index()
    {

        $can = User::all();

        return view('candidatos.lista', compact('can'));




    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    public function create(Request $request)
    {



        $ca = new User();
        $ca->name = $request->input('nome');
        $ca->email = $request->input('email');
        $ca->password = Hash::make($request->input('password'));
        $ca->telephone = $request->input('telefone');
        $ca->expe_pro = $request->input('expepro');
        $ca->expe_aca = $request->input('expeaca');
        $ca->user = $request->input('usuario');


        $ca->save();
        return redirect('/');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $ca = User::find($id);

        if (isset($ca)) {
        return view('candidatos.editar', compact('ca'));
    }
}


    public function update(Request $request, $id)
    {
        $ca = User::find($id);

        if (isset($ca)) {

            $ca = new User();
            $ca->name = $request->input('nome');
            $ca->email = $request->input('email');
            $ca->telephone = $request->input('telefone');
            $ca->expe_pro = $request->input('expepro');
            $ca->expe_aca = $request->input('expeaca');
            $ca->user = $request->input('usuario');
            $ca->save();
        }
        return redirect('/visualiza');
    }


    public function destroy($id)
    {
        $ca = Candidato::find($id);
        $ca->delete();
        return redirect('/visualiza');
    }
}
