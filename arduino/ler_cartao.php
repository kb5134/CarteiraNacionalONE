<?php
$command = escapeshellcmd("C:\\Users\allef\AppData\Local\Programs\Python\Python39/python.exe C:\\wamp64\www\CarteiraNacionalONE\arduino\teste.py");
$output = exec($command);

echo ($output);
?>