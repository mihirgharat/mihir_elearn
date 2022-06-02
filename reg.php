<body style="background:cian">
<div style="background:purple;margin-top:10%;margin-left:35%;width:700px;height:500px;border-radius:20px;color:white">
<br><br>
<center>
<?php 
 if(isset($_POST['submit'])) {
     m();
  }
  function m() {

   $a[0]=$_POST['n'];
   $a[1]=$_POST['e'];
   $a[2]=$_POST['p'];
   $a[3]=$_POST['c'];
   $a[4]=$_POST['co'];
   $a[5]=$_POST['cl'];
   $a[6]=$_POST['rc'];
   $a[7]=$_POST['sm'];
   $a[8]=$_POST['il'];
   $a[9]=$_POST['lp'];
   $a[10]=$_POST['fu'];
   $conn=new mysqli('localhost','root','','elearn');
   if ($conn->connect_error) {

    die('Failed'.$conn->connect_error);
   }else{
    $stmt=$conn->prepare("INSERT INTO register(n,e,p,c,co,cl,rc,sm,il,lp,fu) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
     $stmt->bind_param("sssssssssss",$a[0],$a[1],$a[2],$a[3],$a[4],$a[5],$a[6],$a[7],$a[8],$a[9],$a[10]);
     $stmt->execute();
      $stmt->close();
     $conn->close();
      }
      echo "<h1>Thanks $a[0] for registering for $a[4] Session</h1><hr><br>Your Email:$a[1] <br>Your Contact:$a[2]<br>Your City:$a[3]<br>Your College:$a[5]<br>Reference Coupon:$a[6]<br>Social Media:<a href=$a[7]>$a[7]</a> <br>Instagram:<a href=$a[8]>$a[8]</a> <br>Linkedin:<a href=$a[9]>$a[9]</a> <br>File drive link:<a href=$a[10]>$a[10]</a>";
  }

 ?>
 </center>
</div>
</body>
