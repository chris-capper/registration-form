<?php 
  include '../includes/db.inc.html.php';
  if (isset($_POST['myname'])) {
      $name = $_POST['myname'];
      $age = $_POST['myage'];
      $role = $_POST['myrole'];
      $email = $_POST['myemail'];
      $econtact = $_POST['myecontactname'];
      $ephone = $_POST['myecontactphone'];
      $gender = $_POST['mygender'];
      $eventsat = $_POST['myeventsat'];
      $eventsun = $_POST['myeventsun'];
      $accomodations = $_POST['myaccomodations'];
      $honeypot = $_POST['honeypot'];
      try {
          $sql = 'INSERT INTO registrations SET
            name = :name,
            age = :age,
            role = :role,
            email = :email,
            econtact = :econtact,
            ephone = :ephone,
            gender = :gender,
            eventsat = :eventsat,
            eventsun = :eventsun,
            accomodations = :accomodations';
          $s = $pdo->prepare($sql);
          $s->bindValue(':name', $name);
          $s->bindValue(':age', $age);
          $s->bindValue(':role', $role);
          $s->bindValue(':email', $email);
          $s->bindValue(':econtact', $econtact);
          $s->bindValue(':ephone', $ephone);
          $s->bindValue(':gender', $gender);
          $s->bindValue(':eventsat', $eventsat);
          $s->bindValue(':eventsun', $eventsun);
          $s->bindValue(':accomodations', $accomodations);
          $s->execute();
      } catch (PDOException $e) {
          $error = 'Error processing registration. Your event has NOT been reserved: ' . $e->getMessage();
          include '../includes/error.html.php';
          exit();
      }
      include 'thankyou.php';
  }
      else {
        include 'events.html.php';
      }
?>