<?php

$text = "The quick brown fox jumps over the lazy dog.";

$lowerCaseText = strtolower($text);
$replacedText = str_replace("brown","red",$lowerCaseText);

echo $replacedText;