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
    private String code;
    private String status;
    

    public Persons() {
        this.idPage = 0;
        this.namePage = "";
        this.url = "";
        this.email = "";
        this.code="";
        this.status="";
    }

    public Persons(int idPage, String namePage, String url, String email, String code, String status) {
        this.idPage = idPage;
        this.namePage = namePage;
        this.url = url;
        this.email = email;
        this.code = code;
        this.status = status;
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

    

    

    public String getCode() {
        return code;
    }

    public void setCode(String code) {
        this.code = code;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }
   @Override
    public String toString() {
        return "Persons{" + "idPage=" + idPage + ", namePage=" + namePage + ", url=" + url + ", email=" + email + ", code=" + code + ", status=" + status + '}';
    }

}