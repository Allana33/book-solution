#inicio de relacionamentos do banco de dados

#relacionamentos usuarios

alter table funcionarios add id_funcionario int not null;
alter table funcionarios add foreign key(id_funcionario) references usuario(id_usuario)
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

alter table genero_livro add id_genero int not null;
alter table genero_livro add foreign key(id_genero) references genero(id_genero)
on delete cascade on update cascade;

alter table genero_livro add id_livro int not null;
alter table genero_livro add foreign key(id_livro) references livro(id_livro)
on delete cascade on update cascade;

#relacionamentos editora 

alter table editora_livro add id_editora int not null;
alter table editora-livro add foreign key(id_editora) references editora(id_editora)
on delete cascade on update cascade;

alter table editora-livro add id_livro int not null;
alter table editora-livro add foreign key(id_livro) references livro(id_livro)
on delete cascade on update cascade;

#relacionamentos lista

alter table lista add id_livro int not null;
alter table lista add foreign key(id_livro) references livro(id_livro)
on delete cascade on update cascade;

alter table lista add id_usuario int not null;
alter table lista add foreign key(id_usuario) references livro(id_livro)
on delete cascade on update cascade;