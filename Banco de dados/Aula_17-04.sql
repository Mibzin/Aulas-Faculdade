create table produto(
 id_prod int primary key auto_increment,
 nome varchar (100) not null,
 preco decimal (7,2) not null,
 categoria varchar(40) not null,
 estoque int not null,
 dt_criacao date);
 
insert into produto (nome, preco, categoria,estoque) values ('HD Ssd 480gb',309.50,'ssd',10);
insert into produto (nome, preco, categoria,estoque) values ('HD Ssd 240gb',188.00,'ssd',15);
insert into produto (nome, preco, categoria,estoque, dt_criacao) values ('HD Ssd 100gb',135.00,'ssd',20,'2023-10-26');
insert into produto (nome, preco, categoria,estoque, dt_criacao) values ('Pen Drive 32GB',24.90,'pendrive',50,'2023-10-27');
insert into produto (nome, preco, categoria,estoque, dt_criacao) values ('Pen Drive 128GB',109.53,'pendrive',50,'2023-10-27');
insert into produto (nome, preco, categoria,estoque, dt_criacao) values ('Mouse Gamer 12.000 DPI ',159.99,'mouse',7,'2023-10-28');
insert into produto (nome, preco, categoria,estoque, dt_criacao) values ('Mouse Gamer Pro M7 Rgb ',51.24 ,'mouse',9,'2023-10-28');
insert into produto (nome, preco, categoria,estoque, dt_criacao) values ('Teclado Semi Mecânico Gamer Profissional USB Abnt2 Iluminado Led Rgb',41.90 ,'teclado',12,'2023-10-29');
insert into produto (nome, preco, categoria,estoque, dt_criacao) values ('Teclado Gamer Cyclosa + Mouse Gamer Abyssus 1.800 DPI',123.67 ,'teclado',4,'2023-10-29');
insert into produto (nome, preco, categoria,estoque, dt_criacao) values ('Fone De Ouvido Headset Gamer P2 Para Ps4 Xbox One Notebook Macbook Com Microfone',79.29 ,'fone',25,'2023-10-29'); 

select * from produto;

select nome, categoria
from produto
order by nome desc; -- order by campo decrescente

select nome AS "Produto", preco AS "Preço do Produto"
from produto;

select nome as "Produto", preco as  "Valor de venda", categoria as "Categorias" 
from produto 
order by preco;

select distinct categoria from produto -- distinct serve para valores repitidos
order by categoria;

select nome, preco, preco+10, categoria from produto;

select nome as "Produto",preco as "Preço original", preco*1.1 as "Aumento 10%",preco*0.9 as "Desconto 10%"
from produto;

select nome, preco, categoria, dt_criacao
from produto
where dt_criacao = '2023-10-29';

select * from produto 
where dt_criacao is null;





