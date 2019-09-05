/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package File;

import Domain.Audiovisual;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.RandomAccessFile;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Johanna
 */
public class AudioFile {

  private String path;//para darle nombre y extension al archivo

    public AudioFile() {
        this.path = "AudiovisualesFile.dat";
    }//constructor

    public void saveAudio(Audiovisual audiovisual) throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);
        List<Audiovisual> audioList = new ArrayList<Audiovisual>();

        if (myFile.exists()) {
            ObjectInputStream objectinputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectinputStream.readObject();//readObject(); jala todo lo que este en el archivo
            audioList = (List<Audiovisual>) aux;//castin
            objectinputStream.close();
        }// if(myFile.exists())

        audioList.add(audiovisual);
        ObjectOutputStream outPut = new ObjectOutputStream(new FileOutputStream(myFile));
        outPut.writeUnshared(audioList);
        outPut.close();
    }//guardarPersona

    public Audiovisual getByCode(int code) throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);

        List<Audiovisual> audioList = new ArrayList<Audiovisual>();
        if (myFile.exists()) {
            ObjectInputStream objectInputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectInputStream.readObject();
            audioList = (List<Audiovisual>) aux;
            objectInputStream.close();
        }//if

        Audiovisual audiovisual = null;

        for (int i = 0; i < audioList.size(); i++) {
            if (audioList.get(i).getCode()== code) {
                audiovisual = audioList.get(i);
                break;//romper la ejecucion y seguir con lo que está abajo
                
            }//if

        }//for i
        return audiovisual;
    }//obtener persona

    public boolean getByCodeBoolean(int code) throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);

        List<Audiovisual> audioList = new ArrayList<Audiovisual>();
        if (myFile.exists()) {
            ObjectInputStream objectInputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectInputStream.readObject();
            audioList = (List<Audiovisual>) aux;
            objectInputStream.close();
        }//if(myFile.exists())

        Audiovisual audiovisual = null;
        for (int i = 0; i < audioList.size(); i++) {
            if (audioList.get(i).getCode() == code) {
                audiovisual = audioList.get(i);
                return true;//rompe el for, aquí se pone porque sino retornaría null, porq asi fue inicializado antes
            }//if(personaList.get(i).getCedula().equals(cedula))
        }//for i

        return false;
    }//obtenerLibro
    public List<Audiovisual> arrays() throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);
        
        List<Audiovisual> audioVisualList = new ArrayList<Audiovisual>();
        if (myFile.exists()) {
            ObjectInputStream objectInputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectInputStream.readObject();
            audioVisualList = (List<Audiovisual>) aux;
           
            
            objectInputStream.close();
            
        }//if(myFile.exists())

        return audioVisualList;
    }//obtenerPersona
     public Audiovisual verification(int code, int count) throws IOException, ClassNotFoundException {
        File myFile = new File(this.path);

        ArrayList<Audiovisual> audioList = new ArrayList<>();
        if (myFile.exists()) {
            ObjectInputStream objectInputStream = new ObjectInputStream(new FileInputStream(myFile));
            Object aux = objectInputStream.readObject();
            audioList = (ArrayList<Audiovisual>) aux;
            objectInputStream.close();
        }//if(myFile.exists())

        Audiovisual audiovisual = new Audiovisual();
        for (int i = 0; i < audioList.size(); i++) {
            if (audioList.get(i).getCode()==(code)) {
                
               
                audiovisual= audioList.remove(i);
               // books.setCount(count);

                break;//rompe el for, aquí se pone porque sino retornaría null, porq asi fue inicializado antes
            }//if(personaList.get(i).getCedula().equals(cedula))
        }//for i
        ObjectOutputStream outPut = new ObjectOutputStream(new FileOutputStream(myFile));
        outPut.writeUnshared(audioList);
        outPut.close();
        return audiovisual;
    }//obtenerLibro

}//clase
