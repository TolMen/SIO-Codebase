
package com.sio.tp_nuitetoile;

public class Etoile extends CorpsCeleste {

    private double lumiere;
    
    public Etoile(String nom, double masse, double diametre, double lumiere) {
        super(nom, masse, diametre);
        this.lumiere = lumiere;
    }

    public double getLumiere() {
        return lumiere;
    }
    
    @Override
    public String toString() {
        return super.toString() + " / Lumiére " + getLumiere();
    }
    
}
