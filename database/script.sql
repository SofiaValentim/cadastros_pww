DROP DATABASE IF EXISTS bd_loja;
CREATE DATABASE bd_loja;
USE bd_loja;

CREATE TABLE tb_cliente (
    id_cliente INT NOT NULL AUTO_INCREMENT,
    nm_cliente VARCHAR(30) NOT NULL,
    nm_sobrenome VARCHAR(30) NOT NULL,
    nm_email VARCHAR(100) NOT NULL,
    nr_telefone VARCHAR(11) NOT NULL,
    nm_endereco VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_cliente)
);

CREATE TABLE tb_fornecedor (
    id_fornecedor INT NOT NULL AUTO_INCREMENT,
    nm_fornecedor VARCHAR(50) NOT NULL,
    nm_contato VARCHAR(30) NOT NULL,
    nm_email VARCHAR(50) NOT NULL,
    nr_telefone VARCHAR(11) NOT NULL,
    nm_endereco VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_fornecedor)
);

CREATE TABLE tb_funcionario (
    id_funcionario INT NOT NULL AUTO_INCREMENT,
    nm_funcionario VARCHAR(60) NOT NULL,
    nm_cargo VARCHAR(30) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    nr_telefone VARCHAR(11) NOT NULL,
    nm_senha TEXT NOT NULL,
    dt_admissao DATE NOT NULL,
    PRIMARY KEY (id_funcionario)
);

CREATE TABLE tb_categoria (
    id_categoria INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    descricao VARCHAR(120) NULL,
    PRIMARY KEY (id_categoria)
);

CREATE TABLE tb_lancamento (
    id_lancamento INT NOT NULL AUTO_INCREMENT,
    valor DECIMAL(8, 2) NOT NULL,
    tipo TINYINT NOT NULL,
    data_lancamento DATE NOT NULL,
    descricao VARCHAR(300) NULL,
    fk_id_categoria INT NOT NULL,
    fk_id_funcionario INT NOT NULL,
    PRIMARY KEY (id_lancamento),
    FOREIGN KEY (fk_id_funcionario) REFERENCES tb_funcionario (id_funcionario),
    FOREIGN KEY (fk_id_categoria) REFERENCES tb_categoria (id_categoria)
);