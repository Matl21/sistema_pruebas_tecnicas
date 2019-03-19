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
descripcion text
);

create table rol(
id_rol int primary key auto_increment not null,
nombre varchar(100) not null,
descripcion text
);

create table preguntas(
id_pregunta int primary key auto_increment not null,
id_convocatoria int not null,
titulo varchar(250) not null,
descripcion text,
etapa int not null,
fecha_creacion date not null,
activo boolean,
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

create table estudiante_convocatoria(
id_convocatoria int not null,
id_estudiante int not null,
municipio varchar(64) not null,
lugar varchar(64) not null,
foreign key (id_estudiante) references estudiante(id_estudiante),
foreign key (id_convocatoria) references convocatoria(id_convocatoria)
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

/***** Convocatorias ****/
insert into convocatoria values (1, 'Desarrollador de aplicaciones Web en C# Usando ASP.net MVC', null);
insert into convocatoria values (2, 'Desarrollador de aplicaciones Móviles en C# Xamarin ', null);
insert into convocatoria values (3, 'Diseñador de Páginas Web', null);
insert into convocatoria values (4, 'Tester de Software', null);
insert into convocatoria values (5, 'Desarrollador de aplicaciones Web en JAVA', null);
insert into convocatoria values (6, 'Desarrollador de aplicaciones Web en PHP', null);

/****** Datos de prueba de estudiantes *****/
insert into estudiante values (null, 'Ivannia', 'Portillo', 'ivannia.portillo@sv.cds','Femenino','1996-02-23', null, true);
insert into estudiante values (null, 'Maria', 'Estrada', 'maria.estrada@sv.cds','Femenino','1996-02-23', null, true);
insert into estudiante values (null, 'Kevin', 'Martinez', 'kevin.martinez@sv.cds','Masculino','1996-02-23', null, true);
insert into estudiante values (null, 'José Alfonzo', 'Magaña Portillo', 'jose.magana@sv.cds','Masculino','1996-02-23', null, true);
insert into estudiante values (null, 'Miguel Angel', 'Menjivar Lemus', 'miguel.menjivar@sv.cds','Masculino','1995-06-17', null, true);
insert into estudiante values (null, 'Josselyn Maria', 'Valencia Esquivel', 'josselyn.valencia@sv.cds','Femenino','1998-12-03', null, true);
insert into estudiante values (null, 'Andrea Alejandra', 'Zaldivar Lopez', 'andrea.zaldivar@sv.cds','Femenino','1997-08-13', null, true);
insert into estudiante values (null, 'Luis Armando', 'Medica Carrasco', 'luis.medina@sv.cds','Masculino','1994-06-25', null, true);

/******** Preguntas a realizar ***********/
/**MVC**/
insert into preguntas values (null,1,'Elaborar la sintaxis de un pseudocódigo según la nomenclatura preestablecida ', null,1,'2019-03-18',1);
insert into preguntas values (null,1,'Detectar los posibles errores en la ejecución de un pseudocódigo usando un software compilador  ', null,1,'2019-03-18',1);
insert into preguntas values (null,1,'Elaborar diagramas de flujo utilizando simbología de procesos ', null,1,'2019-03-18',1);
insert into preguntas values  (null,1,'¿Cuáles son las posibles causas que no permiten generar los resultados esperados al ejecutar un diagrama de flujo de un proceso matemático usando un software compilador?',null,1,'2019-03-18',1);

insert into preguntas values (null,1,'Identificar la sintaxis del lenguaje C#', null,2,'2019-03-18',1);
insert into preguntas values (null,1,'Resolver operaciones matemáticas básicas en C#. ', null,2,'2019-03-18',1);
insert into preguntas values (null,1,'Elaborar soluciones a problemas básicos en C#', null,2,'2019-03-18',1);
insert into preguntas values (null,1,'¿Por qué es necesario crear métodos o funciones si podemos hacer el mismo proceso dentro del flujo del programa?', null,2,'2019-03-18',1);

insert into preguntas values (null,1,'Identificar la sintaxis de SQL', null,3,'2019-03-18',1);
insert into preguntas values (null,1,'Diferenciar entre los tipos de datos que utiliza una Base de Datos', null,3,'2019-03-18',1);
insert into preguntas values (null,1,'Identificar las propiedades de las bases de datos', null,3,'2019-03-18',1);
insert into preguntas values (null,1,'¿Cuál es el resultado de coloca primero la creación de las tablas con la descripción de los campos y luego la línea de código donde se crean la base de datos en un script de T-SQL?', null,3,'2019-03-18',1);

insert into preguntas values (null,1,'Configurar correctamente el uso de los NameSpaces .', null,4,'2019-03-18',1);
insert into preguntas values (null,1,'Declarar Variables y tipos de datos', null,4,'2019-03-18',1);
insert into preguntas values (null,1,' Implementar Métodos dentro del código del proyecto', null,4,'2019-03-18',1);
insert into preguntas values (null,1,'¿Qué pasaría si instanciamos un objeto a partir de una clase en la cual las propiedades no se declaran tipo public?', null,4,'2019-03-18',1);

/*
insert into preguntas values (null,1,'Identificar los conceptos básicos de la calidad del software', null,5,'2019-03-18',1);
insert into preguntas values (null,1,'Interpretar el código de un programa existente', null,5,'2019-03-18',1);
insert into preguntas values (null,1,'Utilizar herramientas para tomar apuntes', null,5,'2019-03-18',1);
insert into preguntas values (null,1,'¿Justifique para qué se realiza la documentación del código y cuáles son los tipos de comentarios que podemos aplicar a un programa?', null,5,'2019-03-18',1);
*/

/**xamari**/
insert into preguntas values (null,2,'Elaborar la sintaxis de un pseudocódigo según la nomenclatura preestablecida', null,1,'2019-03-18',1);
insert into preguntas values (null,2,'Detectar los posibles errores en la ejecución de un pseudocódigo usando un software compilador ', null,1,'2019-03-18',1);
insert into preguntas values (null,2,'Elaborar diagramas de flujo utilizando la simbología brindada en', null,1,'2019-03-18',1);
insert into preguntas values (null,2,'¿Cuáles son las posibles causas que no permiten generar los resultados esperados al ejecutar un diagrama de flujo de un proceso matemático usando un software compilador?', null,1,'2019-03-18',1);

insert into preguntas values (null,2,'Identificar la sintaxis del lenguaje C#', null,2,'2019-03-18',1);
insert into preguntas values (null,2,'Resolver operaciones matemáticas básicas en C#. ', null,2,'2019-03-18',1);
insert into preguntas values (null,2,'Elaborar soluciones a problemas básicos en C#', null,2,'2019-03-18',1);
insert into preguntas values (null,2,'¿Por qué es necesario crear métodos o funciones si podemos hacer el mismo proceso dentro del flujo del programa?', null,2,'2019-03-18',1);

insert into preguntas values (null,2,'Identificar la sintaxis de SQL', null,3,'2019-03-18',1);
insert into preguntas values (null,2,'Diferenciar entre los tipos de datos que utiliza una Base de Datos', null,3,'2019-03-18',1);
insert into preguntas values (null,2,'Identificar las propiedades de las bases de datos', null,3,'2019-03-18',1);
insert into preguntas values (null,2,'¿Cuál es el resultado de coloca primero la creación de las tablas con la descripción de los campos y luego la línea de código donde se crean la base de datos?', null,3,'2019-03-18',1);

insert into preguntas values (null,2,'Configurar correctamente el uso de los NameSpaces.', null,4,'2019-03-18',1);
insert into preguntas values (null,2,'Declarar Variables y tipos de datos', null,4,'2019-03-18',1);
insert into preguntas values (null,2,'Implementar Métodos dentro del código del proyecto', null,4,'2019-03-18',1);
insert into preguntas values (null,2,'¿Qué pasaría si en una clase las propiedades no se declaran tipo public?', null,4,'2019-03-18',1);

insert into preguntas values (null,2,'Identificar la anatomía de una aplicación móvil', null,5,'2019-03-18',1);
insert into preguntas values (null,2,'Mostrar texto dentro de la aplicación', null,5,'2019-03-18',1);
insert into preguntas values (null,2,'Utilizar tamaños y escalas en la aplicación  ', null,5,'2019-03-18',1);
insert into preguntas values (null,2,'¿Al aplicar estilo a una aplicación móvil el resultado únicamente se muestra cuando se trabaja en el entorno de desarrollo?, explique su respuesta.', null,5,'2019-03-18',1);

/**diagnosticoPHP**/

insert into preguntas values (null,6,'Resuelve problemas haciendo uso de algoritmos.', null,1,'2019-03-18',1);
insert into preguntas values (null,6,'Aplica algoritmos en lenguaje natural y pseudocódigo.', null,1,'2019-03-18',1);
insert into preguntas values (null,6,'Resuelve problemas en estructuras de pseudocódigo.', null,1,'2019-03-18',1);
insert into preguntas values (null,6,'¿Cuáles son las funciones que desempeñan los algoritmos en la resolución de problemas?', null,1,'2019-03-18',1);

insert into preguntas values (null,6,'Aplica los elementos básicos en Lenguaje de estructura HTML.', null,2,'2019-03-18',1);
insert into preguntas values (null,6,'Utiliza las partes de la estructura básica de un documento HTML', null,2,'2019-03-18',1);
insert into preguntas values (null,6,'Aplica correctamente etiquetas en documentos HTML.', null,2,'2019-03-18',1);
insert into preguntas values (null,6,'¿Escriba el nombre de las etiquetas de una estructura básica para una página en HTML?', null,2,'2019-03-18',1);

insert into preguntas values (null,6,'Utiliza las instrucciones en un programa informática.', null,3,'2019-03-18',1);
insert into preguntas values (null,6,'Maneja la estructura básica en el Lenguaje PHP.', null,3,'2019-03-18',1);
insert into preguntas values (null,6,'Aplica el uso correcto de variables en PHP.', null,3,'2019-03-18',1);
insert into preguntas values (null,6,'Haciendo uso de un ejemplo, escriba la función para imprimir en PHP', null,3,'2019-03-18',1);

insert into preguntas values (null,6,'Aplica el concepto y los tipos de datos en una Base de Datos.', null,4,'2019-03-18',1);
insert into preguntas values (null,6,'Aplica propiedades ACID a bases de datos.', null,4,'2019-03-18',1);
insert into preguntas values (null,6,'Crea conexiones a bases de datos.', null,4,'2019-03-18',1);
insert into preguntas values (null,6,'Escriba la consulta básica para insertar datos en una Base de Datos.', null,4,'2019-03-18',1);

insert into preguntas values (null,6,'Interpreta archivo de código fuente para la identificación de la estructura.', null,5,'2019-03-18',1);
insert into preguntas values (null,6,'Ejecuta casos de excepción en archivos de código fuente.', null,5,'2019-03-18',1);
insert into preguntas values (null,6,'Utiliza la técnica Debugging para la resolución de un problema.', null,5,'2019-03-18',1);
insert into preguntas values (null,6,'Elabore un ejemplo utilizando sintaxis para documentar un proceso.', null,5,'2019-03-18',1);

