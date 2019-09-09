/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Data.dataBaseMysql;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author Arturo
 */
public class Llenar_table {

    dataBaseMysql db = new dataBaseMysql();

    public void llenar_tabla(int numCel, int ColumBoolean, DefaultTableModel models, JTable tableCheck) throws SQLException {
      
        try {
            ResultSet rs;
            rs=db.getTable("select * from category");
            Object[] filas=new Object[numCel];
            while(rs.next()){
                for(int i=1;i<=numCel;i++){
                    if(i==ColumBoolean){
                        filas[ColumBoolean-1]=Boolean.FALSE;
                    }else{
                        filas[i-1]=rs.getObject(i-1);
                    }
                }models.addRow(filas);
            }tableCheck.updateUI();
            rs.close();
            
        } catch (SQLException ex) {
            Logger.getLogger(Llenar_table.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
}
