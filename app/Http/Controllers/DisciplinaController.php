<?php

namespace App\Http\Controllers;

use App\TbDisciplina;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    private $repository;

    /**
     * DisciplinaController constructor.
     * @param TbDisciplina $repository
     */
    public function __construct( TbDisciplina $repository )
    {
        $this->repository = $repository;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $disciplinas = $this->repository->all();
        return view('disciplina',['disciplinas' => $disciplinas]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $matricula = new TbDisciplina();

        $arrayData = array('nom_disciplina' => $request->get('nom_disciplina'));

        $matricula->create($arrayData)->save();

        return redirect('disciplina')->with('success', 'Operação realizada com sucesso!');

    }

    public function edit($id)
    {
        $matricula = \App\TbDisciplina::find($id);
        return view('edit',compact('disciplina','id'));
    }
}
