drop database pruebastecnicas;
create database pruebastecnicas;
use pruebastecnicas;

create table estudiante(
id_estudiante int primary key auto_increment not null,
nombre varchar(64) not null,
apellido varchar(64) not null,
email varchar(100),
sexo varchar(15) not null,
fecha_nacimiento date not null,
foto_url varchar(150),
activo boolean
);

create table convocatoria(
id_convocatoria int primary key not null auto_increment,
nombre varchar(64) not null,
municipio varchar(64) not null,
descripcion text
);

create table rol(
id_rol int primary key auto_increment not null,
nombre varchar(100) not null,
descripcion text
);

create table preguntas(
id_pregunta int primary key auto_increment not null,
id_estudiante int not null,
id_convocatoria int not null,
titulo varchar(250) not null,
descripcion text,
fecha_creacion date not null,
activo boolean,
foreign key (id_estudiante) references estudiante(id_estudiante),
foreign key (id_convocatoria) references convocatoria(id_convocatoria)
);

create table respuestas(
id_respuesta int primary key auto_increment not null,
id_pregunta int not null,
id_estudiante int not null,
respuesta varchar(250) not null,
descripcion text not null,
valoracion int,
foreign key (id_pregunta) references preguntas(id_pregunta),
foreign key (id_estudiante) references estudiante(id_estudiante)
);

create table login(
id_usuario int primary key auto_increment not null,
id_rol int not null,
username varchar(100) not null,
password varchar(100) not null,
foreign key (id_rol) references rol(id_rol)
);

/*** Roles de sistema ***/
insert into rol values (1, 'Administrador', 'El rol que tiene todos los permisos en el sistema');
insert into rol values (2, 'Estudiante', 'El rol que solo se encargara de contestar las preguntas');
insert into rol values (3, 'Docente', 'El rol que puede contestar preguntas y ademas tiene más privilegios');

/*** Personas asignadas por defecto**/
insert into login values (null, 1, 'ivannia.portillo@sv.cds', MD5('html5'));
insert into login values (null, 1, 'kevin.martinez@sv.cds', MD5('html5'));
insert into login values (null, 1, 'maria.estrada@sv.cds', MD5('html5'));
insert into login values (null, 2, 'usuario@sv.cds', MD5('usuario2019'));