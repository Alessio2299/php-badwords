<?php
  $wordToBeCensored = $_GET["word"];
  $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea omnis eveniet consequatur vel, aperiam iste numquam aliquam sequi quibusdam illum nisi repellat placeat quas ratione error itaque dicta voluptatum consequuntur!";
  $textLength = strlen($text);
  $textReplace = str_ireplace($wordToBeCensored, '***' , $text);
  $textReplaceLength = strlen($textReplace);

?>
<!DOCTYPE html>
  <html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
  </head>
  <body>
    <h2>Uncensored Text</h2>
    <p><?php echo $text ?></p>
    <p>The length of this string is: <?php echo $textLength ?></p>
    <hr>
    <h2>Censored Text</h2>
    <p><?php echo $textReplace ?></p>
    <p>The length of this string is: <?php echo $textReplaceLength ?></p>
  </body>
</html>
