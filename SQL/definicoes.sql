/* criacao do banco */
CREATE DATABASE treinamento CHARSET = UTF8 COLLATE = utf8_general_ci;

/* craicao das tabelas */
CREATE TABLE servicos
(id INT(11) NOT NULL AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 situacao ENUM('A', 'I') NOT NULL,
 PRIMARY KEY (id)
);

CREATE TABLE produtos
(id INT(11) NOT NULL AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 situacao ENUM('A', 'I') NOT NULL,
 PRIMARY KEY (id)
);

CREATE TABLE produto_servico
(id_servico INT(11) NOT NULL,
 id_produto INT(11) NOT NULL,
 CONSTRAINT fk_servico FOREIGN KEY (id_servico) REFERENCES servicos (id),
 CONSTRAINT fk_produto FOREIGN KEY (id_produto) REFERENCES produtos (id)
);

CREATE TABLE beneficiarios
(id INT(11) NOT NULL AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 documento CHAR(14) NOT NULL,
 logradouro VARCHAR(100) NOT NULL,
 numero VARCHAR(50) NOT NULL,
 bairro VARCHAR(100) NOT NULL,
 cidade VARCHAR(100) NOT NULL,
 uf CHAR(2) NOT NULL,
 telefone VARCHAR(50),
 celular VARCHAR(50),
 situacao ENUM('A', 'I') NOT NULL,
 PRIMARY KEY (id)
);

CREATE TABLE veiculos
(id INT(11) NOT NULL AUTO_INCREMENT,
 placa CHAR(7),
 chassi VARCHAR(100) NOT NULL,
 montadora VARCHAR(100) NOT NULL,
 modelo VARCHAR(100) NOT NULL,
 ano_fabricacao CHAR(4) NOT NULL,
 ano_modelo CHAR(4) NOT NULL,
 id_beneficiario INT(11) NOT NULL,
 situacao ENUM('A', 'I') NOT NULL,
 PRIMARY KEY (id),
 CONSTRAINT fk_beneficiario FOREIGN KEY (id_beneficiario) REFERENCES beneficiarios (id)
);

CREATE TABLE produto_veiculo
(id_produto INT(11) NOT NULL,
 id_veiculo INT(11) NOT NULL,
 situacao ENUM('A', 'I') NOT NULL,
 CONSTRAINT fk_produto_veiculo FOREIGN KEY (id_produto) REFERENCES produtos (id),
 CONSTRAINT fk_veiculo FOREIGN KEY (id_veiculo) REFERENCES veiculos (id)
);
