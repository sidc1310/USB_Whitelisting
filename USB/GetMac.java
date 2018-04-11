import java.net.*;
class GetMac
{
public static void main(String arg[])
{
	try {
	Process p =  Runtime.getRuntime().exec("cmd /c upsert.bat", null, new File("C:\\Program Files\\salesforce.com\\Data Loader\\cliq_process\\upsert"));          
    } catch (IOException ex) {
    }

}
}