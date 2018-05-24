

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
	IdEquipeCovoit int,
	PRIMARY KEY(IdBenevole))
;

CREATE TABLE IF NOT EXISTS Responsable(
	IdResponsable int,
	PRIMARY KEY(IdResponsable))
;

CREATE TABLE IF NOT EXISTS Materiel(
	Numero int,
	IdResponsable int,
	PRIMARY KEY(Numero))
;

CREATE TABLE IF NOT EXISTS Equipe(
	IdEquipe int,
	IdResponsable int,
	CoorLieu varchar(50),
	PRIMARY KEY(IdEquipe))
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
	PRIMARY KEY(IdEquipe, CoorLieu))
;

CREATE TABLE IF NOT EXISTS Voiture(
	Plaque varchar(9),
	NbPlace int,
	IdBenevole int,
	IdEquipeCovoit int,
	PRIMARY KEY(Plaque))
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

