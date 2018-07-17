use teste;

create table tb_matricula (
seq_matricula integer auto_increment primary key,
num_matricula varchar(20),
nom_aluno varchar(200),
des_endereco varchar(200),
des_bairro varchar(200),
num_cep varchar(8),
nom_cidade varchar(100),
cod_unidade_federacao varchar(2),
des_email varchar(200),
dat_entrada_escola timestamp
);

create table tb_disciplina(
seq_disciplina integer auto_increment primary key,
nom_disciplina varchar(200)
);

create table tb_nota_disciplina(
  seq_nota_disciplina integer auto_increment primary key,
  seq_matricula integer,
  seq_disciplina integer,
  num_nota decimal
);

ALTER TABLE tb_nota_disciplina ADD CONSTRAINT id_fk_matricula FOREIGN KEY(seq_matricula) REFERENCES tb_matricula (seq_matricula);
ALTER TABLE tb_nota_disciplina ADD CONSTRAINT id_fk_disciplina FOREIGN KEY(seq_disciplina) REFERENCES tb_disciplina (seq_disciplina);
