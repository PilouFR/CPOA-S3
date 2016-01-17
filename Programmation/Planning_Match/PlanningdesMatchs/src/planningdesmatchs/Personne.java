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
public class Personne {
    private int idPersonne;
    private String nom;
    private String prenom;
    private String nationalite;
    private int age;

    public Personne(int idPersonne, String nom, String prenom, int age, String nationalite){
        idPersonne = this.idPersonne;
        nom = this.nom;
        prenom = this.prenom;
        age = this.age;
        nationalite = this.nationalite;
        
    }
    
    
    

           

    /**
     * @return the idPersonne
     */
    public int getIdPersonne() {
        return idPersonne;
    }

    /**
     * @param idPersonne the idPersonne to set
     */
    public void setIdPersonne(int idPersonne) {
        this.idPersonne = idPersonne;
    }

    /**
     * @return the nom
     */
    public String getNom() {
        return nom;
    }

    /**
     * @param nom the nom to set
     */
    public void setNom(String nom) {
        this.nom = nom;
    }

    /**
     * @return the prenom
     */
    public String getPrenom() {
        return prenom;
    }

    /**
     * @param prenom the prenom to set
     */
    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    /**
     * @return the nationalite
     */
    public String getNationalite() {
        return nationalite;
    }

    /**
     * @param nationalite the nationalite to set
     */
    public void setNationalite(String nationalite) {
        this.nationalite = nationalite;
    }

    /**
     * @return the age
     */
    public int getAge() {
        return age;
    }

    /**
     * @param age the age to set
     */
    public void setAge(int age) {
        this.age = age;
    }
}
