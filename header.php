<!DOCTYPE html>
<html>
<head>
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

/* Header/logo Title */
.header {
  padding: 60px;
  text-align: center;
  background-color: darkslategray;
  color: white;
  font-family: 'Pacifico', cursive;
  font-size: 3em;
}

/* Style the top navigation bar */
.navbar {
  display: flex;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  transition-duration: 1000ms;
  text-align: center;
  margin: auto;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  border-radius: 3px;
  transition-duration: 1000ms;
  color: black;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
}
}

</style>
</head>
<body>

<!-- Header -->
<div class="header">
  <h1>computer dictionary</h1>
</div>

<!-- Navigation Bar -->
<div class="navbar">
  <a href ="index.php">Home</a>
  <a href ="add_term.php">Add</a>
  <a href ="delete.php?id=">Delete</a>
  <a href ="edit.php?id=">Edit</a>
  <a href ="search.php">Search</a>
  <a href ="help.php">Help</a>
</div>

</body>
</html>