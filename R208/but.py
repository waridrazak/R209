#!/usr/bin/python3

from ue import Ue

class But:
    def __init__(self, annee):
        self.annee = annee
        self.ue = []

    def affiche(self):
        print(f"Année de BUT : {self.annee}")
        print("Liste d'UEs : ")
        for i in self.ue:
            i.affiche()
        print()

    def ajout_ue(self, newUe):
        self.ue.append(newUe)

    def moyenne_ue(self, nb):
        notes = [i.moy for i in self.ue if i.num == nb]
        if notes:
            moyenne = sum(notes) / len(notes)
            return moyenne
        else: 
            return None

    def get_numeros_ues(self):
        return list(set([ue.num for ue in self.ue]))
    
    def moyenne_ues(self):
        d = {}
        numeros = self.get_numeros_ues()
        for i in numeros:
            moy = self.moyenne_ue(i)
            d[i] = moy
        return d
    
    def valide(self):
        moy = self.moyenne_ues().values()
        c = 0
        f = 0
        for i in moy:
            if i >= 8:
                if i >= 10:
                    c = c + 1
                else:
                    f = f + 1
            else:
                return False
        if c - f >= 0:
            return True
        else:
            return False
                