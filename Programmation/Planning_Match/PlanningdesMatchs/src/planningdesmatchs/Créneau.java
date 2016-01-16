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
public class Créneau {
    private String DateC;
    private String heureC;
    public Créneau(String DateC, String heureC){
        DateC = this.DateC;
        heureC = this.heureC;
    }

    /**
     * @return the DateC
     */
    public String getDateC() {
        return DateC;
    }

    /**
     * @param DateC the DateC to set
     */
    public void setDateC(String DateC) {
        this.DateC = DateC;
    }

    /**
     * @return the heureC
     */
    public String getHeureC() {
        return heureC;
    }

    /**
     * @param heureC the heureC to set
     */
    public void setHeureC(String heureC) {
        this.heureC = heureC;
    }
}
