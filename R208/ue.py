#!/usr/bin/python3

class Ue:
    def __init__(self, num, numsem, nom, ressources=None, saes=None):
        self.num = num
        self.numsem = numsem
        self.nom = nom
        self.ressources = ressources if ressources is not None else []
        self.saes = saes if saes is not None else []
        self.moy = self.calculer_moyenne()

    def affiche(self):
        print(f"UE {self.num} - {self.nom}")
        print(f"Semestre : {self.numsem}")
        print(f"Ressources : {self.ressources}")
        print(f"SAÉ : {self.saes}")
        print(f"Moyenne : {self.moy}")

    def set_moyenne(self, newMoy):
        self.moy = newMoy

    def calculer_moyenne(self):
        notes = self.ressources + self.saes
        if notes:
            return sum(notes) / len(notes)
        return 0

    def ajouter_ressource(self, note):
        self.ressources.append(note)
        self.moy = self.calculer_moyenne()

    def ajouter_sae(self, note):
        self.saes.append(note)
        self.moy = self.calculer_moyenne()