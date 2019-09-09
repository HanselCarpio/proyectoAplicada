/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.awt.Color;
import java.awt.Component;
import javax.swing.JCheckBox;
import javax.swing.JComponent;
import javax.swing.JTable;
import javax.swing.table.TableCellRenderer;

/**
 *
 * @author Arturo
 */
public class Clase_CellRender extends JCheckBox implements TableCellRenderer{
    private final JComponent component=new JCheckBox();
    public Clase_CellRender(){
        setOpaque(true);
    }
    @Override
    public Component getTableCellRendererComponent(JTable table, Object value, boolean isSelected, boolean hasFocus, int row, int column) {
      ((JCheckBox)component).setBackground(new Color(167,218,251));
      boolean b=((Boolean)value).booleanValue();
      ((JCheckBox)component).setSelected(b);
      return ((JCheckBox)component);
    }
    
    
}
