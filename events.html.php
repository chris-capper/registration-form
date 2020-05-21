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
            <div class="events-box">
                <h2>Event Registration</h2>
                <form method="post" action=" ">
                    <label for="myname">Full Name:</label>
                    <input type="text" name="myname" id="myname" required><br>
                    <label for="myage">Age:</label>
                    <input type="text" name="myage" id="myage" required><br>
                    <label for="myrole">Role:</label>
                        <select size="1" name="myrole" id="myrole" required>
                            <option>Please choose one.</option>
                            <option value="Athlete">Athlete</option>
                            <option value="Volunteer">Volunteer</option>
                        </select><br>
                    <label for="myemail">E-mail Address:</label>
                    <input type="email" name="myemail" id="myemail" required><br>
                    <label for="myecontactname">Emergency Contact Name:</label>
                    <input type="text" name="myecontactname" id="myecontactname" required><br>
                    <label for="myecontactphone">Emergency Contact Phone Number:</label>
                    <input type="tel" name="myecontactphone" id="myecontactphone" required><br>
                    <label for="mygender">Gender:</label>
                        <select size="1" name="mygender" id="mygender" required>
                            <option>Please choose one.</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Non-binary">Non-binary</option>
                            <option value="Other">Other</option>
                        </select><br>
                    <label for="myeventsat">Register for Saturday Event:</label>
                        <select size="1" name="myeventsat" id="myeventsat">
                            <option>none</option>
                            <option value="7:00 AM - Long Course Triathlon for $250">
                                $250 Long Course Triathlon - 7:00 AM
                            </option>
                            <option value="7:00 AM - Olympic Triathlon for $110">
                                $110 Olympic Triathlon - 7:00 AM
                            </option>
                            <option value="7:15 AM - Half Marathon for $75">
                                $75 Half Marathon - 7:15 AM
                            </option>
                            <option value="7:15 AM - 10K for $50">
                                $50 10K - 7:15 AM
                            </option>
                        </select><br>
                    <label for="myeventsun">Register for Sunday Event:</label>
                        <select size="1" name="myeventsun" id="myeventsun">
                            <option>none</option>
                            <option value="8:00 AM - Sprint Triathlon for $90">
                                $90 Sprint Triathlon - 8:00 AM
                            </option>
                            <option value="8:20 AM - Try-A-Tri for $65">$65 Try-A-Tri - 8:20 AM</option>
                            <option value="12:00 PM - Spash n' Dash for $25">$25 Splash n' Dash - 12:00 PM</option>
                        </select><br>
                    <label for="myaccomodations">Any special accomodations needed?</label>
                    <textarea name="myaccomodations" id="myaccomodations" rows="5" cols="40" required></textarea><br>
                    <input id="mysubmit" type="submit" value="Submit"><br>
                </form>
            </div>
        </main>
        <?php include '../includes/footer.inc.html.php' ?>
    </body>
</html>