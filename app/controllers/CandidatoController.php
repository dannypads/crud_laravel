<?php


/**
 * Clase de todos los candidatos
 */
class CandidatoController extends \BaseController {


	public function index()
	{
        $candidato = Candidato::all();
        return View::make('candidatos.list')->with('candidatos',$candidato);
	}


	public function create()
	{
		return View::make('candidatos.crear');
	}


	public function store()
	{
		$candidato = new Candidato();
        $candidato->nombre = Input::get('nombre');
        $candidato->apellido = Input::get('apellido');
        $candidato->save();
        return Redirect::to('/');
	}


	public function show($id)
	{
        $candidato = Candidato::find($id);
        return View::make('candidatos.mostrar')->with('candidato',$candidato);
	}


	public function edit($id)
	{
		$candidato = Candidato::find($id);
        return View::make('candidatos.editar')->with('candidato',$candidato);
	}


	public function update($id)
	{

        $candidato = Candidato::find($id);
        $candidato->nombre = Input::get('nombre');
        $candidato->apellido = Input::get('apellido');
        $candidato->save();
        return  Redirect::to('/');
	}

	public function destroy($id)
	{
		$candidato = Candidato::find($id);
        $candidato->delete();
        return  Redirect::to('/');

	}

}