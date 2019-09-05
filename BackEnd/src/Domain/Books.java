/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Domain;

import java.io.Serializable;

/**
 *
 * @author monge55
 */
public class Books implements Serializable{
    private String type;
    private int count;
    private String name;
    private String category;
    private String code;
    private String autor;

    public Books() {
        this.type = "";
        this.count = 0;
        this.name = "";
        this.category = "";
        this.code = "";
        this.autor = "";
    }

    public Books(String type, int count, String name, String category, String code, String autor) {
        this.type = type;
        this.count = count;
        this.name = name;
        this.category = category;
        this.code = code;
        this.autor = autor;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public int getCount() {
        return count;
    }

    public void setCount(int count) {
        this.count = count;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getCategory() {
        return category;
    }

    public void setCategory(String category) {
        this.category = category;
    }

    public String getCode() {
        return code;
    }

    public void setCode(String code) {
        this.code = code;
    }

    public String getAutor() {
        return autor;
    }

    public void setAutor(String autor) {
        this.autor = autor;
    }

    @Override
    public String toString() {
        return "Books{" + "type=" + type + ", count=" + count + ", name=" + name + ", category=" + category + ", codigo=" + code + ", autor=" + autor + '}';
    }
    
    
    
    
}
