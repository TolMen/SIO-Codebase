package tp_geoenfolie;

public class Cercle extends Forme {

    private double rayon;

    public Cercle(double rayon, String nom) {
        super(nom);
        this.rayon = rayon;
    }

    @Override
    public double calculerAire() {
        return this.rayon * this.rayon * Math.PI;
    }

    @Override
    public double calculerPerimetre() {
        return this.rayon * 2 * Math.PI;
    }

}
