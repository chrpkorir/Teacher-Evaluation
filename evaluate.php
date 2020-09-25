<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-8 mt-5">
    <div class="card-header">
    <h2>LAB SECTION EVALUATION</h2>
    </div>
    <form action="" method="post">
    <label>1.Does he take you for the labs</label>
    <input type="radio" name="qes1" required value=1> 
    <input type="radio" name="qes1" required value=2> 
    <input type="radio" name="qes1"  required value=3> 
    <input type="radio" name="qes1" required value=4> 
    <input type="radio" name="qes1" required value=5> 
   <br>  <label >2. Does he give useful practicals</label>
     <input type="radio" name="qes2" value=1> 
    <input type="radio" name="qes2" value=2> 
    <input type="radio" name="qes2" value=3> 
    <input type="radio" name="qes2" value=4> 
    <input type="radio" name="qes2" value=5> 
    <br>  <label >3. Does he give Monitor the practicals well</label>
     <input type="radio" name="qes3" value=1> 
    <input type="radio" name="qes3" value=2> 
    <input type="radio" name="qes3" value=3> 
    <input type="radio" name="qes3" value=4> 
    <input type="radio" name="qes3" value=5> 
    <br><input type="submit" value="SUBMIT RESPONSE" class="btn btn-primary my-3" name="submit">
    </form>
    
    </div>
    </div>
    <?php
if(isset($_POST['submit']))
{
    $server="localhost";
    $user="root";
    $password="";
    $db="faith";
    $conn=mysqli_connect($server,$user,$password,$db);
    $area1=$_POST['qes1'];
    $area2=$_POST['qes2'];
    $area3=$_POST['qes3'];
    $qwery="insert into lab(area1,area2,area3) values('$area1','$area2','$area3')";
    $insert=mysqli_query($conn,$qwery);
    if($insert)
    {?>
    <h4>RESPONSE SAVED SUCCESSFULLY</h4>
       <?php
    }
    else {?>
        <div class="card-header text-center">
        <h2>FAILED PLEASE TRY AGAIN</h2>
        </div>
        <?php
    }
}





?>
    </div>
</body>
</html>