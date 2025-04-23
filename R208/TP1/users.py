#!/usr/bin/python3

class User:
    def __init__(self, login, uid, gid, label, dossier, shell):
        self.login= login
        self.uid= uid
        self.gid= gid
        self.label= label
        self.dossier= dossier
        self.shell= shell

    def affiche(self):
        print(self.login)
        print(self.uid)
        print(self.gid)
        print(self.label)
        print(self.dossier)
        print(self.shell)


