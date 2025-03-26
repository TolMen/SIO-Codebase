package com.sio.tp_banknarok;

import java.util.ArrayList;

public class Client {

    private String nom;
    private String prenom;
    private ArrayList<Compte> listCompte;

    public Client(String nom, String prenom, ArrayList<Compte> listCompte) {
        this.nom = nom;
        this.prenom = prenom;
        this.listCompte = listCompte;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public ArrayList<Compte> getListCompte() {
        return listCompte;
    }

    public void setListCompte(ArrayList<Compte> listCompte) {
        this.listCompte = listCompte;
    }

    public void ajouterCompte(Compte compte) {
        listCompte.add(compte);
    }

    public Compte obtenirCompteParNumero(int numero) {
        for (Compte compte : listCompte) {
            if (compte.getNumero() == numero) {
                return compte;
            }
        }
        return null;
    }

    public boolean supprimerCompteParNumero(int numero) {
        return listCompte.removeIf(compte -> compte.getNumero() == numero);
    }

    public double obtenirSoldeTotal() {
        double soldeTotal = 0;
        for (Compte compte : listCompte) {
            soldeTotal += compte.getSolde();
        }
        return soldeTotal;
    }

    public ArrayList<Compte> listerComptes() {
        return new ArrayList<>(listCompte);
    }

}
