
#RELACAO FUNCIONARIO PARA USUARIO.

alter table funcionario add id_usuario_funcionario int not null;
alter table funcionario add foreign key(id_usuario_funcionario) references usuario(id_usuario);

alter table contato_funcionario add  int not null;