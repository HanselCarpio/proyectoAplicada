/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Data;

import Domain.Persons;
import java.io.IOException;
import java.sql.CallableStatement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
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
    String username="laboratorios";
        String password="UCRSA.118";
    
    public  Connection conectarMySQL() {
        Connection conn = null;
        
        try {
            Class.forName("com.mysql.jdbc.Driver");
            conn = DriverManager.getConnection(urlMy, username, password);
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        }

        return conn;
    }  
    public  ResultSet getTable(String consult) {
        Connection conn=conectarMySQL();
        Statement st;
        ResultSet datos=null;
        try{
            st=conn.createStatement();
            datos=st.executeQuery(consult);
        }catch(Exception e){ System.out.print(e.toString());}
        return datos;
    }
    public String idUpdate(Persons person) throws ClassNotFoundException, SQLException, IOException {
        String sqlLlamaProceso = "{CALL update_person(?,?,?,?,?)}";

        Connection conex=conectarMySQL();

        CallableStatement callableState = conex.prepareCall(sqlLlamaProceso);

        callableState.setString(1, person.getNamePage());
        callableState.setString(2, person.getUrl());
        callableState.setString(3, person.getEmail());
        callableState.setString(4, person.getCode());
        callableState.setString(5, person.getStatus());
        

        callableState.execute();

        return "Se ingresó con éxito...";
    }
  
}
