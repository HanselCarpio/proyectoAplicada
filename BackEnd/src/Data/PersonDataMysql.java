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
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.sql.Statement;

/**
 *
 * @author Arturo
 */
public class PersonDataMysql extends dataBaseMysql {
dataBaseMysql conexion = new dataBaseMysql();
        Connection con = conexion.conectarMySQL();
    public PersonDataMysql() {

    }

    

    public  ResultSet getTable(String consult) {
        Statement st;
        ResultSet datos=null;
        try{
            st=con.createStatement();
            datos=st.executeQuery(consult);
        }catch(Exception e){ System.out.print(e.toString());}
        return datos;
    }

    public ResultSet idFaltanteMysql(int valor) throws SQLException {
        // Persons persons=new Persons();

      
        String sqlLlamaProceso = "{CALL faltante_id(?)}";
        CallableStatement callableStatement = con.prepareCall(sqlLlamaProceso);
        callableStatement.setInt(1, valor);
        callableStatement.execute();
        ResultSet rst = callableStatement.getResultSet();
        //  Persons persons=new Persons(rst.getString(1),rst.getString(2),rst.getString(3),rst.getString(4),rst.getString(5),rst.getString(6));

        return rst;
    }
      public ResultSet idUpdateMysql() throws SQLException {
        // Persons persons=new Persons();

        
        String sqlLlamaProceso = "{CALL id_updates()}";
        CallableStatement callableStatement = con.prepareCall(sqlLlamaProceso);
       
        callableStatement.execute();
        ResultSet rst = callableStatement.getResultSet();
        

        return rst;
    }
      public ResultSet idIdentMysql(int valor) throws SQLException {
        // Persons persons=new Persons();

       
        String sqlLlamaProceso = "{CALL ident_id(?)}";
        CallableStatement callableStatement = con.prepareCall(sqlLlamaProceso);
        callableStatement.setInt(1, valor);
        callableStatement.execute();
        ResultSet rst = callableStatement.getResultSet();
        //  Persons persons=new Persons(rst.getString(1),rst.getString(2),rst.getString(3),rst.getString(4),rst.getString(5),rst.getString(6));

        return rst;
    }
//      public void updatePerson(Persons person, String time,int valor) throws ClassNotFoundException, SQLException, IOException {
//      
//        String sqlLlamaProceso = "{CALL UPDATE_PERSONso(?,?,?,?,?,?,?)}";
//        CallableStatement callableStatement = con.prepareCall(sqlLlamaProceso);
//        callableStatement.setString(1, person.getName());
//        callableStatement.setString(2, person.getLastName());
//        callableStatement.setString(3, person.getPhone());
//        callableStatement.setString(4, person.getCountry());
//        callableStatement.setString(5, person.getProvince());
//        callableStatement.setString(6, person.getDistrict());
//       
//        callableStatement.setInt(7, valor);
//        // System.out.println(valor);
//        callableStatement.execute();
//        //ResultSet rst = callableStatement.getResultSet();
//        System.out.println("Se actualizo correctamente");
//    }
}
