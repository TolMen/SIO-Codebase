package tp_saloncoiffure;

import java.util.ArrayList;

public class mainApplication {

    public static void main(String[] args) {

        SalonCoiffure salon = new SalonCoiffure();

        salon.ajouterClient("Natacha Leduc", "06 86 69 00 12");
        salon.ajouterClient("Pierre Talus", "07 39 14 45 11");
        salon.ajouterClient("Sylvie Arto", "07 28 39 12 12");

        salon.ajouterService("Carré dégradé", 25.0);
        salon.ajouterService("Coupe mulet", 15.0);
        salon.ajouterService("Coupe au bol", 20);

        System.out.println("");
        System.out.println("----------------------------");
        salon.displayClientInscrit();
        salon.displayServicePropose();
        System.out.println("");
        System.out.println("----------------------------");

        Client clientRecherche = salon.rechercherClient("Sylvie Arto");
        if (clientRecherche != null) {
            System.out.println("");
            System.out.println("Numéro de téléphone de Sylvie Arto : " + clientRecherche.getNumeroTelephone());
        } else {
            System.out.println("Client non trouvé.");
        }

        Service serviceRecherche = salon.rechercherService("Coupe mulet");
        if (serviceRecherche != null) {
            System.out.println("");
            System.out.println("Service trouvé : " + serviceRecherche.getLibelle() + " au prix de " + serviceRecherche.getPrix() + "€");
        } else {
            System.out.println("Service non trouvé.");
        }

        salon.supprimerClient("Pierre Talus");
        salon.supprimerService("Coupe au bol");

        salon.modifNum("Natacha Leduc", "07 29 00 33 12");
        salon.modifPrix("Carré dégradé", 35.0);

        System.out.println("");
        System.out.println("----------------------------");
        salon.displayClientInscrit();
        salon.displayServicePropose();
        System.out.println("");
        System.out.println("----------------------------");
    }
}
