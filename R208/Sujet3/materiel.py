#!/usr/bin/python3

class Materiel:
    def __init__(self, num, modele, proc, ram):
        self.num = num
        self.modele = modele
        self.proc = proc
        self.ram = ram
        self.materiels_connectes = []

    def affiche(self):
        print(f"{self.num}, {self.modele}, {self.proc}, {self.ram} Go RAM")

    def affiche_connexion(self):
        print(f"Connexions de {self.num} : {[m.num for m in self.materiels_connectes]}")

    def ajout_materiel_connecte(self, autre):
        if autre not in self.materiels_connectes:
            self.materiels_connectes.append(autre)

    def get_materiels_connectes(self):
        return self.materiels_connectes
    
    def materiels_joignables(self, deja_vus=None):
        if deja_vus is None:
            deja_vus = set()
        deja_vus.add(self)
        for m in self.materiels_connectes:
            if m not in deja_vus:
                m.materiels_joignables(deja_vus)
        return deja_vus
    
    def __eq__(self, other):
        return isinstance(other, Materiel) and self.num == other.num

    def __hash__(self):
        return hash(self.num)

        

class Fixe(Materiel):
    def __init__(self, num, modele, proc, ram, port):
        super().__init__(num, modele, proc, ram)
        self.port = port

    def affiche(self):
        print(f"{self.num}, {self.modele}, {self.proc}, {self.ram} Go RAM, {self.port}")

class Portable(Materiel):
    def __init__(self, num, modele, proc, ram, batterie=True, clavier=True, ecran=True):
        super().__init__(num, modele, proc, ram)
        self.batterie = batterie
        self.clavier = clavier
        self.ecran = ecran

    def affiche(self):
        print(f"{self.num}, {self.modele}, {self.proc}, {self.ram} Go RAM, {self.batterie}, {self.clavier}, {self.ecran}")

class Tablettes(Materiel):
    def __init__(self, num, modele, proc, ram, modem, freq, batterie=True):
        super().__init__(num, modele, proc, ram)
        self.modem = modem
        self.freq = freq
        self.batterie = batterie

    def affiche(self):
        print(f"{self.num}, {self.modele}, {self.proc}, {self.ram} Go RAM, {self.modem}, {self.freq}, {self.batterie}")
