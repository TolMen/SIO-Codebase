package com.DAO;

import com.DTO.QuestionDTO;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import static utils.DatabaseLinker.getConnexion;

public class QuestionDAO {

    public static void insertQuestion(QuestionDTO question) throws SQLException {
        String query = "INSERT INTO question (enonce) VALUES (?)";

        try (Connection conn = getConnexion(); PreparedStatement state = conn.prepareStatement(query, Statement.RETURN_GENERATED_KEYS)) {

            state.setString(1, question.getEnonce());

            int affectedRows = state.executeUpdate();
            if (affectedRows > 0) {
                try (ResultSet generatedKeys = state.getGeneratedKeys()) {
                    if (generatedKeys.next()) {
                        question.setId(generatedKeys.getInt(1));
                    }
                }
            } else {
                throw new SQLException("La création de la question a échoué, aucune ligne affectée.");
            }
        }
    }

    public static void updateChoix(QuestionDTO question) throws SQLException {
        String query = "UPDATE question SET enonce = ? WHERE id = ?";
        try (Connection conn = getConnexion()) {
            PreparedStatement state = conn.prepareStatement(query);

            state.setString(1, question.getEnonce());
            state.setInt(2, question.getId());

            state.executeUpdate();
        }
    }

    public static void deleteQuestion(int id) throws SQLException {
        String query = "DELETE FROM question WHERE id = ?";
        try (Connection conn = getConnexion()) {
            PreparedStatement state = conn.prepareStatement(query);
            state.setInt(1, id);
            state.executeUpdate();
        }
    }

    public static QuestionDTO getQuestionById(int id) throws SQLException {
        String query = "SELECT * FROM question WHERE id = ?";
        try (Connection conn = getConnexion()) {
            PreparedStatement state = conn.prepareStatement(query);
            state.setInt(1, id);
            ResultSet results = state.executeQuery();

            if (results.next()) {
                QuestionDTO question = new QuestionDTO(results.getInt("id"), results.getString("enonce"));
                return question;
            } else {
                return null;
            }
        }
    }

    public static ArrayList<QuestionDTO> getQuestions() throws SQLException {
        String query = "SELECT * FROM question ORDER BY id ASC";
        try (Connection conn = getConnexion()) {
            PreparedStatement state = conn.prepareStatement(query);
            ResultSet results = state.executeQuery();
            
            ArrayList<QuestionDTO> listQuestion = new ArrayList<>();
            while (results.next()) {
                listQuestion.add(new QuestionDTO(results.getInt("id"), results.getString("enonce")));
            }
            return listQuestion;
        }
    }
}
