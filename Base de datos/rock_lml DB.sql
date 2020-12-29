drop database if exists rock_lml;
create database rock_lml;

use rock_lml;

create table Artista(
	idArtista int primary key not null,
    nombre varchar(40) null,
    apellidoPat varchar(40) null,
    apellidoMat varchar(40) null,
    género varchar(40) null,
    ciudadNac varchar(20),
    biografia mediumtext,
    sitioWeb varchar(100)
);

create table Album(
	idAlbum int primary key not null,
    idArtista int not null,
    nombreAlbum varchar(70),
    anioLanzamiento date,
    numPistas int(2),
    estudio varchar(50),
    imgPor longblob,
    imgContra longblob
);

create table Cancion(
	idCancion int primary key not null,
    idAlbum int not null,
    nombreCancion varchar (70),
    duracion time,
    numPista int(2),
    url varchar (100)
);

create table companiaGrab(
	idCompania int primary key not null,
	idAlbum int not null,
    nombreComp varchar(50),
    direccion varchar(200),
    sitioWeb varchar(100),
    numeroTel int(10)
);

create table grupoMusico(
	idBanda int primary key not null,
	idMusico int not null,
    nombreBanda varchar (50)
);

create table musicos(
	idMusico int primary key not null,
	idArtista int not null,
    idCancion int not null,
    nombreMusico varchar(40),
    apellidoPat varchar(40),
    apellidoMat varchar(40),
    instrumento varchar(30),
    ciudadNac varchar (30),
    influenciado char(2),
    invitado char (2)
);

create table traductorCancion(
	idTraductor int primary key not null,
	idCancion int not null,
    nombre varchar(100),
    correo varchar (100)
);

ALTER TABLE Album ADD FOREIGN KEY(idArtista) REFERENCES Artista(idArtista);
ALTER TABLE Cancion ADD FOREIGN KEY(idAlbum) REFERENCES Album(idAlbum);
ALTER TABLE companiaGrab ADD FOREIGN KEY(idAlbum) REFERENCES Album(idAlbum);
ALTER TABLE grupoMusico ADD FOREIGN KEY(idMusico) REFERENCES musicos(idMusico);
ALTER TABLE musicos ADD FOREIGN KEY(idArtista) REFERENCES Artista(idArtista);
ALTER TABLE musicos ADD FOREIGN KEY(idCancion) REFERENCES Cancion(idCancion);
ALTER TABLE traductorCancion ADD FOREIGN KEY(idCancion) REFERENCES Cancion(idCancion);
