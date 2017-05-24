<!DOCTYPE html>
<html>
<head>
   <title></title>
<head>
<style>
 body{ background-image: url(http://www.brandvid.com/assets/BrandVid-home-1920-945.jpg);
      color: green;
      font-style: bold;
      font-size:50px
      }
  h1{font-size:150px;
     height:300px;
    color:  white;
    text-align: center;
    }
 h2{
    font-size:20px;
    color:  white;
    text-align: center;
 }
input{ height: 70px;
       width: 700px;
       }
p.one{
     border:2px solid green;
outline-style: medium;
outline-style: thin;}
input.submit{ background-color: green ;
              height:70px;
              width:700px;
              border:2px;
              border-radius:25px;
              color: white;
              font-size:30px;
}
a:link, a:visited {
    background-color: green;
    color: white;
    padding: 0px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
     border:2px;
     border-radius:35px;
   width:700px;
   
}

a:hover, a:active { 
                    
    background-color: green;
}

</style>
<body>
<center>
<?php
$new = $_POST['mypass'];
$pass = "8989898989";
$hash = password_hash($new, PASSWORD_DEFAULT);

if (password_verify($pass, $hash))
{
  echo "<img src='http://www.chopraenggworks.co.in/files/click-here-1%20(2).gif'><br><a href='main.php'>click here</a>"; 
}
else
{
    echo "Sorry You are not the One I was Expected";
    echo "<br>";
    echo "Good Bye";
}
?>
 </center>
</body>
</html>
