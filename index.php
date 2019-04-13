<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<style>
header
{
  background-color: YELLOW;
  height: 100px;
  text-align: center;
  font-size: 90px;
}

</style>

  <body>

<header>ADMIN PANEL</header>

<?php
$mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
    if (mysqli_connect_errno())
    {
    echo "Något gick fel: " . mysql_connect_error();
    }

$SQL =  'SELECT * FROM sections';

$resultat = mysqli_query($mysql_pointer, $SQL);
while($rad = mysqli_fetch_array($resultat))
      {
      echo 'Hej ';
      echo $rad['studentName'] . " " . $rad['text'];
      echo "<br>";
      }

      if (isset($_GET['garfieldsbutton'])) {
        $query="INSERT INTO sections(text)
                VALUES('$_GET[garfield]')";

                  if(!mysqli_query($mysql_pointer,$query))
                  {
                    die('Error . ' . mysqli_error($mysql_pekare));
                  }
                  header("Location: index.php");
                  echo 'you added text to the database';
                }
    ?>

    <script>




    </script>

    <form id="inputs" action="index.php" method="GET">
    <textarea type="text" name="garfield" id="garfieldstextarea" style ="width : 200px; height : 200px">
    </textarea>
    <br>
    <input onsubmit="addNews(garfieldstextarea);" name="garfieldsbutton" type="submit" value="UPLOAD YOUR SHIT Garfield "></input>
    </form>

  </body>
</html>
