<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<style>


#maths {
  border-style:solid;
  border-color:#287EC7;
  height: 400px;
  width: 300px;
  background-color: white;
  position: absolute;
  top: 300px;
  left: 200px;
}


header
{
  background-color: red;
  height: 100px;
  text-align: center;
  font-size: 90px;
}

body
{
  background-color: blue;
}


</style>


<body>

<header>MATH NEWS</header>



    <h1 style="position: absolute; left: 200px; top: 200px;">Maths Page </h1>
    <div id="maths">

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
                echo $rad['text'];
                echo "<br>";
              }
        ?>
        </div>
  </body>
</html>
