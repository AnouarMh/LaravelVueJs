<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //Liste des admins 

    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    //Formulaire de creation d'un admin
    public function create()
    {
        return view('admin.create');
    }

    //Enregistrer un admin
    public function store(Request $request)
    {
        // $token = csrf_token();
        // dd($token);

        $request->validate([
            'cin' => 'required|unique:admins|max:8',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique:admins',
            'password' => 'required',
            'numero_telephone' => 'required',
            'role' => 'required',
        ]);

        $admin = new Admin();
        $admin->cin = $request->cin;
        $admin->nom = $request->nom;
        $admin->prenom = $request->prenom;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->numero_telephone = $request->numero_telephone;
        $admin->role = $request->role;
        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin ajouté avec succès');
    }

    //Afficher les details d'un admin
    public function show($id)
    {
        $admin = Admin::find($id);
        return view('admin.show', compact('admin'));
    }

    //afficher formulaire d'edition d'un admin
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit', compact('admin'));
    }

    //supprimer un admin
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Admin supprimé avec succès');
    }

    public function SingIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // $admin = Admin::where('email', $request->email)->first();
        // if ($admin) {
        //     if ($admin->password == $request->password) {
        //         return redirect()->route('admin.index')->with('success', 'Admin connecté avec succès');
        //     } else {
        //         return redirect()->route('admin.index')->with('error', 'Mot de passe incorrect');
        //     }
        // } else {
        //     return redirect()->route('admin.index')->with('error', 'Email incorrect');
        // }

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.index')->with('success', 'Admin connecté avec succès');
        } else {
            return redirect()->route('admin.index')->with('error', 'Email ou mot de passe incorrect');
        }
    }
}
