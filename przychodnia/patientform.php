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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style media="screen">
    .form {
      width: 30%;
      padding: 1%;
      margin: 5%;
      margin-top: 24%;
      background: #7E5E4A;
    }

    .form h3 {
      text-align: left;
      color: #fff;
    }

    #button {
      width: 50%;
      border-radius: 5px;
      padding: 1.5%;
      border: double;
      cursor: pointer;
    }

    .form #button {
      font-weight: 600;
      color: black;
      background-color: #fff;
    }

    #deleteButton {
      font-weight: 600;
      color: #fff;
      background-color: #eb4034;
      width: 50%;
      border-radius: 5px;
      padding: 1.5%;
      border: double;
      cursor: pointer;
    }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: black;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #004996;
    }

    .active {
      background-color: #004996;
    }
    table {
      margin-top: 1%;
      width:100%;
    }
    table, th, td {
      border: none;
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
      text-align: left;
    }
    tr:nth-child(even) {
      background-color: #eee;
    }
    tr:nth-child(odd) {
     background-color: #fff;
    }
    th {
      background-color: #7E5E4A;
      color: black;
    }
    </style>
    <title>Pacjent</title>
  </head>
  <body>
    <div style="background-image: url('gradient.jpg');">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <ul>
      <li><a href="#"></a></li>
    </ul>
      <div class="form">
        <h3>Aplikuj</h3>
        <form action="addapplication.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Imie" value="" name="imie"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nazwisko" value="" name="nazwisko"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pesel" value="" name="pesel"/>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" placeholder="Data urodzenia" value="" name="data_ur"/>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="email" value="" name="email"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="opis" value="" name="choroba"/>
          </div>
          <div class="form-group">
            <input id="button" type="submit" value="Wyślij" name="submit"/>
          </div>
        </form>
      </div>
  </body>
</html>