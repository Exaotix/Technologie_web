<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Confirmation</title>
    </head>

    <body>
    	<p><h1>BOOKING CONFIRMATION</h1></p>

    	<p>The booking has been succesfully registered</p>
        <p>Please send <?php echo $mybooking->GetPrice(); ?> € on the account 000_000000_00</p>

    <form method="post" action="index.php?page=home">
        <p>
            <input type='submit' value='Home page' />
        </p>
    </form>

    <input type="button" value="Previous" onclick="history.go(-1)"/>

    </body>
</html>