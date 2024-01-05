<?php
$host='localhost'
$connection=mysqli_connect('localhost','root','','book_database');
if(isset($_POST['SEND'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $guests=$_POST['guests'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving'];
    $request="insert into book_form(name,email,phone,address,location,guests,arrivals,leaving)vaues
    ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')" ;
    $jemaw=mysqli_query($connection,$request);
    if(jemaw==true){
    header('location:.php');
    echo'susesful'
}
else{
    echo'something went wrong try again';
}



?>