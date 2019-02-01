<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<!-- <audio id="monkey">
  <source src="monkey.mp3" type="audio/mpeg">
</audio>

<audio id="giraffe">
  <source src="giraffe.mp3" type="audio/mpeg">
</audio>

<audio id="tiger">
  <source src="tiger.mp3" type="audio/mpeg">
</audio>
 -->
<?php


require 'classes.php';


session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")    {
    if(isset($_POST["monkey"]) && isset($_POST["giraffe"]) && isset($_POST["tiger"]) && isset($_POST["coconut"]))    {
    

        $monkey = $_POST["monkey"];
        $giraffe = $_POST["giraffe"];
        $tiger = $_POST["tiger"];
        $coconut = $_POST["coconut"];

        $monkeysName = array("john", "charlie", "david", "richard", "oscar");
        $giraffesName = array("steve", "albin", "johan", "stefan", "anders");
        $tigersName = array("erik", "bullen", "kicken", "punba", "tanden");


        for ($i=0; $i<$monkey; $i++)  {
        
            $apan = new Apa($monkeysName[$i]);

            $apan->printImage();
            echo "$monkeysName[$i]"." says: <br>";

        };
        for ($i=0; $i<$giraffe; $i++)  {


            $giraffen = new Giraffe($giraffesName[$i]);

            $giraffen->printImage();
            echo "$giraffesName[$i]"." says: <br>";

        }
        for ($i=0; $i<$tiger; $i++)  {

            $tigern = new Tiger($tigersName[$i]);

            $tigern->printImage();
            echo "$tigersName[$i]"." says: <br>";

        }
        for ($i=0; $i<$coconut; $i++)  {

            $cocosen = new Coconut([$i]);

            $cocosen->printImage();
            
            echo " sounds: <br>";

           


        }
    }


    
}



?>

<script>

/* var mon = document.getElementById("monkey");
var tig = document.getElementById("tiger");
var gir = document.getElementById("giraffe");
var coc = document.getElementById("coconut");



function playAudio(){
       
    tig.play() */
}



</script>


</body>
</html>