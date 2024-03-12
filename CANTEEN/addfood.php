<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $recipe=$_POST['recipe-name'];
    $price=$_POST['recipe-price'];
    $image=$_POST['recipe-image'];
    $conn=new mysqli("localhost","root","sdcweb","canteen");
    $sql="insert into foodie(recipe,price,image) values('$recipe',$price,'$image');";
    if($conn->query($sql)){
        echo "Added Succesfully";
    }



}

?>
