/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package planningdesmatchs;

import Donnees.MyConnection;
import java.sql.*;

/**
 *
 * @author alan
 */
public class Joueur extends Personne{
    private String typeEntree;
    public Joueur (int idPersonne, String nom, String prenom, int age, String nationalite, String typeEntree){
         super(idPersonne, nom, prenom, age, nationalite);
         typeEntree = this.typeEntree;
    }
    
            MyConnection connexion = new MyConnection();
            
            public int charger()
            {
             try{
                 Connection connect = connexion.getConnection();
                 Statement stmt = connect.createStatement();
                 ResultSet rs = stmt.executeQuery("select nomJoueur from Joueur where noJoueur=1");
                 
                 
                 System.out.println(rs);
                 
             }catch(Exception e){
                 System.out.println("Erreur au chargement des Personnes :" + e.getMessage());
                 return -1;
             }                
             return 0;
            }
            
    
    


    /**
     * @return the typeEntree
     */
    public String getTypeEntree() {
        return typeEntree;
    }

    /**
     * @param typeEntree the typeEntree to set
     */
    public void setTypeEntree(String typeEntree) {
        this.typeEntree = typeEntree;
    }
    
    
}
