
package com.sio.tp_banknarok;

public class CompteEpargne extends Compte {
    
    private float taux;

    public CompteEpargne(float taux, int numero, float solde, float plafond) {
        super(numero, solde, plafond);
        this.taux = taux;
    }
    
    public float montantInteret() {
        return (this.taux / 100) * super.getSolde();
    }
    
    @Override
    public String toString() {
        return "Compte épargne n°" + super.getNumero() + " : " + super.getSolde() + " € ";
    }
    
}
