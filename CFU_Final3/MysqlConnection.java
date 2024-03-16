/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package CFU_Final3;

import java.sql.Connection;
import java.sql.DriverManager;

/**
 *
 * @author DELL
 */
public class MysqlConnection {
    
    public static Connection MySQLConnect(){
        Connection conn=null;
        try {
            Class.forName("com.mysql.cj.jdbc.Driver").getDeclaredConstructor().newInstance();
        
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/english_study_db", "root", "");
            
        } catch (Exception e) {
            System.out.println(e);
        }
        return conn;
    }
}
