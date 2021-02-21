<?php
    require_once 'header.php';

    if (isset($_SESSION['user']))
    {
        destroySession();
        echo "<br><div class='center'>You are have been logged out. Please, <a data-transition='slide' href='index2.php'>click here</a>
        to refresh the screen.</div>";
    }
    else
    {
        echo "<div class='center'>You are cannot log out, because you are not logged in</div>";
    }
?>
        </div>
    </body>
</html>