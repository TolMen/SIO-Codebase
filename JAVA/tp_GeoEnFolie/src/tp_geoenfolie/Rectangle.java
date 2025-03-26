package tp_geoenfolie;

public class Rectangle extends Forme {

    private double longeur;
    private double largeur;

    public Rectangle(double longeur, double largeur, String nom) {
        super(nom);
        this.longeur = longeur;
        this.largeur = largeur;
    }

    @Override
    public double calculerPerimetre() {
        return (this.longeur + this.largeur) * 2;
    }

    @Override
    public double calculerAire() {
        return this.longeur * this.largeur;
    }
}
