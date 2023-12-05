
<?php
function replaceVowelsWithX()
{
     $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    echo str_replace($vowels ,"X","Hello world!");
}

replaceVowelsWithX();
