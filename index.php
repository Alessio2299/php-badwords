<?php
  $wordToBeCensored = $_GET["word"];
  $text = "First try with PHP";
  $textLength = strlen($text);
  $textReplace = str_ireplace($wordToBeCensored, '***' , $text);
  $textReplaceLength = strlen($textReplace);

?>

<h2><?php echo $text ?></h2>
<p>The length of this string is: <?php echo $textLength ?></p>
<hr>
<h2><?php echo $textReplace ?></h2>
<p>The length of this string is: <?php echo $textReplaceLength ?></p>

