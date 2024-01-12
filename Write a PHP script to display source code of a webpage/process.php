<?php
/*Write a PHP script to display source code of a webpage.*/

/*
The `file_get_contents()` function is a built-in PHP function 
used for reading data from a file, a URL, or an HTTP or FTP stream. 
When invoked, the function reads the entire file into a string. 
It is an effective method for file reading due to its ease of use and performance efficiency. I
t doesn’t require explicit file opening or closing operations, 
which are generally required by other traditional file handling methods in PHP.
*/
if(isset($_POST['submit']))
{
    $url=file_get_contents($_POST['url']);
    echo("Url=$url");
    echo("<br>");

/*
The htmlspecialchars() function converts special characters into HTML entities. 
It is the in-built function of PHP, which converts all pre-defined characters to the HTML entities. 
The pre-defined characters are:
    & (ampersand) converted as &amp;
    " (double quote) converted as &quot;
    ' (single quote) converted as &#039;
    < (less than) converted as &lt;
    > (greater than) converted as &gt;

There is a string function htmlspecialchars_decode(), 
which is reverse of the htmlspecialchars() function.
*/
echo("<div>");
echo("<pre>".htmlspecialchars($url)."</pre>");
echo("</div>");
}
?>
