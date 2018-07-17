<?php

namespace App\Http\Controllers;

use App\TbMatricula;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    private $repository;

    /**
     * MatriculaController constructor.
     * @param TbMatricula $repository
     */
    public function __construct( TbMatricula $repository )
    {
        $this->repository = $repository;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $matriculas = $this->repository->all();
        //echo '<pre>', print_r($matricula); exit;
        return view('matricula',['matriculas' => $matriculas]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $matricula = new TbMatricula();

        $date=date_create($request->get('dat_entrada_escola'));
        $format = date_format($date,"Y-m-d");

        $arrayData = array('nom_aluno' => $request->get('nom_aluno'),
            'num_matricula' => $request->get('num_matricula'),
            'des_endereco' => $request->get('des_endereco'),
            'des_bairro' => $request->get('des_bairro'),
            'num_cep' => $request->get('num_cep'),
            'nom_cidade' => $request->get('nom_cidade'),
            'cod_unidade_federacao' => $request->get('cod_unidade_federacao'),
            'des_email' => $request->get('des_email'),
            'dat_entrada_escola' => strtotime($format)
        );

        $matricula->create($arrayData)->save();

        return redirect('matricula')->with('success', 'Operação realizada com sucesso!');

    }

    public function edit($id)
    {
        $matricula = \App\TbMatricula::find($id);
        return view('edit',compact('matricula','id'));
    }
}
