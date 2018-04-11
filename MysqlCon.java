import java.util.*;
import java.sql.*;  
import java.sql.DriverManager.*;
import java.io.*;
import java.security.MessageDigest;
import java.util.Scanner;
import javax.xml.bind.DatatypeConverter;

public class MysqlCon
{
	public static void main(String args[])throws IOException
	{
		// int i = 0;
		
		// int len = args.length;
		String str=args[0];
		// while(i<len)
		// {
		// 	System.out.println(args[i]);
		// 	i++;
		// }

		MysqlCon sj = new MysqlCon();
    String hash = sj.getSHA256Hash(str);
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
  		
		ResultSet rs=stmt.executeQuery("SELECT * FROM product WHERE id='"+hash+"'");
		if(rs.next())
		{
			Runtime.getRuntime().exec(new String[]{"cmd.exe", "/c", "start C:\\Users\\Siddhant\\Desktop\\decrypt.bat",args[1]});
		}   
		else
		{
			String a="5";
Runtime.getRuntime().exec(new String[]{"cmd.exe", "/c", "start C:\\Users\\Siddhant\\Desktop\\a.bat",args[1]});
	
			
		}
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
