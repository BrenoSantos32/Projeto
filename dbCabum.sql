CREATE DATABASE dbPetShop;



USE dbPetShop;



CREATE TABLE servicos(
	codServico		INT AUTO_INCREMENT PRIMARY KEY                  NOT NULL,
	nome			VARCHAR(50)					NOT NULL,
	descricao		VARCHAR(200)					NULL,
	valorServico	DECIMAL(9,2)						NOT NULL
);

CREATE TABLE funcionario(
	codFuncionario	INT AUTO_INCREMENT PRIMARY KEY                          NOT NULL,
	dataCadastro	CHAR(10)						NOT NULL,
	dataNascimento  CHAR(10)						NOT NULL,
	nome			VARCHAR(30)					NOT NULL,
	rg				CHAR(8)					NOT NULL,
	telefone		CHAR(11)					NULL,
	email			VARCHAR(50)					NOT NULL,
        senha			VARCHAR(50)					NOT NULL,
	endereco		VARCHAR(50)					NOT NULL,
	cidade			VARCHAR(15)					NOT NULL,
        bairro			VARCHAR(50)					NOT NULL,
	estado			VARCHAR(15)					NOT NULL,
	pais			VARCHAR(20)					NOT NULL,
	codTipo			CHAR(1)						NOT NULL
);

CREATE TABLE cliente(
	codCliente		INT AUTO_INCREMENT PRIMARY KEY                  NOT NULL,
	dataCadastro	CHAR(10)						NOT NULL,
	dataNascimento	CHAR(10)						NOT NULL,
	nome			VARCHAR(30)					NOT NULL,
	rg				CHAR(8)					NOT NULL,
	telefone		CHAR(11)					NULL,
	email			VARCHAR(50)					NOT NULL,
	endereco		VARCHAR(50)					NOT NULL,
	cidade			VARCHAR(50)					NOT NULL,
    bairro			VARCHAR(50)					NOT NULL,
	estado			VARCHAR(50)					NOT NULL,
	pais			VARCHAR(20)					NOT NULL
		
);

CREATE TABLE animal(
	codAnimal			INT AUTO_INCREMENT PRIMARY KEY		NOT NULL,
	nome				VARCHAR(30)							NOT NULL,
	anoNascimento		INT									NOT NULL,
	peso				FLOAT								NOT NULL,
	grupo				VARCHAR(30)							NOT NULL,
	raca				VARCHAR(30)							NOT NULL,
	genero				VARCHAR(30)							NOT NULL,
	vacinacao			CHAR(3)								NOT NULL,
	comportamento		VARCHAR(30)							NOT NULL,
	codCliente_cliente	INT,
		FOREIGN KEY (codCliente_cliente)
			REFERENCES cliente(codCliente)

);


CREATE TABLE execucaoAgendamento(
	codAgendamento				INT AUTO_INCREMENT PRIMARY KEY		NOT NULL,
	codAnimal_animal			INT,	
	codServico_servicos			INT,
	codVeterinario_veterinario	INT,
	dataP						CHAR(10) NOT NULL,
	dataE						CHAR(10) NOT NULL,
	horaP						CHAR(5) NOT NULL,
	horaE						CHAR(5) NOT NULL,

		FOREIGN KEY (codVeterinario_veterinario)
			REFERENCES funcionario (codFuncionario),

		FOREIGN KEY (codServico_servicos)
			REFERENCES servicos(codServico),

		FOREIGN KEY (codAnimal_animal)
			REFERENCES animal(codAnimal)

);

insert into cliente(dataCadastro,dataNascimento,nome,rg,telefone,email,endereco,cidade,bairro,estado,pais)
	values('222222','1232132','maicao','213131','13131','rafael@gmail.com','rua','bh','aa','mg','br');
insert into cliente(dataCadastro,dataNascimento,nome,rg,telefone,email,endereco,cidade,bairro,estado,pais)
    values('3333','3333','jefferson','11111','1111','ravaeu@gmail.com','aaa','aa','aa','aa','aa');
    
-- INSERT INTO cliente (dataCadastro,dataNascimento,nome,rg,telefone,email,endereco,bairro,cidade,estado,pais) 
-- VALUES ('2018/11/20','2018/11/20','bbbb','99999999','9999999','bbbbbb','bbbbbb','bbbb','bbbb','bbbbb','bbbb')

    
    
  
