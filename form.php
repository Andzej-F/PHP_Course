<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo '<pre>';
  var_dump($_POST);
  print_r($_POST);
  echo '</pre>';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
</head>

<body>

  <form method="post" no validate>

    <div>
      postcode: <input name="postcode" type="text" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" title="Please enter a valid UK postcode">
    </div>

    <div>
      email: <input name="email" type="email" required>
    </div>

    <div>
      url: <input name="url" type="url">
    </div>

    <div>
      number: <input name="count" type="number" min="1" max="10">
    </div>

    <button>Send</button>

  </form>

</body>

</html>