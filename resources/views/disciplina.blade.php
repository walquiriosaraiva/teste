<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Disciplina</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="row">
    <div class="col-xs-10  col-sm-8 col-sm-offset-1 col-md-6 ">

        <div class="login-panel panel panel-default">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro disciplina</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="/disciplina" method="post" name="cadDisciplina"
                              id="cadDisciplina" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="nom_disciplina" id="nom_disciplina" required="required" class="form-control">
                                        {{ ($errors->has('nom_disciplina')) ? $errors->first('nom_disciplina') : '' }}
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
                                <th class="col-md-5"><strong>Nº</strong></th>
                                <th class="col-md-5"><strong>Nome</strong></th>
                            </tr>
                            </thead>
                            <tbody id="table">
                            @foreach($disciplinas as $disciplina)
                                <tr>
                                    <td class="col-md-5">{{ $disciplina->seq_disciplina }}</td>
                                    <td class="col-md-5">{{ $disciplina->nom_disciplina }}</td>
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
</body>
</html>
