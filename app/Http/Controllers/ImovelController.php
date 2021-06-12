<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imoveis;
use App\Models\Tipo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $imoveis = Imoveis::where('user_id', $id)->get();
        return view('user.imovel-component')->with('imoveis', $imoveis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function create()
    {
        $estados = json_decode(
            Http::get(
                'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
                ['orderBy' => 'nome']
            )->body()
        );

        $municipios = [];
        $municipios = json_decode(
            Http::get(
                'https://servicodados.ibge.gov.br/api/v1/localidades/municipios'
            )->body()
        );

        $tipos = Tipo::all();

        return view('user.imovel-add-component', [
            'estados' => $estados,
            'municipios' => $municipios,
            'tipos' =>  $tipos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();

        $imovel = new Imoveis();
        $imovel->estado  = $request->get('estado');
        $imovel->cidade  = $request->get('cidade');
        $imovel->bairro  = $request->get('bairro');
        $imovel->cep  = $request->get('cep');
        $imovel->dormitorios  = $request->get('dormitorios');
        $imovel->suites  = $request->get('suites');
        $imovel->vagas_garagem  = $request->get('vagas');
        $imovel->area_util  = $request->get('area');
        $imovel->tipo_id  = $request->get('tipo');
        $imovel->operacao  = $request->get('operacao');
        $imovel->descricao  = $request->get('descricao');
        $imovel->valor  = $request->get('valor');
        $imovel->IPTU  = $request->get('iptu');
        $imovel->condominio  = $request->get('condominio');
        $imagemNome = Carbon::now()->timestamp . '.' . $request->imagem->extension();
        $imovel->image = $request->imagem->storeAs('imoveis', $imagemNome);
        $imovel->USER_ID = $id;
        $imovel->save();

        return redirect('/meus_imoveis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imovel = Imoveis::find($id);

        $estados = json_decode(
            Http::get(
                'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
                ['orderBy' => 'nome']
            )->body()
        );

        $municipios = [];
        $municipios = json_decode(
            Http::get(
                'https://servicodados.ibge.gov.br/api/v1/localidades/municipios'
            )->body()
        );

        $tipos = Tipo::all();

        return view('user.imovel-edit-component', [
            'imovel' => $imovel,
            'estados' => $estados,
            'municipios' => $municipios,
            'tipos' =>  $tipos
        ]);
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
        $imovel = Imoveis::find($id);
        $imovel->estado  = $request->get('estado');
        $imovel->cidade  = $request->get('cidade');
        $imovel->bairro  = $request->get('bairro');
        $imovel->cep  = $request->get('cep');
        $imovel->dormitorios  = $request->get('dormitorios');
        $imovel->suites  = $request->get('suites');
        $imovel->vagas_garagem  = $request->get('vagas');
        $imovel->area_util  = $request->get('area');
        $imovel->tipo_id  = $request->get('tipo');
        $imovel->operacao  = $request->get('operacao');
        $imovel->descricao  = $request->get('descricao');
        $imovel->valor  = $request->get('valor');
        $imovel->IPTU  = $request->get('iptu');
        $imovel->condominio  = $request->get('condominio');
        $imagemNome = Carbon::now()->timestamp . '.' . $request->imagem->extension();
        $imovel->image = $request->imagem->storeAs('imoveis', $imagemNome);
        $imovel->save();

        return redirect('/meus_imoveis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imovel = Imoveis::find($id);
        $imovel->delete();
        return redirect('/meus_imoveis');
    }
}
