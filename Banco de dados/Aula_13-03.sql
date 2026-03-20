create table FILME(
 id_filme int primary key auto_increment,
 titulo varchar(100) not null,
 genero varchar(50) not null,
 ano_lancamento int not null,
 duracao int not null,
 classificacao varchar(10) not null
);

desc FILME;

insert into FILME(titulo,genero,ano_lancamento,duracao,classificacao)
values(
 'Matrix',
 'Ficção cientifica',
  1999,
  136,
 '14'
);

insert into FILME(titulo,genero,ano_lancamento,duracao,classificacao)
values(
 'Titanic',
 'Romance',
  1997,
  195,
 '12'
);

insert into FILME(titulo,genero,ano_lancamento,duracao,classificacao)
values(
 'Vingadores: Ultimato',
 'Ação',
  2019,
  181,
 '12'
);

insert into FILME(titulo,genero,ano_lancamento,duracao,classificacao)
values(
 'O Rei Leão',
 'Animação',
  1994,
  88,
 'Livre'
);

insert into FILME(titulo,genero,ano_lancamento,duracao,classificacao)
values(
 'Coringa',
 'Drama',
  2019,
  122,
 '16'
);

select * from FILME;

update FILME
SET duracao = 194
where titulo = 'Titanic';

update FILME
SET classificacao = 18
where titulo = 'Coringa';

update FILME
SET genero = 'Ação/Ficção Cientifica'
where titulo = 'Matrix';

select * from FILME;

delete from FILME
where ano_lancamento = '2019';

select * from FILME;

truncate FILME;

show tables;
