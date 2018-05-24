

CREATE TABLE IF NOT EXISTS Benevole(
	IdBenevole int,
	Nom varchar(50),
	Prenom varchar(50),
	DateNaiss varchar(50),
	PaysNaiss varchar(50),
	VilleNaiss varchar(50),
	DepNaiss int(2),
	Adresse varchar(50),
	CodePostal int(5),
	Login varchar(50),
	mdp varchar(50),
	QualifAero varchar(50),
	Taille varchar(5),
	Covoiturage boolean,
	Airexpo17 boolean,
	Preference int,
	NumEquipe int,
	IdEquipeCovoit int(5),
	PRIMARY KEY(IdBenevole),
	FOREIGN KEY(NumEquipe) REFERENCES Equipe(IdEquipe) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(IdBenevole) REFERENCES Preference(IdBenevole) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(IdEquipeCovoit) REFERENCES EquipeCovoit(IdEquipeCovoit) ON DELETE CASCADE ON UPDATE CASCADE)
;

CREATE TABLE IF NOT EXISTS Responsable(
	IdResponsable int,
	PRIMARY KEY(IdResponsable),
	FOREIGN KEY(IdResponsable) REFERENCES Benevole(IdBenevole) ON DELETE CASCADE ON UPDATE CASCADE)
;

CREATE TABLE IF NOT EXISTS Materiel(
	Numero int,
	IdResponsable int,
	PRIMARY KEY(Numero),
	FOREIGN KEY(IdResponsable) REFERENCES Responsable(IdResponsable) ON DELETE CASCADE ON UPDATE CASCADE)
;

CREATE TABLE IF NOT EXISTS Equipe(
	IdEquipe int,
	IdResponsable int,
	CoorLieu varchar(50),
	PRIMARY KEY(IdEquipe),
	FOREIGN KEY(IdResponsable) REFERENCES Responsable(IdResponsable) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(CoorLieu) REFERENCES Lieu(CoorLieu) ON DELETE CASCADE ON UPDATE CASCADE)
;

CREATE TABLE IF NOT EXISTS Lieu(
	CoorLieu varchar(50),
	Nom varchar(50),
	Tache varchar(100),
	PRIMARY KEY(CoorLieu))
;

CREATE TABLE IF NOT EXISTS CreneauHoraire(
	IdEquipe int,
	CoorLieu varchar(20),
	HDebut varchar(20),
	HFin varchar(20),
	PRIMARY KEY(IdEquipe, CoorLieu),
	FOREIGN KEY(IdEquipe) REFERENCES Equipe(IdEquipe) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(CoorLieu) REFERENCES Lieu(CoorLieu) ON DELETE CASCADE ON UPDATE CASCADE)
;

CREATE TABLE IF NOT EXISTS Voiture(
	Plaque varchar(9),
	NbPlace int,
	IdBenevole int,
	IdEquipeCovoit int,
	PRIMARY KEY(Plaque),
	FOREIGN KEY(IdBenevole) REFERENCES Benevole(IdBenevole) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(IdEquipeCovoit) REFERENCES EquipeCovoit(IdEquipeCovoit) ON DELETE CASCADE ON UPDATE CASCADE)
;

CREATE TABLE IF NOT EXISTS EquipeCovoit(
	IdEquipeCovoit int,
	HDep varchar(50),
	LieuDep varchar(50),
	PRIMARY KEY(IdEquipeCovoit))
;

CREATE TABLE IF NOT EXISTS Preference(
	IdBenevole int,
	PRIMARY KEY(IdBenevole))
;

