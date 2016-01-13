/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Donnees;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author alan
 */
public class MyConnection {
    private Connection conn;
    
    public Connection getConnection() throws SQLException{
        if(conn==null){
            try{
                Class.forName("com.mysql.jdbc.Driver");
                String userid="p1404604";
                String password ="213607";
                String URL = "jdnbc:mysql://iutdoua-webetu.univ-lyon1.fr/phpMyAdmin";
                conn = DriverManager.getConnection(URL, userid, password);
                System.out.println("==> connexion à MySQL effectuée !");
            }catch(ClassNotFoundException e){
                System.out.println("**** La connexion à la BD a échoué...");
                e.printStackTrace();
            }
        }
        return conn;
    }
    
}
