<!DOCTYPE html>
<html lang="en-us">
<head> 
    <title>College predictor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--    ANCHORS-->
    
    

    
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--   USER CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    
    
    
<!--    Internal CSS-->
  
 <style>
     table{
         width: 50% !important;
         margin: 30px auto;
     }
     .head11{
         background: yellow;
         
     }
    </style>
   
    
</head>
    
    
<body>
   
    


     <nav class="navbar sticky-top navbar-expand-lg  navbar-light bg-success">
 <a class="navbar-brand" href="#">
    <img src="images/i1home.png" width="40" height="40" class="d-inline-block align-top" alt="CCC">
    <h3 class="h1i">College Predictor</h3>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        
  <div class="collapse navbar-collapse " id="navbarNav">
      
      
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="margin-left: 20px;">
        <a class="btn btn-success" href="contact.html" role="button">Contact Me!</a>
    
  </li>
        <li class="nav-item active">
        <a class="nav-link" href="action.php">About<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="ceg.html">CEG<span class="sr-only">(current)</span></a>
      </li>
        
        <li class="nav-item active" style="margin-left: 20px;">
            <a class="btn btn-warning" href="searchclg.html" role="button">Search by Branch</a>
<!--         <a class="nav-link sclg" href="searcrk.html">Search by rank/mark<span class="sr-only">(current)</span></a>-->
      </li>
      
    </ul>
  </div>
</nav>
    
    
        

    
    
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_predict";
    
$c=$_POST["clgselect"];


  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
   
    $sql = "select branch,max(rank)from allotment where code=$c group by branch;";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        echo '<table class="table table-hover table-light">
        <tr class="head11"><td><h3>Branch</h3></td><td><h3>Closing rank</h3></td></tr>';
  
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["branch"]."</td>"."<td>".$row["max(rank)"]."</td>";
        
    
      echo "</tr>";
    }
        echo "
  </table>";
} else {
    echo "0 results";
}
$conn->close();

?>
    
    
   <!-- Footer -->
<footer class="page-footer font-small" style="color: white;">
    <div class="text-center">
        <a href="https://mail.google.com" target="_blank">

<img src="images/mail.png"></a>
         <a href="https://instagram.com" target="_blank">
             <img src="images/insta.png"></a>
       <a href="https://facebook.com" target="_blank">
           <img src="images/icons8-facebook-64%20(1).png"></a>
        </div>
    
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: Harishankar H IT-dept,CEG
   
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
    
    </body>

</html>