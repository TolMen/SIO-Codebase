package com.sio.tp_nuitetoile;

public class TP_NuitEtoile {

    public static void main(String[] args) {

        Galaxie voieLactee = new Galaxie("Voie Lactée");

        Planete mercure = new Planete("Mercure", 3.285, 4879.4, false);
        Planete terre = new Planete("Terre", 5.972, 12756, true);
        Planete mars = new Planete("Mars", 6.417, 6779, false);
        Planete neptune = new Planete("Neptune", 1.024, 49244, false);

        Etoile pollux = new Etoile("Pollux", 4.057, 12244000, 32);
        Etoile siruis = new Etoile("Sirius", 1.03, 24000000, 200);
        Etoile altair = new Etoile("Altaïr", 3.56, 25323000, 17);

        voieLactee.addCorpsCeleste(mercure);
        voieLactee.addCorpsCeleste(terre);
        voieLactee.addCorpsCeleste(mars);
        voieLactee.addCorpsCeleste(neptune);

        voieLactee.addCorpsCeleste(pollux);
        voieLactee.addCorpsCeleste(siruis);
        voieLactee.addCorpsCeleste(altair);
        
        System.out.println(voieLactee.toString());
        System.out.print("Ma masse total : ");
        System.out.println(voieLactee.getMasse());
        System.out.println("");
        System.out.println("Mon corps le plus dense est : ");
        System.out.println(voieLactee.getPlusDense());
        System.out.println("");
        System.out.println("Mes planète habitable : ");
        for (Planete chaine : voieLactee.getPlanetesHabitables()) {
            System.out.println(chaine);
        }
        System.out.println("");
        System.out.println("Mon étoile la plus lumineuse est : ");
        System.out.println(voieLactee.getPlusLumineuse());
       
    }
}
