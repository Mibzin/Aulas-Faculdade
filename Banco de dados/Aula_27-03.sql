CREATE table cliente(
	id int primary key AUTO_INCREMENT,
  	nome varchar(10),
  	email varchar(10)
);

desc cliente;

alter table cliente add (cpf char(14) not null unique); -- adiciona uma coluna

select * from cliente; -- dados da tabela 

desc cliente; -- descrição da tabela

alter table cliente drop email; -- deleta uma coluna

desc cliente;

alter table cliente add (email varchar(100) not null unique);
alter table cliente modify column nome varchar(45) not null; -- modifica dados de uma coluna

alter table cliente rename column email to e_mail; -- renomeia nome da coluna

desc cliente;

alter table cliente add column nota decimal(3,1) not null; -- decimal define quantidade de casas
alter table cliente add CONSTRAINT nota_0a10 check (nota between 0 and 10);
-- check faz a restrição
-- between e and define as restrições, >=0 and <=10 também funciona

desc cliente;

insert into cliente(nome,cpf,e_mail,nota)
values ('Neymar','123.456.789-10','Ney10@gmail.com', 10);

select * from cliente;

-- rename table cliente to clientes; renomeia a tabela
-- drop table clientes; apaga a tabela
-- truncate clientes; deleta os dados da tabela




