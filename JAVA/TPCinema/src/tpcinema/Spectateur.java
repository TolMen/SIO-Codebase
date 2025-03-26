package tpcinema;

public class Spectateur {

    private String nom;
    private String prenom;
    private int culturePoints;

    public Spectateur(String nom, String prenom) {
        this.nom = nom;
        this.prenom = prenom;
        this.culturePoints = 0;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public int getCulturePoints() {
        return culturePoints;
    }

    public void setCulturePoints(int culturePoints) {
        this.culturePoints = culturePoints;
    }

    // Méthode
    public void regardeFilm(Cinema cinema, String nomFilm) {

        Film film = cinema.getFilm(nomFilm);

        if (film != null) {

            cinema.setTresorerie(cinema.getTresorerie() + film.getPrix());

            this.culturePoints++;
            System.out.println(nom + " " + prenom + " regarde " + nomFilm);
            System.out.println("Prix de la séance : " + film.getPrix());
            System.out.println("Trésorerie du " + cinema.getNom() + " : "+ cinema.getTresorerie());
            System.out.println("Points de culture de " + nom + " : " + this.culturePoints);
        } else {
            System.out.println(nom + " " + prenom);
            System.out.println("Le film " + nomFilm + " n'est pas disponible dans ce cinéma.");
        }
    }
}
