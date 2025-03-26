package com.DAO;

import com.DTO.ChoixDTO;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.ResultSet;
import java.util.ArrayList;
import static utils.DatabaseLinker.getConnexion;

public class ChoixDAO {

    public static void insertChoix(ChoixDTO choix) throws SQLException {
        String query = "INSERT INTO choix (enonce, correct, question_id) VALUES (?, ?, ?)";

        try (Connection conn = getConnexion(); PreparedStatement state = conn.prepareStatement(query, Statement.RETURN_GENERATED_KEYS)) {

            state.setString(1, choix.getEnonce());
            state.setBoolean(2, choix.isCorrect());
            state.setInt(3, choix.getQuestion_id());

            int affectedRows = state.executeUpdate();
            if (affectedRows > 0) {
                try (ResultSet generatedKeys = state.getGeneratedKeys()) {
                    if (generatedKeys.next()) {
                        choix.setId(generatedKeys.getInt(1));
                    }
                }
            } else {
                throw new SQLException("La création du choix a échoué, aucune ligne affectée.");
            }
        }
    }

    public static void updateChoix(ChoixDTO choix) throws SQLException {
        String query = "UPDATE choix SET enonce = ?, correct = ?, question_id = ? WHERE id = ?";
        try (Connection conn = getConnexion()) {
            PreparedStatement state = conn.prepareStatement(query);

            state.setString(1, choix.getEnonce());
            state.setBoolean(2, choix.isCorrect());
            state.setInt(3, choix.getQuestion_id());
            state.setInt(4, choix.getId());

            state.executeUpdate();
        }
    }

    public static void deleteChoix(int id) throws SQLException {
        String query = "DELETE FROM choix WHERE id = ?";
        try (Connection conn = getConnexion()) {
            PreparedStatement state = conn.prepareStatement(query);
            state.setInt(1, id);
            state.executeUpdate();
        }
    }

    public static ChoixDTO getChoixById(int id) throws SQLException {
        String query = "SELECT * FROM choix WHERE id = ?";
        try (Connection conn = getConnexion()) {
            PreparedStatement state = conn.prepareStatement(query);
            state.setInt(1, id);
            ResultSet results = state.executeQuery();

            if (results.next()) {
                ChoixDTO choix = new ChoixDTO(results.getInt("id"), results.getString("enonce"), results.getBoolean("correct"), results.getInt("question_id"));
                return choix;
            } else {
                return null;
            }
        }
    }

    public static ArrayList<ChoixDTO> getListChoix(int question_id) throws SQLException {
        String query = "SELECT * FROM choix WHERE question_id = ? ORDER BY id ASC";
        try (Connection conn = getConnexion()) {
            PreparedStatement state = conn.prepareStatement(query);
            state.setInt(1, question_id);
            ResultSet results = state.executeQuery();

            ArrayList<ChoixDTO> listChoix = new ArrayList<>();
            while (results.next()) {
                listChoix.add(new ChoixDTO(results.getInt("id"), results.getString("enonce"), results.getBoolean("correct"), results.getInt("question_id")));
            }
            return listChoix;
        }
    }

    public static ChoixDTO getChoixByIndex(int question_id, int choix_index) throws SQLException {
        ArrayList<ChoixDTO> listChoix = getListChoix(question_id);
        if (choix_index >= 0 && choix_index < listChoix.size()) {
            return listChoix.get(choix_index);
        } else {
            throw new IndexOutOfBoundsException("Index de choix invalide : " + choix_index);
        }
    }
    
    public static ArrayList<ChoixDTO> getAllChoix() throws SQLException {
    String query = "SELECT * FROM choix ORDER BY id ASC";
    try (Connection conn = getConnexion()) {
        PreparedStatement state = conn.prepareStatement(query);
        ResultSet results = state.executeQuery();

        ArrayList<ChoixDTO> listChoix = new ArrayList<>();
        while (results.next()) {
            listChoix.add(new ChoixDTO(results.getInt("id"), results.getString("enonce"), results.getBoolean("correct"), results.getInt("question_id")));
        }
        return listChoix;
    }
}


}
