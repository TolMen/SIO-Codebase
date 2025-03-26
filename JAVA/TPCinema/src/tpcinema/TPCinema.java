package tpcinema;

public class TPCinema {

    public static void main(String[] args) {

        Film film1 = new Film("Film A", "Réalisateur A", "Action", 10f);
        Film film2 = new Film("Film B", "Réalisateur B", "Comédie", 8f);
        Film film3 = new Film("Film C", "Réalisateur C", "Drame", 12f);
        Film film4 = new Film("Film D", "Réalisateur D", "Fanta", 30f);
        
        Cinema cinemaLum = new Cinema("Cinéma Lumière", "123 Rue du Cinéma");
        Cinema cinemaAux = new Cinema("Cinéma Auxilli", "321 Cinéma ruelle");

        Spectateur spectateur1 = new Spectateur("John", "Doe");
        Spectateur spectateur2 = new Spectateur("Alice", "Smith");
        
        cinemaLum.addFilm(film1);
        cinemaLum.addFilm(film2);
        cinemaLum.addFilm(film3);
        cinemaLum.addFilm(film4);
        cinemaAux.addFilm(film4);
        cinemaAux.addFilm(film1);
        
        System.out.println("");
        System.out.println("---------------------------------------");
        System.out.println("");

        spectateur1.regardeFilm(cinemaLum, "Film A");
        System.out.println("");
        System.out.println("---------------------------------------");
        System.out.println("");
        spectateur2.regardeFilm(cinemaLum, "Film B");
        System.out.println("");
        System.out.println("---------------------------------------");
        System.out.println("");
        spectateur1.regardeFilm(cinemaLum, "Film C");
        System.out.println("");
        System.out.println("---------------------------------------");
        System.out.println("");
        spectateur1.regardeFilm(cinemaAux, "Film D");
        System.out.println("");
        System.out.println("---------------------------------------");
        System.out.println("");
        spectateur2.regardeFilm(cinemaAux, "Film D");
        System.out.println("");
        System.out.println("---------------------------------------");
        System.out.println("");
        spectateur1.regardeFilm(cinemaAux, "Film B");
        
    }
}
