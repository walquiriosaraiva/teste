<?php

namespace App\Http\Controllers;

use App\TbDisciplina;
use App\TbMatricula;
use App\TbNotaDisciplina;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Formatter\SignatureFormatter;

class NotaController extends Controller
{
    private $repository;
    private $disciplina;
    private $matricula;

    /**
     * NotaController constructor.
     * @param TbNotaDisciplina $repository
     */
    public function __construct( TbNotaDisciplina $repository, TbDisciplina  $disciplina, TbMatricula $matricula )
    {
        $this->repository = $repository;
        $this->disciplina = $disciplina;
        $this->matricula = $matricula;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $notas = TbNotaDisciplina::with(array('TbDisciplina','TbMatricula'))->get();

        $matriculas = $this->matricula->all();
        $disciplinas = $this->disciplina->all();
        return view('nota', ['notas' => $notas, 'matriculas' => $matriculas, 'disciplinas' => $disciplinas]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $notas = new TbNotaDisciplina();
        $arrayData = array(
            'num_nota' => $request->get('num_nota'),
            'seq_matricula' => $request->get('seq_matricula'),
            'seq_disciplina' => $request->get('seq_disciplina'),
        );

        $notas->create($arrayData)->save();

        return redirect('nota')->with('success', 'Operação realizada com sucesso!');

    }

    public function edit($id)
    {
        $matricula = \App\TbMatricula::find($id);
        return view('edit',compact('nota','id'));
    }
}
