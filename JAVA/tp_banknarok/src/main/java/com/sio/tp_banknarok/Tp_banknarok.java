package com.sio.tp_banknarok;

import java.util.ArrayList;
import java.util.Date;

public class Tp_banknarok {

    public static void main(String[] args) {

        Compte compteCharlie = new Compte(1, 600, 23000);
        Client charlie = new Client("Toral", "Charlie", new ArrayList<>());
        charlie.ajouterCompte(compteCharlie);

        CompteCourant compteCourantAlbert = new CompteCourant(-300, 1, 200, 12000);
        CompteEpargne compteEpargneAlbert = new CompteEpargne(2, 1, 800, 83500);
        Client albert = new Client("Muda", "Albert", new ArrayList<>());
        albert.ajouterCompte(compteCourantAlbert);
        albert.ajouterCompte(compteEpargneAlbert);
        
        System.out.println("Solde initial compte Charlie : " + compteCharlie.getSolde() + "€");
        System.out.println("Solde initial compte courant Albert : " + compteCourantAlbert.getSolde() + "€");

        System.out.println("\nTransfert de 500€ de Charlie à Albert...");
        if (compteCharlie.transferer(compteCourantAlbert, 500)) {
            System.out.println("Transfert réussi !");
        } else {
            System.out.println("Transfert échoué.");
        }

        System.out.println("\nSolde compte Charlie : " + compteCharlie.getSolde() + "€");
        System.out.println("Solde compte courant Albert : " + compteCourantAlbert.getSolde() + "€");

        System.out.println("\nVersement du salaire sur le compte de Charlie...");
        compteCharlie.crediter(1500);

        System.out.println("Solde actuel de Charlie : " + compteCharlie.getSolde() + "€");
        System.out.println("Historique des opérations de Charlie : ");
        compteCharlie.afficherHistorique();

        System.out.println("\nAlbert consulte son solde total...");
        double soldeTotalAlbert = albert.obtenirSoldeTotal();
        System.out.println("Solde total des comptes d'Albert : " + soldeTotalAlbert + "€");

        System.out.println("Intérêts du compte épargne d'Albert : " + compteEpargneAlbert.montantInteret() + "€");
        System.out.println("Découvert maximum autorisé sur le compte courant d'Albert : " + compteCourantAlbert.getDecouvert() + "€");
    }
}
