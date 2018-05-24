DROP DATABASE essai;

CREATE DATABASE essai;

USE essai;

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
	PRIMARY KEY(IdBenevole))
ENGINE=InnoDB CHARSET=utf8;


CREATE TABLE IF NOT EXISTS Equipe(
	IdEquipe int,
	CoorLieu varchar(50),
	PRIMARY KEY(IdEquipe))
ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Lieu(
	CoorLieu varchar(50),
	Nom varchar(50),
	Tache varchar(100),
	PRIMARY KEY(CoorLieu))
ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE IF NOT EXISTS CreneauHoraire(
	IdEquipe int,
	CoorLieu varchar(20),
	HDebut varchar(20),
	HFin varchar(20),
	PRIMARY KEY(IdEquipe, CoorLieu))
ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Voiture(
	Plaque varchar(9),
	NbPlace int,
	IdBenevole int,
	IdEquipeCovoit int,
	PRIMARY KEY(Plaque))
ENGINE=InnoDB CHARSET=utf8;


INSERT INTO Benevole (IdBenevole, Nom, Prenom, DateNaiss, PaysNaiss, VilleNaiss, DepNaiss, Adresse, CodePostal, Login, mdp, QualifAero, Taille, Covoiturage, Airexpo17, Preference, NumEquipe, IdEquipeCovoit) VALUES 
("1", "Maruejol", "Guilhem", "1998-06-24", "France", "Nimes", "30", "Toulouse ", "31400", "guilhem.maruejol@gmail.com", "1998-06-24", "Aucune", "L", "-1", "0", "0", "1.0", "0"),
("2", "Nguyen Tri", "Thuc", "1991-10-09", "Vietnam", "Ho chi minh ville", "99", "Toulouse", "31400", "trithuc910@gmail.com", "1991-10-09", "", "L", "1", "0", "1", "1.0", "0"),
("3", "Chardin", "Alexandre", "1995-11-13", "France", "St S�bastien Sur Loire", "44", "Toulouse", "31400", "alexandre.chardin@free.fr", "1995-11-13", "Aucune", "M", "-1", "0", "0", "1.0", "0"),
("4", "Plumier", "Louis", "1998-01-28", "France", "Nantes", "44", "Toulouse ", "31055", "louisplumier@sfr.fr", "1998-01-28", "Aucune", "M", "1", "0", "0", "1.0", "0"),
("5", "Malezieux", "Tanguy", "1997-03-21", "France", "Dijon", "21", "Toulouse", "31400", "malezieux.tanguy@neuf.fr", "1997-03-21", "Aucune", "L", "1", "0", "0", "1.0", "0"),
("6", "Darwiche", "Cedric", "1996-01-21", "France", "V�nissieux", "69", "Toulouse", "31400", "cedricd69800@gmail.com", "1996-01-21", "PPl th�orique uniquement", "M", "-1", "0", "0", "2.0", "0"),
("7", "CAPELLE", "Dina", "1997-06-23", "Russie", "Ufa", "99", "TOULOUSE", "31400", "dina.capelle@orange.fr", "1997-06-23", "aucune", "S", "1", "0", "6", "2.0", "0"),
("8", "Le Calvez", "Aymeric", "1997-10-30", "France", "Lyon", "69", "Toulouse", "31400", "aymeric.lecalvez@gmail.com", "1997-10-30", "IENAC", "M", "1", "0", "0", "2.0", "0"),
("9", "Molinier", "Thibault", "1997-10-21", "France", "Toulouse", "31", "Toulouse", "31400", "tmolinier1@gmail.com", "1997-10-21", "IENAC", "L", "1", "0", "0", "2.0", "0"),
("10", "Guimard", "Matthieu ", "1997-04-18", "France", "Brest", "29", "Toulouse", "31300", "mat.guimard@gmail.com", "1997-04-18", "Aucune", "S", "1", "0", "0", "3.0", "0"),
("11", "BILZ ", "J�r�me ", "1996-11-04", "France", "Fontainebleau", "77", "Toulouse", "31400", "bilz.jerome@gmail.com", "1996-11-04", "BIA", "M", "-1", "0", "10", "3.0", "0"),
("12", "Maignant", "Gabrielle", "1996-03-01", "Colombie", "Bogota", "99 (Nationalit� fran�aise)", "", "", "gabrielle_maignant@yahoo.fr", "1996-03-01", "Aucune", "M", "0", "0", "11", "3.0", "0"),
("13", "Coat", "Emma", "1997-07-01", "France", "Rennes", "35", "Toulouse", "31400", "emmaopti@yahoo.fr", "1997-07-01", "BIA", "XS", "1", "0", "0", "3.0", "0"),
("14", "Puloc'h", "Maureen", "1997-12-08", "France", "Brest", "29", "Toulouse", "31300", "puloch.maureen@wanadoo.fr", "1997-12-08", "Aucune ", "S", "-1", "0", "0", "4.0", "0"),
("15", "Bonis", "Adrien", "1997-08-28", "France", "Melun", "77", "Toulouse", "31400", "bonis.adrien@gmail.com", "1997-08-28", "IENAC 1A", "M", "1", "0", "0", "4.0", "0"),
("16", "Benali", "Clarisse", "1996-02-26", "France", "Fontenay aux Roses", "92", "Toulouse ", "31400", "clarisse.benali18@gmail.com", "1996-02-26", "Aucune ", "S", "1", "0", "0", "4.0", "0"),
("17", "Meunier", "Florian", "1997-02-16", "France", "Ecully", "69", "Toulouse", "31400", "flo.meun@gmail.com", "1997-02-16", "Aucune", "S", "1", "0", "0", "4.0", "0"),
("18", "Guillemot", "Stephan", "1997-08-25", "France", "Grasse", "06", "Toulouse", "31400", "stephanvtt@gmail.com", "1997-08-25", "Aucune", "XL", "-1", "0", "0", "5.0", "0"),
("19", "LAHITON", "L�a", "2018-02-01", "France", "Toulouse", "31", "Toulouse", "31500", "lea.lahiton@hotmail.fr", "2018-02-01", "BIA", "M", "-1", "0", "18", "5.0", "0"),
("20", "RAVENEAU", "Eliott", "1997-10-21", "France", "Nantes", "44", "Toulouse", "31400", "eliott.raveneau@gmail.com", "1997-10-21", "PPL th�orique", "M", "-1", "0", "0", "5.0", "0"),
("21", "Dubois", "Auriane", "1998-01-05", "France", "Laval", "53", "Toulouse", "31400", "auriane.dubois@outlook.fr", "1998-01-05", "Aucune", "M", "1", "0", "0", "5.0", "0"),
("22", "Ropp", "Thierry", "1998-07-21", "France", "Mulhouse", "68", "Toulouse", "34100", "thierryropp@gmail.com", "1998-07-21", "Aucune", "M", "1", "0", "0", "6.0", "0"),
("23", "Romanet", "Th�ophile", "1997-05-11", "France", "Lagny sur Marne", "77", "Toulouse", "31400", "theophileromanet@yahoo.fr", "1997-05-11", "BIA (2013), PPL th�orique(2014) ", "M", "-1", "0", "0", "6.0", "0"),
("24", "QUENTIN", "Alexandre", "1997-06-05", "France", "Nevers", "58", "Toulouse ", "31400", "alex97quentin@gmail.com", "1997-06-05", "BIA ", "L", "-1", "0", "0", "6.0", "0"),
("25", "Bellami", "Jules", "1998-09-29", "France", "Paris", "75", "Toulouse", "31400", "jules.bellami@gmail.com", "1998-09-29", "PPL th�orique", "S", "-1", "0", "0", "6.0", "0"),
("26", "Haget", "Thomas", "1998-01-12", "France", "Bayonne", "64", "Toulouse", "31400", "thomas.haget@gmail.com", "1998-01-12", "Aucune", "L", "1", "0", "0", "7.0", "0"),
("27", "DIJOUX", "Jacques", "1996-03-12", "R�union", "Saint Paul", "99", "Toulouse ", "31000", "thomasjacques.dijoux@gmail.com", "1996-03-12", "BIA + 45h de vol ", "M", "1", "0", "26", "7.0", "0"),
("28", "PASSONI", "GAEL", "1993-09-21", "France", "Toulouse", "31", "Saubens", "31600", "gael.passoni@gmail.com", "1993-09-21", "PPL", "M", "-1", "0", "27", "7.0", "0"),
("29", "Ayitee", "Olivier", "1996-12-02", "France", "Toulouse", "31", "Tournefeuille", "31170", "olivier.ayitee@free.fr", "1996-12-02", "BIA, PPL th�orique", "M", "-1", "0", "0", "7.0", "0"),
("30", "Coste", "Dorian", "1997-08-27", "France", "Rilleux-la-pape", "69", "Toulouse", "31400", "dorian.coste.cst@gmail.com", "1997-08-27", "", "M", "1", "0", "0", "7.0", "0"),
("31", "Tang", "Jianxiong", "1994-10-08", "China", "Chine", "99", "", "", "tangjianxiong99@163.com", "1994-10-08", "Major in aeronautical engineering ", "L", "0", "0", "30", "8.0", "0"),
("32", "DUARTE", "Mickael", "1982-09-17", "France", "Toulouse", "31", "MURET", "31600", "mickatoulouse@hotmail.fr", "1982-09-17", "aucune", "XL", "1", "0", "31", "8.0", "0"),
("33", "Bereziat", "Denis", "1997-08-05", "France", "Saint-Vallier", "26", "Toulouse", "31400", "bereziat.denis@gmail.com", "1997-08-05", "", "M", "1", "0", "32", "8.0", "0"),
("34", "Gourvennec", "Marie", "1998-06-22", "France", "Brest", "29", "TOULOUSE", "31400", "mgourvennec@gmail.com", "1998-06-22", "BIA", "M", "1", "0", "33", "8.0", "0"),
("35", "Ramoun", "Maxime", "1996-04-08", "France", "Brive La Gaillarde", "19", "Toulouse", "31400", "ramoun.maxime@gmail.com", "1996-04-08", "BIA", "M", "1", "0", "0", "8.0", "0"),
("36", "Regnault--Tissier", "K�vin", "1996-06-25", "France", "Chatenay-Malabry", "92", "Toulouse", "31400", "kevin-4000@hotmail.fr", "1996-06-25", "PPL et vol de nuit", "M", "1", "1", "0", "8.0", "0"),
("37", "Rosier", "C�line ", "1996-01-23", "France", "Rambouillet", "78", "TOULOUSE ENAC", "31400", "celine.rosier96@gmail.com", "1996-01-23", "PPL en cours ", "M", "-1", "1", "36", "9.0", "0"),
("38", "Gault", "Nicolas", "1997-01-14", "France", "Roubaix", "59", "", "", "nicolasgault1997@gmail.com", "1997-01-14", "Aucune ", "S", "0", "0", "0", "9.0", "0"),
("39", "LENG", "Yuchen", "1992-08-02", "Chine", "Sichuan", "99", "toulouse", "31000", "lengyc0208@gmail.com", "1992-08-02", "PPL", "M", "1", "0", "0", "9.0", "0"),
("40", "Guerric ", "Eva", "1997-05-29", "France", "Toulouse", "31", "Toulouse ", "31400", "guerric.eva@gmail.com", "1997-05-29", "Aucune ", "M", "-1", "0", "39", "9.0", "0"),
("41", "GUPTA", "AKSHAY", "1996-03-23", "Inde", "Haridwar", "99", "ISAE RESIDENCE, 4 Avenue Edouard Belin", "31400", "akshay.gupta@student.isae-supaero.fr", "1996-03-23", "Masters in Aerospace Engineering at ISAE SUPAERO", "M", "-1", "0", "0", "10.0", "0"),
("42", "FARJON", "Philippe", "1997-05-22", "France", "Orange", "84", "Toulouse", "31400", "philippe.jr.farjon@gmail.com", "1997-05-22", "Aucune", "L", "1", "0", "41", "10.0", "0"),
("43", "Ensenat", "Simon ", "1999-09-30", "France", "Toulouse ", "31", "St jean ", "31240", "simonensenat1@gmail.com", "1999-09-30", "Aucune ", "XL", "1", "0", "42", "10.0", "0"),
("44", "Hern�ndez Mata", "Elliot Efra�n ", "1993-12-27", "Mexico", "Mexique", "99", "Toulouse", "31400", "elliothernandezm@hotmail.com", "1993-12-27", "Aucune ", "L", "-1", "0", "43", "10.0", "0"),
("45", "Garcia", "Hery", "1996-12-08", "France", "Carcassonne", "11", "Toulouse", "31400", "herygarcia11@gmail.com", "1996-12-08", "PPL", "S", "1", "1", "44", "10.0", "0"),
("46", "Lovino", "Pierre", "1991-09-16", "France", "Thionville", "57", "", "", "lovinopierre@gmail.com", "1991-09-16", "BPP, PPL en cours", "S", "0", "0", "45", "11.0", "0"),
("47", "AUCOUTURIER", "Louis", "1995-02-23", "France", "Reims", "51", "Toulouse", "31000", "louis.aucouturier@outlook.com", "1995-02-23", "Aucune", "L", "1", "0", "46", "11.0", "0"),
("48", "Dev", "Abhinav", "1995-08-16", "Inde", "New Delhi", "99", "Toulouse", "31400", "Dev.ABHINAV@student.isae-supaero.fr", "1995-08-16", "", "XL", "1", "0", "47", "11.0", "0"),
("49", "Khennoussi", "Yannick", "1996-03-29", "France", "S�vres", "92", "Toulouse", "31400", "ykhennoussi@gmail.com", "1996-03-29", "BIA + PPL", "M", "1", "0", "48", "11.0", "0"),
("50", "Deroual", "S�bastien", "1997-07-27", "France", "Marseille", "13", "Toulouse", "31400", "sebastien.deroual@laposte.net", "1997-07-27", "Aucune", "M", "-1", "0", "0", "11.0", "0"),
("51", "GAY", "Beno�t", "1997-02-03", "France", "Roanne", "42", "Toulouse", "31400", "benoit.gay401@laposte.net", "1997-02-03", "Aucune", "L", "1", "0", "0", "12.0", "0"),
("52", "PETITGENET", "Victor", "1997-08-23", "France", "Villeurbanne", "69", "Toulouse", "31400", "petitgenet.victor@gmail.com", "1997-08-23", "aucune (PPL en cours)", "M", "1", "0", "51", "12.0", "0"),
("53", "CHARLES", "CORALIE", "1997-03-06", "France", "Toulouse", "31", "", "", "coralie.charles66@gmail.com", "1997-03-06", "", "M", "0", "0", "0", "12.0", "0"),
("54", "Sanchez Olivera", "Francisco Javier", "1995-12-04", "Mexique", "Mexique", "99", "Toulouse", "31400", "javiersanchez1204@gmail.com", "1995-12-04", "Aucune", "M", "1", "0", "53", "12.0", "0"),
("55", "Garcia", "Porfirio", "1996-10-02", "Mexique", "Mexique 99", "NR", "Toulouse", "31400", "Porfirio-emmanuel.GARCIA-MADRIGAL@student.isae-supaero.fr", "1996-10-02", "", "L", "1", "0", "54", "13.0", "0"),
("56", "Bourgois ", "Alice", "1996-09-16", "France", "St Jean de Braye", "45", "A c�t� de l'ENAC", "31400", "bourgoisalice@gmail.com", "1996-09-16", "BIA et PPL", "M", "1", "0", "0", "13.0", "0"),
("57", "Goyet ", "Augustin ", "1997-08-17", "France", "Lyon", "69", "Toulouse ", "31400", "augustin.goyet@student.isae-supaero.fr", "1997-08-17", "Aucune ", "L", "1", "0", "56", "13.0", "0"),
("58", "Uebler", "C�line", "1998-03-12", "Allemagne", "Berlin", "99", "Toulouse", "31055", "celine.uebler@orange.fr", "1998-03-12", "Aucune", "M", "1", "0", "57", "13.0", "0"),
("59", "ALLART", "Alan", "1997-08-20", "France", "Metz", "57", "Toulouse", "31400", "allart.alan.1997@gmail.com", "1997-08-20", "Aucune", "L", "1", "0", "58", "14.0", "0"),
("60", "BLARRE", "Alo�s", "1997-06-04", "France", "Paris", "75", "Auzielle", "31650", "alois.blarre@gmail.com", "1997-06-04", "Aucune (passation PPL en cours)", "XL", "-1", "0", "0", "14.0", "0"),
("61", "Salgas", "Antoine", "1997-08-17", "France", "Albertville", "73", "", "", "antoine.salgas@student.isae-supaero.fr", "1997-08-17", "en formation ppl", "M", "0", "0", "0", "14.0", "0"),
("62", "Juan", "Marion", "1998-03-19", "France", "Castres", "81", "Toulouse", "31400", "marion193@hotmail.fr", "1998-03-19", "Aucune ", "XL", "-1", "0", "61", "14.0", "0"),
("63", "Vergnes", "Armand", "1996-07-13", "France", "Aix-en-Provence", "13", "TOULOUSE", "31400", "armand.vergnes@alumni.enac.fr", "1996-07-13", "PPL th�orique", "M", "1", "0", "62", "15.0", "0"),
("64", "Gomez", "Pierre-Olivier", "1996-07-27", "R�union", "St Denis", "99", "Toulouse", "31400", "pog33bordeaux@hotmail.fr", "1996-07-27", "PPL", "M", "1", "1", "63", "15.0", "0"),
("65", "Vigne", "Nathalie", "1992-01-12", "France", "Fr�jus", "83", "Toulouse", "31400", "vignenathalie@outlook.fr", "1992-01-12", "", "M", "1", "0", "64", "15.0", "0"),
("66", "LANOIR", "Mathieu", "1997-06-02", "France", "Toulouse", "31", "Toulouse", "31400", "mathieul1@free.fr", "1997-06-02", "BIA", "L", "-1", "0", "0", "15.0", "0"),
("67", "Estevez", "Loris", "1992-08-09", "L�isle adam", "Etranger", "99", "Fonsorbes ", "31470", "estevez.b.loris@gmail.com", "1992-08-09", "Ppl en cours. M�canicien a�ronautique ", "M", "-1", "0", "66", "16.0", "0"),
("68", "LUNEL", "Hugo", "1999-02-09", "France", "Bagnols sur C�ze", "30", "Toulouse, route de narbonne", "31400", "lunel.hugo@yahoo.fr", "1999-02-09", "BIA, �l�ve pilote ULM", "M", "1", "0", "67", "16.0", "0"),
("69", "Potez", "kamilla", "1986-02-20", "ile maurice", "Etranger", "99", "", "", "kimkimi250@hotmail.com", "1986-02-20", "", "M", "0", "0", "0", "16.0", "0"),
("70", "Potez", "guillaume", "1979-10-09", "France", "Paris", "75", "", "", "equipetoulousain@hotmail.fr", "1979-10-09", "", "M", "0", "0", "0", "17.0", "0"),
("71", "Klunker ", "Mattias ", "1996-10-07", "France", "Toulouse", "31", "Toulouse ", "31200", "grussgot31@gmail.com", "1996-10-07", "Bia et ppl en cours ", "L", "-1", "0", "0", "17.0", "0"),
("72", "Barascud", "Quentin", "1998-06-12", "France", "Senlis", "60", "Toulouse", "31400", "barascud.quentin@gmail.com", "1998-06-12", "Aucune", "M", "-1", "0", "0", "17.0", "0"),
("73", "Munin", "Evgenii", "1994-07-10", "Russie", "Iougorsk", "99", "Toulouse", "31400", "munin.evgenii@gmail.com", "1994-07-10", "Aucune", "L", "1", "0", "72", "17.0", "0"),
("74", "Scozzaro", "Geoffrey", "1997-02-27", "France", "Toulouse", "31", "Toulouse", "31400", "geoffreyscozzaro27@gmail.com", "1997-02-27", "Aucune", "M", "-1", "0", "0", "18.0", "0"),
("75", "Manuela", "M�ller ", "1968-12-09", "Allemagne", "Speyer", "99", "Daux ", "31700", "manuelafranziskamueller@gmail.com", "1968-12-09", "", "L", "1", "0", "74", "18.0", "0"),
("76", "FIEVEZ PASSON", "LAURENE", "1990-11-18", "France", "Courbevoie", "92", "", "", "lolof_78@hotmail.com", "1990-11-18", "LCCA (Licence Controleur Aerien)", "L", "0", "0", "75", "18.0", "0"),
("77", "G�not", "Lison", "1998-11-14", "France", "Toulouse", "31", "Castelnau d'Estretefonds", "31620", "lison.genot@gmail.com", "1998-11-14", "PPL", "XS", "1", "0", "76", "18.0", "0"),
("78", "LAONET", "Paul", "1997-11-06", "France", "Paris", "75", "Toulouse", "31400", "paul.laonet@student.isae-supaero.fr", "1997-11-06", "Aucune", "M", "1", "0", "0", "18.0", "0"),
("79", "Seeleuthner", "Pierre", "1996-02-25", "France", "Harfleur", "76", "Toulouse", "31400", "p.seeleuthner@gmail.com", "1996-02-25", "Aucune", "M", "1", "0", "0", "19.0", "0"),
("80", "Greiner", "Jocelin", "1998-08-31", "France", "Strasbourg", "67", "Toulouse", "31400", "greinerjocelin@gmail.com", "1998-08-31", "Aucune", "M", "-1", "0", "0", "19.0", "0"),
("81", "MOUSSET", "Nicolas", "1997-06-16", "France", "Mont-St-Aignan", "76", "TOULOUSE", "31400", "nicolas.mousset282@gmail.com", "1997-06-16", "Aucune", "M", "-1", "0", "0", "19.0", "0"),
("82", "Guyon", "Florentin", "1998-04-06", "France", "Ivry Sur Seine", "94", "Toulouse", "31400", "florentin.guyon@outlook.com", "1998-04-06", "BIA, PPL", "L", "-1", "0", "81", "19.0", "0"),
("83", "Poveda", "C�line", "1997-03-02", "France", "Troyes", "10", "Toulouse", "31055", "celinewwe@gmail.com", "1997-03-02", "BIA", "M", "1", "0", "82", "20.0", "0"),
("84", "Lacroix", "Yann", "1999-06-14", "France", "Ch�teauroux", "36", "Toulouse", "31400", "yannlacroix14@gmail.com", "1999-06-14", "BIA, BB, PPL", "L", "1", "0", "83", "20.0", "0"),
("85", "Sarlandie", "Ken", "1991-12-17", "France", "Fontainebleau", "77", "Toulouse", "31400", "ken.sarlandie@gmail.com", "1991-12-17", "", "XL", "-1", "0", "84", "20.0", "0"),
("86", "Lafitte", "Guillaume", "1997-08-04", "France", "Poissy", "78", "Toulouse", "31000", "guillaume.lftt@gmail.com", "1997-08-04", "Aucune", "M", "-1", "0", "85", "21.0", "0"),
("87", "PAPOTTO", "Lucas", "1996-08-11", "France", "Nice", "06", "Toulouse", "31400", "lucaspapotto@outlook.fr", "1996-08-11", "Aucune", "M", "-1", "0", "0", "21.0", "0"),
("88", "BOUZIDI", "Laura", "1997-03-25", "France", "Nice", "06", "Toulouse", "31400", "laub25@hotmail.fr", "1997-03-25", "Aucune", "S", "-1", "0", "0", "21.0", "0"),
("89", "Barbar", "Benjamin", "1996-01-29", "France", "Athis-Mons", "91", "Rangueil", "31400", "benbarbar@hotmail.com", "1996-01-29", "Aucune", "L", "1", "0", "0", "21.0", "0"),
("90", "Taleb", "Mounia", "1991-06-20", "France", "Toulouse", "31", "Blagnac", "31700", "mounia.taleb31@gmail.com", "1991-06-20", "Aucune", "L", "1", "0", "89", "21.0", "0"),
("91", "Kostadinovski", "Maya", "1997-11-29", "France", "Venissieux", "69", "Toulouse", "31400", "maya.kostadinovski@gmail.com", "1997-11-29", "", "M", "1", "0", "90", "23.0", "0"),
("92", "SAULGRAIN", "LAURENT", "1981-01-05", "France", "Nimes", "30", "", "", "laurent_saulgrain@hotmail.com", "1981-01-05", "aucune", "XL", "0", "0", "91", "23.0", "0"),
("93", "DESCLAUX", "Damien", "1997-11-11", "France", "Toulouse", "31", "Escalquens", "31750", "damien.desclaux@student.isae-supaero.fr", "1997-11-11", "BIA", "XL", "-1", "0", "0", "23.0", "0"),
("94", "Benito Garcia", "Pierre", "1998-08-28", "France", "Ch�tellerault", "86", "Toulouse", "31400", "p.benito2886@gmail.com", "1998-08-28", "BIA et PPL th�orique", "S", "1", "0", "0", "23.0", "0"),
("95", "BASSE", "Cl�ment", "1997-09-12", "France", "Toulon", "83", "TOULOUSE", "31400", "c.basse70@gmail.com", "1997-09-12", "PPL", "S", "1", "0", "0", "23.0", "0"),
("96", "Predal", "Sixtine ", "1995-09-27", "France", "Paris", "75", "Toulouse ", "31000", "s.predal@tbs-education.org", "1995-09-27", "", "S", "1", "0", "95", "24.0", "0"),
("97", "PEREZ-LAFONT-HOOGENBOEZEM", "Emma", "1999-08-04", "France", "N�mes", "30", "Toulouse ", "31000", "emma_perez@live.fr", "1999-08-04", "Aucune", "L", "1", "0", "96", "24.0", "0"),
("98", "Richard", "Jules", "1996-06-17", "France", "Paris", "75", "TOULOUSE", "31400", "jules.richard@me.com", "1996-06-17", "SPL, BULM, Tuteur BIA, Pr�paration PPL", "M", "-1", "0", "0", "24.0", "0"),
("99", "Cl�ment", "Gaspard", "1997-05-04", "France", "Paris", "75", "Toulouse", "31400", "gaspard.clement@hotmail.fr", "1997-05-04", "Aucune", "S", "1", "0", "98", "24.0", "0"),
("100", "Guiet ", "Quentin", "1997-01-04", "France", "Paris", "75", "", "", "quentin.guiet@gmail.com", "1997-01-04", "BIA. J�aurai mon PPL dans quelques semaines normalement. 50h de vol. ", "M", "0", "0", "0", "24.0", "0"),
("101", "GARREAU ", "Arthur ", "1996-03-30", "France", "Evian", "74", "", "", "arthur.garreau4@gmail.com", "1996-03-30", "Aucune ", "L", "0", "0", "0", "24.0", "0"),
("102", "PETER", "Constance", "1996-08-16", "France", "Strasbourg", "67", "Cazaux", "33260", "constancepeter08@gmail.com", "1996-08-16", "PPL, voltige cycle I, parachutisme ", "S", "1", "0", "0", "1.0", "0"),
("103", "Eutrope", "Alexia", "1994-06-26", "France", "Versailles", "78", "Toulouse", "31000", "alexia.eutrope@gmail.com", "1994-06-26", "BIA, Brevet pilote planeur, PPL th�orique, cadet de l'air 2015, dipl�me d'ing�nieur a�ronautique", "M", "-1", "0", "0", "2.0", "0"),
("104", "Ben hadj", "Camille", "1999-04-09", "Qu�bec", "QUEBEC", "NR", "Saint Jean de Marsacq", "40230", "camillebenhadj@gmail.com", "1999-04-09", "", "M", "1", "0", "0", "3.0", "0"),
("105", "DELAIR", "Rapha�l", "1997-02-03", "France", "Grenoble", "38", "Toulouse", "31400", "delair.raphael@gmail.com", "1997-02-03", "Aucune", "L", "1", "0", "0", "4.0", "0"),
("106", "Bassil", "Ravel", "1997-10-01", "Liban", "Smarjbeil", "99", "Toulouse ", "31400", "ravelbassil@hotmail.com", "1997-10-01", "Aucune", "M", "1", "0", "105", "5.0", "0"),
("107", "GAVIN", "Timoth�e ", "1996-05-19", "France", "Lyon", "69", "Toulouse", "31400", "tim.gavin@live.fr", "1996-05-19", "", "M", "-1", "0", "0", "6.0", "0"),
("108", "Hoyer", "Sophie", "1995-08-15", "France", "Foix", "09", "Toulouse", "31400", "sophie.hoyer@outlook.fr", "1995-08-15", "Aucune", "S", "1", "0", "0", "7.0", "0"),
("109", "Racine", "Antonin", "1996-01-16", "France", "Longjumeau", "91", "Toulouse", "31400", "antoninracine@hotmail.fr", "1996-01-16", "PPL - A Th�orique", "L", "1", "0", "0", "8.0", "0"),
("110", "Expert", "Thibaud", "1996-05-29", "France", "Bordeaux", "30", "Toulouse (ENAC)", "31400", "thibaud.expert@wanadoo.fr", "1996-05-29", "Aucune", "L", "1", "0", "109", "9.0", "0"),
("111", "LENOGUE ", "Lauriane ", "1996-05-07", "Fort de France ", "Etranger", "99", "", "", "lauriane.l@outlook.com", "1996-05-07", "BIA", "M", "0", "0", "0", "10.0", "0"),
("112", "Laudet", "B�atrice", "1980-05-29", "France", "Toulouse", "31", "Toulouse", "31000", "beatricelaudet@yahoo.fr", "1980-05-29", "Aucune", "M", "-1", "0", "111", "11.0", "0"),
("113", "Nicol", "Val�rie", "1986-12-16", "France", "Aix-en-Provence", "13", "", "", "valeriegm.nicol@gmail.com", "1986-12-16", "Aucune", "M", "0", "0", "0", "12.0", "0"),
("114", "Parisy", "Didier", "1995-07-18", "France", "Paris", "75", "Toulouse (campus enac)", "31000", "didier.parisy@gmail.com", "1995-07-18", "PPL theorique, pratique en cours", "M", "1", "0", "0", "13.0", "0"),
("115", "VANNEY", "Gwena�l", "1997-06-04", "France", "Lannion", "22", "Toulouse", "31400", "gwenael.vanney@gmail.com", "1997-06-04", "BIA, BB, PPL th�orique", "L", "1", "0", "114", "14.0", "0"),
("116", "MOREAU", "Julien", "1980-08-16", "France", "Poissy", "78", "Muret", "31600", "julien.moreau@flya320.fr", "1980-08-16", "PPL IR SE / FI(A)", "XXL", "1", "0", "115", "15.0", "0"),
("117", "SYLVESTRE", "Jo�l", "1946-12-13", "France", "Pordic", "22", "", "", "jodiesyl@orange.fr", "1946-12-13", "aucune (ex arpet)", "XL", "0", "0", "0", "16.0", "0"),
("118", "Hagen", "Emie", "1992-02-20", "France", "Evry", "91", "Toulouse", "31409", "emie.hagen@yahoo.fr", "1992-02-20", "PPL", "M", "-1", "0", "117", "17.0", "0"),
("119", "Moussarif ", "Issam", "1988-01-08", "France", "La Rochelle", "17", "Tournefeuille ", "31170", "issam.moussarif@free.fr", "1988-01-08", "", "M", "1", "0", "118", "18.0", "0"),
("120", "Blanc", "Axel", "1996-12-02", "France", "Vienne", "38", "Toulouse", "31400", "axel.blanc38@gmail.com", "1996-12-02", "", "S", "-1", "0", "0", "19.0", "0"),
("121", "Ragheb", "Andrew", "1994-05-01", "Egypte", "99", "NR", "TOULOUSE", "31400", "andrewragheb94@gmail.com", "1994-05-01", "aucune", "M", "-1", "0", "120", "20.0", "0"),
("122", "Chatelard", "Thomas", "1995-11-10", "France", "Saint Etienne", "42", "Toulouse", "31400", "thomas.chatelard@student.isae-supaero.fr", "1995-11-10", "BIA", "M", "1", "0", "0", "21.0", "0"),
("123", "Fontoura", "Corentin", "1999-08-10", "France", "Villeneuve-Tolosane", "31", "Villeneuve-Tolosane ", "31270", "corentinfontoura@gmail.com", "1999-08-10", "", "M", "1", "0", "122", "23.0", "0"),
("124", "CAID", "Alicia", "1999-09-01", "Madagascar", "Etranger", "99", "Chalon-sur-Sa�ne", "71100", "mohicia16@gmail.com", "1999-09-01", "Aucune", "M", "1", "0", "0", "24.0", "0"),
("125", "Panizzon", "Mathieu", "1993-07-19", "France", "Mont de Marsan", "40", "Toulouse", "31000", "moithieu@hotmail.fr", "1993-07-19", "", "M", "-1", "0", "0", "25.0", "0"),
("126", "Arnou", "Aur�lien ", "1997-06-07", "France", "Poitiers", "86", "", "", "aur861@hotmail.fr", "1997-06-07", "", "M", "0", "0", "125", "1.0", "0"),
("127", "VIALLE", "Lucas", "1996-10-07", "France", "Tulle", "19", "Toulouse", "31400", "viallelucas@gmail.com", "1996-10-07", "PPL et contr�leur a�rien en formation", "M", "-1", "0", "0", "2.0", "0"),
("128", "Villems", "Kerli", "1995-01-22", "Estonie", "Tartu", "99", "Toulouse", "31400", "kerli.villems@eava.ee", "1995-01-22", "aucune", "XS", "1", "0", "0", "3.0", "0"),
("129", "KREMER", "Heidi", "1997-03-19", "France", "Louannec", "22", "", "", "h.kremer@outlook.fr", "1997-03-19", "BIA/PPL Th�orique/BTS A�ronautique", "M", "0", "0", "128", "4.0", "0"),
("130", "Bouvier", "Lucas", "1997-10-29", "France", "Clamart", "92", "Toulouse", "31055", "lucas.bouvier@alumni.enac.fr", "1997-10-29", "BIA", "XL", "-1", "0", "129", "5.0", "0"),
("131", "Degand", "Jean claude", "1956-08-11", "France", "Lille", "59", "Castanet-Tolosan ", "31320", "Degand.jeanclaude@gmail.com", "1956-08-11", "", "XXL", "-1", "0", "0", "6.0", "0"),
("132", "Marchand", "Jean-Claude", "1960-10-03", "France", "Pamiers", "09", "Bezac", "9100", "mjc09.bezac@gmail.com", "1960-10-03", "", "XL", "1", "0", "0", "7.0", "0"),
("133", "Lemaitre", "Nicolas ", "1989-02-02", "France", "Toulouse", "31", "", "", "lemaitrenicolas31@outlook.com", "1989-02-02", "Aucune ", "XXL", "0", "0", "132", "8.0", "0"),
("134", "Gelbart Carrasco ", "Lilian", "2000-06-01", "France", "Albi", "81", "", "", "liliangelbartcarrasco81@gmail.com", "2000-06-01", "Aucune ", "M", "0", "0", "133", "9.0", "0"),
("135", "Delmas", "Mathieu", "1996-05-06", "France", "Toulouse", "31", "", "", "mathod@hotmail.fr", "1996-05-06", "ULM", "M", "0", "0", "0", "10.0", "0"),
("136", "Conan", "Corentin", "1996-06-08", "France", "Brest", "29", "", "", "corentin.conan@orange.fr", "1996-06-08", "Aucune", "M", "0", "0", "0", "11.0", "0"),
("137", "Bouteilles", "Th�o", "1997-06-24", "France", "Falaise", "14", "Toulouse", "31400", "theo.bouteilles@orange.fr", "1997-06-24", "BIA", "M", "-1", "0", "0", "12.0", "0"),
("138", "CAPRON", "Florent", "1997-03-16", "France", "Perigueux", "24", "TOULOUSE ", "31400", "florent.capron24@orange.fr", "1997-03-16", "", "XXL", "1", "0", "137", "13.0", "0"),
("139", "PERRIN", "Camille", "1997-04-12", "France", "Poitiers", "86", "", "", "aur861@hotmail.fr", "1997-04-12", "", "M", "0", "0", "0", "14.0", "0"),
("140", "Otmani", "Ahmet", "1997-07-11", "France Saint-Etienne 42", "Etranger", "99", "Toulouse ", "31400", "otmani.ahmet@gmail.com", "1997-07-11", "", "M", "-1", "0", "0", "15.0", "0"),
("141", "Alvarez", "Adrien", "1997-10-29", "France", "Pontoise", "95", "Toulouse", "31400", "adrien660000@hotmail.fr", "1997-10-29", "Ppl Theorique", "S", "1", "0", "0", "16.0", "0"),
("142", "Rioux", "Guilhem", "1997-09-29", "France", "Rennes", "35", "Toulouse", "31400", "guilhemrioux@gmail.com", "1997-09-29", "Aucune", "M", "1", "0", "141", "17.0", "0"),
("143", "Desnoues", "Alain", "1973-10-16", "France", "Montauban", "31", "Verlhac Tescou", "82230", "alanzic82@gmail.com", "1973-10-16", "Aucune", "XL", "-1", "0", "142", "18.0", "0"),
("144", "Allard", "Benjamin", "1998-02-27", "France", "Saint Priest", "69", "Toulouse", "31400", "benjamin.allard@student.isae-supaero.fr", "1998-02-27", "Aucune", "S", "1", "0", "0", "19.0", "0"),
("145", "Naipas", "Jean", "2018-04-01", "France", "Toulouse", "31", "", "", "jean.naipas@free.com", "2018-04-01", "Aucune", "XXL", "0", "0", "144", "20.0", "0"),
("146", "Pluvinage", "L�a ", "1997-12-04", "France", "Brest", "29", "Toulouse", "", "leapluvinage@gmail.com", "1997-12-04", "BIA", "S", "1", "0", "0", "21.0", "0"),
("147", "Rambaud", "Rapha�l", "1997-06-20", "France", "Toulouse", "31", "Lauzerville", "31650", "rambaud.raph31@gmail.com", "1997-06-20", "Aucune", "L", "1", "0", "146", "23.0", "0"),
("148", "FLIN", "Olivier", "1996-12-31", "France", "Paris", "75", "", "", "o.flin@hotmail.fr", "1996-12-31", "CPL", "M", "0", "0", "147", "24.0", "0"),
("149", "Queval ", "Micka�l ", "1975-07-21", "France", "Beauvais", "60", "Cornebarrieu ", "31700", "kaeliina@gmail.com", "1975-07-21", "", "XL", "1", "0", "148", "25.0", "0"),
("150", "Bechade", "Antoine", "2018-05-24", "France", "Villeneuve saint Georges", "94", "Toulouse", "31500", "antoinebechade94@gmail.com", "2018-05-24", "", "XS", "1", "0", "149", "1.0", "0"),
("151", "COMPAYRE", "FREDERIC", "2018-05-20", "France", "Mont de Marsan", "40", "", "", "fredcpe@hotmail.fr", "2018-05-20", "M�canicien Mirage 2000", "XXL", "0", "0", "150", "2.0", "0"),
("152", "Burgio", "S�verine", "2000-09-15", "France", "Toulouse", "31", "Toulouse", "31300", "severine.burgio@gmail.com", "2000-09-15", "BIA en cours", "L", "-1", "0", "151", "3.0", "0"),
("153", "Peegel", "Kertu", "1997-07-30", "Eesti", "Tallinn", "99", "Toulouse", "31400", "kpeegel@gmail.com", "1997-07-30", "Aucune", "L", "1", "0", "0", "4.0", "0");


INSERT INTO CreneauHoraire (IdEquipe, CoorLieu, HDebut, HFin) VALUES
("1", "HB", "10:00", "12:00"),
("2", "HB", "12:00", "14:00"),
("3", "HB", "14:00", "16:00"),
("4", "HB", "16:00", "18:00"),
("2", "NB", "10:00", "12:00"),
("3", "NB", "12:00", "14:00"),
("4", "NB", "14:00", "16:00"),
("1", "NB", "16:00", "18:00"),
("3", "NE", "10:00", "12:00"),
("4", "NE", "12:00", "14:00"),
("1", "NE", "14:00", "16:00"),
("2", "NE", "16:00", "18:00"),
("4", "ND", "10:00", "12:00"),
("1", "ND", "12:00", "14:00"),
("2", "ND", "14:00", "16:00"),
("3", "ND", "16:00", "18:00"),
("5", "NA", "10:00", "12:00"),
("6", "NA", "12:00", "14:00"),
("7", "NA", "14:00", "16:00"),
("8", "NA", "16:00", "18:00"),
("6", "NC", "10:00", "12:00"),
("7", "NC", "12:00", "14:00"),
("8", "NC", "14:00", "16:00"),
("5", "NC", "16:00", "18:00"),
("7", "SC", "10:00", "12:00"),
("8", "SC", "12:00", "14:00"),
("5", "SC", "14:00", "16:00"),
("6", "SC", "16:00", "18:00"),
("8", "SD", "10:00", "12:00"),
("5", "SD", "12:00", "14:00"),
("6", "SD", "14:00", "16:00"),
("7", "SD", "16:00", "18:00"),
("9", "SB", "10:00", "12:00"),
("10", "SB", "12:00", "14:00"),
("11", "SB", "14:00", "16:00"),
("12", "SB", "16:00", "18:00"),
("10", "SF", "10:00", "12:00"),
("11", "SF", "12:00", "14:00"),
("12", "SF", "14:00", "16:00"),
("9", "SF", "16:00", "18:00"),
("11", "SE", "10:00", "12:00"),
("12", "SE", "12:00", "14:00"),
("9", "SE", "14:00", "16:00"),
("10", "SE", "16:00", "18:00"),
("12", "IB", "10:00", "12:00"),
("9", "IB", "12:00", "14:00"),
("10", "IB", "14:00", "16:00"),
("11", "IB", "16:00", "18:00"),
("13", "IC", "10:00", "12:00"),
("14", "IC", "12:00", "14:00"),
("15", "IC", "14:00", "16:00"),
("16", "IC", "16:00", "18:00"),
("14", "IA", "10:00", "12:00"),
("15", "IA", "12:00", "14:00"),
("16", "IA", "14:00", "16:00"),
("13", "IA", "16:00", "18:00"),
("15", "ID", "10:00", "12:00"),
("16", "ID", "12:00", "14:00"),
("13", "ID", "14:00", "16:00"),
("14", "ID", "16:00", "18:00"),
("16", "ZT", "10:00", "12:00"),
("13", "ZT", "12:00", "14:00"),
("14", "ZT", "14:00", "16:00"),
("15", "ZT", "16:00", "18:00"),
("17", "AA", "10:00", "12:00"),
("18", "AA", "12:00", "14:00"),
("19", "AA", "14:00", "16:00"),
("20", "AA", "16:00", "18:00"),
("18", "VD", "10:00", "12:00"),
("19", "VD", "12:00", "14:00"),
("20", "VD", "14:00", "16:00"),
("17", "VD", "16:00", "18:00"),
("19", "IE", "10:00", "12:00"),
("20", "IE", "12:00", "14:00"),
("17", "IE", "14:00", "16:00"),
("18", "IE", "16:00", "18:00"),
("20", "SG", "10:00", "12:00"),
("17", "SG", "12:00", "14:00"),
("18", "SG", "14:00", "16:00"),
("19", "SG", "16:00", "18:00"),
("21", "IF", "10:00", "12:00"),
("23", "IF", "12:00", "14:00"),
("24", "IF", "14:00", "16:00"),
("25", "IF", "16:00", "18:00"),
("23", "ZV", "10:00", "12:00"),
("24", "ZV", "12:00", "14:00"),
("25", "ZV", "14:00", "16:00"),
("21", "ZV", "16:00", "18:00"),
("24", "SA", "10:00", "12:00"),
("25", "SA", "12:00", "14:00"),
("21", "SA", "14:00", "16:00"),
("23", "SA", "16:00", "18:00"),
("25", "EV", "10:00", "12:00"),
("21", "EV", "12:00", "14:00"),
("23", "EV", "14:00", "16:00"),
("24", "EV", "16:00", "18:00");

INSERT INTO Equipe (IdEquipe) VALUES
("1"),
("2"),
("4"),
("5"),
("6"),
("7"),
("8"),
("9"),
("10"),
("11"),
("12"),
("13"),
("14"),
("15"),
("16"),
("17"),
("18"),
("19"),
("20"),
("21"),
("23"),
("24"),
("25"),
("26");


INSERT INTO Lieu (CoorLieu, Nom, Tache) VALUES
("HB", "Bapt�me Helicopteres", "Encadrer les visiteurs pour les baptemes"),
("NB", "Zone Entree", "Accueil et surveillance des barrieres"),
("NE", "Zone Entree", "Accueil et surveillance des barrieres"),
("ND", "Zone Entree", "Surveillance des barrieres"),
("NA", "Zone Entree", "Accueil et information des objets interdits"),
("NC", "Zone Entree", "Surveillance des barrieres pres de la piste ULM"),
("SC", "Zone Exposants", "Surveillance des barrieres pres de la piste ULM"),
("SD", "Zone Exposants", "Surveillance de la zone publique"),
("SB", "Zone Exposants", "Surveillance de la zone publique"),
("SF", "Zone Exposants", "Surveillance de la zone publique et des toilettes"),
("SE", "Zone Exposants", "Surveillance de la zone publique"),
("IB", "Zone bord de piste", "Surveillance des barrieres"),
("IC", "Zone bord de piste", "Surveillance des barrieres"),
("IA", "Zone bord de piste", "Surveillance des barrieres"),
("ID", "Zone bord de piste", "Surveillance des barrieres"),
("ZT", "Zone Trescal", "Surveillance des barrieres et de la zone Trescal"),
("AA", "Zone Amis d'Airexpo", "Surveillance des barrieres et de la zone Amis d'Airexpo"),
("IE", "Zone bord de piste", "Surveillance des barrieres"),
("SG", "Zone Exposants", "Surveillance de la zone publique et des hangars ULM"),
("IF", "Zone bord de piste", "Surveillance des barrieres"),
("ZV", "Zone VIP", "Surveillance des barrieres et de la zone VIP"),
("SA", "Zone publique", "Redirection du public et accueil"),
("EV", "Entree VIP", "Controle de l'entr�e VIP");

INSERT INTO Voiture (Plaque, NbPlace, IdBenevole, IdEquipeCovoit) VALUES 
("EJ971FY", "5", "0", "2"),
("CK-958-WM", "5", "2", "3"),
("", "5", "3", "4"),
("je sais plus je le dirais apr�s", "5", "6", "5"),
("CG-139-CS", "5", "10", "6"),
("BW 108 YC", "5", "18", "7"),
("CP-331-QQ", "5", "19", "8"),
("CC224FF", "5", "22", "9"),
("EH-996-BH", "5", "23", "10"),
("CG-639-DL", "5", "27", "11"),
("CA-998-YC ou 915-BRC-31", "5", "28", "12"),
("AM-668-TX", "5", "31", "13"),
("CS768RL", "5", "36", "14"),
("BZ-953-RG", "5", "37", "15"),
("CM 391 GM", "5", "39", "16"),
("AY-960-BR", "5", "42", "17"),
("CL368FT", "5", "44", "18"),
("DQ-832-QS", "5", "46", "19"),
("BA-682-FC", "5", "49", "20"),
("AB828TT", "5", "52", "21"),
("EQ791QL ", "5", "55", "22"),
("AJ117HX", "5", "59", "23"),
("AA 123 XD", "5", "61", "24"),
("DX-384-XN", "5", "62", "25"),
("CK-041-GG", "5", "66", "26"),
("DM-130-MY", "5", "68", "27"),
("By 213 dr", "5", "70", "29"),
("EC-020-MT", "5", "71", "30"),
("EE-043-NT", "5", "74", "31"),
("DX-092-QN", "5", "75", "32"),
("DE-877-QM", "5", "76", "33"),
("EQ519SV", "5", "79", "34"),
("BT-217-NW", "5", "80", "35"),
("DR334GE", "5", "81", "36"),
("AM-991-FD", "5", "83", "37"),
("EQ 281 KB", "5", "84", "38"),
("AR-353-SP", "5", "85", "39"),
("DZ-983-AR", "5", "86", "40"),
("AY-964-TT", "5", "88", "41"),
("BL431ZE", "5", "89", "42"),
("701 BEB69", "5", "90", "43"),
("aw926br", "5", "91", "44"),
("430-CFH-31", "5", "92", "45"),
("DE-862-GL", "5", "96", "46"),
("CB-260-LD", "5", "100", "47"),
("DJ-421-HD", "5", "102", "48"),
("AK-779-T-J", "5", "103", "49"),
("BZ-538-DQ", "5", "108", "50"),
("BT-579-AV", "5", "109", "51"),
("BQ-349-XF", "5", "112", "52"),
("en-985-pp", "5", "113", "53"),
("EJ-821-GD", "5", "114", "54"),
("EL-300-FW", "5", "115", "55"),
("cd436fj", "5", "116", "56"),
("DC782WD", "5", "117", "57"),
("Cz419fc", "5", "118", "58"),
("BL-284-JH", "5", "120", "59"),
("DM-748-EA", "5", "122", "60"),
("3604 QJ 40", "5", "124", "61"),
("AL 567 FC", "5", "125", "62"),
("480RM19", "5", "126", "63"),
("ET-570-MD", "5", "128", "64"),
("CR-744-BE", "5", "129", "65"),
("AS 819 XH 31 ", "5", "130", "66"),
("BD 430 WJ", "5", "131", "67"),
("7312MT32", "5", "134", "68"),
("BG 677 HP", "5", "135", "69"),
("CP-953-HH", "5", "137", "70"),
("DA 030 BV", "5", "142", "71"),
("BE583FP", "5", "147", "72"),
("CV332TC", "5", "148", "73"),
("Dv 062 ea", "5", "149", "74"),
("CD 813 MT", "5", "150", "75");


