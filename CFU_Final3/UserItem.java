package CFU_Final3;

import java.util.ArrayList;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
/**
 *
 * @author DELL
 */
public class UserItem {

    private int id;
    private ArrayList<ObjectItem> item;

    public UserItem() {
        id = 0;
        item = null;
    }

    public UserItem(int id, ArrayList<ObjectItem> ArrayListObjectItem) {
        this.id = id;
        if (ArrayListObjectItem != null) {
            item = new ArrayList<>(ArrayListObjectItem);
        } else {
            item = new ArrayList<>(0);
        }
    }

    public UserItem(int id, String idItem, double scoreItem) {
        this.id = id;
        item = new ArrayList<>();
        item.add(new ObjectItem(idItem, scoreItem));
    }

    public UserItem(int id, String idItem) {
        this.id = id;
        item = new ArrayList<>();
        item.add(new ObjectItem(idItem, 0));
    }

    public UserItem(int id, ArrayList<Integer> ArrayListIntegeridItem, int score) {
        this.id = id;
        item = new ArrayList<>();
        for (int i = 0; i < ArrayListIntegeridItem.size(); i++) {
            ObjectItem addItem = new ObjectItem(ArrayListIntegeridItem.get(i) + "", score);
            item.add(addItem);
        }
    }

    public int getId() {
        return id;
    }

    public ArrayList<ObjectItem> getItem() {
        return item;
    }

    public ArrayList<ObjectItem> getListIdItem(UserItem userItemList) {
        return userItemList.getItem();
    }

    // Các phương thức getter và setter khác (nếu cần)
    public void setItem(ArrayList<ObjectItem> item) {
        this.item = item;
    }
}
