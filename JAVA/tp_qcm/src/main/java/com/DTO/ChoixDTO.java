package com.DTO;

public class ChoixDTO {
    
    private int id;
    private String enonce;
    private boolean correct;
    private int question_id;

    public ChoixDTO(int id, String enonce, boolean correct, int question_id) {
        this.id = id;
        this.enonce = enonce;
        this.correct = correct;
        this.question_id = question_id;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getEnonce() {
        return enonce;
    }

    public void setEnonce(String enonce) {
        this.enonce = enonce;
    }

    public boolean isCorrect() {
        return correct;
    }

    public void setCorrect(boolean correct) {
        this.correct = correct;
    }

    public int getQuestion_id() {
        return question_id;
    }

    public void setQuestion_id(int question_id) {
        this.question_id = question_id;
    }
    
    @Override
    public String toString() {
        return "N°" + id + " : " + enonce;
    }
    
}
