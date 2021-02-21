<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Configur the database</title>
    </head>
    <body>
        <h3>Setting up...</h3>

        <?
            require_once 'functions.php';

            createTable('members',
                        'user VARCHAR(30),
                        pass VARCHAR(30),
                        INDEX(user(6))');
            
            createTable('messages',
                        'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        auth VARCHAR(30),
                        recip VARCHAR(30),
                        pm CHAR(1),
                        time INT UNSIGNED,
                        message VARCHAR(4096),
                        INDEX(auth(6)),
                        INDEX(recip(6))');
            
            createTable('friends',
                        'user VARCHAR(30),
                        friend VARCHAR(30),
                        INDEX(user(6)),
                        INDEX(friend(6))');

            createTable('profiles',
                        'user VARCHAR(30),
                        text VARCHAR(30),
                        INDEX(user(6))');

        ?>

        <br>...done. <!-- setup is complete. -->
    </body>
</html>