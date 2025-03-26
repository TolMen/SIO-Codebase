package com.application;

import com.DAO.ChoixDAO;
import com.DAO.QuestionDAO;
import com.DTO.ChoixDTO;
import com.DTO.QuestionDTO;
import utils.DatabaseLinker;

public class MainApplication {

    public static void main(String[] args) {

        try {
            DatabaseLinker.getConnexion();

            int id_question = 5;
            
            System.out.println("Questions :");
            System.out.println(QuestionDAO.getQuestionById(id_question));
            
            System.out.println("\nChoix:");
            for (ChoixDTO choix : ChoixDAO.getListChoix(id_question)) {
                System.out.println(choix);
            }
            
        } catch (Exception e) {
            System.err.println("Erreur : " + e.getMessage());
        }
    }
}

