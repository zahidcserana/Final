<?php
// set the cookies
setcookie("cookie[three]", "cookiethreess");
setcookie("cookie[two]", "cookietwoss");
setcookie("cookie[one]", "cookieoness");

// after the page reloads, print them out
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}
?>