
package com.sio.tp_nuitetoile;

public abstract class CorpsCeleste {
    
    private String nom;
    private double masse;
    private double diametre;

    public CorpsCeleste(String nom, double masse, double diametre) {
        this.nom = nom;
        this.masse = masse;
        this.diametre = diametre;
    }

    public double getMasse() {
        return masse;
    }

    public double getDensite() {
        return 4 / 3 * Math.PI * Math.pow((this.diametre / 2), 3);
    }
    
    @Override
    public String toString() {
        return "    - " + this.nom + " --> Masse " + getMasse() + " / Densité " + getDensite();
    }
    
}
