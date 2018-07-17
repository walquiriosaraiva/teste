<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="row">
    <div class="col-xs-10  col-sm-8 col-sm-offset-1 col-md-6 ">

        <div class="login-panel panel panel-default">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro de nota</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="/nota" method="post" name="cadNota"
                              id="cadNota" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Disciplina</label>
                                        <select id="seq_disciplina" name="seq_disciplina" required="required" class="form-control">
                                            <option value="">--selecione--</option>
                                            @foreach($disciplinas as $disciplina)
                                                <option value="{{ $disciplina->seq_disciplina }}">{{ $disciplina->nom_disciplina }}</option>
                                            @endforeach
                                        </select>
                                        {{ ($errors->has('seq_disciplina')) ? $errors->first('seq_disciplina') : '' }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Matrícula</label>
                                        <select id="seq_matricula" name="seq_matricula" required="required" class="form-control">
                                            <option value="">--selecione--</option>
                                            @foreach($matriculas as $matricula)
                                                <option value="{{ $matricula->seq_matricula }}">{{ $matricula->num_matricula }} - {{ $matricula->nom_aluno }} </option>
                                            @endforeach
                                        </select>
                                        {{ ($errors->has('seq_matricula')) ? $errors->first('seq_matricula') : '' }}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Nota</label>
                                        <input type="number" name="num_nota" id="num_nota" required="required" min="0" max="10" class="form-control">
                                        {{ ($errors->has('num_nota')) ? $errors->first('num_nota') : '' }}
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-success" name="btnSalvar" id="btnSalvar">Salvar
                                    </button>
                                    <button type="reset" class="btn btn-default">Limpar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="alert alert-warning"><strong>Lista</strong></h3>
                        <table>
                            <thead>
                            <tr>
                                <th class="col-md-2"><strong>Nota</strong></th>
                                <th class="col-md-4"><strong>Disciplina</strong></th>
                                <th class="col-md-4"><strong>Matrícula</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notas as $nota)
                            <tr>
                                <td class="col-md-2">{{ $nota->num_nota }}</td>
                                <td class="col-md-6">{{ $nota->TbDisciplina->nom_disciplina }}</td>
                                <td class="col-md-6">{{ $nota->TbMatricula->num_matricula }} - {{ $nota->TbMatricula->nom_aluno }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
            <a href="/" class="btn btn-primary">Voltar</a>
        </div>
        </div>
    </div>
</div>
</body>
</html>
