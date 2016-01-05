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
public class Arbitre extends Personne{
    private String categorie;
    private String typeArbitre;
    
    public Arbitre(int idPersonne, String nom, String prenom, int age, String nationalite, String categorie, String typeArbitre){
        super(idPersonne, nom, prenom, age, nationalite);
        categorie = this.categorie;
        typeArbitre = this.typeArbitre;
        
    }

    /**
     * @return the categorie
     */
    public String getCategorie() {
        return categorie;
    }

    /**
     * @param categorie the categorie to set
     */
    public void setCategorie(String categorie) {
        this.categorie = categorie;
    }

    /**
     * @return the typeArbitre
     */
    public String getTypeArbitre() {
        return typeArbitre;
    }

    /**
     * @param typeArbitre the typeArbitre to set
     */
    public void setTypeArbitre(String typeArbitre) {
        this.typeArbitre = typeArbitre;
    }
}
