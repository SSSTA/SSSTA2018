
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SS::STA 2018  School of Software :: Science & Technology Association</title>
  <style>
    @media(min-width:1000px){
      .tip {
        background-image: url("https://images.pexels.com/photos/97987/pexels-photo-97987.jpeg?auto=compress&cs=tinysrgb&h=650&w=940");
        background-size: 100%;
        background-position-x: center;
      }
      .tip h1{
        text-align: center;
        color:#eeeeee;
        font-size:450%;
        padding-top: 20%;
        letter-spacing:6px;
        font-weight:300;
        font-family: Montserrat,'Helvetica Neue',Helvetica,Arial,sans-serif;
      }
      }
    @media(max-width:1000px){
      .tip {
        background-image: url('https://images.pexels.com/photos/172296/pexels-photo-172296.jpeg?auto=compress&cs=tinysrgb&h=650&w=940');
        background-size: 100%;
        background-position-x: center;
      }
      .tip h1{
        text-align: center;
        color:#eeeeee;
        font-size:250%;
        padding-top: 50%;
        letter-spacing:6%;
        font-weight:300;
        font-family: Montserrat,'Helvetica Neue',Helvetica,Arial,sans-serif;
      }
      }
  </style>
</head>
<?php                                                                                                               
    // header("Content-type: text/html; charset=utf-8");                                                               
    // $link=mysql_connect("localhost","root","12345qwert");                                                           
    // mysql_query("SET NAMES 'utf8'", $link);                                                                         
    // $select=mysql_select_db('sssta2018');                                                                           
                                                                                                                    
    $id=$_POST['number'];                                                                                           
    $name=$_POST['name'];                                                                                           
    $email=$_POST['email'];                                                                                         
    $number=$_POST['number'];                                                                                       
    $phone_number=$_POST['phone_number'];                                                                           
    $group=$_POST['group'];                                                                                         
    $introduction=$_POST['introduction'];                                                                           
                                                                                                                    
    // $exec="INSERT INTO sssta2018 VALUES('$name','$email','$number','$phone_number','$group','$introduction')";      
    // $result=mysql_query($exec);                                                                                     
                                                                                                                    
    // mysql_close();
    
    $dbConnection = new PDO('mysql:dbname=sssta2018;host=127.0.0.1;charset=utf8', 'root', '12345qwert');
    
    $dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbConnection->query("SET NAMES 'utf8'");

    $exec = "INSERT INTO sssta2018 (stuname, email, stunumber, phone_number, `group`, introduction) VALUES (:stuname, :email, :stunumber, :phone_number, :group, :introduction)";
    $preparedStatement = $dbConnection->prepare($exec);
    
    $preparedStatement->execute(array(':stuname' => $name, ':email' => $email, ':stunumber' => $number, ':phone_number' => $phone_number, ':group' => $group, ':introduction' => $introduction));
?>

    <?php   header("Refresh:3;url='http://www.sssta.org/'")?> 

<body class="tip">
  <h1>NICE TO MEET U</h1>
</body>

</html>