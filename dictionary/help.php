<!DOCTYPE html>
<html>
<head>
<title>Help center</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: 'Nunito', sans-serif;
  margin: 0;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Main column */
.main {
  flex: 70%;
  background-color: white;
  
}

/* Fake image, just for this example */
.content {
  background-color: darkslategray;
  width: 100%;
  padding: 20px;
  color: cyan;
}

.term {
  background-color: cyan;
  width: 80%;
  padding: 20px;
  border-radius: 5px;
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
}

.result {
  background-color: darkslategray;
  width: 100%;
  padding: 20px;
  color: cyan;
  font-size: 10em;
  text-align: center;
}

.result2 {
  background-color: darkslategray;
  width: 100%;
  padding: 20px;
  color: cyan;
  font-size: 3em;
  text-align: center;
}

.result3 {
  background-color: darkslategray;
  color: cyan;
  font-size: 3em;
  text-align: center;
  opacity: 0.3;
  filter: alpha(opacity=50);
  align-self: center;
  transition-duration: 1000ms;
}

.result3:hover{
  opacity: 1;
  filter: alpha(opacity=100);
  transition-duration: 1000ms;
}

input[type=submit] {
  background-color: cyan;
  width: 20%;
  padding: 20px;
  border-radius: 5px;
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
}

.head {
  padding: 20px;
  text-align: center;
  background-color: darkslategray;
  color: white;
  font-family: 'Pacifico', cursive;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}
</style>
</head>

<body>
<?php
include("header.php");
include("connection.php");
?>
    <div class="head">
        <h2>HELP</h2>
    </div>
        
    <!-- The flexible grid (content) -->
    <div class="row">
        <div class="main">
            <div class="content">
                <div class="result">Help center</div><br><br>
                <div class="result2">This project was coded and designed by -mohamed osama mohamed- so if you like it you can find more of my projects on my Linkedin profile</div>
                <div class="result3"><a href="https://www.linkedin.com/in/mohamed-osama-mohamed/"target="_blank"><img src="/htdocs/dictionary/pic/li.png" alt="Linkedin"></a></div>
            </div>
        </div>
    </div>
<?php
include("footer.php")
?>
</body>
</html>
