<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  </head>
<style>


  #maths {
    height: 950px;
    width: 1900px;
    right: 2px;
    position: absolute;
    top: 300px;
    left: 50px;
  }

  .paragraph-math, .paragraph-pretender, .paragraph-garfield,
  .paragraph-euroFag, .paragraph-fluegs, .paragraph-deceiver,
  .paragraph-alpha, .paragraph-highPitch {
    background-color: white;
    height:400px;
    width:400px;
    position: relative;
  }

  .paragraph-math {
    left: 0px;
  }

  .paragraph-pretender
  {
    left: 450px;
  }

  .paragraph-garfield {
    left: 900px;
  }

  .paragraph-euroFag {
    left: 1350px;
  }

  .paragraph-fluegs{
    top: 500px;
  }

  .paragraph-deceiver {
    left: 450px;
    top: 500px;
  }

  .paragraph-alpha {
    left: 900px;
    top: 500px;
  }

  .paragraph-highPitch {
    left: 1350px;
    top: 500px;
  }

  .heading{
    position: absolute;
    font-family: myFirstFonts;
    color: white;
    left:680px;
    top: 50px;
  }

  .intro{
    position: absolute;
    right: 500px;
    top: 280px;
    color: white;
  }

  .mathname, .pretendername, .garfieldname, .eurofagname,.fluegsname,
   .deceivername, .blackkidname, .highpitchname{
    color: white;
    position: absolute;
  }

  .mathname{
    left: 50px;
    top: 200px;
  }

  .pretendername{
  left: 500px;
  top: 200px;
  }

  .garfieldname{
  left: 950px;
  top: 200px;
  }

  .eurofagname{
  left: 1400px;
  top: 200px;
  }

  .fluegsname{
  top: 720px;
  left: 50px;
  }

  .deceivername{
  top: 720px;
  left: 500px;
  }

  .blackkidname{

  top: 720px;
  left: 950px;
  }

  .highpitchname{

  top: 720px;
  left: 1400px;
  }

  body
  {
    background-image: url(images/Untitled-1.jpg);

  }
  @font-face {
     font-family: myFirstFonts;
     src: url('images/SketchesByDuerer.ttf') format('truetype');
  }
  @media only screen and (max-width: 768px) {
    /* For mobile phones: */

    body
    {
      background-image: url(images/Untitled-1.jpg);
      background-repeat: repeat-y;
      background-size: cover;
    }

    [class*="heading"] {
      left:50px;
      top: 50px;
    }

    [class*="paragraph-math"] {
      top: 0px;
    }

    [class*="mathname"] {
      top: 230px;
    }
    [class*="paragraph-pretender"] {
      top: 480px;
      left: 0px;
    }
    [class*="pretendername"] {
      top: 720px;
      left: 50px;
    }
    [class*="paragraph-garfield"] {
      top: 960px;
      left: 0px;
    }
    [class*="garfieldname"] {
      top: 1210px;
      left: 50px;
    }
    [class*="paragraph-euroFag"] {
      top: 1440px;
      left: 0px;
    }

    [class*="eurofagname"] {
      top: 1700px;
      left: 50px;
    }
    [class*="paragraph-fluegs"] {
      top: 1920px;
      left: 0px;
    }
    [class*="fluegsname"] {
      top: 2150px;
      left: 50px;
    }
    [class*="paragraph-deceiver"] {
      top: 2400px;
      left: 0px;
    }
    [class*="deceivername"] {
      top: 2630px;
      left: 50px;
    }
    [class*="paragraph-alpha"] {
      top: 2880px;
      left: 0px;
    }
    [class*="blackkidname"] {
      top: 3110px;
      left: 50px;
    }
    [class*="paragraph-highPitch"] {
      top: 3360px;
      left: 0px;
    }
    [class*="highpitchname"] {
      top: 3590px;
      left: 50px;
    }
  }

</style>

<body>
<?php
//SQL function to figure out what row to fetch and post
        function writeMessage($idnum) {

          $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
              if (mysqli_connect_errno())
              {
              echo "Något gick fel: " . mysql_connect_error();
              }

          $SQL =  'SELECT * FROM sections
                    WHERE id = '.$idnum.' ';

          $resultat = mysqli_query($mysql_pointer, $SQL);

          while($rad = mysqli_fetch_array($resultat))
                {
                  //two first ones are for testing purposes
                  //echo 'Hej ';
                  //echo $rad['id'];
                  echo $rad['texts'];
                }
} ?>

<!-- logotype -->
<h1 class="heading">Math ZONE</h1>
    <h1 class="mathname" > sixxside</h1>
    <h1 class="pretendername"> cube </h1>
    <h1 class="garfieldname"> Garfield </h1>
    <h1 class="eurofagname"> Eurofag </h1>
    <h1 class="fluegsname"> Fluegs</h1>
    <h1 class="deceivername"> Deceiver </h1>
    <h1 class="blackkidname"> Blackkid </h1>
    <h1 class="highpitchname"> HighPitch </h1>

<!--container for all the columns-->
<div id="maths" style= "position: absolute;">


      <div class="paragraph-math" style= "overflow-y: scroll; position: absolute;">

            <?php
              /* Calling a PHP Function */
              writeMessage('1');
              ?>

      </div>

      <div class="paragraph-pretender" style= "overflow-y: scroll; position: absolute;">

            <?php
            writeMessage('15');
            ?>
        </div>

      <div class="paragraph-garfield" style= "overflow-y: scroll; position: absolute;">

              <?php
              writeMessage(16);
              ?>

      </div>

      <div class="paragraph-euroFag" style= "overflow-y: scroll; position: absolute;">

              <?php
              writeMessage(17);
              ?>

      </div>

      <div class="paragraph-fluegs" style= "overflow-y: scroll; position: absolute;">

              <?php
              writeMessage(18);
              ?>

      </div>

      <div class="paragraph-deceiver" style= "overflow-y: scroll; position: absolute;">

              <?php
              writeMessage(19);
              ?>

      </div>

      <div class="paragraph-alpha" style= "overflow-y: scroll; position: absolute;">

              <?php
              writeMessage(20);
              ?>

      </div>

      <div class="paragraph-highPitch" style= "overflow-y: scroll; position: absolute;">

              <?php
              writeMessage(21);
              ?>

      </div>

</div>

  </body>
</html>
