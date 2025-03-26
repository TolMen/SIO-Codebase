
package com.sio.tp_nuitetoile;

public class Planete extends CorpsCeleste {
    
    private boolean habitable;

    public Planete(String nom, double masse, double diametre, boolean habitable) {
        super(nom, masse, diametre);
        this.habitable = habitable;
    }

    public boolean isHabitable() {
        return habitable;
    }
    
    @Override
    public String toString() {
        String testHabitable = null;
        if(isHabitable() == true) {
            testHabitable = " / Habitable";
        } else {
            testHabitable = " / Pas habitable";
        }
        return super.toString() + testHabitable;
    }
    
}
