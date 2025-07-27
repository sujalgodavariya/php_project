<?php

include('phpcon.php');

//--- register ma jetli feild che te bathi 1 varible ma store krya... 
$id=$_POST['id'];
$username=$_POST['name'];
$address=$_POST['address'];
$number=$_POST['number'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


//--- photo mate file type aavse post not work..
$photo=$_FILES['photo']['name'];
//--- photo nu name store kravyu...
$tmp_name=$_FILES['photo']['tmp_name'];

//--- jo password and Conform Password: match no thay to farithi form filep krva nu..

if($password != $cpassword){
    echo"
    <script>
        alert('password not match.. Match the password...!');
        // password not match redirect in register page again..
        window.location='../user/Registration.php';
    </script>";
     exit;
}
//--- password match tay jay to redister na data and photo database ma uplode thay jase...
else{
    // uplode na folder ma all photo stoer thase..
   move_uploaded_file($tmp_name,"../uplode/$photo");
//    insert ni query........!
    $sql="INSERT INTO  userdata(id,name,address,number,password,photo,status,vote) values('$id','$username','$address','$number','$password','$photo','voter',0)";

    $result=mysqli_query($con,$sql);
    // after all complited go home page...! nakar pachu registreion form...!
 if ($result) {
        echo "
        <script>
            alert('Your Registration is Confirmed');
            window.location='../user/home.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Registration failed. Please try again.');
            window.location='../user/Registration.php';
        </script>";
    }
}
?>