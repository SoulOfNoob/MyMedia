DROP TABLE IF EXISTS Usermedien;
DROP TABLE IF EXISTS Medien;
DROP TABLE IF EXISTS Kontakte;
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Medientypen;

create table Medientypen(
	ID int AUTO_INCREMENT,
	bezeichnung char(30),
	primary key (ID)
)
engine=INNODB;
create table User(
	ID int AUTO_INCREMENT,
	name char(100),
	passwort char(100),
	email char(100),
	geburtstag int,
	primary key (ID)
)
engine=INNODB;
create table Kontakte(
	ID int AUTO_INCREMENT,
	user1 int,
	user2 int,
	primary key (ID),
	constraint foreign key(user1) references User(ID) on update restrict on delete cascade,
	constraint foreign key(user2) references User(ID) on update restrict on delete cascade
)
engine=INNODB;
create table Medien(
	ID int AUTO_INCREMENT,
	typ int,
	name char(30),
	beschreibung varchar(500),
	bild varchar(100),
	video varchar(100),
	primary key(ID),
	constraint foreign key(typ) references Medientypen(ID) on update restrict on delete cascade
)
engine=INNODB;
create table Usermedien(
	ID int AUTO_INCREMENT,
	medium int,
	besitzer int,
	ausleiher int,
	primary key(ID), 
	constraint foreign key(medium) references Medien(ID) on update restrict on delete cascade,
	constraint foreign key(besitzer) references User(ID) on update restrict on delete cascade,
	constraint foreign key(ausleiher) references User(ID) on update restrict on delete cascade
)
engine=INNODB;

