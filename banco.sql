drop table cadastro;
create table cadastro(
    id varchar(11) not null,
    nome varchar(30) NOT NULL,
    sobrenome varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    idade int NOT NULL,
    cpf  varchar(16) NOT NULL,
    rg varchar(12) NOT NULL,
    estadocivil varchar(18) NOT NULL,
    localizacao varchar(3) NOT NULL,
    profissao varchar(20) NOT NULL,
    sangue varchar(5) NOT NULL,
    pontos varchar(10) NOT NULL
);

    drop table teste;
    create table teste(
    id varchar(50)
);

CREATE TABLE sinais (
  sin_id int(11) NOT NULL,
  sin_data datetime NOT NULL ,
  sin_temp float NOT NULL,
  sin_umid float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;