import java.sql.*;  
import java.sql.DriverManager.*;
import java.security.MessageDigest;
import java.util.Scanner;
import javax.xml.bind.DatatypeConverter;

class MysqlCon{  
public static void main(String args[])
{
	String data="bcd";
	MysqlCon sj = new MysqlCon();
    String hash = sj.getSHA256Hash(data);
    System.out.println("The SHA256 (hexadecimal encoded) hash is:"+hash);

	String url = "jdbc:mysql://localhost:3306/"; 
  String dbName = "usb";
  String driver = "com.mysql.jdbc.Driver";
  String userName = "root";
  String password = "";
  try {
      Class.forName(driver).newInstance();
      Connection con =DriverManager.getConnection(url+dbName,userName,password);
  		Statement stmt=con.createStatement();  
  		
		int rs=stmt.executeUpdate("INSERT INTO mac values('"+hash+"')");      
			con.close();
  }  
  catch(Exception e){ System.out.println(e);}  
    }

private String getSHA256Hash(String data) {

        String result = null;

        try {

            MessageDigest digest = MessageDigest.getInstance("SHA-256");

            byte[] hash = digest.digest(data.getBytes("UTF-8"));

            return bytesToHex(hash); // make it printable

        }catch(Exception ex) {

            ex.printStackTrace();

        }

        return result;

    }

    private String  bytesToHex(byte[] hash)
	{

        return DatatypeConverter.printHexBinary(hash);

    }
    }  