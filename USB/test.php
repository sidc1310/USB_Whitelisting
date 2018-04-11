import java.net.*;
class GetMac
{
public static void main(String arg[])
{
try
{
InetAddress address = InetAddress.getLocalHost();
NetworkInterface nwi = NetworkInterface.getByInetAddress(address);
byte mac[] = nwi.getHardwareAddress();
System.out.println(mac);
}
catch(Exception e)
{
System.out.println(e);
}
}
}