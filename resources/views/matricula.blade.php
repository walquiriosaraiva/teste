<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Matrícula</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="row">
    <div class="col-xs-10  col-sm-8 col-sm-offset-1 col-md-6 ">

        <div class="login-panel panel panel-default">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro aluno</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="/matricula" method="post" name="cadAluno"
                              id="cadAluno" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Matrícula do aluno</label>
                                        <input type="text" name="num_matricula" id="num_matricula" required="required" class="form-control">
                                        {{ ($errors->has('num_matricula')) ? $errors->first('num_matricula') : '' }}
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Nome do aluno</label>
                                        <input type="text" name="nom_aluno" id="nom_aluno" required="required" class="form-control">
                                        {{ ($errors->has('nom_aluno')) ? $errors->first('nom_aluno') : '' }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" name="des_endereco" id="des_endereco" required="required" class="form-control">
                                        {{ ($errors->has('des_endereco')) ? $errors->first('des_endereco') : '' }}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Bairro</label>
                                        <input type="text" name="des_bairro" id="des_bairro" class="form-control">
                                        {{ ($errors->has('des_bairro')) ? $errors->first('des_bairro') : '' }}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>CEP</label>
                                        <input type="text" name="num_cep" id="num_cep" class="form-control" max="8">
                                        {{ ($errors->has('num_cep')) ? $errors->first('num_cep') : '' }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <input type="text" name="nom_cidade" id="nom_cidade" required="required" class="form-control">
                                        {{ ($errors->has('nom_cidade')) ? $errors->first('nom_cidade') : '' }}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Unidade da Federação</label>
                                        <select id="cod_unidade_federacao" name="cod_unidade_federacao" required="required" class="form-control">
                                            <option value="">--selecione--</option>
                                            <option value="AC">ACRE</option>
                                            <option value="AL">ALAGOAS</option>
                                            <option value="AP">AMAPA</option>
                                            <option value="AM">AMAZONAS</option>
                                            <option value="BA">BAHIA</option>
                                            <option value="CE">CEARA</option>
                                            <option value="DF">DISTRITO FEDERAL</option>
                                            <option value="ES">ESPIRITO SANTO</option>
                                            <option value="GO">GOIAS</option>
                                            <option value="MA">MARANHAO</option>
                                            <option value="MT">MATO GROSSO</option>
                                            <option value="MS">MATO GROSSO DO SUL</option>
                                            <option value="MG">MINAS GERAIS</option>
                                            <option value="PA">PARA</option>
                                            <option value="PB">PARAIBA</option>
                                            <option value="PR">PARANA</option>
                                            <option value="PE">PERNAMBUCO</option>
                                            <option value="PI">PIAUI</option>
                                            <option value="RJ">RIO DE JANEIRO</option>
                                            <option value="RN">RIO GRANDE DO NORTE</option>
                                            <option value="RS">RIO GRANDE DO SUL</option>
                                            <option value="RO">RONDONIA</option>
                                            <option value="RR">RORAIMA</option>
                                            <option value="SC">SANTA CATARINA</option>
                                            <option value="SP">SAO PAULO</option>
                                            <option value="SE">SERGIPE</option>
                                            <option value="TO">TOCANTINS</option>
                                        </select>
                                        {{ ($errors->has('cod_unidade_federacao')) ? $errors->first('cod_unidade_federacao') : '' }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" name="des_email" id="des_email" required="required" class="form-control">
                                        {{ ($errors->has('des_email')) ? $errors->first('des_email') : '' }}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data de Entrada na Escola</label>
                                        <input type="date" name="dat_entrada_escola" id="dat_entrada_escola" required="required" class="form-control">
                                        {{ ($errors->has('dat_entrada_escola')) ? $errors->first('dat_entrada_escola') : '' }}
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
                                <th class="col-md-2"><strong>Matrícula</strong></th>
                                <th class="col-md-4"><strong>Nome</strong></th>
                                <th class="col-md-4"><strong>E-mail</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($matriculas as $matricula)
                            <tr>
                                <td class="col-md-2">{{ $matricula->num_matricula }}</td>
                                <td class="col-md-6">{{ $matricula->nom_aluno }}</td>
                                <td class="col-md-6">{{ $matricula->des_email }}</td>
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
