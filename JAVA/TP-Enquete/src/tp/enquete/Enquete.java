package tp.enquete;

public class Enquete {
    
    // Methode recup Perso --> Nom Prenom
    public static Personnage getPersonnage(Personnage[] persos, String nom, String prenom) {
        for (int i = 0; i < persos.length; i++) {
            if (persos[i].getNom().equals(nom) && persos[i].getPrenom().equals(prenom)) {
                return persos[i];
            }
        }
        return null;
    }
    
    
    // Methode recup Perso --> Profession
    public static Personnage getPersonnage(Personnage[] persos, String profession) {
        for (int i = 0; i < persos.length; i++) {
            if (persos[i].getProfession().equals(profession)) {
                return persos[i];
            }
        }
        return null;
    }
    
    // Methode fin d'enquete
    public static void displayEnd(Personnage suspect) {
        System.out.println("L'enquête est terminée, le coupable est " + suspect.getPrenom() + " " + suspect.getNom() + ".");
    }
}
