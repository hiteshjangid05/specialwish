<!Doctype html>
<html>
<head>
<title>Welcome XYZ</title>
</head>
<style>
 body{ background-image: url(https://image.freepik.com/free-photo/blue-surface-with-creases_1160-191.jpg);

      color: white;
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
button.submit{ background-color: green ;
              height:70px;
              width:700px;
              border:2px;
              border-radius:25px;
              color: white;
              font-size:30px;
}
textarea{
              height:300px;
              width:700px;
              border:2px;
              border-radius:5px;
              color: black;
              font-size:30px;
              border:2px;
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
   font-size:30px;

}

a:hover, a:active {

    background-color: green;
}
div {
    display: none;
    border:1px solid #000;
    height:40px;
    width:450px;
    margin-left:10px;
}

a:hover + div {
    display: block;
}​


</style>
<body><center>
<?php

$today = "04-04-2017";
$new_date = date('d-m-Y', strtotime($_POST['tdate']));
echo"<br>";
if($new_date == $today){
echo "<h2>Today is Find a Rainbow Day</h2>";
echo"I found it<br> ";
echo  "<img src='https://68.media.tumblr.com/5e76ba699ba3341433b2e9aff0e2c749/tumblr_o85n8jHQae1udh5n8o1_500.gif'style='width:700px;height:450px;border:0px;'><br>";
echo"<h3> This is just seven coloured(VIBGYOR) picture .But I know real Rainbow who have all the caharacteristics of Rainbow i.e VIBGYOR and she is thousand time more beautiful than colourful Rainbow .</h3>";
echo"<h3 color='voilet'>V = VERSATILE.</h4>";
echo"<h3 color='indigo'>I = INTELLIGENT.</h4>";
echo"<h3 color='blue'>B = BEAUTIFUL.</h4>";
echo"<h3 color='green'>G = GORGEOUS.</h4>";
echo"<h3 color='yellow'>Y =  sweet YODEL</h4>";
echo"<h3 color='orange'>O = OUTSTANDING.</h4>";
echo"<h3 color='red'>R = ROYAL.</h4>";
echo"hgoerhgrvjrivirnvijrivbitnbitibntrmvijvbitrjbirhjvinrivnrihvbuitrnhbirmiovnrinvir";
echo"<img src='https://68.media.tumblr.com/5e76ba699ba3341433b2e9aff0e2c749/tumblr_o85n8jHQae1udh5n8o1_500.gif'style='width:900px;height:900px;border:0px;'><br>";
echo "<h3>jvrjhgerijfuirehcjheruvrekcvnhurhfkdenjcfheu</h3>";
}
elseif($new_date == $byesterday){
echo "<h2>Today is World Autism Awareness Day</h2>";
echo"<br>";
echo  "2  APRIL is celebrated as World Autism Awareness Day.It is the 9th  World Autism Awareness Day. People Use to wear blue on this day and i am wisshing the person who will look oustanding and super gorgeous and world most cutest girl in blue . Trust me I already imagined this you were looking super cute and hot ;)in blue.Once again i wish World Autism Awareness Day and more important Happy SUNDAY .Enjoy your day and BE STRON,STAY ROYAL ,HOTEST,CUTEST above all";
echo"<br>";
echo"<img src='https://s-media-cache-ak0.pinimg.com/originals/ee/9f/4f/ee9f4f167c2a81b00e014f2d06c6106f.gif'style='width:300px;height:300px;border:0px;'>";}

else{
echo"enter valid date";
}
echo"<br>";
?>


 <a href="#">Any Reward for This Small creation took 7hrs and 5cups of coffee ??</a>
<h5>Any Message For Me:</h5>
<br>
<form role="form" action="contact.php" method="post">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="contact-email"></label>
	                        	<input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
	                        </div><br>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-subject"></label>
	                        	<input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
	                        </div><br>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-message"></label>
	                        	<textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
	                        </div><br>
	                        <button class="submit" type="submit" class="btn">Send it</button><br>
	                    </form>

​
<?php
$time_now = date('H:i:s',strtotime("6:00PM"));
$time = date('H:i:s',strtotime("11:59AM"));
if($time < date('H:i:s') && $time_now > date('H:i:s')){
     echo "<h4>Thank you Priyanka!, GOOD NIGHT</h4>";
}
elseif( $time > date('H:i:s')){
echo"<h4>Thank you !, Have a Super Beautiful Day as YOU.</h4>";}
else {
  echo"<h4>, Have a Super Beautiful Day as YOU.</h4>";
}
?>



</center>
<center>
<a><img src='https://encrypted-tbn2.google.com/images?q=tbn:ANd9GcQB3a3aouZcIPEF0di4r9uK4c0r9FlFnCasg_P8ISk8tZytippZRQ'style ='width:400px;height:400px'></a>

</center>
</body>
</html>
