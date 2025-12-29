
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$name = $_POST['name'];
$email = $_POST['email'];
$phoneno = $_POST['phone'];
$specialist = $_POST['specialist'];
$message = $_POST['desc'];

$sql = "INSERT INTO `contactform`(`name`, `email`, `phoneno`, `specialist`, `message`)
 VALUES ('$name', '$email', '$phoneno', '$specialist', '$message')";
 $result = mysqli_query($conn, $sql);

 if($result){

    echo '<div id="successAlert" style="background-color:green; color:white; padding: 3px 10px 5px 10px; text-align: center; border-radius: 4px; margin-bottom:10px;">
        <span>Form submitted successfully</span>

        <button onclick="this.parentElement.style.display=`none`"
                class="text-white text-xl font-bold leading-none ml-4">
            &times;
        </button>
    </div>';

 }else{
    '<div class="bg-red-600 text-white px-4 py-3 rounded-md mt-3" style="float: right;">
        Data not inserted successfully: .mysqli_error($conn).
    </div>';
}
}


?>