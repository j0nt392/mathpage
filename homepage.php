<!DOCTYPE html>
<html lang="en" dir="ltr">
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

.paragraph-math {
  background-color: white;


  height: 400px;
  width: 400px;

}

.paragraph-pretender {
  background-color: white;


  height: 400px;
  width: 400px;
  left: 450px;
  position: relative;
}

.paragraph-garfield {
  background-color: white;


  height: 400px;
  width: 400px;
  left: 900px;
  position: relative;
}

.paragraph-euroFag {
  background-color: white;


  height: 400px;
  width: 400px;
  left: 1350px;
  position: relative;
}

.paragraph-fluegs{
  background-color: white;
  height: 400px;
  width: 400px;
  top: 500px;
  position: relative;
}

.paragraph-deceiver {
  background-color: white;


  height: 400px;
  width: 400px;
  left: 450px;
  top: 500px;
  position: relative;
}

.paragraph-alpha {
  background-color: white;


  height: 400px;
  width: 400px;
  left: 900px;
  top: 500px;
  position: relative;
}

.paragraph-highPitch {
  background-color: white;
  height: 400px;
  width: 400px;
  left: 1350px;
  top: 500px;
  position: relative;
}

.heading{
  position: absolute;
  color: white;
  font-family: myFirstFonts;
  left:680px;
  top: 50px;
  font-size: 60px;
}

.intro{
  position: absolute;
  right: 500px;
  top: 280px;
  color: white;
}

.mathname{
  color: white;
  position: absolute;
  left: 50px;
  top: 200px;
}

.pretendername{
color: white;
position: absolute;
left: 500px;
top: 200px;
}

.garfieldname{
color: white;
position: absolute;
left: 950px;
top: 200px;
}

.eurofagname{
color: white;
position: absolute;
left: 1400px;
top: 200px;
}

.fluegsname{
color: white;
position: absolute;
top: 720px;
left: 50px;
}

.deceivername{
color: white;
position: absolute;
top: 720px;
left: 500px;
}

.blackkidname{
color: white;
position: absolute;
top: 720px;
left: 950px;
}

.highpitchname{
color: white;
position: absolute;
top: 720px;
left: 1400px;
}

body
{
  background-image: url(images/Untitled-1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
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
    width: 100%;
    background-color: white;
    height: 400px;
    width: 400px;
    top: 0px;
  }

  [class*="mathname"] {
    top: 230px;
  }
  [class*="paragraph-pretender"] {
    width: 100%;
    background-color: white;
    height: 400px;
    width: 400px;
    top: 480px;
    left: 0px;
  }
  [class*="pretendername"] {
    top: 720px;
    left: 50px;
  }
  [class*="paragraph-garfield"] {
    width: 100%;
    background-color: white;
    height: 400px;
    width: 400px;
    top: 960px;
    left: 0px;
  }
  [class*="garfieldname"] {
    top: 1210px;
    left: 50px;
  }
  [class*="paragraph-euroFag"] {
    width: 100%;
    background-color: white;
    height: 400px;
    width: 400px;
    top: 1440px;
    left: 0px;
  }

  [class*="eurofagname"] {
    top: 1700px;
    left: 50px;
  }
  [class*="paragraph-fluegs"] {
    width: 100%;
    background-color: white;
    height: 400px;
    width: 400px;
    top: 1920px;
    left: 0px;
  }
  [class*="fluegsname"] {
    top: 2150px;
    left: 50px;
  }
  [class*="paragraph-deceiver"] {
    width: 100%;
    background-color: white;
    height: 400px;
    width: 400px;
    top: 2400px;
    left: 0px;
  }
  [class*="deceivername"] {
    top: 2630px;
    left: 50px;
  }
  [class*="paragraph-alpha"] {
    width: 100%;
    background-color: white;
    height: 400px;
    width: 400px;
    top: 2880px;
    left: 0px;
  }
  [class*="blackkidname"] {
    top: 3110px;
    left: 50px;
  }
  [class*="paragraph-highPitch"] {
    width: 100%;
    background-color: white;
    height: 400px;
    width: 400px;
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

<!--<div class="intro">
  <h1>Lorem ipsum</h1>
  <p>"Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud <br>exercitation ullamco laboris nisi ut <br>aliquip ex ea commodo consequat. Duis aute irure dolor<br> in reprehenderit in voluptate velit esse <br>cillum dolore eu fugiat nulla pariatur. Excepteur <br>sint occaecat cupidatat non <br>proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum."</p><br>
  <p>"Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud <br>exercitation ullamco laboris nisi ut <br>aliquip ex ea commodo consequat. Duis aute irure dolor<br> in reprehenderit in voluptate velit esse <br>cillum dolore eu fugiat nulla pariatur. Excepteur <br>sint occaecat cupidatat non <br>proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum."</p>
</div> -->

<h1 class="heading">Math ZONE</h1>
    <h1 class="mathname" > sixxside</h1>
    <h1 class="pretendername"> cube </h1>
    <h1 class="garfieldname"> Garfield </h1>
    <h1 class="eurofagname"> Eurofag </h1>
    <h1 class="fluegsname"> Fluegs</h1>
    <h1 class="deceivername"> Deceiver </h1>
    <h1 class="blackkidname"> Blackkid </h1>
    <h1 class="highpitchname"> HighPitch </h1>

<div id="maths" style= "position: absolute;">

<div class="paragraph-math" style= "overflow-y: scroll; position: absolute;">

        <?php
        $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
            if (mysqli_connect_errno())
            {
            echo "Något gick fel: " . mysql_connect_error();
            }



            $SQL =  "SELECT texts FROM sections WHERE id = 1"
      			         ;


            //conditions the upload
            $resultat = mysqli_query($mysql_pointer, $SQL);
            while($rad = mysqli_fetch_array($resultat))
                  {
                  echo   $rad['texts'];
                  }


        ?>
</div>

<div class="paragraph-pretender" style= "overflow-y: scroll; position: absolute;">

    <?php
    $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
        if (mysqli_connect_errno())
        {
        echo "Något gick fel: " . mysql_connect_error();
        }

    $SQL =  'SELECT * FROM sections
              WHERE id = 15 ';

    $resultat = mysqli_query($mysql_pointer, $SQL);

    while($rad = mysqli_fetch_array($resultat))
          {
            echo 'Hej ';
            echo $rad['id'] . " " . $rad['texts'] . " ";

          }
    ?>
  </div>

<div class="paragraph-garfield" style= "overflow-y: scroll; position: absolute;">

  <?php
  $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
      if (mysqli_connect_errno())
      {
      echo "Något gick fel: " . mysql_connect_error();
      }

  $SQL =  'SELECT * FROM sections
            WHERE id = 16 ';

  $resultat = mysqli_query($mysql_pointer, $SQL);

  while($rad = mysqli_fetch_array($resultat))
        {
          echo 'Hej ';
          echo $rad['id'] . " " . $rad['texts'] . " ";

        }
  ?>

</div>

<div class="paragraph-euroFag" style= "overflow-y: scroll; position: absolute;">

  <?php
  $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
      if (mysqli_connect_errno())
      {
      echo "Något gick fel: " . mysql_connect_error();
      }

  $SQL =  'SELECT * FROM sections
            WHERE id = 17 ';

  $resultat = mysqli_query($mysql_pointer, $SQL);

  while($rad = mysqli_fetch_array($resultat))
        {
          echo 'Hej ';
          echo $rad['id'] . " " . $rad['texts'] . " ";

        }
  ?>

</div>

<div class="paragraph-fluegs" style= "overflow-y: scroll; position: absolute;">

  <?php
  $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
      if (mysqli_connect_errno())
      {
      echo "Något gick fel: " . mysql_connect_error();
      }

  $SQL =  'SELECT * FROM sections
            WHERE id = 18 ';

  $resultat = mysqli_query($mysql_pointer, $SQL);

  while($rad = mysqli_fetch_array($resultat))
        {
          echo 'Hej ';
          echo $rad['id'] . " " . $rad['texts'] . " ";

        }
  ?>

</div>

<div class="paragraph-deceiver" style= "overflow-y: scroll; position: absolute;">

  <?php
  $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
      if (mysqli_connect_errno())
      {
      echo "Något gick fel: " . mysql_connect_error();
      }

  $SQL =  'SELECT * FROM sections
            WHERE id = 19 ';

  $resultat = mysqli_query($mysql_pointer, $SQL);

  while($rad = mysqli_fetch_array($resultat))
        {
          echo 'Hej ';
          echo $rad['id'] . " " . $rad['texts'] . " ";

        }
  ?>

</div>

<div class="paragraph-alpha" style= "overflow-y: scroll; position: absolute;">

  <?php
  $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
      if (mysqli_connect_errno())
      {
      echo "Något gick fel: " . mysql_connect_error();
      }

  $SQL =  'SELECT * FROM sections
            WHERE id = 20 ';

  $resultat = mysqli_query($mysql_pointer, $SQL);

  while($rad = mysqli_fetch_array($resultat))
        {
          echo 'Hej ';
          echo $rad['id'] . " " . $rad['texts'] . " ";

        }
  ?>

</div>

<div class="paragraph-highPitch" style= "overflow-y: scroll; position: absolute;">

  <?php
  $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
      if (mysqli_connect_errno())
      {
      echo "Något gick fel: " . mysql_connect_error();
      }

  $SQL =  'SELECT * FROM sections
            WHERE id = 21 ';

  $resultat = mysqli_query($mysql_pointer, $SQL);

  while($rad = mysqli_fetch_array($resultat))
        {
          echo 'Hej ';
          echo $rad['id'] . " " . $rad['texts'] . " ";

        }
  ?>

</div>

</div>



  </body>
</html>
