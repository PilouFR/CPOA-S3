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
public class Match {
    
    public Match(int numMatch, int numCourt, String phaseMatch, boolean finale, String listePlacesRestantes, boolean typeMatch, String résultat){
            numMatch = this.numMatch;
            numCourt = this.numCourt;
            phaseMatch = this.phaseMatch;
            finale = this.finale;
            listePlacesRestantes = this.listePlacesRestantes;
            typeMatch = this.typeMatch;
    }
    
    
    private int numMatch;
    private int numCourt;
    private String phaseMatch;
    private boolean finale;
    private String listePlacesRestantes;
    private boolean typeMatch;

    /**
     * @return the numMatch
     */
    public int getNumMatch() {
        return numMatch;
    }

    /**
     * @param numMatch the numMatch to set
     */
    public void setNumMatch(int numMatch) {
        this.numMatch = numMatch;
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
     * @return the phaseMatch
     */
    public String getPhaseMatch() {
        return phaseMatch;
    }

    /**
     * @param phaseMatch the phaseMatch to set
     */
    public void setPhaseMatch(String phaseMatch) {
        this.phaseMatch = phaseMatch;
    }

    /**
     * @return the finale
     */
    public boolean isFinale() {
        return finale;
    }

    /**
     * @param finale the finale to set
     */
    public void setFinale(boolean finale) {
        this.finale = finale;
    }

    /**
     * @return the listePlacesRestantes
     */
    public String getListePlacesRestantes() {
        return listePlacesRestantes;
    }

    /**
     * @param listePlacesRestantes the listePlacesRestantes to set
     */
    public void setListePlacesRestantes(String listePlacesRestantes) {
        this.listePlacesRestantes = listePlacesRestantes;
    }

    /**
     * @return the typeMatch
     */
    public boolean isTypeMatch() {
        return typeMatch;
    }

    /**
     * @param typeMatch the typeMatch to set
     */
    public void setTypeMatch(boolean typeMatch) {
        this.typeMatch = typeMatch;
    }
    
    
}
