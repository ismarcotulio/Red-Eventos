CREATE DATABASE MVC;
	USE MVC;



/*Tabla de las imagenes que puede tener un articulo*/
CREATE TABLE IMAGEN
(
Id_Imagen INT  PRIMARY KEY NOT NULL,
Nombre VARCHAR(50),
Tamaño_Kb INT,
Fecha_Subida DATE,
Calidad VARCHAR (50),
Fuente VARCHAR (50),
Formato VARCHAR (50)
);

/*Tabla de la pagina web*/
CREATE TABLE WEB
(
Id_Web INT  PRIMARY KEY NOT NULL,
Nombre_Web VARCHAR(50),
Dominio VARCHAR(70),
DireccionIp VARCHAR(70),
Nombre_Creador VARCHAR(50),
Fecha_Creacion DATE,
VisitasTotales INT,
RegistrosTotales INT
);

/*Tabla de datos de los administradores de la pagina web*/
CREATE TABLE ADMINISTRADOR
(
Id_Administrador INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(50),
Apellido VARCHAR(50),
Nombre_Usuario VARCHAR(50),
Genero VARCHAR(30),
Ip VARCHAR(50),
Pais VARCHAR(50),
Fecha_Ingreso DATE,
Email VARCHAR(70),
Sueldo INT,
Id_Web INT,
CONSTRAINT FK_Id_Web2 FOREIGN KEY(Id_Web) REFERENCES WEB(Id_Web)
);


/*Tabla de el tipo de clase de cada categoria*/
CREATE TABLE CLASE
(
Id_Clase INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(100)
);



/*Tabla de datos en donde se almacenara las categorias de las paginas*/
CREATE TABLE CATEGORIA
(
Id_Categoria INT  PRIMARY KEY NOT NULL,
Nombre VARCHAR(30),
Descripcion VARCHAR(150),
Imagen VARCHAR(500),
Id_Clase INT,
CONSTRAINT FK_Id_Clase FOREIGN KEY(Id_Clase) REFERENCES CLASE(Id_Clase)
);

/*Tabla de los videos que pueden tener cada articulo*/
CREATE TABLE VIDEO
(
Id_Video INT  PRIMARY KEY NOT NULL,
Nombre VARCHAR(50),
Tamaño_Kb INT,
Fecha_Subida DATE,
Duracion VARCHAR(50),
Calidad VARCHAR (50),
Fuente VARCHAR (50),
Formato VARCHAR (50)
);

/*Tabla que relaciona de N a N las tablas video y categoria_video*/
CREATE TABLE VIDEO_CATEGORIA
(
Id_Video_Categoria INT  PRIMARY KEY NOT NULL,
Id_Video INT,
Id_Categoria INT,
CONSTRAINT FK_Id_Video1 FOREIGN KEY(Id_Video) REFERENCES VIDEO(Id_Video),
CONSTRAINT FK_Id_Categoria1 FOREIGN KEY(Id_Categoria) REFERENCES CATEGORIA(Id_Categoria)
);


/*Tabla de los datos de los usuarios que entran a la pagina impactec como visita*/
CREATE TABLE VISITA
(
Id_Visita INT  PRIMARY KEY NOT NULL,
Ip VARCHAR(50),
Pais VARCHAR(50),
Ciudad VARCHAR(50),
Longitud INT,
Latitud INT,
Codigo_Postal VARCHAR(10),
Fecha DATETIME,
Id_Web INT,
CONSTRAINT FK_Id_Web1 FOREIGN KEY(Id_Web) REFERENCES WEB(Id_Web)
);

/*Tabla de datos que confirman la posicion en la web del usuario*/
CREATE TABLE RANGO
(
Id_Rango INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(50)
);

/*Tabla de los datos de los usuarios que se registran en impactec*/
CREATE TABLE REGISTRO
(
Id_Usuario INT  PRIMARY KEY NOT NULL,
Nombre_Usuario VARCHAR(50),
Primer_Nombre VARCHAR(20),
Primer_Apellido VARCHAR(20),
Email VARCHAR(50),
pass VARCHAR(16),
Nacimiento DATE,
Genero VARCHAR(30),
Nacionalidad VARCHAR(50),
Telefono VARCHAR(50),
Amigos INT,
Posts INT,
Id_Visita INT,
Id_Rango INT,
CONSTRAINT FK_Id_Visita FOREIGN KEY(Id_Visita) REFERENCES VISITA(Id_Visita),
CONSTRAINT FK_Id_Rango FOREIGN KEY(Id_Rango) REFERENCES RANGO(Id_Rango)
);

/*Tabla de los datos de los usuarios que inician sesion en la pagina*/
CREATE TABLE INICIO_SESION
(
Id_Inicio_Sesion INT  PRIMARY KEY NOT NULL,
Id_Visita INT,
Id_Usuario INT,
CONSTRAINT FK_Id_Visita1 FOREIGN KEY(Id_Visita) REFERENCES VISITA(Id_Visita),
CONSTRAINT FK_Id_Usuario4 FOREIGN KEY(Id_Usuario) REFERENCES REGISTRO(Id_Usuario)
);

/*Tabla de los posts que van dentro de cada categoria*/
CREATE TABLE POST
(
Id_Post INT  PRIMARY KEY NOT NULL,
Titulo VARCHAR(100),
Descripcion VARCHAR(300),
Url_Imagen VARCHAR(300),
Contenido VARCHAR(1000),
Direccion_Web VARCHAR(100),
Estado VARCHAR(50),
Id_Inicio_Sesion INT,
Id_Usuario INT,
CONSTRAINT FK_Id_Inicio_Sesion3 FOREIGN KEY(Id_Inicio_Sesion) REFERENCES INICIO_SESION(Id_Inicio_Sesion),
CONSTRAINT FK_Id_Usuario7 FOREIGN KEY(Id_Usuario) REFERENCES REGISTRO(Id_Usuario)
);

/*Tabla de las personas que son baneadas por un administrador*/
CREATE TABLE BANNEO
(
Id_Baneo INT  PRIMARY KEY NOT NULL,
Motivo VARCHAR(150),
Fecha DATE,
Id_Administrador INT,
Id_Post INT, 
CONSTRAINT FK_Id_Administrador1 FOREIGN KEY(Id_Administrador) REFERENCES ADMINISTRADOR(Id_Administrador),
CONSTRAINT FK_Id_Post7 FOREIGN KEY(Id_Post) REFERENCES POST(Id_Post)
);

/*tabla de la relacion entre visita y post*/
CREATE TABLE VISITA_POST
(
Id_Visita_Post INT  PRIMARY KEY NOT NULL,
Id_Visita INT,
Id_Post INT,
CONSTRAINT FK_Id_Visita2 FOREIGN KEY(Id_Visita) REFERENCES VISITA(Id_Visita),
CONSTRAINT FK_Id_Post6 FOREIGN KEY(Id_Post) REFERENCES POST(Id_Post)
);

/*Tabla transaccional entre las tablas post y imagen*/
CREATE TABLE POST_IMAGEN
(
Id_Post_Imagen INT  PRIMARY KEY NOT NULL,
Id_Post INT,
Id_Imagen INT,
CONSTRAINT FK_Id_Imagen FOREIGN KEY(Id_Imagen) REFERENCES IMAGEN(Id_Imagen),
CONSTRAINT FK_Id_Post2 FOREIGN KEY(Id_Post) REFERENCES POST(Id_Post)
);

/*Tabla transaccional entre las tablas post y video*/
CREATE TABLE POST_VIDEO
(
Id_Post_Video INT  PRIMARY KEY NOT NULL,
Id_Video INT,
Id_Post INT,
CONSTRAINT FK_Id_Video FOREIGN KEY(Id_Video) REFERENCES VIDEO(Id_Video),
CONSTRAINT FK_Id_Post1 FOREIGN KEY(Id_Post) REFERENCES POST(Id_Post)
);

CREATE TABLE POST_CALIFICACION
(
Id_registro INT,
Id_post INT,
calificacion INT,
CONSTRAINT FK_Id_Registro8 FOREIGN KEY(Id_registro) REFERENCES REGISTRO(Id_Usuario),
CONSTRAINT FK_Id_Post8 FOREIGN KEY(Id_post) REFERENCES POST(Id_Post)
);

/*Tabla de los comentarios que van dentro de un post*/
CREATE TABLE COMENTARIO
(
Id_Comentario INT PRIMARY KEY NOT NULL,
Contenido VARCHAR(200),
Likes INT,
Numero_Respuestas INT,
Id_Inicio_Sesion INT,
Id_Post INT,
CONSTRAINT FK_Id_Inicio_Sesion FOREIGN KEY(Id_Inicio_Sesion) REFERENCES INICIO_SESION(Id_Inicio_Sesion),
CONSTRAINT FK_Id_Post4 FOREIGN KEY(Id_Post) REFERENCES POST(Id_Post)
);

/*Tabla de los amigos que tienen los usuarios que inician sesion*/
CREATE TABLE AMIGO
(
Id_Amigo INT  PRIMARY KEY NOT NULL,
Id_Inicio_Sesion INT,
Id_Usuario INT,
CONSTRAINT FK_Id_Inicio_Sesion1 FOREIGN KEY(Id_Inicio_Sesion) REFERENCES INICIO_SESION(Id_Inicio_Sesion),
CONSTRAINT FK_Id_Usuario2 FOREIGN KEY(Id_Usuario) REFERENCES REGISTRO(Id_Usuario)
);

/*Tabla de los likes que puede tener un post*/
CREATE TABLE LIKES
(
Id_Like INT  PRIMARY KEY NOT NULL,
Id_Inicio_Sesion INT,
Id_Post INT, 
CONSTRAINT FK_Id_Inicio_Sesion2 FOREIGN KEY(Id_Inicio_Sesion) REFERENCES INICIO_SESION(Id_Inicio_Sesion),
CONSTRAINT FK_Id_Post5 FOREIGN KEY(Id_Post) REFERENCES POST(Id_Post)
);

/*Tabla de datos de los administradores de la pagina web*/
CREATE TABLE PREMIUM
(
Id_Premium INT PRIMARY KEY NOT NULL,
Id_Usuario INT,
CONSTRAINT FK_Id_Usuario3 FOREIGN KEY(Id_Usuario) REFERENCES REGISTRO(Id_Usuario)
);



/*Tabla transaccional entre las tablas Pagina y Categoria_Pagina*/
CREATE TABLE POST_CATEGORIA
(
Id_Post INT,
Id_Categoria INT,
CONSTRAINT FK_Id_Post3 FOREIGN KEY(Id_Post) REFERENCES POST(Id_Post),
CONSTRAINT FK_Id_Categoria FOREIGN KEY(Id_Categoria) REFERENCES CATEGORIA(Id_Categoria)
);

CREATE TABLE TORNEO
(
Id_Torneo INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(100),
Descripcion VARCHAR(500),
Fecha DATE
);

CREATE TABLE PARTICIPANTES 
(
Id_Participante INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(100),
Id_Torneo INT,
Id_Usuario INT,
CONSTRAINT FK_Id_Usuario5 FOREIGN KEY(Id_Usuario) REFERENCES REGISTRO(Id_Usuario),
CONSTRAINT FK_Id_Torneo FOREIGN KEY(Id_Torneo) REFERENCES Torneo(Id_Torneo)
);

CREATE TABLE RONDA 
(
Id_Ronda INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(50)
);

CREATE TABLE DUELOS
(
Id_Duelo INT PRIMARY KEY NOT NULL,
Id_Ronda INT,
CONSTRAINT FK_Id_Ronda FOREIGN KEY(Id_Ronda) REFERENCES RONDA(Id_Ronda)
);

CREATE TABLE DUELO_PARTICIPANTES
(
Id_Duelo INT,
Id_Participante INT,
CONSTRAINT FK_Id_Duelo FOREIGN KEY(Id_Duelo) REFERENCES DUELOS(Id_Duelo),
CONSTRAINT FK_Id_Participante FOREIGN KEY(Id_Participante) REFERENCES PARTICIPANTES(Id_Participante)
);




