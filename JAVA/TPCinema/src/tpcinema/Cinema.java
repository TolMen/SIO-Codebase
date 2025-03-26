package tpcinema;

import java.util.ArrayList;

public class Cinema {

    private String nom;
    private String adresse;
    private double tresorerie;
    private ArrayList<Film> listFilms = new ArrayList<>();

    public Cinema(String nom, String adresse) {
        this.nom = nom;
        this.adresse = adresse;
        listFilms = new ArrayList<>();
    }


    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public double getTresorerie() {
        return tresorerie;
    }

    public void setTresorerie(double tresorerie) {
        this.tresorerie = tresorerie;
    }

    // Méthode lire
    public Film getFilm(String nom) {

        for (int i = 0; i < listFilms.size(); i++) {
            if (listFilms.get(i).getNom().equals(nom)) {
                return listFilms.get(i);
            }
        }
        return null;
    }
    
    // Méthode add
    public void addFilm(Film films) {
        
        for (int i = 0; i < listFilms.size(); i++) {
            if (listFilms.get(i).getNom().equals(films.getNom())) {
                System.out.println("Film déjà présent dans la liste.");
                return;
            }
        }
        listFilms.add(films);
        System.out.println("Film ajouté à l'affiche.");
    }
    
    // Méthode remove
    public void removeFilm(String nom) {
        
        for (int i = 0; i < listFilms.size(); i++) {
            if (listFilms.get(i).getNom().equals(nom)) {
                listFilms.remove(i);
            }
        }
    }

}
