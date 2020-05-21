<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/reset.css">
        <link rel="stylesheet" href="../styles/helper.css">
        <link rel="stylesheet" href="../styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../scripts/newscript.js"></script>
        <title>Ace in the Hole Template</title>
    </head>
    <body>
        <?php include '../includes/nav.inc.html.php'; ?>
        <?php include '../includes/header.inc.html.php'; ?>
        <main>
            <div id="thanks">
                <div class="events-box">
                    <h2>Thank you!</h2>
                    <h3>You're all set! We have you registered for the following:</h3>
                    <p>
                        Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                        Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
                        Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
                        Email Address: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                        Emergency Contact: <?php echo htmlspecialchars($econtact, ENT_QUOTES, 'UTF-8'); ?><br>
                        Emergency Contact Phone Number: <?php echo htmlspecialchars($ephone, ENT_QUOTES, 'UTF-8'); ?><br>
                        Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
                        Saturday Event: <?php echo htmlspecialchars($eventsat, ENT_QUOTES, 'UTF-8'); ?><br>
                        Sunday Event: <?php echo htmlspecialchars($eventsun, ENT_QUOTES, 'UTF-8'); ?><br>
                        Special Accomodations: <?php echo htmlspecialchars($accomodations, ENT_QUOTES, 'UTF-8'); ?><br>
                    </p>
                </div>
            </div>
        </main>
        <?php include 'includes/footer.inc.html.php' ?>
    </body>
</html>