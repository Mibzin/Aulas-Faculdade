-- comentario
create table CLIENTE(
  id_cliente int primary key auto_increment,
  nome varchar(30) not null,
  email varchar(50) not null unique,
  cpf char(14) not null unique   -- nnn.nnn.nnn-nn
);

CREATE TABLE PRODUTO(
	id_produto int PRIMARY key AUTO_INCREMENT,
  nome varchar(100) not null,
  valor decimal(6,2) not null check(valor > 0),-- check, não pode ser valor negativo 
  obs varchar(200)
);
-- VALOR 9999.99
-- desc CLIENTE;
-- desc PRODUTO;
-- INSERT INTO Nome_Tabela (coluna1, coluna2, colunaN)
--       VALUES (valor1, valor2, valorN);


insert into CLIENTE(nome,email,cpf)
values ('Neymar da Silva Santos Júnior','Neymar10@gmail.com','985.838.414-11');

select * from CLIENTE;   

insert into PRODUTO (nome, valor, obs)
values ('Chuteira',700.10,'Puma');

insert into PRODUTO (nome,valor,obs)
values ('Camisa SantosFC',450.00,'Charlie Brown Jr');


select * from PRODUTO;
