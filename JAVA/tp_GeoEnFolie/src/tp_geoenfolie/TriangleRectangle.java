package tp_geoenfolie;

public class TriangleRectangle extends Forme {

    private double base;
    private double hauteur;

    public TriangleRectangle(double base, double hauteur, String nom) {
        super(nom);
        this.base = base;
        this.hauteur = hauteur;
    }

    @Override
    public double calculerAire() {
        return (this.base * this.hauteur) / 2;
    }

    @Override
    public double calculerPerimetre() {
        return this.base + this.hauteur + Math.hypot(this.base, this.hauteur);
    }

}
