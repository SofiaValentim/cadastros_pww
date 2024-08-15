create database bd_loja;
use bd_loja;

create table tb_funcionario (
id_funcionario int primary key,
nm_funcionario varchar(45),
sb_funcionario varchar (45),
dt_nascimento date,
nm_cargo varchar (45),
vl_salario decimal(9,2),
dt_adimisâo date,
nm_senha text
);

create table cliente (
id_cliente int primary key,
nm_cliente varchar (45),
sb_cliente varchar (45),
nm_email varchar (45),
nr_tel varchar(20),
 nm_endereco varchar(200)
);

create table tb_fornecedor 
(
 id_fornecedor int primary key,
nm_fornecedor varchar (45),
nm_contato varchar (45),
nm_email varchar (45),
nr_tel varchar(20),
 nm_endereco varchar(200)
);

create table tb_categoria
(
id_categoria int primary key,
ds_categoria varchar (45),
nm_descricao  varchar (45));
 
create table tb_lançamentos
(
id_despesas int primary key,
ds_lancamentos varchar (45),
vl_lancamento decimal (9,2), 
nm_tipo  varchar (45),
data_lancamento date,
foreign key (fk_id_categoria) references tb_categoria (id_categoria),
foreign key (fk_id_funcionario) references tb_funcionario (id_funcionario));




