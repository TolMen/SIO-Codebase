package tp.enquete;

public class MainApplication {

    public static void main(String[] args) {

        Personnage[] persos = new Personnage[4];

        persos[0] = new Personnage("Hongrois", "Stéphane", "Serveur / Etudiant", "Financer ses études", true);
        persos[1] = new Personnage("Parchadon", "Léa", "Cuisinière", "Plus d'argent", true);
        persos[2] = new Personnage("Riconet", "Albert", "Homme de ménage", "Salaire faible", true);
        persos[3] = new Personnage("Patate", "Gustave", "Patron", "", false);

        // Appel recap infos
        System.out.println("Informations avant enquéte");
        Personnage.displayPersonnage(persos);

        // Appel alibi serveur
        Personnage serveur = Enquete.getPersonnage(persos, "Hongrois", "Stéphane");
        serveur.setSuspect(false);

        // Appel alibi homme entretien
        Personnage entretien = Enquete.getPersonnage(persos, "Homme de ménage");
        entretien.setSuspect(false);

        // Appel alibi cuisinière
        Personnage cuisiniere = Enquete.getPersonnage(persos, "Parchadon", "Léa");
        cuisiniere.setMobile("Apprendre la recette");
        cuisiniere.setSuspect(false);

        // Appel alibi patron
        Personnage patron = Enquete.getPersonnage(persos, "Patate", "Gustave");
        patron.setMobile("Arnaque à l'assurance");
        patron.setSuspect(true);

        // Appel recap infos
        System.out.println("-----------------------------------------------");
        System.out.println("");
        System.out.println("Informations aprés enquéte");
        Personnage.displayPersonnage(persos);
        
        // Appel coupable
        System.out.println("-----------------------------------------------");
        System.out.println("");
        Personnage coupable = Enquete.getPersonnage(persos, "Patate", "Gustave");
        Enquete.displayEnd(coupable);
    }

}
