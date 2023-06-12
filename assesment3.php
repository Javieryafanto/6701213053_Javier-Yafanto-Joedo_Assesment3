<!DOCTYPE html>
<html>
<head>
<title>SukaRental</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
<script src="js/jquery-1.11.1.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
<script>
    $(document).ready(function() {
      $("form").validate();
      $("submit_addres").click(function() {
        if ($("form").valid()) {
        }
      });
    });
  </script>
  <?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        $address = str_replace(" ", "+", $address);
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }
?>
<head>
<form method="POST">
    <p><h1>Cari Alamat</h1></p>
	<form id="form">
    <label for="nama">Nama Rental:</label>
	<input type="text" name="nama" required><br>
    <p>
	<label for="nama">Alamat :</label>
        <input type="text" name="address" required>
    </p>
    <input type="submit" name="submit_address">



