<?php

function decrypt($message) {
  $length = strlen($message);
  $keyNumber = $length / 2;
  $subString = substr($message, 5, $keyNumber);
  $replaceSpace = str_replace("@#?", " ", $subString);
  $messageDecipher = strrev($replaceSpace);
  return $messageDecipher;
};

echo decrypt("0@sn9sirppa@#?ia'jgtvryko1")." ".decrypt("q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj")." ".decrypt("aopi?sgnirts@#?sedhtg+p9l!");
