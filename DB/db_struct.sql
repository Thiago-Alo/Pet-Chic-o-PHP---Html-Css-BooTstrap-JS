drop table utilizador;
drop table tipoutilizador;

create table tipoUtilizador(
    id int PRIMARY key auto_increment,
    descricao varchar(20)
);
CREATE TABLE utilizador(
    email varchar(150) primary key,
    username varchar(50) not null,
    password varchar(50) not null,
    idTipoUtilizador int,

    FOREIGN key (idTipoUtilizador) REFERENCES tipoUtilizador(id)
    );


INSERT INTO tipoUtilizador (descricao) VALUES ('Administrador');
INSERT INTO tipoUtilizador (descricao) VALUES ('Utilizador');
INSERT INTO utilizador VALUES('admin@admin.com','admin','pass',1);
INSERT INTO utilizador VALUES('user@user.com','user','pass',2);