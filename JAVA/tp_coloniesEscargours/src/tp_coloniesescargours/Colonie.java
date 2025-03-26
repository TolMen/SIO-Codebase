package tp_coloniesescargours;

import java.util.ArrayList;

public class Colonie {

    // Attribut
    private String nomColonie;
    private ArrayList<Escargours> listEscargours = new ArrayList<>();

    // Constructeur
    public Colonie(String nomColonie) {
        this.nomColonie = nomColonie;
    }

    // Getter & Setter
    public String getNomColonie() {
        return nomColonie;
    }

    public void setNomColonie(String nomColonie) {
        this.nomColonie = nomColonie;
    }

    // Méthodes
    public Escargours findEscargours(String nomEscargours) {
        for (Escargours escargour : listEscargours) {
            if (escargour.getNomEscargours().equals(nomEscargours)) {
                return escargour;
            }
        }
        return null;
    }

    public void addEscargours(Escargours escargour) {
        listEscargours.add(escargour);
    }

    public boolean containsEscargours(Colonie colonie, String nomEscargours) {
        Escargours escargoursRecherche = colonie.findEscargours(nomEscargours);
        if (escargoursRecherche != null) {
            return true;
        } else {
            return false;
        }
    }

    public void banEscargours(String nomEscargours) {
        for (int i = 0; i < listEscargours.size(); i++) {
            if (listEscargours.get(i).getNomEscargours().equals(nomEscargours)) {
                listEscargours.remove(i);
                break;
            }
        }
    }

    public int getTotalNbCoquilles() {
        int totalCoquilles = 0;
        for (Escargours escargour : listEscargours) {
            totalCoquilles += escargour.getNbCoquille();
        }
        return totalCoquilles;
    }

}
