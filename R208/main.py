#!/usr/bin/python3

from ue import Ue 
from but import But 
import sqlite3

if __name__ == "__main__":
    but1 = But(1)

    ue1 = Ue(1, 1, "Réseaux", 15.0)
    ue2 = Ue(1, 1, "Prog", 14.5)
    ue3 = Ue(2, 1, "Math", 13.0)

    ue2.set_moyenne(14.0)

    but1.ajout_ue(ue1)
    but1.ajout_ue(ue2)
    but1.ajout_ue(ue3)

    but1.moyenne_ue(1)
    but1.moyenne_ue(3)

    ue1.affiche()
    ue2.affiche()
    ue3.affiche()

    print("\nNuméros d'UEs : ", but1.get_numeros_ues())

    print("Moyennes des UEs : ", but1.moyenne_ues())

    print("BUT Valide : ", but1.valide())

    def charger():
        c = sqlite3.connect("Tables.db")
        cur = c.cursor()

        cur.execute("SELECT * FROM Buts")
        buts = cur.fetchall()

        for i in buts:
            print("BUT id : ", i[0], " année : ", i[1])
            cur.execute('''
                SELECT Ues.num, Ues.numsem, Ues.nom, Ues.moy 
                FROM Ues
                JOIN ButUes ON Ues.id = ButUes.ue_id
                WHERE ButUes.but_id = ?
                ''', (i[0],))
            
            ues = cur.fetchall()
            for i in ues:
                print(f"UE {i[0]} - {i[2]} (S{i[1]}), Moyenne : {i[3]}")

        c.close()

    def ajouter():
        annee = int(input("Année de BUT : "))
        but = But(annee)

        while True:
            print("\n**Ajouter une UE**")
            num = int(input("Numéro d'UE : "))
            numsem = int(input("Seméstre : "))
            nom = (input("Nom de l'UE : "))
            moy = float(input("Moyenne : "))

            ue = Ue(num, numsem, nom, moy)
            but1.ajout_ue(ue)

            autre = input("Ajouter une autre UE ? (o/n) : ")
            if autre == "n":
                break

        enregistrer(but)

    def enregistrer(but):  
        c = sqlite3.connect("Tables.db")
        cur = c.cursor()

        cur.execute("INSERT INTO Buts (annee) VALUES (?)", (but1.annee,))
        but_id = cur.lastrowid

        for ue in but1.ue:
            cur.execute("INSERT INTO Ues (num, numsem, nom, moy) VALUES (?, ?, ?, ?)", (ue.num, ue.numsem, ue.nom, ue.moy))
            ue_id = cur.lastrowid
            cur.execute("INSERT INTO ButUes (but_id, ue_id) VALUES (?, ?)", (but_id, ue_id))

        c.commit()
        c.close()
    
    def util():
        while True:
            choix = input("Voulez-vous ajouter un BUT et ses UEs? (o/n) : ")
            if choix == 'o':
                ajouter()
            else:
                charger()
                break 

    print("\n")
    util()