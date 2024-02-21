Base de dados


CREATE TABLE conta
(
    login varchar(30),
    senha varchar(10),
    nomecompleto varchar(60),
    email varchar(60),
    telefone int
);

CREATE TABLE newsletter
(
    email varchar(60)
);

CREATE TABLE pergunta
(
    nomeDosPais varchar(90),
    nomeDaCrianca varchar(60),
    email varchar(60),
    idade int,
    mensagem varchar(100)
);

CREATE TABLE professor
(
    nome varchar(60),
    formacao varchar(50),
    tempoExperiencia varchar(20),
    escolaAnterior varchar(60),
    turnoDisponivel varchar(10)
)