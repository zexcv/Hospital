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
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: black;
    }
    .form h3 {
      text-align: left;
      color: white;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: black;
    }

    .active {
      background-color: black;
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
     background-color: #fff;
    }
    th {
      background-color: #7E5E4A;
      color: white;
    }
    #patients {
      float: left;
      width: 50%;
    }
    #doctors{
      float: right;
      width: 49%;
    }
    #button {
      margin-top: 5%;
      width: 10%;
      border-radius: 1rem;
      padding: 1.5%;
      border: double;
      cursor: pointer;
      font-weight: 600;
      color: #fff;
      background-color: #7E5E4A;
    }
    table tr.selected {
      background: #5696fc;
    }
    .data {
      display: none;
    }
    h1 {
      text-align: center;
      color: #7E5E4A;
    }
    .form {
      width: 30%;
      padding: 1%;
      margin: 6.5%;
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
    <title>Wizyty</title>
  </head>
  <body>
  <div style="background-image: url('fantasy.jpg');">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <ul>
      <li><a href='welcome.php'>Home</a></li>
      <li><a href="doctors.php">Lekarze</a></li>
      <li><a href="patients.php">Pacjenci</a></li>
      <li><a class="active" href="visits.php">Wizyty</a></li>
      <li><a href="reception.php">Aplikacja</a></li>
    </ul>
    <table id="visits">
      <tr>
        <th>Imie/Lekarz</th>
        <th>Nazwisko/Lekarz</th>
        <th>Specjalizacja</th>
        <th>Imie/Pacjent</th>
        <th>Nazwisko/Pacjent</th>
        <th>Pesel</th>
        <th>Data urodzenia</th>
        <th>email</th>
        <th>Data wizyty</th>
      </tr>
      <?php
      $visit = $polaczenie->query("select * from visit");
      while ($row = mysqli_fetch_row($visit)) {
            echo "<tr>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6]</td>";
            echo "<td>$row[7]</td>";
            echo "<td>$row[8]</td>";
            echo "<td>$row[9]</td>";
            echo "</tr>";
          }
          ?>
    </table>
    </table>
    <div class="form">
      <h3>Dodaj wizytę</h3>
      <form action="addvisit.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="imię lekarza" value="" name="doctor_name"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="nazwisko lekarza" value="" name="doctor_surname"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="specjalizacja" value="" name="doctor_specialziation"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="imię pacjenta" value="" name="patient_name"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="nazwisko pacjenta" value="" name="patient_surname"/>
        </div>
        <div class="form-group">
          <input type="bigint" class="form-control" placeholder="pesel" value="" name="patient_pesel"/>
        </div>
        <div class="form-group">
          <input type="date" class="form-control" placeholder="data urodzenia" value="" name="patient_date_of_birth"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="email" value="" name="patient_email"/>
        </div>
        <div class="form-group">
          <input type="date" class="form-control" placeholder="data wizyty" value="" name="visit_date"/>
        </div>
        <div class="form-group">
          <input id="button" type="submit" value="Dodaj" name="submit"/>
        </div>
      </div>
   </form>
    <!-- Optional JavaScript
    <script type="text/javascript">
      var tabPatients = document.getElementById('patients');
      for(var i = 0; i < tabPatients.rows.length; i++) {
        tabPatients.rows[i].onclick = function() {
          document.getElementById("patient_name").value = this.cells[0].innerHTML;
          document.getElementById("patient_surname").value = this.cells[1].innerHTML;
          document.getElementById("patient_pesel").value = this.cells[2].innerHTML;
          document.getElementById("patient_date_of_birth").value = this.cells[3].innerHTML;
          document.getElementById("patient_email").value = this.cells[4].innerHTML;
          $(this).addClass("selected").siblings().removeClass("selected");
        }
      }
      var tabDoctors = document.getElementById('doctors');
      for(var i = 0; i < tabDoctors.rows.length; i++) {
        tabDoctors.rows[i].onclick = function() {
          document.getElementById("doctor_name").value = this.cells[0].innerHTML;
          document.getElementById("doctor_surname").value = this.cells[1].innerHTML;
          document.getElementById("doctor_specialization").value = this.cells[2].innerHTML;
          $(this).addClass("selected").siblings().removeClass("selected");
        }
      }
    </script> -->
  </body>
</html>