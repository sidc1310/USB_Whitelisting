<html>
<body>

<?php
$username="root";
$password="";
$host="localhost:3306";
$connection=mysql_connect($host,$username,"");

if(!$connection)
{
die("unable to connect");
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
        if(isset($_POST['ok']))
        {
          $email=$_POST['email'];

          $query="SELECT * FROM head WHERE username='$email'";
          mysql_select_db("usb");
          $result=mysql_query($query);
      		
          if(mysql_num_rows($result) >= 1)
          {
            echo "<div>";
            echo "True";
            echo "</div>";
          }
          else
          {
          	echo "<div>";
            echo "False";
            echo "</div>";	
          }
        }
      }

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div>
Email:<input type="text" name="email">
<input type="submit" name="ok">

</div>
</form>
</body>
</html>