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
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="alert alert-warning"><strong>Média</strong></h3>
                        <table>
                            <thead>
                            <tr>
                                <th class="col-md-4"><strong>Disciplina</strong></th>
                                <th class="col-md-4"><strong>Matrícula/Aluno</strong></th>
                                <th class="col-md-2"><strong>Média</strong></th>
                                <th class="col-md-2"><strong>Resultado</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($medias as $media)
                            <tr>
                                <td class="col-md-6">{{ $media->nom_disciplina }}</td>
                                <td class="col-md-6">{{ $media->num_matricula }} - {{ $media->nom_aluno }}</td>
                                <td class="col-md-2">{{ $media->media }}</td>
                                @if ($media->media < 6)
                                    <td class="col-md-2"><strong class="alert-danger">Reprovado</strong></td>
                                @else
                                    <td class="col-md-2"><strong class="alert-success">Aprovado</strong></td>
                                @endif

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
