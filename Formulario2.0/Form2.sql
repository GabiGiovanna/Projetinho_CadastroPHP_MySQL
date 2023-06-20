create database formulario2; 

use formulario2;

create table cadastro2(
id int not null primary key auto_increment,
usuario varchar(30) not null,
senha varchar(10) not null,
nome varchar(100),
dt_nasc date

);

drop table cadastro2;

truncate table cadastro2;

select * from cadastro2;