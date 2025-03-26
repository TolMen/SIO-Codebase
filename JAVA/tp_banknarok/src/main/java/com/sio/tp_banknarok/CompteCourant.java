
package com.sio.tp_banknarok;

public class CompteCourant extends Compte {
    
    private int decouvert;

    public CompteCourant(int decouvert, int numero, float solde, float plafond) {
        super(numero, solde, plafond);
        this.decouvert = decouvert;
    }

    public int getDecouvert() {
        return decouvert;
    }
    
    @Override
    public boolean debiter(float montant) {
        if (super.getSolde() - montant > decouvert) {
            float newSolde = super.getSolde() - montant;
            setSolde(newSolde);
            return true;
        }
        return false;
    }
    
    
    @Override
    public String toString() {
        return "Compte courant n°" + super.getNumero() + " : " + super.getSolde() + " € ";
    }
}
