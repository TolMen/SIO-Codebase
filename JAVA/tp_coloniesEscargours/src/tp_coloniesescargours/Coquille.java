package tp_coloniesescargours;

public class Coquille {

    // Attribut
    private String couleur;
    private String format;

    // Constructeur
    public Coquille(String couleur, String format) {
        this.couleur = couleur;
        this.format = format;
    }

    // Getter & Setter
    public String getCouleur() {
        return couleur;
    }

    public void setCouleur(String couleur) {
        this.couleur = couleur;
    }

    public String getFormat() {
        return format;
    }

    public void setFormat(String format) {
        this.format = format;
    }

    // Méthodes
    public void displayCaracteristiques() {
        System.out.println("");
        System.out.println("Couleur de la coquille : " + this.couleur);
        System.out.println("Format de la coquille : " + this.format);
    }
}
