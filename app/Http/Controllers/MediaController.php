<?php

namespace App\Http\Controllers;

use App\TbNotaDisciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaController extends Controller
{
    private $repository;

    /**
     * NotaController constructor.
     * @param TbNotaDisciplina $repository
     */
    public function __construct( TbNotaDisciplina $repository )
    {
        $this->repository = $repository;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $sql = "select format(sum(tn.num_nota) / 3, 2) as media, td.nom_disciplina, tm.num_matricula, tm.nom_aluno from tb_nota_disciplina tn
        inner join tb_disciplina td on tn.seq_disciplina = td.seq_disciplina
        inner join tb_matricula tm on tn.seq_matricula = tm.seq_matricula
        group by td.nom_disciplina, tm.num_matricula, tm.nom_aluno
        order by td.nom_disciplina, tm.nom_aluno asc";

        $medias = DB::select($sql);

        return view('media', ['medias' => $medias]);
    }

}
