package tp.enquete;

public class Personnage {

    // Variables d'informations
    private String nom;
    private String prenom;
    private String profession;
    private String mobile;
    private boolean suspect;

    // Constructeur
    public Personnage(String nom, String prenom, String profession, String mobile, boolean suspect) {
        this.nom = nom;
        this.prenom = prenom;
        this.profession = profession;
        this.mobile = mobile;
        this.suspect = suspect;
    }

    // Getter
    public String getNom() {
        return this.nom;
    }

    public String getPrenom() {
        return this.prenom;
    }

    public String getProfession() {
        return this.profession;
    }

    public String getMobile() {
        return this.mobile;
    }

    public boolean isSuspect() {
        return this.suspect;
    }

    // Setter
    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public void setProfession(String profession) {
        this.profession = profession;
    }

    public void setMobile(String mobile) {
        this.mobile = mobile;
    }

    public void setSuspect(boolean suspect) {
        this.suspect = suspect;
    }

    // Méthode
    public void displayInfos() {
        System.out.println(nom + " " + prenom);
        System.out.println("Profession : " + profession);
        System.out.println("Mobile : " + mobile);
        System.out.print("Suspect : ");
        if (suspect) {
            System.out.println("Oui");
        } else {
            System.out.println("Non");
        }
    }
    
    public static void displayPersonnage(Personnage[] persos) {
        for (int i = 0; i < persos.length; i++) {
            System.out.println();
            persos[i].displayInfos();
            System.out.println("");
        }
    }
}
