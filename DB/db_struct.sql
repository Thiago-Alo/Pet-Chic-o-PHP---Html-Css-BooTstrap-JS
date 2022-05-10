drop table utilizador;
CREATE TABLE utilizador(
    id int primary key AUTO_INCREMENT,
    username varchar(50) not null UNIQUE,
    email varchar(50) not null UNIQUE,
    password varchar(50) not null
);

INSERT INTO utilizador VALUES(1,'admin','admin','pass');