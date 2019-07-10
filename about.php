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

        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 300px;
            /*border-right: 2px solid #D3D3D3;*/
            font-family: 'Tinos', sans-serif;
        }

        /* Clear floats after the columns */
        .intro:after {
            content: "";
            display: table;
            clear: both;
        }

        .image_mamoc {
            object-fit: scale-down;
            width: 50%;
            height: 100%;
            float: left;
        }

        .policies,
        .workforce {
            font-family: 'Tinos', sans-serif;
            text-align: center;
        }

        .tmm_member {
            width:30%;
            left: 50%;
            top: 32%;
            align-content: center;
            /*transform: translate(50%, 50%);*/
        }

        .tmm_photo {
            width:150px;
            height:150px;
            margin-top:-50px;
            border-radius:40px !important;
            border:5px solid whitesmoke;
        }
    </style>
</head>

<body>
    <?php include 'topnav.php';?>

    <div class="intro">
        <div class="column" style="font-size: 23px">
            <p>MAMOC is an emerging automotive giant which is committed to carbon foot print reduction.</p>
        </div>
        <div class="image_mamoc" >
            <img src="images/workforce.jpg" alt="Company Image" style="width: 100%; height: 100%" />
        </div>
    </div>

    <hr>

    <div class="policies">
        <p id="vision" style="font-size: 30px; font-weight: bold; text-transform: uppercase;">Vision</p>
        <p id="vision_statement" style="font-size: 20px;">To reduce carbon footprint by working towards green energy and sustainable transportation.</p>
        <br>
        <p id="mission" style="font-size: 30px; font-weight: bold; text-transform: uppercase;">Mission</p>
        <p id="mission_statement" style="font-size: 20px;">To attract and attain customers with high-valued products and services and the most satisfying ownership experience.</p>
    </div>
    <hr>

    <div class="workforce">
        <p id="wf_title" style="font-size: 30px; text-align: center;font-weight: bold; text-transform: uppercase;">Workforce</p>
        <br>

        <div class="tmm_member" style="border: 1px solid grey; border-top: orange solid 5px; ">
          <div class="tmm_photo tmm_phover_trustees_0"
            style="background: url('images/workforce/Faizal.jpg'); margin-left:auto; margin-right:auto; background-size:cover !important;">
          </div>
          <div class="tmm_textblock">
            <div class="tmm_names"><span class="tmm_fname">Faizal</span> <span class="tmm_lname">K K</span></div>
            <div class="tmm_job">Founder and Chief Designer</div>
            <!-- <div class="tmm_desc" style="text-align:center">The Horlicks man of AWARE</div> -->
            <div class="tmm_scblock"><a target="_blank" class="tmm_sociallink"
                href="https://www.linkedin.com/in/faizalkk/" title="LinkedIn Profile"><img alt="LinkedIn Profile"
                  src="images/socialmedia/linkedin.png" style="width: 32px; height: 32px;"></a></div>
          </div>
        </div>
        <div class="tmm_member" style="border: 1px solid grey; border-top: orange solid 5px; ">
          <div class="tmm_photo tmm_phover_trustees_0"
            style="background: url('images/workforce/Faizal.jpg'); margin-left:auto; margin-right:auto; background-size:cover !important;">
          </div>
          <div class="tmm_textblock">
            <div class="tmm_names"><span class="tmm_fname">Faizal</span> <span class="tmm_lname">K K</span></div>
            <div class="tmm_job">Founder and Chief Designer</div>
            <!-- <div class="tmm_desc" style="text-align:center">The Horlicks man of AWARE</div> -->
            <div class="tmm_scblock"><a target="_blank" class="tmm_sociallink"
                href="https://www.linkedin.com/in/faizalkk/" title="LinkedIn Profile"><img alt="LinkedIn Profile"
                  src="images/socialmedia/linkedin.png" style="width: 32px; height: 32px;"></a></div>
          </div>
        </div>


    <hr>
    <?php include 'footer.php';?>

</body>

</html>