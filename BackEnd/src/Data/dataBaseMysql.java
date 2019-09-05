/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Data;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Arturo
 */
public class dataBaseMysql {
  private String driverMySql = "com.mysql.jdbc.Driver";
    private String hostname="163.178.107.130";
    private String port="3306";
    private String database="pruebaAplicada";
    private String urlMy="jdbc:mysql://" + hostname + ":" + port + "/" + database + "?useSSL=false";
    
    public Connection conectarMySQL() {
        Connection conn = null;
        String username="laboratorios";
        String password="UCRSA.118";
        try {
            Class.forName("com.mysql.jdbc.Driver");
            conn =(Connection) DriverManager.getConnection(urlMy, username, password);
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        }

        return conn;
    }  
  
}
