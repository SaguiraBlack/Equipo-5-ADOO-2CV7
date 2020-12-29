drop database if exists rock_lml;
create database rock_lml;

use rock_lml;

create table Artista(
	idArtista int auto_increment,
    	nombre varchar(40),
    	apellidoPat varchar(40),
    	apellidoMat varchar(40),
    	genero varchar(40),
    	ciudadNac varchar(20),
    	biografia mediumtext,
    	sitioWeb varchar(100),
    	primary key  (idArtista)
);

create table Album(
	idAlbum int auto_increment,
    	idArtista int not null,
    	nombreAlbum varchar(70),
    	anioLanzamiento date,
    	numPistas int(2),
    	estudio varchar(50),
    	imgPor longblob,
    	imgContra longblob,
    	primary key (idAlbum)
);

create table Cancion(
	idCancion int auto_increment,
    	idAlbum int not null,
    	nombreCancion varchar (70),
    	duracion time,
    	numPista int(2),
    	url varchar (100),
    	primary key (idCancion)
);

create table companiaGrab(
	idCompania int auto_increment,
	idAlbum int not null,
    	nombreComp varchar(50),
    	direccion varchar(200),
    	sitioWeb varchar(100),
    	numeroTel int(10),
    	primary key (idCompania)
);

create table grupoMusico(
	idBanda int auto_increment,
	idMusico int not null,
    	nombreBanda varchar (50),
    	primary key (idBanda)
);

create table musicos(
	idMusico int auto_increment,
	idArtista int not null,
    	idCancion int not null,
    	nombreMusico varchar(40),
    	apellidoPat varchar(40),
    	apellidoMat varchar(40),
    	instrumento varchar(30),
    	ciudadNac varchar (30),
    	influenciado char(2),
    	invitado char (2),
    	primary key (idMusico)
);

create table traductorCancion(
	idTraductor int auto_increment,
	idCancion int not null,
    	nombre varchar(100),
    	correo varchar (100),
    	primary key (idTraductor)
);

ALTER TABLE Album ADD FOREIGN KEY(idArtista) REFERENCES Artista(idArtista);
ALTER TABLE Cancion ADD FOREIGN KEY(idAlbum) REFERENCES Album(idAlbum);
ALTER TABLE companiaGrab ADD FOREIGN KEY(idAlbum) REFERENCES Album(idAlbum);
ALTER TABLE grupoMusico ADD FOREIGN KEY(idMusico) REFERENCES musicos(idMusico);
ALTER TABLE musicos ADD FOREIGN KEY(idArtista) REFERENCES Artista(idArtista);
ALTER TABLE musicos ADD FOREIGN KEY(idCancion) REFERENCES Cancion(idCancion);
ALTER TABLE traductorCancion ADD FOREIGN KEY(idCancion) REFERENCES Cancion(idCancion);
