package com.application;

import com.DAO.ChoixDAO;
import com.DAO.QuestionDAO;
import com.DTO.ChoixDTO;
import com.DTO.QuestionDTO;
import java.util.ArrayList;

public class FillDatabase {

    public static void main(String[] args) {

        try {
            ArrayList<ChoixDTO> listChoix = ChoixDAO.getAllChoix();
            for (ChoixDTO choix : listChoix) {
                ChoixDAO.deleteChoix(choix.getId());
            }
            
            ArrayList<QuestionDTO> listQuestion = QuestionDAO.getQuestions();
            for (QuestionDTO question : listQuestion) {
                QuestionDAO.deleteQuestion(question.getId());
            }
            System.out.println("Suppression des données terminée.");
            
            
            QuestionDTO question1 = new QuestionDTO(0, "On est en quel année ?");
            QuestionDTO question2 = new QuestionDTO(0, "Je suis une question ?");
            QuestionDAO.insertQuestion(question1);
            QuestionDAO.insertQuestion(question2);
            System.out.println("Liste des questions inséré.");
            
            ChoixDTO choix1 = new ChoixDTO(0, "2015", false, question1.getId());
            ChoixDTO choix2 = new ChoixDTO(0, "2024", false, question1.getId());
            ChoixDTO choix3 = new ChoixDTO(0, "305", false, question1.getId());
            ChoixDTO choix4 = new ChoixDTO(0, "2025", true, question1.getId());
            ChoixDAO.insertChoix(choix1);
            ChoixDAO.insertChoix(choix2);
            ChoixDAO.insertChoix(choix3);
            ChoixDAO.insertChoix(choix4);
            
            ChoixDTO choix5 = new ChoixDTO(0, "Non", false, question2.getId());
            ChoixDTO choix6 = new ChoixDTO(0, "Oui", true, question2.getId());
            ChoixDTO choix7 = new ChoixDTO(0, "Je sais pas", false, question2.getId());
            ChoixDTO choix8 = new ChoixDTO(0, "Sans doute", false, question2.getId());
            ChoixDAO.insertChoix(choix5);
            ChoixDAO.insertChoix(choix6);
            ChoixDAO.insertChoix(choix7);
            ChoixDAO.insertChoix(choix8);
            System.out.println("Liste des choix inséré.");
            
        } catch (Exception ex) {
            ex.printStackTrace();
        }

    }

}
