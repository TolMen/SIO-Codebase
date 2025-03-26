package tp_saloncoiffure;

public class Client {

    private String nom;
    private String numeroTelephone;

    public Client(String nom, String numeroTelephone) {
        this.nom = nom;
        this.numeroTelephone = numeroTelephone;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getNumeroTelephone() {
        return numeroTelephone;
    }

    public void setNumeroTelephone(String numeroTelephone) {
        this.numeroTelephone = numeroTelephone;
    }

    public void displayInfoClient() {
        System.out.println("");
        System.out.println("Voici le nom du client : " + this.nom);
        System.out.println("Voici son numéro de téléphone : " + this.numeroTelephone);
    }

}
