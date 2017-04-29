<?php
//get database connection
include('config.php');
//define variables
if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $othername=$_POST['othername'];
    $country=$_POST['country'];
    $react=$_POST['react'];
    $solution=$_POST['solution'];

    $sql = "INSERT INTO item(name,othername,country,reaction,solution) VALUES ('$name','$othername', '$country', '$react','$solution')";

    if (mysqli_query($conn, $sql)) {
        header("Location: user.php");
        echo "<Script>";
        echo "alert('Success | Added')";
        echo "</Script>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);
}
?>
