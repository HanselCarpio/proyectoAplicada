/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Domain;

/**
 *
 * @author Arturo
 */
public class Persons {

    public int idPage;
    private String namePage;
    private String url;
    private String email;
    

    public Persons() {
        this.idPage = 0;
        this.namePage = "";
        this.url = "";
        this.email = "";
        
    }

    public Persons(int idPage, String namePage, String url, String email) {
        this.idPage = idPage;
        this.namePage = namePage;
        this.url = url;
        this.email = email;
    }

    public int getIdPage() {
        return idPage;
    }

    public void setIdPage(int idPage) {
        this.idPage = idPage;
    }

    public String getNamePage() {
        return namePage;
    }

    public void setNamePage(String namePage) {
        this.namePage = namePage;
    }

    public String getUrl() {
        return url;
    }

    public void setUrl(String url) {
        this.url = url;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    @Override
    public String toString() {
        return "Persons{" + "idPage=" + idPage + ", namePage=" + namePage + ", url=" + url + ", email=" + email + '}';
    }

}