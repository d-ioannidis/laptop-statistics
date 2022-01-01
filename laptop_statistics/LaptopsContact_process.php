<?php
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $email = $_GET['email'];
        $telephone = $_GET['telephone'];
        $message = $_GET['message'];
?> 
<html>
    <head>
        <meta charset = "utf-8"/>
    <style> 
        h1 {
        color:  #4CAF50;
        font-family: verdana;
        font-size: 150%;
        }
        body {
            background-color: #E2E5DE;
        }
        h2 {
            color:  #4CAF50;
            font-family: verdana;
            font-size: 150%;
   }
    </style>
    <title> LaptopsContact_process </title>
    </head>
    <body>
        <h1 class = "h1" align = "center">Σελίδα υποδοχής στοιχείων</h1>
        <p align = "center" >
          <h2 align = "center">Υποβάλλατε τα ακόλουθα στοιχεία: </h2>
        </p>
        <table align = "center" border="1">
            <tr>
                <td> Firstname </td>
                <td><?php echo $firstname; ?></td>
            </tr>
            <tr>
                <td> Lastname </td>
                <td> <?php echo $lastname; ?></td>
            </tr>
            <tr>
                <td> Email </td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td> Telephone </td>
                <td><?php echo $telephone; ?></td>
            </tr>
            <tr>
                <td> Message </td>
                <td><?php echo $message; ?></td>
            </tr>
        </table>
        <p align = "center">
            <h2 align = "center"> Σας ευχαριστούμε !!! </h2>
        </p>
    </body>
</html>

<?php
    $con = mysqli_connect("localhost","root","","laptops");
    if(!$con){
        die('Could not Connect to mysql:');
    }
    if(isset($_GET['save']))
    {
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $email = $_GET['email'];
        $telephone = $_GET['telephone'];
        $message = $_GET['message'];
        $query = "INSERT INTO contacts (FIRSTNAME,LASTNAME,EMAIL,TELEPHONE,MESSAGE) VALUES ('$firstname','$lastname','$email','$telephone','$message')";
        mysqli_query($con,$query);
        mysqli_close($con);
    }

?>