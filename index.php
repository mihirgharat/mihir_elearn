<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Countdown</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <style type="text/css">

        .counter{

            width: 190px;

            background: purple;

            box-shadow: 0px 2px 9px 0px black;
            color:white;

        }

    </style>    

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mt-40">
                <div class="card" style="height: 400px;argin-top:15%;">
                    <div class="card-body pt-5">
                        <center>
                    <h2>EVENT DATE:7TH JUNE 2022</h2><hr>
                    <table cellpadding="10">
                        <tr>
                   <td> <h1 id="c1" class="counter"></h1></td>
                    <td><h1 id="c2" class="counter"></h1></td>
                    <td><h1 id="c3" class="counter"></h1></td>
                    <td><h1 id="c4" class="counter"></h1></td></tr></table>
    </center>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        <?php 
           $dateTime = strtotime('June 7, 2022 17:30:00');
           $getDateTime = date("F d, Y H:i:s", $dateTime); 
        ?>
        var countDownDate = new Date("<?php echo "$getDateTime"; ?>").getTime();
        var x = setInterval(function() {

            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById("c1").innerHTML = days +" " +"Days " ;
            document.getElementById("c2").innerHTML = hours +" " + "Hours" ;
            document.getElementById("c3").innerHTML = minutes + " " + "Mins " ;
            document.getElementById("c4").innerHTML = seconds + " " + "Secs" ; 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("c1").innerHTML = "EXPIRED";
                document.getElementById("c2").innerHTML = "EXPIRED";
                document.getElementById("c3").innerHTML = "EXPIRED";
                document.getElementById("c4").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <center>
    <button class="btn btn-primary" style="background-color: black;" onclick="location.href='register.html';">Registration</button></center>
</body>
</html> 






