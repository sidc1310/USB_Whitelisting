import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
//import java.io.PrintWriter;
import javax.crypto.spec.*;
import java.security.Key;
import java.security.NoSuchAlgorithmException;
import java.sql.*;  
import java.sql.DriverManager.*;
import javax.crypto.Cipher;
import javax.crypto.KeyGenerator;
import javax.crypto.SecretKey;
import java.util.Base64;

public class ImgDec {

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

    public static byte[] encryptPdfFile(Key key, byte[] content) {
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

    public static byte[] decryptPdfFile(SecretKey key, byte[] textCryp) {
        Cipher cipher;
        byte[] decrypted = null;
        try {
            cipher = Cipher.getInstance("AES/ECB/PKCS5Padding");
            cipher.init(Cipher.DECRYPT_MODE, key);
            decrypted = cipher.doFinal(textCryp);
        } catch (Exception e) {
            e.printStackTrace();
            System.out.println("jn");
        }

        return decrypted;
    }

    
    
    public static void saveFile_d(byte[] bytes,String path) throws IOException {

        FileOutputStream fos = new FileOutputStream(path);
        fos.write(bytes);
        fos.close();

    }

    public static void main(String args[])
            throws NoSuchAlgorithmException, InstantiationException, IllegalAccessException, IOException {
                String a=args[0];
        String key="";
       try{  
        
        Class.forName("com.mysql.jdbc.Driver"); 

         
        Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/usb","root","");  
              
        Statement stmt=con.createStatement(); 
        
        ResultSet rs=stmt.executeQuery("SELECT * FROM key1");
        
            
            while(rs.next())
            {            
                key=rs.getString("key2");
                System.out.println(key);
            }    
        
        
            String str = "SELECT * FROM KEY1";
            
            ResultSet rs1 = stmt.executeQuery("SELECT * FROM KEY1");
            
            while(rs1.next())
            {
            	String query = "delete from key1";
                PreparedStatement ps = con.prepareStatement(query);
				
				ps.executeUpdate();
            }

        
            con.close();  
    }catch(Exception e){ System.out.println(e);}  
     
       File file1 = new File(a+"\\");
 	  byte[] content = null;
 	  File[] files = file1.listFiles();
      byte[] decodekey=Base64.getDecoder().decode(key);
        SecretKey ok=new SecretKeySpec(decodekey,0,decodekey.length,"AES");
 	
 	  for(File f: files)
 	  {
     
		System.out.println(f.getAbsolutePath());
		  
	   
	    
	   
	    byte[] content1 = getFile(f.getAbsolutePath());
	    System.out.println(content1);
	    System.out.println("content");
	
	   
	    byte[] decrypted = decryptPdfFile(ok, content1);
	    System.out.println(decrypted);
	    System.out.println("decrypted");
	
	    saveFile_d(decrypted,f.getAbsolutePath());
	    System.out.println("Done");
 	  }
    }
}