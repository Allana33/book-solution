
#relacao funcionario usuario do sistema

alter table funcionario add id_usuario_funcionario int not null;
alter table funcionario add foreign key(id_usuario_funcionario) references usuario(id_usuario)
on delete cascade on update cascade;

#relacao contato funcionario

alter table contato_funcionario add nome_funcionario varchar (50) not null;
alter table contato_funcionario add foreign key (nome_funcionario) references funcionario(nome_completo_funcionario);

#relacao contato cliente

alter table contato_cliente add nome_cliente varchar (50) not null;
alter table contato_cliente add foreign key (nome_cliente) references cliente(nome_completo_cliente);

#relacao reserva cliente

alter table cliente add id_reserva_cliente int not null;
alter table cliente add foreign key(id_reserva_cliente) references reserva(id_reserva)
on delete cascade on update cascade;

#relacionamentos autor livro

alter table autor_livro add codigo_autor_livro int not null;
alter table autor_livro add foreign key(codigo_autor_livro) references autor(id_autor)
on delete cascade on update cascade;

alter table autor_livro add codigo_livro_autor int not null;
alter table autor-livro add foreign key(codigo_livro_autor) references livro(id_livro)
on delete cascade on update cascade;