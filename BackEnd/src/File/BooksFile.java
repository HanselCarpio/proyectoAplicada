/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package File;

import Domain.Books;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.RandomAccessFile;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import java.util.Properties;

/**
 *
 * @author Arturo
 */
public class BooksFile{
   private String path;//para darle nombre y extension al archivo
    public BooksFile() {
      
        this.path = "BooksFile.dat";
    }//constructor

    public void saveBooks(Books books) throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);
        List<Books> audioList = new ArrayList<Books>();

        if (myFile.exists()) {
            ObjectInputStream objectinputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectinputStream.readObject();//readObject(); jala todo lo que este en el archivo
            audioList = (List<Books>) aux;//castin
            objectinputStream.close();
        }// if(myFile.exists())

        audioList.add(books);
        ObjectOutputStream outPut = new ObjectOutputStream(new FileOutputStream(myFile));
        outPut.writeUnshared(audioList);
        outPut.close();
    }//guardarPersona
     
     public Books getByCode(String code) throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);

        ArrayList<Books> booksList = new ArrayList<>();
        if (myFile.exists()) {
            ObjectInputStream objectInputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectInputStream.readObject();
            booksList = (ArrayList<Books>) aux;
            objectInputStream.close();
        }//if(myFile.exists())

        Books books = null;
        for (int i = 0; i < booksList.size(); i++) {
            if (booksList.get(i).getCode().equals(code)) {
                books = booksList.get(i);

                break;//rompe el for, aquí se pone porque sino retornaría null, porq asi fue inicializado antes
            }//if(personaList.get(i).getCedula().equals(cedula))
        }//for i

        return books;
    }//obtenerLibro

    public boolean getByCodeBoolean(String nombre) throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);

        List<Books> booksList = new ArrayList<Books>();
        if (myFile.exists()) {
            ObjectInputStream objectInputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectInputStream.readObject();
            booksList = (List<Books>) aux;
            objectInputStream.close();
        }//if(myFile.exists())

        Books books = null;
        for (int i = 0; i < booksList.size(); i++) {
            if (booksList.get(i).getCode().equals(nombre)) {
                books = booksList.get(i);
                return true;//rompe el for, aquí se pone porque sino retornaría null, porq asi fue inicializado antes
            }//if(personaList.get(i).getCedula().equals(cedula))
        }//for i

        return false;
    }//obtenerLibro
     public List<Books> arrays() throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);
        
        List<Books> booksList = new ArrayList<Books>();
        if (myFile.exists()) {
            ObjectInputStream objectInputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectInputStream.readObject();
            booksList = (List<Books>) aux;
           
            
            objectInputStream.close();
            
        }//if(myFile.exists())

        return booksList;
    }//obtenerPersona
     public Books verification(String code, int count) throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);

        ArrayList<Books> booksList = new ArrayList<>();
        if (myFile.exists()) {
            ObjectInputStream objectInputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectInputStream.readObject();
            booksList = (ArrayList<Books>) aux;
            objectInputStream.close();
        }//if(myFile.exists())

        Books books = new Books();
        for (int i = 0; i < booksList.size(); i++) {
            if (booksList.get(i).getCode().equals(code)) {
                
               // books = booksList.get(i);
               books= booksList.remove(i);
               // books.setCount(count);

                break;//rompe el for, aquí se pone porque sino retornaría null, porq asi fue inicializado antes
            }//if(personaList.get(i).getCedula().equals(cedula))
        }//for i
        ObjectOutputStream outPut = new ObjectOutputStream(new FileOutputStream(myFile));
        outPut.writeUnshared(booksList);
        outPut.close();
        return books;
    }//obtenerLibro

}//clase