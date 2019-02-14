Hello, This is a USB_Whitelisting project. If your machine has sensitive data and want to transfer it to another machine using USB 
with secure way, then this project is useful. When you transfer data and want to eject , just press eject button , USB will get 
encrypted and its key will be stored on mysql DB. As we are allowing only specific USB ( by using their unique id no), if anyone 
tries to steal data through unauthorised USB, our project will eject it automatocally. When you insert authorised USB , it will 
get first decrypted through our key and you perform your actions.

Java has been used for encryption and decryption. Symmetric algorithm has been used for encryption (AES). MySQL used as database. 
Front end part is done using html (Bootstrap). JDBC to connect to database.   
