<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Desemprego;
use App\Http\Requests\DesempregoRequest;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Inertia\Inertia;

class DesempregoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private $form;

     public function __construct(Desemprego $form)
     {
         $this->form = $form;
     }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       
    }

    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(DesempregoRequest $request)
    {
       
        $data = $request->all();

    

        $birthdate = Carbon::createFromFormat('d/m/Y', $data['birthdate'])->format('Y-m-d');
        $data['birthdate'] = $birthdate;

        $user = auth()->user();
        /*
        if(auth()->user()->store()->count()){
            return Redirect::route('desemprego.criar')->with('error', 'Você já possui cadastro!');
        }
        */

        $store = $user->store()->create($data);
        
        
        if(!$store->save()){
            return Redirect::route('desemprego.criar')->with('errors', 'Erro ao cadastrar');
        }

        return Redirect::route('desemprego.criar')->with('success', 'Cadastro realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
