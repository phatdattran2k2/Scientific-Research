package CFU_Final3;

import java.io.IOException;
import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;
import java.lang.reflect.Array;
// import java.net.http.HttpRequest;
import java.util.*;
import java.util.function.Predicate;
import java.sql.PreparedStatement;
import org.json.JSONArray;
import org.json.JSONObject;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
/**
 *
 * @author DELL
 */
public class CFU_WithItem_der1 {

//Hàm tính giá trị trung tình của các item trong 1 user
    private static double[] __getUserAverageRatings(ArrayList<UserItem> ratings) {
        int numUsers = __legthOfUser(ratings);
        int numItems = __legthOfItemUser(ratings, 0);
        double[] userAverages = new double[numUsers];

        for (int i = 0; i < numUsers; i++) {
            int numRatings = 0;
            double sumRatings = 0;

            for (int j = 0; j < numItems; j++) {
                if (__getFullScoreUser(ratings, i, j) != -1) {
                    numRatings++;
                    sumRatings += __getFullScoreUser(ratings, i, j);
                }
            }
            userAverages[i] = numRatings > 0 ? sumRatings / numRatings : 0;
        }
        return userAverages;
    }

//Hàm tính độ tương đồng của 2 người dùng
    private static double __userSimilarity(int user1, int user2, ArrayList<UserItem> ratings, double[] userAverages) {
        int numItems = __legthOfItemUser(ratings, user1);
        double dotProduct = 0;
        double norm1 = 0;
        double norm2 = 0;

        for (int i = 0; i < numItems; i++) {
            double rating1 = __getFullScoreUser(ratings, user1, i);
            double rating2 = __getFullScoreUser(ratings, user2, i);

            if (rating1 != -1 && rating2 != -1) {
                dotProduct += (rating1 - userAverages[user1]) * (rating2 - userAverages[user2]);
                norm1 += Math.pow(rating1 - userAverages[user1], 2);
                norm2 += Math.pow(rating2 - userAverages[user2], 2);
            }
        }

        if (norm1 == 0 || norm2 == 0) {
            return 0;
        }

        return dotProduct / (Math.sqrt(norm1) * Math.sqrt(norm2));
    }

// Hàm đề xuất mục tiêu cho người dùng dựa trên lọc cộng tác trên người dùng
    private static List<Integer> __recommendItems(String User, ArrayList<UserItem> ratings, double[] userAverages, int numRecommendations) {
        int user = __findIndexInArrayList(ratings, User);
        int numUsers = __legthOfUser(ratings);
        int numItems = __legthOfItemUser(ratings, 0);
        ArrayList<Integer> recommendations = new ArrayList<>();
        Map<Integer, Double> userSimilarities = new HashMap<>();

        for (int otherUser = 0; otherUser < numUsers; otherUser++) {
            if (otherUser != user) {
                double similarity = __userSimilarity(user, otherUser, ratings, userAverages);
                userSimilarities.put(otherUser, similarity);
            }
        }

        for (int item = 0; item < numItems; item++) {
            if (__getFullScoreUser(ratings, user, item) == -1) {
                double weightedRatingSum = 0;
                double similaritySum = 0;

                for (int otherUser : userSimilarities.keySet()) {
                    if (__getFullScoreUser(ratings, otherUser, item) != -1) {
                        double similarity = userSimilarities.get(otherUser);
                        weightedRatingSum += similarity * (__getFullScoreUser(ratings, otherUser, item) - userAverages[otherUser]);
                        similaritySum += Math.abs(similarity);
                    }
                }

                if (similaritySum > 0) {
                    double predictedRating = userAverages[user] + weightedRatingSum / similaritySum;
                    recommendations.add(item);
                }
            }
        }

        // Sắp xếp theo độ dự đoán giảm dần
        recommendations.sort((item1, item2) -> Double.compare(__predictedRating(user, item2, ratings, userAverages, userSimilarities), __predictedRating(user, item1, ratings, userAverages, userSimilarities)));

        // Chọn số lượng đề xuất cần thiết
        if (numRecommendations > recommendations.size()) {
            return recommendations;
        } else {
            return recommendations.subList(0, numRecommendations);
        }
    }

// hàm đánh giá dự đoán cho một người dùng và mục tiêu cụ thể
    private static double __predictedRating(int user, int item, ArrayList<UserItem> ratings, double[] userAverages, Map<Integer, Double> userSimilarities) {
        double weightedRatingSum = 0;
        double similaritySum = 0;

        for (int otherUser : userSimilarities.keySet()) {
            if (__getFullScoreUser(ratings, otherUser, item) != -1) {
                double similarity = userSimilarities.get(otherUser);
                weightedRatingSum += similarity * (__getFullScoreUser(ratings, otherUser, item) - userAverages[otherUser]);
                similaritySum += Math.abs(similarity);
            }
        }

        if (similaritySum > 0) {
            return userAverages[user] + weightedRatingSum / similaritySum;
        } else {
            return 0;
        }
    }

// Hàm tìm vị trí của người dùng   
    private static int __findIndexInArrayList(ArrayList<UserItem> userList, String userId) {
        for (int i = 0; i < userList.size(); i++) {
            if (String.valueOf(userList.get(i).getId()).equals(userId)) {
                return i;
            }
        }
        return -1;
    }

// Hàm đếm số lượng item chưa đánh giá
    private static int __numRecomment(ArrayList<UserItem> userRating, String userId) {
        int indexUserInList = __findIndexInArrayList(userRating, userId);

        if (indexUserInList == -1) {
            return 0;
        }

        int countNoneOfNumberRecomment = 0;

        for (ObjectItem item : userRating.get(indexUserInList).getItem()) {
            if (item.getScore() == -1) {
                countNoneOfNumberRecomment++;
            }
        }

        return countNoneOfNumberRecomment;
    }

//    Đổi json sang arraylist
    public static ArrayList<UserItem> __parseJsonToUserItemList(String jsonString) {
        ArrayList<UserItem> userItemList = new ArrayList<>();

        try {
            JSONArray jsonArray = new JSONArray(jsonString);

            for (int i = 0; i < jsonArray.length(); i++) {
                JSONArray userData = jsonArray.getJSONArray(i);
                int userId = userData.getInt(0);

                JSONObject userScores = userData.getJSONObject(1);
                Iterator<String> keys = userScores.keys();
                ArrayList<ObjectItem> objectItems = new ArrayList<>();
                int j = 0;

                while (keys.hasNext()) {
                    String id_item = keys.next();
                    int score = userScores.getInt(id_item);
                    objectItems.add(j, new ObjectItem(id_item, score));
                    j++;
                }

                UserItem userItem = new UserItem(userId, objectItems);
                userItemList.add(userItem);
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
        return userItemList;
    }

//    Xắp xếp id người dùng tăng dần
    public static void __Sort(ArrayList<UserItem> userList) {
        for (int i = 0; i < __legthOfUser(userList); i++) {
            ArrayList<ObjectItem> ItemObject = userList.get(i).getItem();
            Collections.sort(ItemObject, new Comparator<ObjectItem>() {
                @Override
                public int compare(ObjectItem item1, ObjectItem item2) {
                    // Chuyển đổi id_item thành số nguyên và so sánh
                    int id1 = Integer.parseInt(item1.getId_item().replaceAll("[^0-9]", ""));
                    int id2 = Integer.parseInt(item2.getId_item().replaceAll("[^0-9]", ""));
                    return Integer.compare(id1, id2);
                }
            });

        }
    }
    //    Độ dài của list user

    public static int __legthOfUser(ArrayList<UserItem> userItemList) {
        return userItemList.size();
    }

//    Độ dài của list item user
    public static int __legthOfItemUser(ArrayList<UserItem> userItemList, int index) {
        return userItemList.get(index).getItem().size();
    }

//  Lấy tất cả các item của user    
    public static String __getFullItemUser(ArrayList<UserItem> userItemList, int indexOfUser, int indexOfItem) {
        return userItemList.get(indexOfUser).getItem().get(indexOfItem).getId_item();
    }

//  Lất tất cả các điểm của item
    public static double __getFullScoreUser(ArrayList<UserItem> userItemList, int indexOfUser, int indexOfItem) {
        return userItemList.get(indexOfUser).getItem().get(indexOfItem).getScore();
    }

// Xoá trùng nhau
    public static void __removeDuplicateItems(ArrayList<UserItem> userItemList) {
        for (UserItem userItem : userItemList) {
            Map<String, Double> idValueMap = new HashMap<>();

            ArrayList<ObjectItem> processedItems = new ArrayList<>();

            for (ObjectItem item : userItem.getItem()) {
                String id = item.getId_item();
                double value = item.getScore();
                // Thêm các item không nhau
                if (!idValueMap.containsKey(id)) {
                    idValueMap.put(id, value);
                } else {
                    // Nếu id item trùng nhau 
                    double existingValue = idValueMap.get(id);
                    if (value != -1) {
                        // Nếu giá trị khác -1, giữ lại giá trị lớn nhất
                        existingValue = Math.max(existingValue, value);
                        idValueMap.put(id, existingValue);
                    }
                }
            }

            for (Map.Entry<String, Double> entry : idValueMap.entrySet()) {
                processedItems.add(new ObjectItem(entry.getKey(), entry.getValue()));
            }
            userItem.setItem(processedItems);
        }
    }

// Thêm các item user khác chưa có
    public static void __processItems(ArrayList<UserItem> userItemList) {
        Map<UserItem, Set<String>> userItemMap = new HashMap<>();
        Set<ObjectItem> allItems = new HashSet<>();
        for (UserItem user : userItemList) {
            allItems.addAll(user.getItem());
        }
        // Thêm các mục thiếu vào từng người dùng và xoá các item trùng nhau
        for (UserItem user : userItemList) {
            Set<String> userItems = userItemMap.getOrDefault(user, new HashSet<>());
            List<ObjectItem> missingItems = new ArrayList<>();

            for (ObjectItem item : allItems) {
                //  Kiểm tra tồn tại
                boolean itemExists = false;
                for (ObjectItem userItem : user.getItem()) {
                    String id = userItem.getId_item();
                    double score = userItem.getScore();
                    if (userItem.getId_item().equals(item.getId_item())) {
                        itemExists = true;
                        break;
                    }
                }
                if (!itemExists) {
//                    Thêm item chua tồn tại vào với giá trị -1
                    missingItems.add(new ObjectItem(item.getId_item(), -1));
                }
            }
            // Xoá các item trùng nhau trong danh sách người dùng 
            Predicate<ObjectItem> condition = existingItem -> userItems.contains(existingItem.getId_item());
            user.getItem().removeIf(condition);
            // Thêm các mục thiếu vào danh sách của người dùng
            user.getItem().addAll(missingItems);
            userItemMap.put(user, userItems);
        }
        __removeDuplicateItems(userItemList);
        __Sort(userItemList);
    }

    public static String __userItemListContainsItemId(ArrayList<UserItem> userItemList, int indexUserInList, Integer recommendation) {
        return __getFullItemUser(userItemList, indexUserInList, recommendation);
    }

    public static ArrayList<UserItem> Recommendations(ArrayList<UserItem> userItemList) {
        int numRecommendations[] = new int[__legthOfUser(userItemList)];
        double[] userAverages = __getUserAverageRatings(userItemList); //

        for (int i = 0; i < __legthOfUser(userItemList); i++) {
            numRecommendations[i] = __numRecomment(userItemList, userItemList.get(i).getId() + "");
        }

        // Thêm các item được đề xuất vào đúng từng user
        ArrayList<UserItem> recommendations = new ArrayList<>();

        for (int i = 0; i < __legthOfUser(userItemList); i++) {
            String userid = userItemList.get(i).getId() + "";
            List<Integer> recommendedItems = __recommendItems(userid, userItemList, userAverages, numRecommendations[i]);
            Iterator<Integer> iterator = recommendedItems.iterator();
            ArrayList<Integer> idRecommendedItems = new ArrayList<>();
            while (iterator.hasNext()) {
                idRecommendedItems.add(iterator.next());
            }
            recommendations.add(new UserItem(userItemList.get(i).getId(), idRecommendedItems, 0));
        }

        return recommendations;
    }

    public static void getIdItemWhenDone(ArrayList<UserItem> userItemList, ArrayList<UserItem> recommendations) {
        ArrayList<UserItem> IdItemRecommend = new ArrayList<>();

        try {
            String remove = "DELETE FROM `recommend`";
            PreparedStatement removeData = MysqlConnection.MySQLConnect().prepareStatement(remove);
            removeData.execute();
        } catch (Exception e) {}

        if (userItemList.size() == recommendations.size()) {
            for (int i = 0; i < userItemList.size(); i++) {
                if (userItemList.get(i).getId() == recommendations.get(i).getId()) {
                    System.out.println("User: " + userItemList.get(i).getId());
                    for (int j = 0; j < recommendations.get(i).getItem().size(); j++) {
                        String get = recommendations.get(i).getItem().get(j).getId_item();
                        String getAll = userItemList.get(i).getItem().get(Integer.parseInt(get)).getId_item();


                        String insertItem = "INSERT INTO `recommend`(`user_id`, `item_id`) VALUES (?,?)";

                        try {
                            System.out.println("\t Item :" + getAll);
                            PreparedStatement addItem = MysqlConnection.MySQLConnect().prepareStatement(insertItem);
                            addItem.setInt(1, userItemList.get(i).getId());
                            addItem.setString(2, getAll);
                            if (addItem.execute()) {
                                System.out.println("Created successfully recommend test for user " + userItemList.get(i).getId());
                            }
                        } catch (Exception e) {
                            System.out.println(e);
                        }
                    }
                }
            }
        }
//        return null;
    }

    public static void main(String[] args) {
        Timer timer = new Timer();
        Calendar calendar = Calendar.getInstance();
        calendar.set(Calendar.HOUR_OF_DAY, 12); // Set the hour to 0
        calendar.set(Calendar.MINUTE, 0); // Set the minute to 0
        calendar.set(Calendar.SECOND, 0); // Set the second to 0
        timer.schedule(new TimerTask() {
            @Override
            public void run() {
                // Update new data to database here
                HttpRequest request = HttpRequest.newBuilder()
                    .uri(URI.create("http://localhost/QuizApp/server/public/api/recommend"))
                    .header("Content-type", "Application/json")
                    .method("GET", HttpRequest.BodyPublishers.noBody())
                    .build();
                HttpResponse<String> response = null;
                try {
                    response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString());
                } catch (IOException e) {
                    e.printStackTrace();
                } catch (InterruptedException e) {
                    e.printStackTrace();
                }

                String jsonString = response.body();
            
        //        Chuyển json sang userItem Array 
                ArrayList<UserItem> userItemList = __parseJsonToUserItemList(jsonString);

        //        Xử lý hàng loạt thêm các bài thi chưa làm và xoá trùng nhau.
                __processItems(userItemList);

                ArrayList<UserItem> recommendations = Recommendations(userItemList);

                getIdItemWhenDone(userItemList, recommendations);
            }
        }, calendar.getTime()); // Schedule the task to run at the specified time
    }
}
