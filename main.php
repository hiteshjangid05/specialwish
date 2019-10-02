<!Doctype html>
<html>
<head>
<title>Welcome </title>
</head>
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
    color:  white;
    text-align: center;
 }
input{ height: 70px;
       width: 700px;
        font-size:30px;
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
<center><h1>WELCOME XYZ </h1>
        <img src="https://media.giphy.com/media/MQEmcf3FbZeww/giphy.gif"style="width:700x;height:500px;border:0px;">
        <?php
$time_now = date('H:i:s',strtotime("6:00PM"));
$time = date('H:i:s',strtotime("11:59AM"));
if($time < date('H:i:s') && $time_now > date('H:i:s')){
     echo "<h1>GOOD AFTERNOON</h1>";
}
elseif( $time > date('H:I:S
echo"<h1>GOOD MORNING</h1>";}
else {
  echo"<h1>GOOD EVENING</h1>";
}
?>

<p class ="one">
 <center>
  <form action="last.php" method="POST">
    <b>Enter Todays'Date:<br/>
    <input type="date" name="tdate">
    <br>
    <br> 
     <input class="submit" type="submit" value="TODAY'S WISH"name="dwish"><br> 
  </form></center>
<p class ="one">
 <h2>I M TOO lAZY SO</h2>
 <center><img src="https://media.tenor.co/images/3dbfe83f57c5b11fece619ffd9a23b62/tenor.gif"style="width:700px;height:300px;border:0px;"></center><br>
<center><a href="#"><h2>HITEN</h2></a></center>

</body>
</html>
