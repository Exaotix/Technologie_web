<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="public/bootstrap.min.css" />
        <link rel="stylesheet" href="public/style.css" />
        <title>Confirmation</title>
    </head>

    <body>
      <div style="margin: 2% 0 0 2%;">
        <p><h1>BOOKING CONFIRMATION</h1></p>

        <p>The booking has been succesfully registered</p>
        <p>Please send <?php echo $mybooking->GetPrice(); ?> € on the account 000_000000_00</p>
      </div>
      <form method="post" action="index.php?page=home" style="margin: .5% 0 0 2%;">
          <p>
              <?php
              // ==> Used to destroy the session at the end but it causes problems. 
              //unset($mybooking);
              //session_start();
              //$_SESSION = array();
              //session_destroy();
              ?>
              <input class="btn btn-primary" type='submit' value='Home page' />
          </p>
      </form>
    </body>
</html>
