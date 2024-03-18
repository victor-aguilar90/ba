create database if not exists loja;
use loja;

create table if not exists Produto (
    id_prod int auto_increment,
    nome_prod varchar(35) not null,
    desc_prod varchar(255),
    data_prod date,
    valor_unit_prod decimal(6,2),
    primary key (id_prod)
)