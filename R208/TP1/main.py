#!/usr/bin/pyhton3

from users import User
import csv
import pickle
import json

linfos= []

def lire_password(nomfichier):
    try:
        f= open(nomfichier, "r")
        for user in f:
            infosUser= user.split(":")
            linfos.append(infosUser)
        f.close()
    except FileNotFoundError:
        print("Ficher n'existe pas")
        exit(1)

def affiche_infos_users(liste):
    for v in liste:
        print(v[0] + " " + v[2])

lll= []

def liste_to_users(fic):
    for user in fic:
        u= User(user[0], user[1], user[2], user[3], user[4], user[5])
        lll.append(u)
    return lll

def affiche_users(liste):
    for v in liste:
        v.affiche()

def liste_users_to_csv(fic_result, liste):
    with open(fic_result, mode= "w", newline="") as f:
        writer= csv.writer(f)
        for user in liste:
            groupe = int(user.gid) + 1000
            writer.writerow([user.login, user.dossier, groupe])
            
def sauver_pickle(liste, fichier_pickle):
    with open(fichier_pickle, "wb") as f:
        pickle.dump(liste, f)

if __name__ == "__main__":
    Nomfichier= input("Entrez le nom du fichier : ")
    lire_password(Nomfichier)
    userList= liste_to_users(linfos)
    affiche_users(userList)
    fic_csv= input("Entrez le nom du fichier CSV : ")
    liste_users_to_csv(fic_csv, userList)
    output_pickle = input("Entrez le nom du fichier Pickle : ")
    sauver_pickle(userList, output_pickle)
