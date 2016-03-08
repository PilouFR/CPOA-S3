package View;

import java.awt.BorderLayout;
import java.awt.Color;
import javax.swing.BorderFactory;
import javax.swing.JTextArea;
import javax.swing.JPanel;

public class EditPanel extends JPanel{
    
    private JTextArea codeArea;
    
    public EditPanel(){
        this.setLayout(new BorderLayout());

        codeArea = new JTextArea();
        codeArea.setColumns(20);
        codeArea.setFont(new java.awt.Font("Consolas", 0, 13));
        codeArea.setForeground(new Color(170,170,170));
        codeArea.setBackground(new Color(20,20,45));
        codeArea.append("g.addEdge(\"AB\", \"A\", \"B\");\n" +
                        "g.addEdge(\"BC\", \"B\", \"C\");\n" +
                        "g.addEdge(\"CA\", \"C\", \"A\");\n" +
                        "g.addEdge(\"AD\", \"A\", \"D\");\n" +
                        "g.addEdge(\"DE\", \"D\", \"E\");\n" +
                        "g.addEdge(\"DF\", \"D\", \"F\");\n" +
                        "g.addEdge(\"EF\", \"E\", \"F\");");
        codeArea.setCursor(new java.awt.Cursor(java.awt.Cursor.TEXT_CURSOR));
        codeArea.setCaretColor(new Color(170,170,170));
        codeArea.setBorder( BorderFactory.createCompoundBorder(
                            codeArea.getBorder(), 
                            BorderFactory.createEmptyBorder(5, 5, 5, 5)));
        this.add(codeArea, BorderLayout.CENTER);
    }
    
}