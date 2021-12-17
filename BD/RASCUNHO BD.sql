create database athena 

default character set utf8mb4

default collate utf8mb4_unicode_ci;

use athena;

create table funcionarios (
nome varchar(30) not null,
sobrenome varchar(20) not null,
email varchar(30) not null, 
cpf char(11) not null, sexo enum ('m', 'f') not null,
cargo varchar(30),
data_admissao date not null
);

create table empresa (
cnpj char(14) not null, 
nome_empresa varchar(99) not null,
telefone char(14) not null,
email varchar(30) not null, 
);

create table livro (
id_livro int primary key auto_increment,
titulo vachar(100) not null,  
data_publicacao date not null,
idioma varchar(30) not null,
volume int, 
edicao int,
data_registro date not null,
paginas int, 
descricao varchar(244),
status enum('d','i') not null
); 

create table autor(id_autor int primary key auto_increment, 
nome_autor varchar(50) not null,
nacionalidade varchar(40)
);

create table autor_livro( 
autor_id_livro int primary key auto_increment

create table editora (
id_editora int primary key auto_increment,
nome_editora varchar(30) not null
);

create table editora_livro( 
editora_id_livro int primary key auto_increment
);

create table genero( 
id_genero primary key auto_increment, 
tipo_genero varchar(30) not null  
);

create table genero_livro( 
genero_id_livro int primary key auto_increment
);

create table reserva (
id_reserva int primary key auto_increment,
data_reserva date not null,
prazo_reserva date not null
);

create table reserva_livro( 
livro_id_reserva int primary key auto_increment

create table usuario (
id_usario int not null primary key auto_increment,
email_login varchar(30) not null,
senha_usuario char(10) not null, 
nivel_acesso enum('a','u') not null,
situacao_usuario enum('b','d') not null
);

Create table cliente(id_cliente int primary key auto_increment,
nome varchar(30) not null,
sobrenome varchar(30) not null,
cpf char(11) not null,
email varchar(30) not null,
telefone char(11) not null,
data_cadastro date not null
);

--fim tabelas do banco de dados

-- inicio de relacionamentos

 --tabela relacao / genero livro/livro
create table genero_livro(
genero_id_livro int primary key auto_increment not null,
genero_livro id_livro int,
foreign key (id_livro) references livro (id_livro)
id_genero int,
foreign key (id_genero) references (id_genero) 
);

 --tabela relacao reserva_livro/ livro 
create table reserva_livro(
livro_id_reserva int primary key auto_increment,
id_livro int, 
foreign key (id_livro) references livro (id_livro),
id_reserva int, 
foreign key (id_reserva) references reserva (id_reserva)
);

 --tabela relacao autor/livro
 create table autor_livro(
autor_id_livro int primary key auto_increment,
id_livro int, 
foreign key (id_livro) references livro (id_livro),
id_autor int, 
foreign key (id_autor) references autor (id_autor)
 );

--relacionamento de reserva
id_cliente int,  --chave estrangeira vai ficar na tabela relacionamentos
foreign key (id_cliente) references cliente (id_cliente)