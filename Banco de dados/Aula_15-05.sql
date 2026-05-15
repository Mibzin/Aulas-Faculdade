
-- SELECT TRIM('  Texto ');

-- SELECT ROUND(12.3456,  2); -- arredondamento

-- SELECT TRUNCATE(12.389, 1); -- valor exato

-- SELECT MOD(10, 3); -- resto divisão

-- SELECT POWER(4, 3); -- número elevado

-- SELECT SQRT(81); -- raiz quadrada

-- SELECT FLOOR(7.99);

-- SELECT NOW();

-- SELECT DATE_FORMAT(NOW(), '%d/%m/%Y %H:%i') AS "data/hora atual";

create table funcionario(
 id_funcionario int not null primary key auto_increment,
 nome varchar (100) not null,
 salario decimal (10,2) not null,
 departamento varchar(40) not null,
 dependente int check (dependente>=0),
 dt_nascimento date not null
);
-- Inserções de dados
insert into funcionario (nome, salario, departamento,dt_nascimento) 
values ('Astrogildo',2000,'RH','1971-02-17');
insert into funcionario (nome, salario, departamento,dt_nascimento,dependente) 
values ('Irene',2000,'RH','1978-05-27',2);
insert into funcionario (nome, salario, departamento,dt_nascimento,dependente) 
values ('Perla',2200,'RH','1978-09-01',1);

insert into funcionario (nome, salario, departamento,dt_nascimento,dependente) 
values ('Manuela',5500,'TI','1988-03-07',1);
insert into funcionario (nome, salario, departamento,dt_nascimento,dependente) 
values ('Roberta',4500,'TI','1987-09-12',2);
insert into funcionario (nome, salario, departamento,dt_nascimento,dependente) 
values ('Ramon',4200.30,'TI','1988-12-22',3);

insert into funcionario (nome, salario, departamento,dt_nascimento,dependente) 
values ('Astolfo',7800.55,'DIRETORIA','1979-03-15',3);
insert into funcionario (nome, salario, departamento,dt_nascimento,dependente) 
values ('Mariana',7800.55,'DIRETORIA','1975-03-15',4);

insert into funcionario (nome, salario, departamento,dt_nascimento) 
values ('Anacleto',3500,'COMERCIAL','1979-09-25');
insert into funcionario (nome, salario, departamento,dt_nascimento,dependente) 
values ('Mariana',3600,'COMERCIAL','1979-07-22',2);

SELECT * from funcionario;

SELECT count(*) from funcionario where id_funcionario >=4;

SELECT nome from funcionario order by nome;

SELECT min(nome) as min, max(nome) as max from funcionario;

SELECT dt_nascimento from funcionario order by dt_nascimento;

SELECT min(dt_nascimento) as min, max(dt_nascimento) as max from funcionario;

SELECT sum(salario) as folha_pagamento, avg(salario) from funcionario;

SELECT departamento,
count(departamento) as count, 
max(salario) as max, 
min(salario) as min
from funcionario 
group by departamento;

SELECT departamento,
count(departamento) as count, 
max(salario) as max, 
min(salario) as min
from funcionario 
group by departamento
having count(departamento)=3;

SELECT distinct departamento from funcionario;



