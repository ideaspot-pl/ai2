<?php //010-requests/index.php

// reading request
$uri = $_SERVER['REQUEST_URI'];
$foo = $_GET['foo'] ?? null; // same as isset($_GET['foo']) ? $_GET['foo'] : null

// writing response
header('Content-Type: text/html');
echo "The URI requested is: <pre>$uri</pre><br>";
echo "The value of the <pre>foo</pre> parameter is: <pre>$foo</pre>";
