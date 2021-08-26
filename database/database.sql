-- creamos la base de datos
create DATABASE  loginbenjamin;
-- utilizamos la base de datos creada
use loginbenjamin;
create table usuarios(
id    int(255)  AUTO_INCREMENT   NOT NULL,  
nombre  VARCHAR(100) not null,
apellidos   varchar(255),
email       varchar(255) not null,
password    varchar(255) not null,
rol         varchar(20),
constraint pk_usuarios primary key (id),
constraint uq_email unique (email)
)engine=InnoDB;

INSERT INTO usuarios VALUES(null,'admin','admin','admin@admin.com','12345678','admin',null);


