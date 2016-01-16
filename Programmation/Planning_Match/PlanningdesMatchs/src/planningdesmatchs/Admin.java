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
public class Admin {
    private String login;
    private String password;
    
   

    
      public static Admin getInstance() {
        if (null == instance) { // Premier appel
            instance = new Admin();
        }
        return instance;
    }

    /** Constructeur redéfini comme étant privé pour interdire
    * son appel et forcer à passer par la méthode <link
    */
    private Admin() {
    }

    /** L'instance statique */
    private static Admin instance;
    }
    /**
     * @return the login
     */
   
    

