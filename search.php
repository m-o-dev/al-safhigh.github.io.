<!DOCTYPE html>
<html>
<head>
<title>Search</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<script>

</script>
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
  transition-duration: 500ms;
  padding: 20px;
  color: cyan;
  position:relative;
}

.term {
  background-color: cyan;
  width: 100%;
  padding: 10px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  transition-duration: 500ms;
  border: 0px;
  font-size: 25px;
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
  color: cyan;
  transition-duration: 500ms;
  font-size: 10em;
  text-align: center;
}

input[type=submit] {
  background-color: cyan;
  width: 100%;
  padding: 10px;
  transition-duration: 500ms;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border: 0px;
  font-size: 25px;
  font-family: 'Nunito', sans-serif;
}

.table{
    width: 100%;
    background-color: darkslategray;
    transition-duration: 500ms;
    align-items: center;
}

table{
    width: 98%;
    text-align: center;
    margin: 0 auto;
}

th {
    height: 50px;
    transition-duration: 500ms;
    text-align: center;
}

.tg-1{
    border-style: solid;
    border-color: white;
    border-width: 1px 0 0 0;
    transition-duration: 500ms;
    border-radius: 5px;
}

.tg-2{
    border-style: solid;
    border-color: white;
    border-width: 0 0 1px 0;
    transition-duration: 500ms;
    border-radius: 5px;
}

.tg-3{
    border-style: solid;
    border-color: white;
    border-width: 1px 0 0 0;
    transition-duration: 500ms;
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


.submit:hover {
  background-color: rgba(177, 177, 177, 0.6);
  box-shadow: 5px 5px 0px cyan;
  color: cyan;
  cursor: pointer;
  transition-duration: 500ms;
  box-shadow: 5px 5px 0px darkslategray;
}

hr {
  border: 0;
  height: 1px;
  transition-duration: 500ms;
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
  margin: 0px;
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
  <form action="search.php" method="post">
    <div class="head">
    <h2>SEARSH</h2>
    </div>
        
    <!-- The flexible grid (content) -->
    <div class="row">
        <div class="main">
            <div class="content">
                Term : <br><input name="term" type="text" class="term" placeholder="Search terms"><br>
                <hr><input name="button" type="submit" value="search" class="submit"/><br><br>
      <div class="table">
                <br>
        <table class="tg">
        <tr>
            <th class="tg-2">id</th>
            <th class="tg-2">term</th>
            <th class="tg-2">translation</th>
            <th class="tg-2">description</th>
            <th class="tg-2">defenition</th>
            <th class="tg-2">image</th>
        </tr>
        <?php
        if(isset($_POST['button'])){
          $search=$_POST['term'];
          $query=mysqli_query($conn, "select * from Terms where term like '%{$search}%'");
        
        if (mysqli_num_rows($query) > 0) {
          while ($r = mysqli_fetch_array($query)) {
          $k1=$r['id'];
          $k2=$r['term'];
          $k3=$r['trans'];
          $k4=$r['desc'];
          $k5=$r['defe'];
          $k6=$r['picture'];
        
          echo "<tr>";
          echo "<td class='tg-1'>"; echo"$k1"; echo"</td>";
          echo "<td class='tg-1'>"; echo"$k2"; echo"</td>";
          echo "<td class='tg-1'>"; echo"$k3"; echo"</td>";
          echo "<td class='tg-1'>"; echo"$k4"; echo"</td>";
          echo "<td class='tg-1'>"; echo"$k5"; echo"</td>";
          echo "<td class='tg-1'>"; echo"$k6"; echo"</td>";
          echo "</tr>";
          }
      }else{
        echo "Not Found<br><br>";
      }
        }
        
        ?>
        </table>
      <div>
            </div>
        </div>
    </div>
  </form>
  <?php
  include("footer.php");
  ?>
</body>

</html>
