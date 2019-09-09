/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.awt.Color;
import java.awt.Component;
import javax.swing.DefaultCellEditor;
import javax.swing.JCheckBox;
import javax.swing.JComponent;
import javax.swing.JTable;
import javax.swing.table.TableCellRenderer;

/**
 *
 * @author Arturo
 */
public class Clase_CellEditor extends DefaultCellEditor implements TableCellRenderer{
    private final JComponent component= new JCheckBox();
    private boolean value=false;
    
    
    public Clase_CellEditor(){
        super(new JCheckBox());
    }
    
    public Object getCellEditorValue(){
        return ((JCheckBox)component).isSelected();
    }
    public Component getTableCellEditerComponent(JTable tableCheck, Object value,boolean isSelected, int row, int column){
        ((JCheckBox)component).setBackground(new Color(200,200,0));
        boolean b=((Boolean)value).booleanValue();
        ((JCheckBox)component).setSelected(b);
        return ((JCheckBox)component);
    }
    public boolean stopCellEditing(){
        value=((Boolean)getCellEditorValue()).booleanValue();
        ((JCheckBox)component).setSelected(value);
        return super.stopCellEditing();
    }
    public Component getTableCallRendererComponent(JTable tableCheck, Object value,boolean isSelected,boolean hasFocus, int row, int column){
        if(value ==null){
            return null;}
        return ((JCheckBox)component);
    }

    @Override
    public Component getTableCellRendererComponent(JTable table, Object value, boolean isSelected, boolean hasFocus, int row, int column) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
