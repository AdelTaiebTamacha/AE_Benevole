import lecture
import mysql.connector

def request(sql):
	"""
	try:
        cnx = lecture.connexion()
        cursor = cnx.cursor(prepared = True)
        cursor.execute(sql)
        cnx.commit()
    except mysql.connector.Error as err:
        print(err)
       cnx.rollback()
    cursor.close()
	"""
	write_request(sql)

def write_request(sql):
	request_file_path = "request_foreignkey.sql"
	with open (request_file_path,'a') as f:
			#Write in the file
			f.write(sql)
	

	
def appartient():
    sql = """ALTER TABLE Benevole 
    ADD CONSTRAINT appartient 
    FOREIGN KEY(NumEquipe) REFERENCES Equipe(IdEquipe) ON DELETE CASCADE ON UPDATE CASCADE;"""
	
	request(sql)
	

def souhaite():
    sql = """ALTER TABLE Benevole
	ADD CONSTRAINT souhaite
	FOREIGN KEY(IdBenevole) REFERENCES Preference(IdBenevole) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)

def participe():
    sql = """ALTER TABLE Benevole
	ADD CONSTRAINT participe
	FOREIGN KEY(IdEquipeCovoit) REFERENCES EquipeCovoit(IdEquipeCovoit) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)

def gere():
    sql = """ALTER TABLE Responsable
	ADD CONSTRAINT gère
	FOREIGN KEY(IdResponsable) REFERENCES Benevole(IdBenevole) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)

def possede():
    sql = """ALTER TABLE Materiel
	ADD CONSTRAINT possède
	FOREIGN KEY(IdResponsable) REFERENCES Responsable(IdResponsable) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)

def geree():
    sql = """ALTER TABLE Equipe
	ADD CONSTRAINT geree
	FOREIGN KEY(IdResponsable) REFERENCES Responsable(IdResponsable) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)

def est():
    sql = """ALTER TABLE Equipe
	ADD CONSTRAINT est
	FOREIGN KEY(CoorLieu) REFERENCES Lieu(CoorLieu) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)

def concerne():
    sql = """ALTER TABLE CreneauHoraire
	ADD CONSTRAINT concerne
	FOREIGN KEY(IdEquipe) REFERENCES Equipe(IdEquipe) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)

def situe():
    sql = """ALTER TABLE CreneauHoraire
	ADD CONSTRAINT situe
	FOREIGN KEY(CoorLieu) REFERENCES Lieu(CoorLieu) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)

def conduit():
    sql = """ALTER TABLE Voiture
	ADD CONSTRAINT conduit
	FOREIGN KEY(IdBenevole) REFERENCES Benevole(IdBenevole) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)

def voyage():
    sql = """ALTER TABLE Voiture
	ADD CONSTRAINT voyage
	FOREIGN KEY(IdEquipeCovoit) REFERENCES EquipeCovoit(IdEquipeCovoit) ON DELETE CASCADE ON UPDATE CASCADE;"""
    request(sql)


