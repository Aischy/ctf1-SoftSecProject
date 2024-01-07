<?php
if (!isset($_COOKIE['admin'])) {
    setcookie('admin', 'false', time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie('attempts', '0', time() + (86400 * 30), "/");
    echo "Initialisation. Veuillez réessayer.";
} else {
    if ($_COOKIE['admin'] === 'true') {
        echo "Welcome Admin! \n flag{i_love_my_grandma_s_cookie_dough}";
    } else {
        $attempts = intval($_COOKIE['attempts']) + 1;
        setcookie('attempts', strval($attempts), time() + (86400 * 30), "/");
        if ($attempts >= 10) {
            echo "Would you like a biscuit?";
        } else {
            echo "You're not admin!";
        }
    }
}
?>
