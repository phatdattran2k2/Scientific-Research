package CFU_Final3;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
/**
 *
 * @author DELL
 */
public class ObjectItem {

    private String id_item;
    private double score;

    public double customRound(double number) {
        int integerPart = (int) number; // Lấy phần nguyên của số

        double decimalPart = number - integerPart; // Lấy phần thập phân

        // Làm tròn theo quy tắc của bạn
        if (decimalPart < 0.5) {
            return integerPart;
        } else {
            return integerPart + 1;
        }
    }

    public ObjectItem() {
    }

    public ObjectItem(String id_item, double score) {
        this.id_item = id_item;
        this.score = score;
    }

    public String getId_item() {
        return id_item;
    }

    public double getScore() {
        return score;
    }

    public void setIdItem(String idItem) {
        this.id_item = idItem;
    }

    public void setScoreItem(int scoreItem) {
        this.score = scoreItem;
    }
}
