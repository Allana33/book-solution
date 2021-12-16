create database athena 

default character set utf8mb4

default collate utf8mb4_unicode_ci;

use athena;

create table funcionario (
nome varchar(30) not null,
sobrenome varchar(20) not null,
email varchar(30), 
cpf char(11) not null, sexo enum ('m', 'f') not null,
cargo varchar(30),
data_admissao date not null
);

create table empresa (
id_empresa int primary key auto_increment not null,
cnpj char(14) not null, 
nome_empresa varchar(99) not null,
telefone char(14) not null,
email varchar(30) not null 
);

create table livro (
id_livro int primary key auto_increment,
titulo vachar(100) not null, autor vachar(30) not null, 
data_publicacao date not null,
idioma varchar(30) not null,
volume int, 
edicao int,
img_livro longblog not null,
data_registro date not null,
paginas int, 
descricao varchar(500),
status enum('d','i') not null
); 

create table autor(id_autor int primary key auto_increment, 
nome_autor varchar(50) not null,
nacionalidade varchar(40) not null
);

create table editora (
id_editora int primary key auto_increment,
nome_editora varchar(30) not null
);

create table genero( /* Genero seria muitos para muitos, então uma table somente para genero etc.. e fariamos uma relação */
id_genero primary key auto_increment, 
nome_genero varchar(30) not null,  
);

create table reserva (
id_reserva int primary key auto_increment,
data_reserva date not null,
prazo_reserva date not null,
id_cliente int,
foreign key (id_cliente) references cliente (id_cliente)
);

create table usuario (
id_usario int not null primary key auto_increment,
senha_usuario char(10) not null, 
nivel_acesso enum('a','u') not null,
situacao_usuario enum('b','d') not null
);

Create table cliente(
nome varchar(30) not null,
sobrenome varchar(30) not null,
cpf char(11) not null,
sexo enum('m', 'f')
data_cadastro date not null
);

create table genero_livro( --tabela relaçao
genero_id_livro int primary key auto_increment,
genero_livro id_livro int,
foreign key (id_livro) references livro (id_livro)
id_genero int,
foreign key (id_genero) references (id_genero) 
);

create table editora_livro(
editora_id_livro int primary key auto_increment
)



create table reserva_livro( --tabela relaçao
livro_id_reserva int primary key auto_increment,
id_livro int, 
foreign key (id_livro) references livro (id_livro),
id_reserva int, 
foreign key (id_reserva) references reserva (id_reserva)
);
 create table autor_livro( --tabela relaçao
autor_id_livro int primary key auto_increment,
id_livro int, 
foreign key (id_livro) references livro (id_livro),
id_autor int, 
foreign key (id_autor) references autor (id_autor)
 ); 