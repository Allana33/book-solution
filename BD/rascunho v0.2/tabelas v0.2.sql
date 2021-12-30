create database athena 
default character set utf8mb4 
default collate utf8mb4_unicode_ci;

use athena;

# tabela da empresa retirado, mas, teria biblioteca dentro de uma empresa? biblioteca é uma empresa? A SER DISCUTIDO

create table biblioteca(
nome_biblioteca varchar(50) not null,
telefone char(14) not null,
email varchar(30) not null,
);

#tabela de dados funcionario empresa, biblioteca. 
#Talvez seja necessario apenas colocar nome e retirar sobrenome, colocando assim, nome e especificar para colocar nome completo!?

create table funcionario(
id_funcionario int not null primary key auto_increment,
nome_completo_funcionario varchar(50) not null,
cpf_funcionario char(11) not null, 
sexo enum ('m', 'f') not null,
cargo varchar(30),
data_admissao date not null
);

#tabela contato funcionario

create table contato_funcionario(
id_contato_funcionario int not null primary key auto_increment ,
telefone char(12),
celular char(14) not null,
email varchar(50) not null
)


create table contato_cliente(
id_contato_cliente int not null primary key auto_increment ,
telefone char(12),
celular char(14) not null,
email varchar(50) not null
); 

#tabela cliente.

create table cliente( 
id_cliente int not null primary key auto_increment,
sexo enum ('m', 'f') not null,
nome_completo_cliente varchar(50) not null,
cpf_cliente char(11) not null,
data_cadastro date not null
);

#tabela contato cliente

create table contato_cliente(
id_contato_cliente int not null primary key auto_increment ,
telefone char(12),
celular char(14) not null,
email varchar(50) not null
);

#usuario funcionario

create table usuario(
id_usuario int not null primary key auto_increment,
email_login varchar(30) not null,
senha_usuario char(10) not null, 
nivel_acesso enum('a','u') not null, 
situacao_usuario enum('b','d') not null
);



#tabela livro

create table livro(
id_livro int not null primary key auto_increment,
codigo char (4) unique,
titulo varchar(50) not null,  
data_publicacao date not null,
idioma varchar(30) not null,
volume int, 
edicao int,
data_registro date not null,
paginas int, 
descricao varchar(2440),
status enum('d','i') not null
);

# tabela autor

create table autor(
id_autor int not null primary key auto_increment, 
nome_autor varchar(50) not null,
nacionalidade varchar(40)
);

#tabela relacao autor

create table autor_livro(
autor_livro_id int not null primary key auto_increment
);

#tabela editora

create table editora(
id_editora int not null primary key auto_increment,
nome_editora varchar(30) not null
);

#tabela relacao editora

create table editora_livro( 
editora_id_livro int not null primary key auto_increment
);

#tabela genero

create table genero( 
id_genero int not null primary key auto_increment, 
tipo_genero varchar(30) not null  
);

#tabela relacao genero

create table genero_livro( 
genero_id_livro int not null primary key auto_increment
);

#tabela das reservas

create table reserva(
id_reserva int not null primary key auto_increment,
data_reserva date not null,
prazo_reserva date not null  
);

#tabela relacao reservas

create table reserva_livro( 
livro_id_reserva int not null primary key auto_increment
);


# tabela para a lista?

create table lista( 
id_lista int not null primary key auto_increment
);
