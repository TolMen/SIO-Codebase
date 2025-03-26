package tp_geoenfolie;

public abstract class Forme {

    protected String nom;

    public Forme(String nom) {
        this.nom = nom;
    }

    public String getNom() {
        return nom;
    }

    public abstract double calculerAire();

    public abstract double calculerPerimetre();

    @Override
    public String toString() {
        return "Je suis " + this.nom + " de périmètre " + calculerPerimetre() + " et d'aire " + calculerAire() + " !";
    }
}
