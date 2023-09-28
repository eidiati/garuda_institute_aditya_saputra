<?php
    require('animal.php');
    require('frog.php');
    require('ape.php');

    $sheep = new Animal("shaun");
    echo "Name : " .$sheep->name; // "shaun" 
    echo "<br>";
    echo "Legs : " .$sheep->legs; // 4
    echo "<br>";
    echo "Cold blooded : " .$sheep->cold_blooded; // "no"
    echo "<br><br>";
    
    $kodok = new Frog("buduk");
    echo "Name : " .$kodok->name; 
    echo "<br>";
    echo "Legs : " .$kodok->legs; 
    echo "<br>";
    echo "Cold blooded : " .$kodok->cold_blooded; 
    echo "<br>";
    echo "Jump : " .$kodok->jump() ; // "hop hop"
    echo "<br><br>";
    

    $sungokong = new Ape("kera sakti");
    echo "Name : " .$sungokong->name;  
    echo "<br>";
    echo "Legs : " .$sungokong->legs;
    echo "<br>";
    echo "Cold blooded : " .$sungokong->cold_blooded;
    echo "<br>";
    echo "Jump : " .$sungokong->yell(); // "Auooo" 
    echo "<br>";


?>