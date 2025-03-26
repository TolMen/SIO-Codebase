package tp_geoenfolie;

import java.util.ArrayList;

public class Main {

    public static void main(String[] args) {

        ArrayList<Forme> listForme = new ArrayList<>();

        Forme rectangle = new Rectangle(25.0, 10.5, "Recti");
        Forme cercle = new Cercle(3.0, "Cercla");
        Forme triangleRectangle = new TriangleRectangle(10.0, 5.0, "TriRec");

        listForme.add(rectangle);
        listForme.add(cercle);
        listForme.add(triangleRectangle);

        for (Forme form : listForme) {
            System.out.println(form);
        }
    }
}
