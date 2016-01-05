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
public class RamasseurBalle extends Personne{
    private int equipe;
    public RamasseurBalle(int idPersonne, String nom, String prenom, int age, String nationalite, int equipe){
        super(idPersonne, nom, prenom, age, nationalite);
        equipe = this.equipe;
    }

    /**
     * @return the equipe
     */
    public int getEquipe() {
        return equipe;
    }

    /**
     * @param equipe the equipe to set
     */
    public void setEquipe(int equipe) {
        this.equipe = equipe;
    }
}
