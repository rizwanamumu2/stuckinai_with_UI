<html>
<head>
</head>
<body>

<form method="post" action='location.php'>
  <p>Enter Your Street name,City state,Country</p>
  <textarea name='address' placeholder='Street name,City state,Country'></textarea>
  <input type="submit" name="submit_address" value="Get Coordinates">
</form>

<form method="post" action='location.php'>
  <p>Enter Latitude</p>
  <input type='text' name='latitude' placeholder='Enter Latitude'>
  <p>Enter Longitude</p>
  <input type='text' name='longitude' placeholder='Enter Longitude'>
  <input type="submit" name="submit_coordinates" value="Get Address">
</form>

</body>
</html>