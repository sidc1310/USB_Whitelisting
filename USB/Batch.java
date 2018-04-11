import java.io.*;
public class Batch
{
	public static void main(String args[]) throws IOException
	{
		String path="C:\\Users\\abhi\\Desktop\\abhitherockstar.bat";
		Runtime rn=Runtime.getRuntime();
		Process pr=rn.exec(path);


	}	
}