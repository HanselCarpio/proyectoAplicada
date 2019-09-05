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
public class Audiovisual implements Serializable{
    private String type;
    private int code;
    private int quanty;
    private String brand;
    private int model;

    public Audiovisual() {
        this.type = "";
        this.code =0;
        this.quanty = 0;
        this.brand = "";
        this.model = 0;
    }

    public Audiovisual(String type, int code, int quanty, String brand, int model) {
        this.type = type;
        this.code = code;
        this.quanty = quanty;
        this.brand = brand;
        this.model = model;
    }
    

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public int getCode() {
        return code;
    }

    public void setCode(int code) {
        this.code = code;
    }

    public int getQuanty() {
        return quanty;
    }

    public void setQuanty(int quanty) {
        this.quanty = quanty;
    }

    public String getBrand() {
        return brand;
    }

    public void setBrand(String brand) {
        this.brand = brand;
    }

    public int getModel() {
        return model;
    }

    public void setModel(int model) {
        this.model = model;
    }

    @Override
    public String toString() {
        return "Audiovisual{" + "type=" + type + ", codigo=" + code + ", quanty=" + quanty + ", brand=" + brand + ", model=" + model + '}';
    }
    
    
    
}
