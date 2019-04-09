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
activo boolean not null,
foreign key (id_convocatoria) references convocatoria(id_convocatoria)
);

create table respuestas(
id_respuesta int primary key auto_increment not null,
id_pregunta int not null,
id_estudiante int not null,
respuesta text,
fecha date not null,
abierta boolean not null,
valoracion int,
revision boolean not null,
foreign key (id_pregunta) references preguntas(id_pregunta),
foreign key (id_estudiante) references estudiante(id_estudiante)
);

create table estudiante_convocatoria(
id_estudiante_convocatoria int primary key auto_increment not null,
id_convocatoria int not null,
id_estudiante int not null,
municipio varchar(64) not null,
lugar varchar(64) not null,
foreign key (id_estudiante) references estudiante(id_estudiante),
foreign key (id_convocatoria) references convocatoria(id_convocatoria)
);

create table usuarios(
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
insert into usuarios values (null, 1, 'ivannia.portillo@sv.cds', MD5('html5'));
insert into usuarios values (null, 1, 'kevin.martinez@sv.cds', MD5('html5'));
insert into usuarios values (null, 1, 'maria.estrada@sv.cds', MD5('html5'));
insert into usuarios values (null, 2, 'usuario@sv.cds', MD5('usuario2019'));

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

insert into preguntas values (null,1,'Identificar los conceptos básicos de la calidad del software', null,5,'2019-03-18',1);
insert into preguntas values (null,1,'Interpretar el código de un programa existente', null,5,'2019-03-18',1);
insert into preguntas values (null,1,'Utilizar herramientas para tomar apuntes', null,5,'2019-03-18',1);
insert into preguntas values (null,1,'¿Justifique para qué se realiza la documentación del código y cuáles son los tipos de comentarios que podemos aplicar a un programa?', null,5,'2019-03-18',1);

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

/*---- HTML ------*/
insert into preguntas values (null,3,'Utilizar la sintaxis básica de etiquetas para dar formato al texto de las páginas web.', null,1,'2019-03-18',1);
insert into preguntas values (null,3,'Modificar el color de los párrafos en los documentos HTML.', null,1,'2019-03-18',1);
insert into preguntas values (null,3,'Cambiar el tipo de fuente que utilizan los párrafos.', null,1,'2019-03-18',1);
insert into preguntas values (null,3,'¿En qué parte de la estructura de una página web se coloca la línea de código para personalizar el fondo y cuáles son los parámetros que se utilizan?', null,1,'2019-03-18',1);

insert into preguntas values (null,3,'Modificar diversas propiedades de las imágenes.',null,2,'2019-03-18',1);
insert into preguntas values (null,3,'Aplicar diversas capas a las imágenes para añadir diversos elementos.', null,2,'2019-03-18',1);
insert into preguntas values (null,3,'Optimizar imágenes para su uso en la web',null,2,'2019-03-18',1);
insert into preguntas values (null,3,'¿Justifique porque al diseñar una plantilla de página Web utilizando Photoshop se tiene que programar primeramente en JavaScript?',null,2,'2019-03-18',1);

insert into preguntas values (null,3,'Insertar imágenes de manera correcta en las páginas web utilizando la etiqueta respectiva.', null,3,'2019-03-18',1);
insert into preguntas values (null,3,'Identificar los diversos tipos de hipervínculos que se pueden añadir a las páginas web.', null,3,'2019-03-18',1);
insert into preguntas values (null,3,'Elaborar una página web utilizando las diversas etiquetas HTML.', null,3,'2019-03-18',1);
insert into preguntas values (null,3,'¿Por qué en una página web diseñada para qué presente un sonido al acceder, no genera dicha ejecución?', null,3,'2019-03-18',1);

insert into preguntas values (null,3,'Utilizar diversos editores de texto para escribir código JavaScript', null,4,'2019-03-18',1);
insert into preguntas values (null,3,'Manejar la sintaxis básica de JavaScript como la declaración de variables, operadores.', null,4,'2019-03-18',1);
insert into preguntas values (null,3,'Utilizar las diversas estructuras de control para resolver problemas básicos.', null,4,'2019-03-18',1);
insert into preguntas values (null,3,'¿Qué pasaría si se coloca de manera incorrecta el llamado del enlace de JavaScript en una página web?', null,4,'2019-03-18',1);

insert into preguntas values (null,3,'Distinguir la sintaxis básica de jQuery.', null,5,'2019-03-18',1);
insert into preguntas values (null,3,'Manipular elementos HTML y CSS desde jQuery.', null,5,'2019-03-18',1);
insert into preguntas values (null,3,'Manipular de manera acertada los componentes de Angular', null,5,'2019-03-18',1);
insert into preguntas values (null,3,'¿Por qué para aplicar el framework Angular en una página web se hace la llamada a un archivo con formato de JavaScript? ', null,5,'2019-03-18',1);

/**---- Tester ------**/
insert into preguntas values (null,4,'Realizar el análisis de requerimientos de funcionalidad de una aplicación', null,1,'2019-03-18',1);
insert into preguntas values (null,4,'Organizar la asignación de tareas que se desarrollaran en el ambiente de pruebas', null,1,'2019-03-18',1);
insert into preguntas values (null,4,'Ejecutar pruebas backoffice, analyst y Project Managers', null,1,'2019-03-18',1);
insert into preguntas values (null,4,'¿Cuál es la finalidad de realizar pruebas desde las etapas iniciales del desarrollo del software?', null,1,'2019-03-18',1);

insert into preguntas values (null,4,'Identificar la sintaxis del lenguaje C#',null,2,'2019-03-18',1);
insert into preguntas values (null,4,'Resolver operaciones matemáticas básicas en C#. ',null,2,'2019-03-18',1);
insert into preguntas values (null,4,'Elaborar soluciones a problemas básicos en C#',null,2,'2019-03-18',1);
insert into preguntas values (null,4,'¿Por qué es necesario crear métodos o funciones si podemos hacer el mismo proceso dentro del flujo del programa?',null,2,'2019-03-18',1);

insert into preguntas values (null,4,'Identificar la utilidad de las bases de datos en la vida cotidiana', null,3,'2019-03-18',1);
insert into preguntas values (null,4,'Usar diversos gestores de bases de datos para crear bases de datos.', null,3,'2019-03-18',1);
insert into preguntas values (null,4,'Utilizar el lenguaje SQL para leer, crear, modificar y eliminar datos desde las bases de datos. ', null,3,'2019-03-18',1);
insert into preguntas values (null,4,'¿En qué manera beneficia a la optimización de las base de datos, realizar la practica de normalización?', null,3,'2019-03-18',1);

insert into preguntas values (null,4,'Identificar la utilidad de los programas informáticos.', null,4,'2019-03-18',1);
insert into preguntas values (null,4,'Emplear silogismos lógicos para solventar problemas planteados.', null,4,'2019-03-18',1);
insert into preguntas values (null,4,'Identificar las diversas estructuras de control para solucionar problemas', null,4,'2019-03-18',1);
insert into preguntas values (null,4,'¿Por qué al usar una variable simple solo podemos almacenar un dato y cuando usamos arreglos podemos almacenar hasta N datos?', null,4,'2019-03-18',1);

insert into preguntas values (null,4,'Identificar las fases claves del proceso de gestión', null,5,'2019-03-18',1);
insert into preguntas values (null,4,'Elaborar diagramas Gantt para gestionar el tiempo de realización de las diversas actividades.', null,5,'2019-03-18',1);
insert into preguntas values (null,4,'Completar la configuración de TFS en un entorno de trabajo.  ', null,5,'2019-03-18',1);
insert into preguntas values (null,4,'¿Por qué si utilizamos una herramienta de versionamiento de código fuente, podemos acceder a respaldos creados del proyecto de desarrollo que se elaboró?', null,5,'2019-03-18',1);

/***--- JAVA ---***/
insert into preguntas values (null,5,'Resuelve problemas haciendo uso de algoritmos.', null,1,'2019-03-18',1);
insert into preguntas values (null,5,'Aplica algoritmos en lenguaje natural y pseudocódigo.', null,1,'2019-03-18',1);
insert into preguntas values (null,5,'Resuelve problemas en estructuras de pseudocódigo.', null,1,'2019-03-18',1);
insert into preguntas values (null,5,'¿Cuáles son las funciones que desempeñan los algoritmos en la resolución de problemas?', null,1,'2019-03-18',1);

insert into preguntas values (null,5,'Aplica los elementos básicos en Lenguaje de estructura HTML.',null,2,'2019-03-18',1);
insert into preguntas values (null,5,'Utiliza las partes de la estructura básica de un documento HTML.',null,2,'2019-03-18',1);
insert into preguntas values (null,5,'Aplica correctamente etiquetas en documentos HTML.',null,2,'2019-03-18',1);
insert into preguntas values (null,5,'¿Escriba el nombre de las etiquetas de una estructura básica para una página en HTML?',null,2,'2019-03-18',1);

insert into preguntas values (null,5,'Utiliza las instrucciones en un programa informática.', null,3,'2019-03-18',1);
insert into preguntas values (null,5,'Maneja la estructura básica en el Lenguaje JAVA.', null,3,'2019-03-18',1);
insert into preguntas values (null,5,'Aplica el uso correcto de variables en JAVA.', null,3,'2019-03-18',1);
insert into preguntas values (null,5,'Haciendo uso de un ejemplo, escriba la función para imprimir en JAVA', null,3,'2019-03-18',1);

insert into preguntas values (null,5,'Aplica el concepto y los tipos de datos en una Base de Datos.', null,4,'2019-03-18',1);
insert into preguntas values (null,5,'Aplica propiedades ACID a bases de datos.', null,4,'2019-03-18',1);
insert into preguntas values (null,5,'Crea conexiones a bases de datos.', null,4,'2019-03-18',1);
insert into preguntas values (null,5,'Escriba la consulta básica para insertar datos en una Base de Datos.', null,4,'2019-03-18',1);

insert into preguntas values (null,5,'Interpreta archivo de código fuente para la identificación de la estructura.', null,5,'2019-03-18',1);
insert into preguntas values (null,5,'Ejecuta casos de excepción en archivos de código fuente.', null,5,'2019-03-18',1);
insert into preguntas values (null,5,'Utiliza la técnica Debugging para la resolución de un problema.', null,5,'2019-03-18',1);
insert into preguntas values (null,5,'Elabore un ejemplo utilizando sintaxis para documentar un proceso.', null,5,'2019-03-18',1);

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