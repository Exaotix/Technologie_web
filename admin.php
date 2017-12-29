<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="public/bootstrap.min.css" />
        <title>Admin</title>
    </head>

    <body>
      <div style="margin: 2% 0 0 2%;">
        <h1>Admin Section</h1>
      </div>
      <div class="container" style="margin: 2% 0 0 2%;">
        <a href="index.php"><button class="btn btn-default">Previous Index</button></a>
        <h2>Booking list</h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Destination</th>
              <th>Insurance</th>
              <th>Total</th>
              <th>Name - Age</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
        <?php
          include 'model/DB.php';
          $db = new DB('localhost', 'root', 'root', 'eric');
          $sql = "SELECT * FROM booking";

          $allBookings = json_decode($db->selectQuery($sql));

          foreach ($allBookings as $key => $booking)
          {
            $person = unserialize($booking->persons); // Get an array with persons, need to use implode() function
            echo "<tr><td>" . $booking->id . "</td>";
            echo "<td>" . $booking->destination . "</td>";
            echo "<td>" . $booking->insurance . "</td>";
            echo "<td>" . $booking->total . "</td>";
            echo "<td>" . implode(' & ', $person) . "</td>";
            echo "<td><a style='cursor: pointer' href='edit.php?id=" . $booking->id . "'>Edit</a></td>";
            echo "<td><a style='cursor: pointer' href='delete.php?id=" . $booking->id . "'>Delete</a></td>";
            echo "</tr>";
          }

        ?>
          </tbody>
        </table>
      </div>
    </body>
</html>
