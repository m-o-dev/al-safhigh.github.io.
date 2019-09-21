<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
    <style>
        div{
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
           transition-duration: 500ms;
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
            color: white;
            transition-duration: 500ms;
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

        .head {
        padding: 20px;
        text-align: center;
        background-color: darkslategray;
        color: white;
        font-family: 'Pacifico', cursive;
        }

        a {
            text-decoration: none;
            color: white;
        }

    </style>
    
</head>
<body>
    <?php
        include("header.php");
        include("connection.php");
    ?>
    <div class="head">
        <h2>DELETE</h2>
    </div>
    <div>

        <br>
        <table class="tg">

        <tr>
            <th class="tg-2">id</th>
            <th class="tg-2">term</th>
            <th class="tg-2">translation</th>
            <th class="tg-2">description</th>
            <th class="tg-2">defenition</th>
            <th class="tg-2">image</th>
            <th class="tg-2">delete</th>
        </tr>
        <?php
$query = "SELECT * FROM Terms";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $k1=$row[0];
    $k2=$row[1];
    $k3=$row[2];
    $k4=$row[3];
    $k5=$row[4];
    $k6=$row[5];
    echo "<tr>";
       echo "<td class='tg-1'>$k1</td>";
       echo "<td class='tg-1'>$k2</td>";
       echo "<td class='tg-1'>$k3</td>";
       echo "<td class='tg-1'>$k4</td>";
       echo "<td class='tg-1'>$k5</td>";
       echo "<td class='tg-1'>$k6</td>";
       echo "<td class='tg-3'>";echo"<a href='delete.php?id=$k1''javascript:window.location.reload(true)'>delete</a>";echo"</td>";
    echo "</tr>";
    if($_GET['id']){
        $t=mysqli_query($conn,"DELETE FROM Terms where id='$_GET[id]'");
    }
}?>
        </table>
        <br>
        
    </div>
<?php
    include('footer.php')
?>
</body>
</html>