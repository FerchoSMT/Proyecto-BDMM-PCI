CREATE DATABASE BD_WeLearn;
USE BD_WeLearn;

CREATE TABLE Usuario(
	Id_Usuario				SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Tipo					CHAR(1) NOT NULL,
    Nombre					VARCHAR(30) NOT NULL,
    Apellido_P				VARCHAR(15) NOT NULL,
    Apellido_M				VARCHAR(15) NOT NULL,
    Genero					VARCHAR(10) NOT NULL,
    Fecha_Nac				DATE NOT NULL,
    Foto					BLOB NOT NULL,
    Email					VARCHAR(40) UNIQUE NOT NULL,
    Contrasena				VARCHAR(30) NOT NULL,
    Fecha_Registro			DATE NOT NULL,
    Activo					BIT DEFAULT 1
) AUTO_INCREMENT = 1000;

CREATE TABLE Curso(
	Id_Curso				SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Titulo					VARCHAR(50) NOT NULL,
    Descripcion				VARCHAR(255) NOT NULL,
    Cant_Niveles			TINYINT UNSIGNED NOT NULL,
    Costo					DECIMAL(10,2) NOT NULL,
    Imagen					BLOB NOT NULL,
    Promedio				DECIMAL(1,1) NOT NULL,
    Activo					BIT DEFAULT 1,
    
    Id_Usuario				SMALLINT UNSIGNED NOT NULL
);

CREATE TABLE Nivel(
	Id_Nivel				SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Contenido				VARCHAR(255),
    Imagen					BLOB,
    Video					BLOB NOT NULL,
    Archivos				BLOB,
    Links					VARCHAR(255),
    Costo					DECIMAL(10,2) NOT NULL,
    
    Id_Curso				SMALLINT UNSIGNED NOT NULL
);

CREATE TABLE Curso_Inscrito(
	Id_CursoInscrito		SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nivel_Actual			TINYINT UNSIGNED NOT NULL,
    Fecha_Inicio			DATE NOT NULL,
    Fecha_Reciente			DATE NOT NULL,
    Fecha_Fin				DATE,
    Calificacion			DECIMAL(1,1),
    Comentario				VARCHAR(255),
    Diploma					BLOB,
    Pago_Total				DECIMAL(10,2) NOT NULL,
    Forma_Pago				VARCHAR(15) NOT NULL,
    
    Id_Usuario				SMALLINT UNSIGNED NOT NULL,
    Id_Curso				SMALLINT UNSIGNED NOT NULL 
);

CREATE TABLE Categoria(
	Id_Categoria			SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Descripcion				VARCHAR(20) NOT NULL UNIQUE,
    Fecha_Creacion			DATE NOT NULL,
    
    Id_Usuario				SMALLINT UNSIGNED NOT NULL
);

CREATE TABLE Categoria_Curso(
	Id_CatCurso				SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    
    Id_Curso				SMALLINT UNSIGNED NOT NULL,
    Id_Categoria			SMALLINT UNSIGNED NOT NULL 
);

CREATE TABLE Mensaje(
	Id_Mensaje				SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Fecha_Hora				DATETIME NOT NULL,
    Contenido				VARCHAR(255) NOT NULL,
    
    Id_Usuario_E			SMALLINT UNSIGNED NOT NULL,
    Id_Usuario_A			SMALLINT UNSIGNED NOT NULL
);

ALTER TABLE Curso ADD CONSTRAINT FK_CUR_US
	FOREIGN KEY (Id_Usuario) REFERENCES Usuario(Id_Usuario);
    
ALTER TABLE Nivel ADD CONSTRAINT FK_NIV_CUR
	FOREIGN KEY (Id_Curso) REFERENCES Curso(Id_Curso);
    
ALTER TABLE Curso_Inscrito ADD CONSTRAINT FK_CI_US
	FOREIGN KEY (Id_Usuario) REFERENCES Usuario(Id_Usuario);
ALTER TABLE Curso_Inscrito ADD CONSTRAINT FK_CI_CUR
	FOREIGN KEY (Id_Curso) REFERENCES Curso(Id_Curso);
    
ALTER TABLE Categoria ADD CONSTRAINT FK_CAT_US
	FOREIGN KEY (Id_Usuario) REFERENCES Usuario(Id_Usuario);
    
ALTER TABLE Categoria_Curso ADD CONSTRAINT FK_CC_CUR
	FOREIGN KEY (Id_Curso) REFERENCES Curso(Id_Curso);
ALTER TABLE Categoria_Curso ADD CONSTRAINT FK_CC_CAT
	FOREIGN KEY (Id_Categoria) REFERENCES Categoria(Id_Categoria);

ALTER TABLE Mensaje ADD CONSTRAINT FK_MEN_US_ESC
	FOREIGN KEY (Id_Usuario_E) REFERENCES Usuario(Id_Usuario);
ALTER TABLE Mensaje ADD CONSTRAINT FK_MEN_US_ALUM
	FOREIGN KEY (Id_Usuario_A) REFERENCES Usuario(Id_Usuario);
    
    select * from usuario