drop database if exists Prova2;
create database if not exists Prova2;
use Prova2;

drop table if exists fluxo_caixa;
create table fluxo_caixa(
	id int primary key auto_increment,
    data date,
    tipo varchar(10),
    valor decimal(10,2),
    historico varchar(150),
    cheque varchar(3)
);