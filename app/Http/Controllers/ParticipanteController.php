<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;

class ParticipanteController extends Controller
{
    
    public function index()
    {
        $participantes = Participante::all();
        return view('participantes.index', compact('participantes'));
    }

   
    public function create()
    {
        return view('participantes.create');
    }

   
    public function store(Request $request)
    {
        try {
            $request->validate([
                'tipodoc' => 'required|string|min:1|max:255',
                'documento' => 'required|string|min:5|max:255',
                'fullname' => 'required|string|min:5|max:255',
                'fechanac' => 'required|date',
                'direccion' => 'required|string|min:5|max:255',
                'telefono' => 'required|integer|min:1',
                'email' => 'required|email|min:5|max:255',
                'archivo' => 'required|file|mimes:jpg,png,pdf|max:2048',
            ]);

            $archivo = $request->file('archivo');
            
            $rutaArchivo = $archivo->storeAs('archivos', $archivo->getClientOriginalName(), 'public');

            $participante = new Participante();
            $participante->fill($request->except('archivo')); 
            $participante->archivo = $rutaArchivo; 
            $participante->save();

            return redirect()->route('dashboard');
        } catch (Exception $e) {
            dd($e);
        }
    }


    public function show(string $id)
    {
        $participante = Participante::findOrFail($id);
        return view('participantes.view', compact('participante'));
    }

    
    public function edit($id, Request $request)
    {
        try{
            $participante = Participante::findOrFail($id);            
            $participante->id_estado = $request->query('estado');
            $participante->save();

            
            return redirect()->route('participantes.index');
        } catch(Exception $e){
            dd($e);
        }
    }
    

    
    public function update($id, Request $request)
    {
       
    }

    
    public function destroy(string $id)
    {
        //
    }
}
