<!DOCTYPE html>
    <html>
        <head>
            <title>Edit</title>
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
                position:relative;
                }

                .input_txt {
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

                .input_txt:hover{
                background-color: rgba(177, 177, 177, 0.6);
                box-shadow: 5px 5px 0px cyan;
                color: cyan;
                box-shadow: 5px 5px 0px darkslategray;
                transition-duration: 500ms;
                }

                .result {
                background-color: darkslategray;
                width: 100%;
                padding: 20px;
                color: cyan;
                font-size: 10em;
                text-align: center;
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
                    transition-duration: 500ms;
                }

                .tg-1{
                    border-style: solid;
                    transition-duration: 500ms;
                    border-color: white;
                    border-width: 1px 0 0 0;
                    border-radius: 5px;
                }

                .tg-2{
                    border-style: solid;
                    border-color: white;
                    transition-duration: 500ms;
                    border-width: 0 0 1px 0;
                    border-radius: 5px;
                }

                .tg-3{
                    border-style: solid;
                    border-color: white;
                    transition-duration: 500ms;
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

                .input_txt {
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

                .input_txt:hover{
                background-color: rgba(177, 177, 177, 0.6);
                box-shadow: 5px 5px 0px cyan;
                color: cyan;
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

            <form action="edit.php?id=" method="post">

                <div class="head">
                    <h2>EDIT</h2>
                </div>

                <div class="row">

                    <div class="main">

                        <div class="table"><br>

                            <table class="tg">

                                <tr>
                                    <th class="tg-2">id</th>
                                    <th class="tg-2">term</th>
                                    <th class="tg-2">translation</th>
                                    <th class="tg-2">description</th>
                                    <th class="tg-2">defenition</th>
                                    <th class="tg-2">image</th>
                                    <th class="tg-2">edit</th>
                                </tr>

                                <?php
                                    $query = "SELECT * FROM Terms";

                                    $result = mysqli_query($conn, $query);

                                    while ($r = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                                        $k1=$r['id'];
                                        $k2=$r['term'];
                                        $k3=$r['trans'];
                                        $k4=$r['desc'];
                                        $k5=$r['defe'];
                                        $k6=$r['picture'];
                                        $id=$r['id'];
                                        echo "<tr>";
                                        echo "<td class='tg-1'>"; echo"$k1"; echo"</td>";
                                        echo "<td class='tg-1'>"; echo"$k2"; echo"</td>";
                                        echo "<td class='tg-1'>"; echo"$k3"; echo"</td>";
                                        echo "<td class='tg-1'>"; echo"$k4"; echo"</td>";
                                        echo "<td class='tg-1'>"; echo"$k5"; echo"</td>";
                                        echo "<td class='tg-1'>"; echo"$k6"; echo"</td>";
                                        echo "<td class='tg-3'>";echo"<a href='edit.php?id=$k1''javascript:window.location.reload(true)'>update</a>";echo"</td>";
                                        echo "</tr>";
                                    }
                                ?>

                            <table>
                            </div>
                            
                            <?php
                                if ($_GET['id']) {
                                    $q=mysqli_query($conn, "select * from Terms where id='$_GET[id]'");

                                    while ($r = mysqli_fetch_array($q, MYSQLI_BOTH)) {
                                        $c1=$r[1];
                                        $c2=$r[2];
                                        $c3=$r[3];
                                        $c4=$r[4];
                                        $c5=$r[5];
                                        echo "<div class='content'>";
                                        echo "<form action='edit.php' method='post'>";
                                        echo "Term : <br><input name='text1' type='text' value='$c1' class='input_txt' placeholder='Term'><br><br>";
                                        echo "Translation : <br><input name='text2' type='text' value='$c2'  class='input_txt' placeholder='Translation'><br><br>";
                                        echo "Defenition : <br><input name='text3' type='text' class='input_txt' value='$c3' placeholder='Defenition'><br><br>";
                                        echo "Descripton :  <br><input name='text4' type='text' class='input_txt' value='$c4' placeholder='Description'><br><br>";
                                        echo "Image : <br><input name='img' type='file' name='img' value='$c5'  class='input_txt'><br><br>";
                                        echo "<input name='submit3' type='submit' value='update' class='submit'/>";
                                        echo "</form>";
                                        echo "</div>";
                                    }
                                }
                            ?>
                                    <?php
                                        if (isset($_POST['submit3'])) {
                                            $term=$_POST['text1'];
                                            $trans=$_POST['text2'];
                                            $defe=$_POST['text3'];
                                            $desc=$_POST['text4'];
                                            $image=$_POST['img'];
                                            mysqli_query($conn, "UPDATE `Terms` SET `term` = '$term', `trans` = '$trans', `defe` = '$defe', `desc` = '$desc', `picture` = '$image' WHERE `Terms`.`id` =$id;");
                                        }
                                    ?>

                    </div>

                </div>

            </form>

            <?php
                include("footer.php");
            ?>
        </body>
    </html>

