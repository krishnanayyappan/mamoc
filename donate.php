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

        #middle {
            font-size: 30px;
            text-align: center;
            font-weight: bold;
            font-family: Georgia, Times, "Times New Roman", serif;
            /*font-style: normal;*/
            /*font-variant: normal;*/
            /*font-weight: 700;*/
            /*line-height: 26.4px;*/
        }

        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
            border-right: 2px solid #D3D3D3;
            font-family: 'Tinos', sans-serif;
        }

        /* Clear floats after the columns */
        .donation:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    <?php include 'topnav.php';?>

    <p id="middle">You can make a Difference!</p>

    <div class="donation">
        <div class="column" style="font-size: 23px">
            <p>At MaMoC, we are committed to carbon footprint reduction and
                sustainable transportation. It all heralds a beginning of new
                era of clean and green energy. Join us in the revolution and
                make a difference. More about carbon footprint. <a
                    href="https://en.wikipedia.org/wiki/Carbon_footprint"
                    target="_blank">Click here</a></p>
        </div>
        <div class="column" style="text-align: center; font-size: 23px">
            <p>Donate using Paytm...</p>
            <img src="images/qrcode.png" alt="qrcode" />
        </div>
    </div>


    <br><br><br><br><br>

    <?php include 'footer.php';?>

</body>

</html>