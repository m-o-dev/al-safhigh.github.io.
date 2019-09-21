<!DOCTYPE html>
<html>
<head>
<title>Add term</title>
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

h2 {
    font-family: 'Pacifico', cursive;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
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
  transition-duration: 500ms;
  color: cyan;
  position: relative;
}

.term {
  background-color: cyan;
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  transition-duration: 500ms;
  border: 0px;
  font-size: 25px;
  font-family: 'Nunito', sans-serif;
  box-shadow: 5px 5px 0px rgba(177, 177, 177, 0.6);
}

.term:hover{
  background-color: rgba(177, 177, 177, 0.6);
  box-shadow: 5px 5px 0px cyan;
  color: cyan;
  transition-duration: 500ms;
  box-shadow: 5px 5px 0px darkslategray;
}

.term:active{
  background-color: rgba(177, 177, 177, 0.6);
  box-shadow: 5px 5px 0px cyan;
  transition-duration: 500ms;
  color: cyan;
  box-shadow: 5px 5px 0px darkslategray;
}

.translation {
  background-color: cyan;
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  transition-duration: 500ms;
  border: 0px;
  font-size: 25px;
  font-family: 'Nunito', sans-serif;
  box-shadow: 5px 5px 0px rgba(177, 177, 177, 0.6);
}

.translation:hover{
  background-color: rgba(177, 177, 177, 0.6);
  box-shadow: 5px 5px 0px cyan;
  transition-duration: 500ms;
  color: cyan;
  box-shadow: 5px 5px 0px darkslategray;
}

.img {
  background-color: cyan;
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 0px;
  font-size: 25px;
  font-family: 'Nunito', sans-serif;
  box-shadow: 5px 5px 0px rgba(177, 177, 177, 0.6);
  display: block;
  transition-duration: 500ms;
  text-align: center;
  color: rgba(0, 0, 0, 0.445);
}

.img:hover{
  cursor: pointer;
  background-color: rgba(177, 177, 177, 0.6);
  transition-duration: 500ms;
  box-shadow: 5px 5px 0px cyan;
  color: cyan;
  box-shadow: 5px 5px 0px darkslategray;
}

.description {
  background-color: cyan;
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 0px;
  font-size: 25px;
  font-family: 'Nunito', sans-serif;
  box-shadow: 5px 5px 0px rgba(177, 177, 177, 0.6);
  transition-duration: 500ms;
}

.description:hover{
  background-color: rgba(177, 177, 177, 0.6);
  box-shadow: 5px 5px 0px cyan;
  color: cyan;
  transition-duration: 500ms;
  box-shadow: 5px 5px 0px darkslategray;
}

.term {
  background-color: cyan;
  width: 100%;
  padding: 10px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border: 0px;
  font-size: 25px;
  transition-duration: 500ms;
  font-family: 'Nunito', sans-serif;
}

.term:hover{
  background-color: rgba(177, 177, 177, 0.6);
  box-shadow: 5px 5px 0px cyan;
  color: cyan;
  transition-duration: 500ms;
  box-shadow: 5px 5px 0px darkslategray;
}

.result {
  background-color: darkslategray;
  width: 100%;
  padding: 20px;
  transition-duration: 500ms;
  color: cyan;
  font-size: 10em;
  text-align: center;
}

input[type=submit] {
  background-color: cyan;
  width: 100%;
  padding: 10px;
  border-bottom-left-radius: 5px;
  transition-duration: 500ms;
  border-bottom-right-radius: 5px;
  border: 0px;
  font-size: 25px;
  font-family: 'Nunito', sans-serif;
}

.table{
    width: 100%;
    background-color: darkslategray;
    align-items: center;
}

table{
    width: 98%;
    text-align: center;
    margin: 0 auto;
}

th {
    height: 50px;
    text-align: center;
}

.tg-1{
    border-style: solid;
    border-color: white;
    border-width: 1px 0 0 0;
    border-radius: 5px;
}

.tg-2{
    border-style: solid;
    border-color: white;
    border-width: 0 0 1px 0;
    border-radius: 5px;
}

.tg-3{
    border-style: solid;
    border-color: white;
    border-width: 1px 0 0 0;
    border-radius: 5px;
}

.tg-3:hover {
background-color:#333;
color: darkslategray;
border-color: darkslategray;
transform: scale(1, 1);
transition-duration: 500ms;
}

th, td {
    height: 50px;
    text-align: center;
    transition-duration: 500ms;
    color: white;
}

th:hover {
    background-color: #ddd;
    color: darkslategray;
    border-color: darkslategray;
    transform: scale(1, 1);
    transition-duration: 500ms;
    }

td:hover {
background-color: #ddd;
color: darkslategray;
border-color: darkslategray;
transform: scale(1, 1);
transition-duration: 500ms;
}

a {
    text-decoration: none;
    color: white;
}



.submit {
  background-color: cyan;
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  transition-duration: 500ms;
  border: 0px;
  font-size: 25px;
  font-family: 'Nunito', sans-serif;
  box-shadow: 5px 5px 0px rgba(177, 177, 177, 0.6);
}

.submit:hover {
  background-color: rgba(177, 177, 177, 0.6);
  box-shadow: 5px 5px 0px cyan;
  color: cyan;
  transition-duration: 500ms;
  cursor: pointer;
  box-shadow: 5px 5px 0px darkslategray;
}

.head {
  padding: 20px;
  text-align: center;
  background-color: darkslategray;
  color: white;
  font-family: 'Pacifico', cursive;
}

::placeholder {
  color: rgba(0, 0, 0, 0.445);
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
  <h2>ADD TERM</h2>
</div>
<form action="add_term.php" method="post" enctype="multipart/form-data">
  <!-- The flexible grid (content) -->
    <div class="row">
      <div class="main">
        <div class="content">
            Term : <br><input name="text1" type="text" class="term" placeholder="Term"><br><br>
            Translation : <br><input name="text2" type="text" class="translation" placeholder="Translation"><br><br>
            Defenition : <br><input name="text3" type="text" class="translation" placeholder="Defenition"><br><br>
            Descripton :  <br><input name="text4" type="text" class="description" placeholder="Description"><br><br>
            Image : <br><input name="img" type="file" name="img" class="img"><br><br>
            <input name="submit1" type="submit" value="submit" class="submit"/>
        </div>
        <?php
  if (isset($_POST['submit1'])) {
      if(!is_dir('pic')) { mkdir('pic');}
    @$file=$_FILES['img']['name'];
    @$tmp=$_FILES['img']['tmp_name'];
      if (!empty($file)) { move_uploaded_file($tmp,'pic/'.$file); }
    $term=$_POST['text1'];
    $trans=$_POST['text2'];
    $defe=$_POST['text3'];
    $desc=$_POST['text4'];
    $img=$_POST['text5'];


    if ($term !=="" && $trans !=="" && $defe !=="" && $desc !=="" && !empty($file)) {
      mysqli_query($conn,"SET NAMES 'utf8'");
      $query=mysqli_query($conn, "INSERT INTO `Terms` (`term`, `trans`, `defe`, `desc`, `picture`) VALUES ('$term', '$trans', '$defe', '$desc', '$img')");
      if ($query) {
        echo "Added";
      }
      else {
        die("Connection failed: " . mysqli_error($conn));
      }
    }
    else {
      echo "Wrong inputs";
    }
  }
?>
      </div>
    </div>
</form>
<?php
include("footer.php")
?>
</body>
</html>


