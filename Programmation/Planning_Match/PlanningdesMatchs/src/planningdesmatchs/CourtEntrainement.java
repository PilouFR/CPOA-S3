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
public class CourtEntrainement extends Court{
    private boolean reserve;
     public CourtEntrainement(int numCourt, String nomCourt, boolean reserve){
        super(numCourt, nomCourt);
        reserve = this.reserve;
    }

    /**
     * @return the reserve
     */
    public boolean isReserve() {
        return reserve;
    }

    /**
     * @param reserve the reserve to set
     */
    public void setReserve(boolean reserve) {
        this.reserve = reserve;
    }
}
