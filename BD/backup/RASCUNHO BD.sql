create database athena default character set utf8mb4 default collate utf8mb4_unicode_ci;

use athena;

#retira e criar uma tabela contato para fazer relacao

create table funcionarios(
id_funcionario int not null primary key auto_increment,
nome varchar(30) not null,
sobrenome varchar(20) not null,
email varchar(30) not null, 
cpf char(11) not null, 
sexo enum ('m', 'f') not null,
cargo varchar(30),
data_admissao date not null
);

#retirar na revisao de janeiro

create table empresa(
id_empresa int not null primary key auto_increment, 
cnpj char(14) not null, 
nome_empresa varchar(99) not null,
telefone char(14) not null,
email varchar(30) not null 
);

#usuario da reserva

#retira e criar uma tabela contato para fazer relacao

create table cliente( 
id_cliente int not null primary key auto_increment,
nome varchar(30) not null,
sobrenome varchar(30) not null,
cpf char(11) not null,
email varchar(30) not null, 
telefone char(11) not null,
data_cadastro date not null
);

create table livro(
id_livro int not null primary key auto_increment,
titulo varchar(100) not null,  
data_publicacao date not null,
idioma varchar(30) not null,
volume int, 
edicao int,
data_registro date not null,
paginas int, 
descricao varchar(244),
status enum('d','i') not null
); 

create table autor(
id_autor int not null primary key auto_increment, 
nome_autor varchar(50) not null,
nacionalidade varchar(40)
);

create table autor_livro( 
autor_id_livro int not null primary key auto_increment
);

create table editora(
id_editora int not null primary key auto_increment,
nome_editora varchar(30) not null
);

create table editora_livro( 
editora_id_livro int not null primary key auto_increment
);

create table genero( 
id_genero int not null primary key auto_increment, 
tipo_genero varchar(30) not null  
);

create table genero_livro( 
genero_id_livro int not null primary key auto_increment
);

#php calculo do prazo da reserva

create table reserva(
id_reserva int not null primary key auto_increment,
data_reserva date not null,
prazo_reserva date not null  
); 

create table reserva_livro( 
livro_id_reserva int not null primary key auto_increment
);

create table lista( 
id_lista int not null primary key auto_increment
);

#pensar sobre tipo de acesso

create table usuario(
id_usario int not null primary key auto_increment,
email_login varchar(30) not null,
senha_usuario char(10) not null, 
nivel_acesso enum('a','u') not null, 
situacao_usuario enum('b','d') not null
);

#fim das tabelas do banco de dados

#inicio de relacionamentos do banco de dados

#relacionamentos usuarios

alter table funcionarios add id_usuario_funcionario int not null;
alter table funcionarios add foreign key(id_usuario_funcionario) references usuario(id_usuario)
on delete cascade on update cascade;

alter table reserva add id_usuario_reserva int not null;
alter table reserva add foreign key(id_usuario_reserva) references usuario(id_usuario)
on delete cascade on update cascade;

alter table reserva add id_usuarioadm_reserva int not null;
alter table reserva add foreign key(id_usuarioadm_reserva) references usuario(id_usuario)
on delete cascade on update cascade;

#relacionamentos autor

alter table autor_livro add id_livro int not null;
alter table autor-livro add foreign key(id_livro) references livro(id_livro)
on delete cascade on update cascade;

alter table autor_livro add id_autor int not null;
alter table autor_livro add foreign key(id_autor) references autor(id_autor)
on delete cascade on update cascade;

#relacionamentos genero

alter table genero_livro add codigo_genero_livro int not null;
alter table genero_livro add foreign key(codigo_genero_livro) references genero(id_genero)
on delete cascade on update cascade;

alter table genero_livro add codigo_livro_genero int not null;
alter table genero_livro add foreign key(id_livro_genero) references livro(id_livro)
on delete cascade on update cascade;

#relacionamentos editora 

alter table editora_livro add id_editora int not null;
alter table editora-livro add foreign key(id_editora) references editora(id_editora)
on delete cascade on update cascade;

alter table editora-livro add id_livro int not null;
alter table editora-livro add foreign key(id_livro) references livro(id_livro)
on delete cascade on update cascade;

#relacionamentos lista

alter table lista add codigo_livro_lista int not null;
alter table lista add foreign key(codigo_livro_lista) references livro(codigo_livro)
on delete cascade on update cascade;

alter table lista add id_cliente_lista int not null;
alter table lista add foreign key(id_cliente_lista) references cliente(id_cliente)
on delete cascade on update cascade;
