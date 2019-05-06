<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.js"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Math Zone</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>

      <?php

      //connects to the database
      $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
          if (mysqli_connect_errno())
          {
          echo "Något gick fel: " . mysql_connect_error();
          }

      //gets table and row
			$ID = $_SESSION['id'];


      $SQL =  "SELECT texts, textid FROM sections WHERE id = '$_SESSION[id]'ORDER BY textid DESC "
			         ;

			echo '<div class="my_class" style="height:200px; overflow-y: scroll;">';
      //conditions the upload
      $resultat = mysqli_query($mysql_pointer, $SQL);
      while($rad = mysqli_fetch_array($resultat))
            {
            echo  $_SESSION['id'] . " " . $rad['texts'];
						echo '<br>';
						echo $rad['textid'];
						echo '<hr><br>';
            }
						echo '</div>';

            if (isset($_POST['garfieldsbutton'])) {
              $query="INSERT INTO sections(texts, id, dateofpost)
                      VALUES('$_POST[garfieldstextarea]', $ID, CURRENT_TIMESTAMP)";

                        if(!mysqli_query($mysql_pointer,$query))
                        {
                          die('Error . ' . mysqli_error($mysql_pointer));
                        }
                        header("Location: home.php");
                      }

                      /* If upload button is clicked ...
                       if (isset($_POST['upload'])) {
                       	// Get image name
                       	$image = $_FILES['image']['name'];
                       	// Get text
                       	$image_text = mysqli_real_escape_string($mysql_pointer, $_POST['image_text']);

                       	// image file directory
                       	$target = "images/".basename($image);

                       	$sql = "INSERT INTO image_table (image, imagetext) VALUES ('$image', '$image_text')";
                       	// execute query
                       	mysqli_query($mysql_pointer, $sql);

                       	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

                       		$msg = "Image uploaded successfully";
                          header("Location: index.php");
                          exit;
                       	}else{
                       		$msg = "Failed to upload image";
                       	}
                       }
                       $result = mysqli_query($mysql_pointer, "SELECT * FROM image_table");*/
                     ?>





          <!-- this section uploads TEXT -->
          <div id="inputs">
					<p>This is a HTML editor, not a text editor. But you can use it as a text editor.
						**to make a linebreak, hold shift and press enter'</p>
          <form id="inputs" action="home.php"  method="POST">
          <textarea type="text" name="garfieldstextarea" id="garfieldstextarea" style ="width : 200px; height : 200px">
          </textarea>
          <br>


          <script>
          var editor = new Jodit('#garfieldstextarea');
          </script>

          <input  name="garfieldsbutton" type="submit" value="UPLOAD YOUR SHIT Garfield "></input>
          </form>



          <!-- this section uploads FILES such as image
          <form id="images" method="POST" action="home.php" enctype="multipart/form-data">
          	<input type="hidden" name="size" value="1000000">
          	<div>
          	  <input type="file" name="image">
          	</div>
          	<div>
              <textarea
              	id="text"
              	cols="40"
              	rows="4"
              	name="image_text"
              	placeholder="Say something about this image..."></textarea>
          	</div>
          	<div>
          		<button type="submit" name="upload">POST</button>
          	</div>
          </form> -->
        </div>
		</div>
	</body>
</html>
