<?php

namespace App\Http\Controllers;

use App\Militar;
use Illuminate\Http\Request;
use App\Http\Resources\MilitarResource;
use Illuminate\Http\Response;

class MilitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MilitarResource::collection(Militar::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $militar = Militar::create([
            'nome' => $request->nome,
            'dataDeNascimento' => $request->dataDeNascimento,
            'servicoObrigatorio' => $request->servicoObrigatorio,
            'patente' => $request->patente,
            'identidade' => $request->identidade
      ]);

      return MilitarResource::collection(Militar::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new MilitarResource(Militar::find($id));
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
        $militar = Militar::find($id);

        $militar->update($request->only(['nome', 'dataDeNascimento', 'servicoObrigatorio', 'patente', 'identidade']));

        return new MilitarResource($militar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $militar = Militar::find($id);

        $militar->delete();

        return response()->json(null, 204);

    }
}
