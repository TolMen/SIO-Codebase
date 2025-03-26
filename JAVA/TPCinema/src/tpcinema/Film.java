
package tpcinema;

public class Film {
    
    private String nom;
    private String realisateur;
    private String theme;
    private float prix;

    public Film(String nom, String realisateur, String theme, float prix) {
        this.nom = nom;
        this.realisateur = realisateur;
        this.theme = theme;
        this.prix = prix;
    }
    
    

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getRealisateur() {
        return realisateur;
    }

    public void setRealisateur(String realisateur) {
        this.realisateur = realisateur;
    }

    public String getTheme() {
        return theme;
    }

    public void setTheme(String theme) {
        this.theme = theme;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }
    
    
}
