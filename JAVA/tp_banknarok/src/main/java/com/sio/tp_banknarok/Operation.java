package com.sio.tp_banknarok;

import com.sio.ezbanking.EzOperation;
import java.util.Date;
import java.text.SimpleDateFormat;

public class Operation extends EzOperation {

    private String typeOperation;

    public Operation(String typeOperation, float montant, Date dateOperation) {
        super(montant, dateOperation);
        this.typeOperation = typeOperation;
    }

    public String getTypeOperation() {
        return typeOperation;
    }
    
    @Override
    public String toString() {
        SimpleDateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy 'à' HH:mm");
        String formatDate = dateFormat.format(super.getDateOperation());

        return "Opération [" + typeOperation + "] du " + formatDate + " -> " + super.getMontant() + " €";
    }
}
