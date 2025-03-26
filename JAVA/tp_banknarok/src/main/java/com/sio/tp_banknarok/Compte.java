package com.sio.tp_banknarok;

import com.sio.ezbanking.EzAccount;
import java.util.ArrayList;
import java.util.Date;

public class Compte extends EzAccount {

    private ArrayList<Operation> listOperation;

    public Compte(int numero, float solde, float plafond) {
        super(numero, solde, plafond);
        this.listOperation = new ArrayList<>();
    }

    @Override
    public boolean crediter(float montant) {
        if (montant + super.getSolde() <= super.getPlafond()) {
            float newSolde = super.getSolde() + montant;
            setSolde(newSolde);

            Operation operation = new Operation("Crédit", montant, new Date());
            listOperation.add(operation);

            return true;
        }
        return false;
    }

    @Override
    public boolean debiter(float montant) {
        if (montant <= super.getSolde()) {
            float newSolde = super.getSolde() - montant;
            setSolde(newSolde);
            
            Operation operation = new Operation("Débit", montant, new Date());
            listOperation.add(operation);

            return true;
        }
        return false;
    }
    
    public void afficherHistorique() {
        for (Operation operation : listOperation) {
            System.out.println(operation);
        }
    }
    
    @Override
    public boolean transferer(EzAccount compte, float montant) {
        boolean success1 = this.debiter(montant);
        if (success1 == true) {
            boolean success2 = compte.crediter(montant);
            if (success2 == true) {
                return true;
            } else {
                this.crediter(montant);
                return false;
            }
        }
        return false;
    }
    
    @Override
    public String toString() {
        return "Compte n°" + super.getNumero() + " : " + super.getSolde() + " € ";
    }
}
