package tp_coloniesescargours;

public class MainApplication {

    public static void main(String[] args) {

        // Créer des escargours
        Escargours escargours1 = new Escargours("Rapido");
        Escargours escargours2 = new Escargours("Grinchis");

        // Ajouter des coquilles aux escargours
        escargours1.addCoquille("Rouge", "M");
        escargours1.addCoquille("Bleu", "L");
        
        escargours2.addCoquille("Rouge", "M");
        
        // Créer une colonie
        Colonie colonie1 = new Colonie("Colonie A");

        // Afficher les informations et coquilles des escargours
        escargours1.displayInformations();
        escargours1.displayCoquilles();
        
        escargours2.displayInformations();
        escargours2.displayCoquilles();
        
        // Ajouter les escargours à la colonie
        colonie1.addEscargours(escargours1);
        colonie1.addEscargours(escargours2);

        // Bannir un escargour
        colonie1.banEscargours("Grinchis");
        
        // Vérifier si un escargour est dans la colonie
        boolean result = colonie1.containsEscargours(colonie1, "Grinchis");
        if (result) {
            System.out.println("");
            System.out.println("Escargours trouvé");
        } else {
            System.out.println("");
            System.out.println("Escargours non trouvé");
        }

        // Afficher le nombre total de coquilles dans la colonie
        System.out.println("");
        System.out.println("Nombre total de coquilles dans la colonie : " + colonie1.getTotalNbCoquilles());
    }
}
