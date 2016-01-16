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
public class Court {
    private int numCourt;
    private String nomCourt;
    public Court(int numCourt, String nomCourt){
        numCourt = this.numCourt;
        nomCourt = this.nomCourt;
    }

    /**
     * @return the numCourt
     */
    public int getNumCourt() {
        return numCourt;
    }

    /**
     * @param numCourt the numCourt to set
     */
    public void setNumCourt(int numCourt) {
        this.numCourt = numCourt;
    }

    /**
     * @return the nomCourt
     */
    public String getNomCourt() {
        return nomCourt;
    }

    /**
     * @param nomCourt the nomCourt to set
     */
    public void setNomCourt(String nomCourt) {
        this.nomCourt = nomCourt;
    }
}
