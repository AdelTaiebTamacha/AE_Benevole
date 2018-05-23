import xlrd
import datetime
import mysql.connector

config = {
    'user':'root',
    'password' :'',
    'host':'localhost',
    'database':'benevole',
    'raise_on_warnings':True,
}

def lecteur(name):
    document = xlrd.open_workbook(name)

    nom_des_feuilles = document.sheet_names()

    feuille = document.sheet_by_name(nom_des_feuilles[0])

    colonne = []
    n = feuille.nrows
    p = feuille.ncols
    for i in range(1,n):
        ligne = []
        for j in range(p):
            cell = feuille.cell_value(i, j)
            if feuille.cell_type(i, j) == xlrd.sheet.XL_CELL_DATE:
                d0 = datetime.date(1900, 1, 1)
                delta = datetime.timedelta(days=(cell-2))
                cell = d0 + delta
            ligne += [str(cell)]
        colonne += [ligne]
    return colonne

def connexion():
    cnx=""
    try:
        cnx = mysql.connector.connect(**config)
    except mysql.connector.Error as err:
        print(err)
    return cnx

def close_bd(cursor, cnx):
    cursor.close()
    cnx.close()

def boolean(text):
    if text == "Oui":
        return 1
    elif text == "Non":
        return 0
    else :
        return -1

def ancien(text):
    return 1 if text == 'Airexpo 2017' else 0

def naissance(naiss):
    # pays, ville, département
    liste = naiss.split(", ")
    PaysNaiss = liste[0]
    
    if len(liste) == 3:
        VilleNaiss = liste[1]
        #DepNaiss = str(round(float(liste[2])))
        DepNaiss = str(liste[2])
    elif len(liste) == 2:
        VilleNaiss = liste[1]
        DepNaiss = "NR"
    else:
        VilleNaiss = "Etranger"
        DepNaiss = "99"
    
    return PaysNaiss, VilleNaiss, DepNaiss

def preference(pref, i):
    if pref == '':
        return i
    else:
        return 0 #à changer ! Il faut aller chercher l'identifiant du bénévole correspondan
        
        
        
################################################################################
#
#                                Version Karigell
#
#
################################################################################

def insert_benevole(l):
    n = len(l)
    for i in range(1):#1,n
        sql = "INSERT INTO Benevole (IdBenevole, Nom, Prenom, DateNaiss, PaysNaiss, VilleNaiss, DepNaiss, Adresse, CodePostal, Login, mdp, QualifAero, Taille, Covoiturage, Airexpo17, Preference, NumEquipe, IdEquipeCovoit) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"
        IdBenevole = i
        Nom = l[i][2]
        Prenom = l[i][3]
        DateNaiss = l[i][4]
        PaysNaiss, VilleNaiss, DepNaiss = naissance(l[i][5])
        Adresse = l[i][12]
        CodePostal = round(float(l[i][13]))
        Login = l[i][1]
        mdp = "airexpo18"
        QualifAero = l[i][6]
        Taille = l[i][7]
        Covoiturage = boolean(l[i][11])
        Airexpo17 = ancien(l[i][17])
        Preference = preference(l[i][15], i)
        NumEquipe = 0 #initialement
        IdEquipeCovoit = 0 #initialement
        para = (IdBenevole, Nom, Prenom, DateNaiss, PaysNaiss, VilleNaiss, DepNaiss, Adresse, CodePostal, Login, mdp, QualifAero, Taille, Covoiturage, Airexpo17, Preference, NumEquipe, IdEquipeCovoit)
        try:
            cnx = connexion()
            print(1)
            cursor = cnx.cursor(prepared=True)
            print(2)
            cursor.execute(sql, para)
            print(3)
            cnx.commit()
            print(4)
        except mysql.connector.Error as err:
            print(err)
            print("insertbenevole")
            cnx.rollback()
        cursor.close()

def insertResponsable(idBenevole):
    sql = "INSERT INTO Responsable VALUES (%s)"
    para = (idBenevole)
    try:
        cnx = connexion()
        cursor = cnx.cursor(prepared=True)
        cursor.execute(sql, para)
        cnx.commit()
    except mysql.connector.Error as err:
        cnx.rollback()
        print("insertResponsable")
    cursor.close()

def insertMateriel(Materiel, IdResponsable):
    sql = "INSERT INTO Materiel VALUES (%s, %s)"
    para = (Materiel, IdResponsable)
    try:
        cnx = connexion()
        cursor = cnx.cursor(prepared=True)
        cursor.execute(sql, para)
        cnx.commit()
    except mysql.connector.Error as err:
        cnx.rollback()
        print("insertMateriel")
    cursor.close()

def insertEquipe(IdEquipe, IdResponsable, CoorLieu):
    sql = "INSERT INTO Equipe VALUES (%s, %s, %s)"
    para = (IdEquipe, IdResponsable, CoorLieu)
    try:
        cnx = connexion()
        cursor = cnx.cursor(prepared=True)
        cursor.execute(sql, para)
        cnx.commit()
    except mysql.connector.Error as err:
        cnx.rollback()
        print("insertEquipe")
    cursor.close()

def insertLieu(CoorLieu, Nom, Tache):
    sql = "INSERT INTO Lieu VALUES (%s, %s, %s)"
    para = (CoorLieu, Nom, Tache)
    try:
        cnx = connexion()
        cursor = cnx.cursor(prepared=True)
        cursor.execute(sql, para)
        cnx.commit()
    except mysql.connector.Error as err:
        cnx.rollback()
        # print(err)
        # print("insertLieu")
    cursor.close()

def insertCreneauHoraire(IdEquipe, CoorLieu, HDebut, HFin):
    sql = "INSERT INTO CreneauHoraire VALUES (%s, %s, %s, %s)"
    para = (IdEquipe, CoorLieu, HDebut, HFin)
    try:
        cnx = connexion()
        cursor = cnx.cursor(prepared=True)
        cursor.execute(sql, para)
        cnx.commit()
    except mysql.connector.Error as err:
        cnx.rollback()
        print("insertCreneauHoraire")
    cursor.close()

def insertVoiture (Plaque, NbPlace, IdBenevole, IdEquipeCovoit):
    sql = "INSERT INTO Voiture VALUES (%s, %s, %s, %s)"
    para = (Plaque, NbPlace, IdBenevole, IdEquipeCovoit)
    try:
        cnx = connexion()
        cursor = cnx.cursor(prepared=True)
        cursor.execute(sql, para)
        cnx.commit()
    except mysql.connector.Error as err:
        cnx.rollback()
        print("insertVoiture")
    cursor.close()

def insertEquipeCovoit (IdEquipeCovoit, HDep, LieuDep):
    sql = "INSERT INTO EquipeCovoit VALUES (%s, %s, %s)"
    para = (IdEquipeCovoit, HDep, LieuDep)
    try:
        cnx = connexion()
        cursor = cnx.cursor(prepared=True)
        cursor.execute(sql, para)
        cnx.commit()
    except mysql.connector.Error as err:
        cnx.rollback()
        print("insertEquipeCovoit")
    cursor.close()
    
    
    
    
    
################################################################################
#
#                                Version ecriture fichier
#
#
################################################################################
    
def insert_benevole_file(l):
    
    n = len(l)
    request_file_path = "benevole.sql"
    
    with open (request_file_path,'w') as file:
        file.write("USE Benevole\n")
        sql = "INSERT INTO Benevole (IdBenevole, Nom, Prenom, DateNaiss, PaysNaiss, VilleNaiss, DepNaiss, Adresse, CodePostal, Login, mdp, QualifAero, Taille, Covoiturage, Airexpo17, Preference, NumEquipe, IdEquipeCovoit) VALUES "
            
        file.write(sql)
        for i in range(n):#1,n
            # print(i)
            #print(l[i])
            IdBenevole = i+1
            Nom = l[i][2]
            Prenom = l[i][3]
            
            DateNaiss = l[i][4]
            PaysNaiss, VilleNaiss, DepNaiss = naissance(l[i][5])
            Adresse = l[i][12]
            print(l[i][13])
            CodePostal = int(float(l[i][13])) if l[i][13]!="" else ""
            
            Login = l[i][1]
            mdp = "airexpo18"
            
            QualifAero = l[i][6]
            Taille = l[i][7]
            Covoiturage = boolean(l[i][11])
            Airexpo17 = ancien(l[i][17])
            Preference = preference(l[i][15], i)
            NumEquipe = 0 #initialement
            IdEquipeCovoit = 0 #initialement
            para = [IdBenevole, Nom, Prenom, DateNaiss, PaysNaiss, VilleNaiss, DepNaiss, Adresse, CodePostal, Login, mdp, QualifAero, Taille, Covoiturage, Airexpo17, Preference, NumEquipe, IdEquipeCovoit]
            
            s = '", "'
            para = [str(ele) for ele in para]
            
            para2 = '("' + para[0]
            for ele in para[1:]:
                para2+= s + ele
            para2+= '")'
            print(para2)
            
            
            #Write in the file
                
            file.write(para2 + ",\n")
        file.write(";")

def insertEquipe_file(table):
    
    request_file_path = "equipe.sql"
    
    
    with open (request_file_path,'w') as file:
    
        file.write("INSERT INTO Equipe VALUES (IdEquipe, IdResponsable, CoorLieu)\n")
        NbMembre = 3
        
        for i in range(len(table)):
            print(table[i])
            if table[i][3] == "1":
            
                IdEquipe = i//NbMembre+1
                IdResponsable = i
                Lieu = ""
                para = [IdEquipe, IdResponsable, Lieu]
                
                s = '", "'
                para = [str(ele) for ele in para]
                
                para2 = '("' + para[0]
                for ele in para[1:]:
                    para2+= s + ele
                para2+= '")'
                print(para2)
            
                file.write(para2 + ",\n")        

                
def insertVoiture_file(table):
    request_file_path = "Voiture.sql"
    NbPlace = 5
    
    with open (request_file_path,'w') as file:
    
        file.write("INSERT INTO Voiture VALUES (Plaque, NbPlace, IdBenevole, IdEquipeCovoit)\n")
        IdEquipeCovoit = 1
        
        for i in range(len(table)):
            # ajout d'une voiture si le bénévole en possède une
            voiture = boolean(table[i][9])
            IdBenevole = i
            if voiture:
                Plaque = table[i][10]
                IdEquipeCovoit += 1
        
                para = [Plaque, NbPlace, IdBenevole, IdEquipeCovoit]
                
                s = '", "'
                para = [str(ele) for ele in para]
                
                para2 = '("' + para[0]
                for ele in para[1:]:
                    para2+= s + ele
                para2+= '")'
                print(para2)
            
                file.write(para2 + ",\n")



def insertLieu_file(table):
    
    request_file_path = "lieu.sql"
    
    with open (request_file_path,'a') as file:
        file.write("INSERT INTO Lieu VALUES (CoorLieu, Nom, Tache) \n")
        
        
        
        
        for i in range(len(table)):
            print(table[i])
            if table[i][1] != "":
            
                CoorLieu = table[i][1]
                Nom = table[i][2]
                Tache = table[i][3]
                para = [CoorLieu, Nom, Tache]
                
                s = '", "'
                para = [str(ele) for ele in para]
                
                para2 = '("' + para[0]
                for ele in para[1:]:
                    para2+= s + ele
                para2+= '")'
                print(para2)
            
                file.write(para2 + ",\n")            

def insertResponsable_file(idBenevole):
    sql = "INSERT INTO Responsable VALUES (%s)"
    para = (idBenevole)
    request_file_path = "benevole.sql"
    
    with open (request_file_path,'a') as f:
            #Write in the file
                    
            f.write(sql % para)

def insertMateriel_file(Materiel, IdResponsable):
    sql = "INSERT INTO Materiel VALUES (%s, %s)"
    para = (Materiel, IdResponsable)
    request_file_path = "materiel.sql"
    
    with open (request_file_path,'a') as f:
            #Write in the file
            
            f.write(sql % para)
            





def insertCreneauHoraire_file(IdEquipe, CoorLieu, HDebut, HFin):
    sql = "INSERT INTO CreneauHoraire VALUES (%s, %s, %s, %s)"
    para = (IdEquipe, CoorLieu, HDebut, HFin)
    request_file_path = "creneay.sql"
    
    with open (request_file_path,'a') as f:
            #Write in the file
            
            f.write(sql % para)


         


def insertEquipeCovoit_file(IdEquipeCovoit, HDep, LieuDep):
    sql = "INSERT INTO EquipeCovoit VALUES (%s, %s, %s)"
    para = (IdEquipeCovoit, HDep, LieuDep)
    request_file_path = "covoit.sql"
    
    with open (request_file_path,'a') as f:
            #Write in the file
            
            f.write(sql % para)

            

################################################################################
#
#                                Version ecriture data
#
#
################################################################################
  
  
  
def insert_benevole_data(l):
    
    n = len(l)
    request_file_path = "benevole.txt"
    
    with open (request_file_path,'w') as file:
        
        txt = "IdBenevole, Nom, Prenom, DateNaiss, PaysNaiss, VilleNaiss, DepNaiss, Adresse, CodePostal, Login, mdp, QualifAero, Taille, Covoiturage, Airexpo17, Preference, NumEquipe, IdEquipeCovoit\n"
            
        file.write(txt)
        for i in range(n):#1,n
            # print(i)
            #print(l[i])
            IdBenevole = i+1
            Nom = l[i][2]
            Prenom = l[i][3]
            
            DateNaiss = l[i][4]
            PaysNaiss, VilleNaiss, DepNaiss = naissance(l[i][5])
            Adresse = l[i][12]
            print(l[i][13])
            CodePostal = int(float(l[i][13])) if l[i][13]!="" else ""
            
            Login = l[i][1]
            mdp = "airexpo18"
            
            QualifAero = l[i][6]
            Taille = l[i][7]
            Covoiturage = boolean(l[i][11])
            Airexpo17 = ancien(l[i][17])
            Preference = preference(l[i][15], i)
            NumEquipe = 0 #initialement
            IdEquipeCovoit = 0 #initialement
            para = [IdBenevole, Nom, Prenom, DateNaiss, PaysNaiss, VilleNaiss, DepNaiss, Adresse, CodePostal, Login, mdp, QualifAero, Taille, Covoiturage, Airexpo17, Preference, NumEquipe, IdEquipeCovoit]
            
            s = ', '
            para = [str(ele) for ele in para]
            
            para2 = '[' + para[0]
            for ele in para[1:]:
                para2+= s + ele
            para2+= ']'
            print(para2)
            
            
            #Write in the file
                
            file.write(para2 + "\n")

            
def insertVoiture_data(table):
    request_file_path = "Voiture.txt"
    NbPlace = 5
    
    with open (request_file_path,'w') as file:
    
        file.write("Plaque, NbPlace, IdBenevole, IdEquipeCovoit\n")
        IdEquipeCovoit = 1
        
        for i in range(len(table)):
            # ajout d'une voiture si le bénévole en possède une
            voiture = boolean(table[i][9])
            IdBenevole = i
            if voiture:
                Plaque = table[i][10]
                IdEquipeCovoit += 1
        
                para = [Plaque, NbPlace, IdBenevole, IdEquipeCovoit]
                
                s = ', '
                para = [str(ele) for ele in para]
            
                para2 = '[' + para[0]
                for ele in para[1:]:
                    para2+= s + ele
                para2+= ']'
                print(para2)
            
                file.write(para2 + "\n")
        
def insertEquipe_data(table):
    
    request_file_path = "equipe.txt"
    
    
    with open (request_file_path,'w') as file:
    
        file.write("(IdEquipe, IdResponsable, CoorLieu)\n")
        NbMembre = 3
        
        for i in range(len(table)):
            print(table[i])
            if table[i][3] == "1":
            
                IdEquipe = i//NbMembre+1
                IdResponsable = i
                Lieu = ""
                para = [IdEquipe, IdResponsable, Lieu]
                
                s = ', '
                para = [str(ele) for ele in para]
            
                para2 = '[' + para[0]
                for ele in para[1:]:
                    para2+= s + ele
                para2+= ']'
                print(para2)
            
                file.write(para2 + "\n")
                
                
def insertLieu_data(table):
    
    request_file_path = "lieu.txt"
    
    with open (request_file_path,'a') as file:
        file.write("CoorLieu, Nom, Tache \n")
        
        
        
        
        for i in range(len(table)):
            print(table[i])
            if table[i][1] != "":
            
                CoorLieu = table[i][1]
                Nom = table[i][2]
                Tache = table[i][3]
                para = [CoorLieu, Nom, Tache]
                
                s = ', '
                para = [str(ele) for ele in para]
            
                para2 = '[' + para[0]
                for ele in para[1:]:
                    para2+= s + ele
                para2+= ']'
                print(para2)
            
                file.write(para2 + "\n") 
