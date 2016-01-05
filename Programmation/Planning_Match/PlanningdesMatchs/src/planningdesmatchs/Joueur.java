/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package planningdesmatchs;

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
