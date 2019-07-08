<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Tinos&display=swap"
        rel="stylesheet">
    <style>
        * {
            /*font-family: "Calibri", sans-serif;*/
            box-sizing: border-box;
        }

        .counts {
            float: left;
            width: 10%;
            padding: 10px;
            height: auto;
            /* Should be removed. Only for demonstration */
            border-right: 2px solid #D3D3D3;
            font-family: 'Tinos', sans-serif;
            text-align: center;
        }

        .counts2 {
            float: left;
            width: 10%;
            padding: 10px;
            height: auto;
            font-family: 'Tinos', sans-serif;
            text-align: center;
        }

        /* Clear floats after the columns */
        .timer:after {
            content: "";
            display: table;
            clear: both;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include 'topnav.php';?>

    <br><br>
    <div class="timer">
        <div class="counts" style="font-size: 18px">
            <p id="days"></p>
            <p>DAYS</p>
        </div>
        <div class="counts" style="font-size: 18px">
            <p id="hours"></p>
            <p>HOURS</p>
        </div>
        <div class="counts" style="font-size: 18px">
            <p id="mins"></p>
            <p>MINUTES</p>
        </div>
        <div class="counts2" style="font-size: 18px">
            <p id="secs"></p>
            <p>SECONDS</p>
        </div>
    </div>


    <br><br><br><br><br>

    <?php include 'footer.php';?>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 3, 2020 00:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) /
                (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (
                1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("days").innerHTML = days; 
            document.getElementById("hours").innerHTML = hours; 
            document.getElementById("mins").innerHTML = minutes; 
            document.getElementById("secs").innerHTML = seconds; 

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdays").innerHTML =
                    "EXPIRED";
            }
        }, 1000);
    </script>

</body>

</html>