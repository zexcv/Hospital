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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style media="screen">
    .form {
      width: 30%;
      height: 544px;
      padding: 1%;
      margin: 14%;
      background: #7E5E4A;
      align: center;
    }

    .form h3 {
      text-align: left;
      color: white;
    }

    #button {
      width: 50%;
      border-radius: 5px;
      padding: 0.5%;
      border: double;
      cursor: pointer;
    }

    .form #button {
      font-weight: 600;
      color: black;
      background-color: white;
    }
    #deleteButton {
      font-weight: 400;
      color: #fff;
      background-color: #fcba03;
      width: 25%;
      border-radius: 1rem;
      padding: 1.5%;
      border: none;
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
      background-color: black;
    }

    .active {
      background-color: grey;
    }
    table {
      margin-top: 1%;
      width:100%;
    }
    table, th, td {
      border: none;
      border-collapse: separate;
    }
    th, td {
      padding: 15px;
      text-align: left;
    }
    tr:nth-child(even) {
      background-color: #eee;
    }
    tr:nth-child(odd) {
     background-color: #ababab;
    }
    th {
      background-color: #7E5E4A;
      color: white;
    }
    </style>
    <title>Lekarze</title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div style="background-image: url('books.jpg');">
    <ul>
      <li><a href='welcome.php'>Home</a></li>
      <li><a class="active" href="doctors.php">Lekarze</a></li>
      <li><a href="patients.php">Pacjenci</a></li>
      <li><a href="visits.php">Wizyty</a></li>
      <li><a href="reception.php">Aplikacja</a></li>
    </ul>
<table>
  <tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Specjalizacja</th>
    <th></th>
  </tr>
  <?php
  $doctors = $polaczenie->query("select * from doctors");
  while ($row = mysqli_fetch_row($doctors)) {
        echo "<tr>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td><a href='deletedoctor.php?id=".$row[0]."'><input id='deleteButton' type='submit' value='Delete' name='deleteButton'></a></td>";
        echo "</tr>";
      }
      ?>
</table>
  <div class="form" position="middle">
    <h3>Dodaj lekarza</h3>
    <form action="adddoctor.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Imie" value="" name="first_name"/>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Nazwisko" value="" name="surname"/>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Specjalizacja" value="" name="specialization"/>
      </div>
      <div class="form-group">
        <input id="button" type="submit" value="Dodaj" name="submit"/>
      </div>
    </form>
  </div>
  </body>
</html>