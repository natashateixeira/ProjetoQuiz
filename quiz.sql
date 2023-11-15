create database quiz;

use quiz;

create table if not exists questoes(
id int primary key auto_increment,
nome varchar(120),
questao1 char(1),
questao2 char(1),
questao3 char(1),
questao4 char(1),
questao5 char(1),
questao6 char(1),
questao7 char(1),
questao8 char(1),
questao9 char(1),
questao10 char(1));

select * from questoes;
##drop database quiz