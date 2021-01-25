drop database if exists rock_lml;
create database rock_lml;

use rock_lml;

create table Artista(
    	nombreArtista varchar(40),
    	genero varchar(40),
    	ciudadNac varchar(20),
    	biografia mediumtext,
    	sitioWeb varchar(100),
    	primary key  (nombreArtista)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table Album(
		nombreArtista varchar(40),
    	Album varchar(70),
    	anioLanzamiento date,
    	numPistas int(2),
    	estudio varchar(50),
    	imgPor longblob,
    	imgContra longblob,
    	primary key (Album)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table Cancion(
		nombreArtista varchar(40),
    	Album varchar(70),
    	Cancion varchar (70),
    	duracion time,
    	numPista int(2),
    	url varchar (100),
    	primary key (Cancion)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table companiaGrab(
		Album varchar(70),
    	nombreComp varchar(50),
    	direccion varchar(200),
    	sitioWeb varchar(100),
    	numeroTel int(10),
    	primary key (nombreComp)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table grupoMusico(
		nombreMusico varchar(40),
    	nombreBanda varchar (50),
    	primary key (nombreBanda)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table musicos(
		nombreArtista varchar(40),
    	Cancion varchar (70),
    	nombreMusico varchar(40),
    	instrumento varchar(30),
    	ciudadNac varchar (30),
    	influenciado char(2),
    	invitado char (2),
    	primary key (nombreMusico)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table traductorCancion(
		Cancion varchar (70),
    	nombreTraductor varchar(100),
    	correo varchar (100),
    	primary key (nombreTraductor)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE Album ADD FOREIGN KEY(nombreArtista) REFERENCES Artista(nombreArtista);
ALTER TABLE Cancion ADD FOREIGN KEY(Album) REFERENCES Album(Album);
ALTER TABLE Cancion ADD FOREIGN KEY(nombreArtista) REFERENCES Artista(nombreArtista);
ALTER TABLE companiaGrab ADD FOREIGN KEY(Album) REFERENCES Album(Album);
ALTER TABLE grupoMusico ADD FOREIGN KEY(nombreMusico) REFERENCES musicos(nombreMusico);
ALTER TABLE musicos ADD FOREIGN KEY(nombreArtista) REFERENCES Artista(nombreArtista);
ALTER TABLE musicos ADD FOREIGN KEY(Cancion) REFERENCES Cancion(Cancion);
ALTER TABLE traductorCancion ADD FOREIGN KEY(Cancion) REFERENCES Cancion(Cancion);
