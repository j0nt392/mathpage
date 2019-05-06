<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <script
      src="https://code.jquery.com/jquery-3.4.0.js"
      integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
      crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  </head>
<style>

  .navbar {
    -webkit-transition: all 0.6s ease-out;
    -moz-transition: all 0.6s ease-out;
    -o-transition: all 0.6s ease-out;
    -ms-transition: all 0.6s ease-out;
    transition: all 0.6s ease-out;
  }

  .navbar.scrolled {
    background: rgb(230, 230, 230);
    /* IE */
    background: black;
    /* NON-IE */
  }

.maths {
      height: 950px;
      width: 1900px;
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
      position: absolute;
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
        float: right;
        right: 2px;

      }


    .mathname, .pretendername, .garfieldname, .eurofagname {
        top: 250px;
        position: absolute;
        color: white;
      }

      .mathname{
        left: 50px;
      }

      .pretendername{
      left: 500px;
      }

      .garfieldname{
      left: 950px;
      }

      .eurofagname{
      left: 1400px;
      }

    .fluegsname,
     .deceivername, .blackkidname, .highpitchname{
      color: white;
      top: 750px;
      position: absolute;
      }

      .fluegsname{
      left: 50px;
      }

      .deceivername{
      left: 500px;
      }

      .blackkidname{
      left: 950px;
      }

      .highpitchname{
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

    body, html
    {
      background-image: url(images/Untitled-1.jpg);
      background-repeat: repeat-y;
      background-size: cover;

    }


    [class*="maths"] {
      height: 950px;
      width: 100vw;
      position: absolute;
      top: 300px;
      left: 0px;
    }


    [class*="paragraph-math"] {
      top: 0px;
      left: 0px;
      width: 100vw;
    }

    [class*="mathname"] {
      top: 230px;
    }
    [class*="paragraph-pretender"] {
      top: 480px;
      left: 0px;
      width: 100vw;
    }
    [class*="pretendername"] {
      top: 720px;
      left: 50px;

    }
    [class*="paragraph-garfield"] {
      top: 960px;
      left: 0px;
      width: 100vw;
    }
    [class*="garfieldname"] {
      top: 1210px;
      left: 50px;

    }
    [class*="paragraph-euroFag"] {
      top: 1440px;
      left: 0px;
      width: 100vw;
    }

    [class*="eurofagname"] {
      top: 1700px;
      left: 50px;
    }
    [class*="paragraph-fluegs"] {
      top: 1920px;
      left: 0px;
      width: 100vw;
    }
    [class*="fluegsname"] {
      top: 2150px;
      left: 50px;
    }
    [class*="paragraph-deceiver"] {
      top: 2400px;
      left: 0px;
      width: 100vw;
    }
    [class*="deceivername"] {
      top: 2630px;
      left: 50px;
    }
    [class*="paragraph-alpha"] {
      top: 2880px;
      left: 0px;
      width: 100vw;
    }
    [class*="blackkidname"] {
      top: 3110px;
      left: 50px;
    }
    [class*="paragraph-highPitch"] {
      top: 3360px;
      left: 0px;
      width: 100vw;

    }
    [class*="highpitchname"] {
      top: 3590px;
      left: 50px;
    }

    [class*="heading"] {
      font-size: 30px;
    }

    [class*="navbar"] {
      width: 100%;
    }
    [class*="navbar-nav"]{

    }
  }

</style>

<body style="height:1500px">


  <?php

//php function to figure out what row to fetch and post
     function writeMessage($idnum) {

          $mysql_pointer = mysqli_connect("www.uncensoredmath.com", "wiwo4e1y3pqn", "sP%zU;106Wg", "mathpage");
              if (mysqli_connect_errno())
              {
              echo "Något gick fel: " . mysql_connect_error();
              }

          $SQL =  'SELECT texts, textid FROM sections
                    WHERE id = '.$idnum.' ORDER BY textid DESC LIMIT 1';

          $resultat = mysqli_query($mysql_pointer, $SQL);

          while($rad = mysqli_fetch_array($resultat))
                {
                  //two first ones are for testing purposes
                  //echo 'Hej ';
                  //echo $rad['id'];
                  echo '<hr><br>';
                  echo '<div id="'.$rad['textid'].'">';
                  echo $rad['texts'];
                  echo '</div>';
                }
              }

              function writeDate($idnum) {

                $mysql_pointer = mysqli_connect("www.uncensoredmath.com", "wiwo4e1y3pqn", "sP%zU;106Wg", "mathpage");
                    if (mysqli_connect_errno())
                    {
                    echo "Något gick fel: " . mysql_connect_error();
                    }

                $SQL =  'SELECT * FROM sections, accounts
                          WHERE sections.id = '.$idnum.' AND accounts.id = '.$idnum.' ORDER BY dateofpost DESC';

                $resultat = mysqli_query($mysql_pointer, $SQL);

                while($rad = mysqli_fetch_array($resultat))
                      {
                        $username = $rad['username'];
                        $json = json_encode($username);
                        $finished = htmlspecialchars($json);
                        echo 'post number: ';
                        echo '<input type="button" id="'.$rad['textid'].'" onclick="get_db('.$finished.');" value="'.$rad['textid'].'" ></input>';
                        echo '<br>';

                      }
                    }
               ?>

<!-- logotype -->
<h1 class="mathname"style="font-family: impact;">Litterature</h1>
    <h1 class="pretendername" style="font-family: impact;">Videos</h1>
    <h1 class="garfieldname"style="font-family: impact;">Slither-theory</h1>
    <h1 class="eurofagname"style="font-family: impact;">Controversial</h1>
    <h1 class="fluegsname"style="font-family: impact;">What not to do</h1>
    <h1 class="deceivername" id="professor" style="font-family: impact;">Trends</h1>
    <h1 class="blackkidname"style="font-family: impact;">Education</h1>
    <h1 class="highpitchname"style="font-family: impact;">Religion</h1>


    <nav class="navbar navbar-expand-lg  fixed-top">
      <h1 class="heading">Math ZONE</h1>
      <ul  class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light " href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="economy.php">Authors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="transportation.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="https://uncensoredmath.com/forum/">Forum</a>
        </li>
      </ul>

    </nav>

<!--container for all the columns-->
<container class="maths">

<!-- social litterature -->
        <div class="container paragraph-math" style= "overflow-y: scroll; position: absolute;">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item active" id="Litterature-spoststab">
              <a class="nav-link active" id="Litterature-shome-tab" data-toggle="tab" href="#Litterature-sposts" role="tab" aria-controls="home" aria-selected="true">Posts</a>
            </li>
            <li class="nav-item" id="Litterature-shistorytab">
              <a class="nav-link" id="Litterature-sprofile-tab" data-toggle="tab" href="#Litterature-shistory" role="tab" aria-controls="profile" aria-selected="false">History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Litterature-sabout" role="tab" aria-controls="contact" aria-selected="false">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Litterature-scontact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>

          <div class="tab-content" id="tabcontent">
              <div id="Litterature-sposts" class="tab-pane active fade show ">
                 <?php writeMessage('22'); ?>
              </div>
              <div id="Litterature-shistory" class="tab-pane fade">
              <p>  <?php writeDate('22'); ?> </p>
              </div>
              <div id="Litterature-sabout" class="tab-pane fade">
                <h3>About professor</h3>
                <p>Big boss, friend of sauron</p>
              </div>
              <div id="Litterature-scontact" class="tab-pane fade">
                <h3>call me here: 0302425924</h3>
              </div>
            </div>
        </div>

<!-- videos -->
        <div class="container paragraph-pretender" style= "overflow-y: scroll; position: absolute;">
          <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item active" id="pretenders-poststab">
              <a class="nav-link active" id="pretenders-home-tab" data-toggle="tab" href="#pretendersposts" role="tab" aria-controls="home" aria-selected="true">Posts</a>
            </li>

            <li class="nav-item" id="pretenders-historytab">
              <a class="nav-link" id="pretenders-profile-tab" data-toggle="tab" href="#pretendershistory" role="tab" aria-controls="profile" aria-selected="false">History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#pretendersabout" role="tab" aria-controls="contact" aria-selected="false">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#pretenderscontact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>

          <div class="tab-content" id="tabcontent">
              <div id="pretendersposts" class="tab-pane active fade show ">
                 <?php writeMessage('23'); ?>
              </div>
              <div id="pretendershistory" class="tab-pane fade">
              <p>  <?php writeDate('23'); ?> </p>
              </div>
              <div id="pretendersabout" class="tab-pane fade">
                <h3>About pretender</h3>
                <p>Big boss, friend of sauron</p>
              </div>
              <div id="pretenderscontact" class="tab-pane fade">
                <h3>call me here: 0302425924</h3>
              </div>
            </div>
        </div>

<!-- slither theory -->
        <div class="container paragraph-garfield" style= "overflow-y: scroll; position: absolute;">
          <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item active" id="garfields-poststab">
              <a class="nav-link active" id="garfields-home-tab" data-toggle="tab" href="#garfieldsposts" role="tab" aria-controls="home" aria-selected="true">Posts</a>
            </li>

            <li class="nav-item" id="garfields-historytab">
              <a class="nav-link" id="garfields-profile-tab" data-toggle="tab" href="#garfieldshistory" role="tab" aria-controls="profile" aria-selected="false">History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#garfieldsabout" role="tab" aria-controls="contact" aria-selected="false">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#garfieldscontact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>

          <div class="tab-content" id="tabcontent">
              <div id="garfieldsposts" class="tab-pane active fade show ">
                 <?php writeMessage('24'); ?>
              </div>
              <div id="garfieldshistory" class="tab-pane fade">
              <p>  <?php writeDate('24'); ?> </p>
              </div>
              <div id="garfieldsabout" class="tab-pane fade">
                <h3>About professor</h3>
                <p>Big boss, friend of sauron</p>
              </div>
              <div id="garfieldscontact" class="tab-pane fade">
                <h3>call me here: 0302425924</h3>
              </div>
            </div>
        </div>

        <div class="container paragraph-euroFag" style= "overflow-y: scroll; position: absolute;">
          <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item active" id="eurofags-poststab">
              <a class="nav-link active" id="eurofags-home-tab" data-toggle="tab" href="#eurofagsposts" role="tab" aria-controls="home" aria-selected="true">Posts</a>
            </li>

            <li class="nav-item" id="eurofags-historytab">
              <a class="nav-link" id="eurofags-profile-tab" data-toggle="tab" href="#eurofagshistory" role="tab" aria-controls="profile" aria-selected="false">History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#eurofagsabout" role="tab" aria-controls="contact" aria-selected="false">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#eurofagscontact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>

          <div class="tab-content" id="tabcontent">
              <div id="eurofagsposts" class="tab-pane active fade show ">
                 <?php writeMessage('25'); ?>
              </div>
              <div id="eurofagshistory" class="tab-pane fade">
              <p>  <?php writeDate('25'); ?> </p>
              </div>
              <div id="eurofagsabout" class="tab-pane fade">
                <h3>About professor</h3>
                <p>Big boss, friend of sauron</p>
              </div>
              <div id="eurofagscontact" class="tab-pane fade">
                <h3>call me here: 0302425924</h3>
              </div>
            </div>
        </div>

        <div class="container paragraph-fluegs" style= "overflow-y: scroll; position: absolute;">
          <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item active" id="fluegss-poststab">
              <a class="nav-link active" id="fluegss-home-tab" data-toggle="tab" href="#fluegssposts" role="tab" aria-controls="home" aria-selected="true">Posts</a>
            </li>

            <li class="nav-item" id="fluegss-historytab">
              <a class="nav-link" id="fluegss-profile-tab" data-toggle="tab" href="#fluegsshistory" role="tab" aria-controls="profile" aria-selected="false">History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#fluegssabout" role="tab" aria-controls="contact" aria-selected="false">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#fluegsscontact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>

          <div class="tab-content" id="tabcontent">
              <div id="fluegssposts" class="tab-pane active fade show ">
                 <?php writeMessage('26'); ?>
              </div>
              <div id="fluegsshistory" class="tab-pane fade">
              <p>  <?php writeDate('26'); ?> </p>
              </div>
              <div id="fluegssabout" class="tab-pane fade">
                <h3>About professor</h3>
                <p>Big boss, friend of sauron</p>
              </div>
              <div id="fluegsscontact" class="tab-pane fade">
                <h3>call me here: 0302425924</h3>
              </div>
            </div>
        </div>

        <div class="container paragraph-deceiver" style= "overflow-y: scroll; position: absolute;">
          <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item active" id="deceivers-poststab">
              <a class="nav-link active" id="deceivers-home-tab" data-toggle="tab" href="#deceiversposts" role="tab" aria-controls="home" aria-selected="true">Posts</a>
            </li>

            <li class="nav-item" id="deceivers-historytab">
              <a class="nav-link" id="deceivers-profile-tab" data-toggle="tab" href="#deceivershistory" role="tab" aria-controls="profile" aria-selected="false">History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#deceiversabout" role="tab" aria-controls="contact" aria-selected="false">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#deceiverscontact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>

          <div class="tab-content" id="tabcontent">
              <div id="deceiversposts" class="tab-pane active fade show ">
                 <?php writeMessage('27'); ?>
              </div>
              <div id="deceivershistory" class="tab-pane fade">
              <p>  <?php writeDate('27'); ?> </p>
              </div>
              <div id="deceiversabout" class="tab-pane fade">
                <h3>About professor</h3>
                <p>Big boss, friend of sauron</p>
              </div>
              <div id="deceiverscontact" class="tab-pane fade">
                <h3>call me here: 0302425924</h3>
              </div>
            </div>
        </div>

        <div class="container paragraph-alpha" style= "overflow-y: scroll; position: absolute;">
          <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item active" id="blackkids-poststab">
              <a class="nav-link active" id="blackkids-home-tab" data-toggle="tab" href="#blackkidsposts" role="tab" aria-controls="home" aria-selected="true">Posts</a>
            </li>

            <li class="nav-item" id="blackkids-historytab">
              <a class="nav-link" id="blackkids-profile-tab" data-toggle="tab" href="#blackkidshistory" role="tab" aria-controls="profile" aria-selected="false">History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#blackkidsabout" role="tab" aria-controls="contact" aria-selected="false">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#blackkidscontact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>

          <div class="tab-content" id="tabcontent">
              <div id="blackkidsposts" class="tab-pane active fade show ">
                 <?php writeMessage('28'); ?>
              </div>
              <div id="blackkidshistory" class="tab-pane fade">
              <p>  <?php writeDate('28'); ?> </p>
              </div>
              <div id="blackkidsabout" class="tab-pane fade">
                <h3>About professor</h3>
                <p>Big boss, friend of sauron</p>
              </div>
              <div id="blackkidscontact" class="tab-pane fade">
                <h3>call me here: 0302425924</h3>
              </div>
            </div>
        </div>

        <div class="container paragraph-highPitch" style= "overflow-y: scroll; position: absolute;">
          <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item active" id="highpitchs-poststab">
              <a class="nav-link active" id="highpitchs-home-tab" data-toggle="tab" href="#highpitchsposts" role="tab" aria-controls="home" aria-selected="true">Posts</a>
            </li>

            <li class="nav-item" id="highpitchs-historytab">
              <a class="nav-link" id="highpitchs-profile-tab" data-toggle="tab" href="#highpitchshistory" role="tab" aria-controls="profile" aria-selected="false">History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#highpitchsabout" role="tab" aria-controls="contact" aria-selected="false">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#highPitchscontact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>

          <div class="tab-content" id="tabcontent">
              <div id="highpitchsposts" class="tab-pane active fade show ">
                 <?php writeMessage('29'); ?>
              </div>
              <div id="highpitchshistory" class="tab-pane fade">
              <p>  <?php writeDate('29'); ?> </p>
              </div>
              <div id="highpitchsabout" class="tab-pane fade">
                <h3>About professor</h3>
                <p>Big boss, friend of sauron</p>
              </div>
              <div id="highpitchscontact" class="tab-pane fade">
                <h3>call me here: 0302425924</h3>
              </div>
            </div>
        </div>

</container>
<script>
  function checkScroll() {
    var startY = $('.navbar').height() * 1; //The point where the navbar changes in px

    if ($(window).scrollTop() > startY) {
      $('.navbar').addClass("scrolled");
    } else {
      $('.navbar').removeClass("scrolled");
    }
  }

  if ($('.navbar').length > 0) {
    $(window).on("scroll load resize", function() {
      checkScroll();
    });
  }
</script>
  <script>





  function get_db(usernames){

        document.getElementById(usernames + "-spoststab").className = "nav-item active";
        document.getElementById(usernames + "-shome-tab").className = "nav-link active";
        document.getElementById(usernames + "-sposts").className = "tab-pane active fade show ";

        document.getElementById(usernames + "-shistorytab").className = "nav-item";
        document.getElementById(usernames + "-sprofile-tab").className = "nav-link";
        document.getElementById(usernames + "-shistory").className = "tab-pane hide ";

        var buttonName = event.target.id;
        var elmnt = document.getElementById(buttonName);
        //elmnt.scrollIntoView({behavior: "smooth",  block: "nearest", inline: "nearest"});



        function showCustomer(str) {
          var xhttp;
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById(usernames + "-sposts").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "getblogpost.php?q="+buttonName, true);
          xhttp.send();
        }

        showCustomer(usernames);
      }

  </script>
  </body>
</html>
