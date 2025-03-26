package com.sio.tp_nuitetoile;

import java.util.ArrayList;

public class Galaxie {

    private String nom;
    private ArrayList<CorpsCeleste> listCorpsCelestes;

    public Galaxie(String nom) {
        this.nom = nom;
        this.listCorpsCelestes = new ArrayList<>();

    }

    public void addCorpsCeleste(CorpsCeleste corps) {
        if (listCorpsCelestes != null) {
            listCorpsCelestes.add(corps);
        }
    }

    public double getMasse() {
        double masseTotal = 0;

        for (CorpsCeleste corps : listCorpsCelestes) {
            masseTotal += corps.getMasse();
        }

        return masseTotal;
    }

    public CorpsCeleste getPlusDense() {
        CorpsCeleste plusDense = null;
        double densiteMax = 0;

        for (CorpsCeleste corps : listCorpsCelestes) {
            double densite = corps.getDensite();
            if (densite > densiteMax) {
                densiteMax = densite;
                plusDense = corps;
            }
        }
        return plusDense;
    }

    public Etoile getPlusLumineuse() {
        Etoile plusLum = null;
        double lumMax = 0;

        for (CorpsCeleste corps : listCorpsCelestes) {
            if (corps instanceof Etoile) {
                Etoile etoile = (Etoile) corps;
                double lum = etoile.getLumiere();
                if (lum > lumMax) {
                    lumMax = lum;
                    plusLum = etoile;
                }
            }
        }
        return plusLum;
    }

    public ArrayList<Planete> getPlanetesHabitables() {
        ArrayList<Planete> planetesHabitables = new ArrayList<>();

        for (CorpsCeleste corps : listCorpsCelestes) {
            if (corps instanceof Planete) {
                Planete planete = (Planete) corps;
                if (planete.isHabitable()) {
                    planetesHabitables.add(planete);
                }
            }
        }

        return planetesHabitables;
    }

    @Override
    public String toString() {
        String result = "Je suis la galaxie " + this.nom + " et voici mes corps célestes :\n\n";

        for (CorpsCeleste corps : listCorpsCelestes) {
            result += corps.toString() + "\n";
        }

        return result;
    }

}
