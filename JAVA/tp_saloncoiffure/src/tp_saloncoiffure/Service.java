package tp_saloncoiffure;

public class Service {

    private String libelle;
    private double prix;

    public Service(String libelle, double prix) {
        this.libelle = libelle;
        this.prix = prix;
    }

    public String getLibelle() {
        return libelle;
    }

    public void setLibelle(String libelle) {
        this.libelle = libelle;
    }

    public double getPrix() {
        return prix;
    }

    public void setPrix(double prix) {
        this.prix = prix;
    }

    public void displayInfoService() {
        System.out.println("");
        System.out.println("Voici le service proposé : " + this.libelle);
        System.out.println("Voici son prix : " + this.prix);
    }
}
