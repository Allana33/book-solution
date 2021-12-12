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
email varchar(30) not null,  
);

create table livro (
id_livro int primary key auto_increment not null,
titulo vachar(100) not null, autor vachar(30) not null, 
data_publicacao date not null,
genero varchar(30) not null, /* Genero seria muitos para muitos, então uma table somente para genero etc.. e fariamos uma relação */
idioma varchar(30) not null,
volume int, 
edicao int,
img_livro longblog not null,
data_registro date not null,
paginas int, 
descricao varchar(500),
status enum('d','i') not null
); 

create table editora (
id_editora int primary key auto_increment not null,
nome_editora varchar(30) not null/*nacionalidade ou contato como opção*/
);

create table reserva (
id_reserva int primary key auto_increment not null,
data_reserva date not null,
prazo_reserva date not null,
situacao_reserva enum('x','x') not null, 
/*ponto a ser discutido na reunião*/id_livro int, 
constraint fk_idlivro foreign key (id_livro) references livro (id_livro) /*vai ter chave estrangeira para fazer ligação de usuario?*/
);

create table agendamento (
id_agendamento int primary key auto_increment not null,
data_retirada date, 
data_entrega date,
id_livro int,
constraint fk_idlivro foreign key (id_livro) references livro (id_livro) /*vai ter chave estrangeira para fazer ligação de usuario?*/
);

create table usuario (
id_usario int not null primary key auto_increment,
senha_usuario char(10) not null, 
nivel_acesso enum('a','u') not null,
situacao_usuario enum('b','d') not null
);


