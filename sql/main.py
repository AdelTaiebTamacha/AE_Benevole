import lecture

nbplaceimpose = 5

# remplissage de la table Benevole
filebenevole = "Benevoles.xlsx"
tableaubenevole = lecture.lecteur(filebenevole)

""" BENEVOLE
lecture.insert_benevole_file(tableaubenevole)
#lecture.insert_benevole_data(tableaubenevole)
#"""


""" VOITURE
lecture.insertVoiture_file(tableaubenevole)
lecture.insertVoiture_data(tableaubenevole)
#"""

""" EQUIPE
fileequipe = "Equipes.xlsx"
tableauequipe = lecture.lecteur(fileequipe)

lecture.insertEquipe_file(tableauequipe)
lecture.insertEquipe_data(tableauequipe)
#"""

""" Postes
filelieu = "Postes.xlsx"
tableaulieu = lecture.lecteur(filelieu)

# lecture.insertLieu_file(tableaulieu)
lecture.insertLieu_data(tableaulieu)
#"""

# """ CRENEAU
filehoraire = "creneauhoraire.xlsx"
tableauhoraire = lecture.lecteur(filehoraire)

lecture.insertCreneauHoraire_file(tableauhoraire)
#"""

""" RESPONSABLE
filerespo = "Equipes.xlsx"
tablorespo = lecture.lecteur(filerespo)

lecture.insertResponsable_file(tablorespo)
#"""


""" RESPONSABLE
filemateriel = "Equipes.xlsx"
tableaumateriel = lecture.lecteur(filemateriel)

lecture.insertMateriel_file(tableaumateriel)
#"""




"""
n1 = len(tableaubenevole)
p1 = len(tableaubenevole[0])


for i in range(1):#n1
    # ajout d'une voiture si le bénévole en possède une
    id_equipe_covoit = i
    voiture = lecture.boolean(tableaubenevole[i][9])
    if voiture:
        plaque = tableaubenevole[i][10]
        print(plaque)
        lecture.insertVoiture_file(plaque, nbplaceimpose, i, id_equipe_covoit)
        id_equipe_covoit += 1

# ajout postes
filepostes = "Postes.xlsx"
tableaupostes = lecture.lecteur(filepostes)
n2 = len(tableaupostes)
for i in range(n2):
    if tableaupostes[i][1] != '':
        Nom = tableaupostes[i][1]
        Tache = tableaupostes[i][3]
        CoorLieu = str(i)
        lecture.insertLieu_file(CoorLieu, Nom, Tache)

"""

