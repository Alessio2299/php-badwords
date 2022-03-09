<?php
  $wordToBeCensored = $_GET["word"];
  $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea omnis eveniet consequatur vel, aperiam iste numquam aliquam sequi quibusdam illum nisi repellat placeat quas ratione error itaque dicta voluptatum consequuntur!";
  $textLength = strlen($text);
  $textReplace = str_ireplace($wordToBeCensored, '***' , $text);
  $textReplaceLength = strlen($textReplace);

?>
<h2>Uncensored Text</h2>
<p><?php echo $text ?></p>
<p>The length of this string is: <?php echo $textLength ?></p>
<hr>
<h2>Censored Text</h2>
<p><?php echo $textReplace ?></p>
<p>The length of this string is: <?php echo $textReplaceLength ?></p>

