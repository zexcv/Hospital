<?php
   include('session.php');
   require "connect.php";

   $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

   $sql = "select * from users";

   $result = $polaczenie->query($sql);
   ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style media="screen">
    ul {
      list-style-type: circle;
      margin: 1;
      padding: 1;
      overflow: none;
      background-color: #9403fc;
    }
    li {
      float: left;
    }
    li a {
      display: inline-block;
      color: black;
      text-align: center;
      padding: 24px 26px;
      text-decoration: underline;
    }
    li a:hover {
      background-color: white;
    }
  </style>
  <title>Witamy</title>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <ul>
    <li><a href='doctors.php'>Lekarze</a></li>
    <li><a href='patients.php'>Pacjenci</a></li>
    <li><a href='visits.php'>Wizyty</a></li>
    <li><a href="reception.php">Aplikacja</a></li>
  </ul>
  <img src="building.jpg" alt="budyenk" width="75%"/>
</body>
</html>