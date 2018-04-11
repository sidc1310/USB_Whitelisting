import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
//import java.io.PrintWriter;
import java.security.Key;
import java.security.NoSuchAlgorithmException;
import java.util.Arrays;

import javax.crypto.Cipher;
import javax.crypto.KeyGenerator;
import java.sql.*;  
import java.sql.DriverManager.*;
import java.security.MessageDigest;
import java.util.Scanner;
import javax.xml.bind.DatatypeConverter;
import javax.crypto.SecretKey;
import java.util.Base64;


public class jdbc_connection 
{

	public static String store[] = new String[5];
	public static int i = 1;
	
    public static byte[] getFile(String path) {

        File f = new File(path);
        InputStream is = null;
        try {
            is = new FileInputStream(f);
        } catch (FileNotFoundException e2) {
            // TODO Auto-generated catch block
            e2.printStackTrace();
        }
        byte[] content = null;
        try {
            content = new byte[is.available()];
        } catch (IOException e1) {
            // TODO Auto-generated catch block
            e1.printStackTrace();
        }
        try {
            is.read(content);
        } catch (IOException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }

        return content;
    }

    public static byte[] encryptPdfFile(SecretKey key, byte[] content) {
        Cipher cipher;
        byte[] encrypted = null;
        try {
            cipher = Cipher.getInstance("AES/ECB/PKCS5Padding");
            cipher.init(Cipher.ENCRYPT_MODE, key);
            encrypted = cipher.doFinal(content);
        } catch (Exception e) {
            e.printStackTrace();
        }
        return encrypted;

    }

    

    public static void saveFile_e(byte[] bytes,String path) throws IOException {

        FileOutputStream fos = new FileOutputStream(path);
        fos.write(bytes);
        fos.close();

    }
    
    
    
    public static void main(String args[])
            throws NoSuchAlgorithmException, InstantiationException, IllegalAccessException, IOException {
        
        
        // KeyGenerator keyGenerator = KeyGenerator.getInstance("AES");
        // keyGenerator.init(128);
        // Key key = keyGenerator.generateKey();
        // System.out.println(key);
        SecretKey key1=KeyGenerator.getInstance("AES").generateKey();
        System.out.println("key="+key1);

        String key=Base64.getEncoder().encodeToString(key1.getEncoded());
        System.out.println("key="+key);        
        
    
		String url = "jdbc:mysql://localhost:3306/";
		String dbName = "usb";
		String driver = "com.mysql.jdbc.Driver";
		String userName = "root";
		String password = "";
		
		try 
		{
			Class.forName(driver).newInstance();
      
			Connection con =DriverManager.getConnection(url+dbName,userName,password);
			Statement stmt=con.createStatement();  
  		
			int rs = stmt.executeUpdate("INSERT INTO key1 values('"+key+"')");      
			con.close();
		}  
		catch(Exception e){ System.out.println(e);}  
      
      //files
      
      File file1 = new File(args[0]+":\\");
	  byte[] content = null;
	  File[] files = file1.listFiles();
	  
	  for(File f: files)
	  {
		  
		  System.out.println(f);
		  
		  byte[] content1 = getFile(f.getPath());
		  System.out.println(content1);

		  byte[] encrypted = encryptPdfFile(key1, content1);
		  System.out.println("Encypted="+encrypted);
		  saveFile_e(encrypted,f.getPath());
	       
	      System.out.println("Done");
	  }

    }

}