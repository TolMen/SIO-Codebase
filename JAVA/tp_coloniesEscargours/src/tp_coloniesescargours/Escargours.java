package tp_coloniesescargours;

import java.util.ArrayList;

public class Escargours {

    // Attribut
    private String nomEscargours;
    private ArrayList<Coquille> listCoquille = new ArrayList<>();

    // Constructeur
    public Escargours(String nomEscargours) {
        this.nomEscargours = nomEscargours;
    }

    // Getter & Setter
    public String getNomEscargours() {
        return nomEscargours;
    }

    public void setNomEscargours(String nomEscargours) {
        this.nomEscargours = nomEscargours;
    }

    // Méthodes
    public int getNbCoquille() {
        return listCoquille.size();
    }

    public void displayInformations() {
        System.out.println("");
        System.out.println("Nom de l'escargours : " + this.nomEscargours);
        System.out.println("Nombre de coquille : " + getNbCoquille());
    }

    public void addCoquille(String couleur, String format) {
        Coquille coquilles = new Coquille(couleur, format);
        listCoquille.add(coquilles);
    }

    public void displayCoquilles() {
        for (Coquille coquilleI : listCoquille) {
            coquilleI.displayCaracteristiques();
        }
    }

}
