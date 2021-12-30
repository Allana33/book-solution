
#relacao funcionario usuario

alter table funcionario add id_usuario_funcionario int not null;
alter table funcionario add foreign key(id_usuario_funcionario) references usuario(id_usuario);

#relacao contato funcionario

alter table contato_funcionario add nome_funcionario varchar (50) not null;
alter table contato_funcionario add foreign key (nome_funcionario) references funcionario(nome_completo_funcionario);

#relacao contato cliente

alter table contato_cliente add nome_cliente varchar (50) not null;
alter table contato_cliente add foreign key (nome_cliente) references cliente(nome_completo_cliente);

