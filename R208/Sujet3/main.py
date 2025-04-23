#!/usr/bin/python3

from materiel import Materiel, Fixe, Portable, Tablettes

if __name__ == "__main__":
    a = Fixe("001", "Dell", "i5", 8, "ethernet")
    b = Portable("002", "HP", "i7", 16)
    c = Tablettes("003", "iPhone", "A15", 4, "nano", ["4G", "5G"])

    a.affiche()
    b.affiche()
    c.affiche()

    a.ajout_materiel_connecte(b)
    b.ajout_materiel_connecte(c)
    c.ajout_materiel_connecte(a)

    a.affiche_connexion()

    joignables = a.materiels_joignables()
    print("Depuis '001', machines joignables :", [m.num for m in joignables])
