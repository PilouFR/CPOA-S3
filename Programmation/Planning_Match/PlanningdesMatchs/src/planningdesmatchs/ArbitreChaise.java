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
public class ArbitreChaise extends Arbitre{
    private int NbDoubleJuge;
    private int NbSimpleJuge;
    
    public ArbitreChaise(int idPersonne, String nom, String prenom, int age, String nationalite, String categorie, String typeArbitre, int NbSimpleJuge, int NbDoubleJuge){
        super(idPersonne, nom, prenom, age, nationalite, categorie, typeArbitre);
        NbSimpleJuge = this.NbSimpleJuge;
        NbDoubleJuge = this.NbDoubleJuge;
    }

    /**
     * @return the NbDoubleJuge
     */
    public int getNbDoubleJuge() {
        return NbDoubleJuge;
    }

    /**
     * @param NbDoubleJuge the NbDoubleJuge to set
     */
    public void setNbDoubleJuge(int NbDoubleJuge) {
        this.NbDoubleJuge = NbDoubleJuge;
    }

    /**
     * @return the NbSimpleJuge
     */
    public int getNbSimpleJuge() {
        return NbSimpleJuge;
    }

    /**
     * @param NbSimpleJuge the NbSimpleJuge to set
     */
    public void setNbSimpleJuge(int NbSimpleJuge) {
        this.NbSimpleJuge = NbSimpleJuge;
    }
}
