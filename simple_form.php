<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .mt {
            margin-top: 5px;
        }
    </style>

</head>

<body>
    <h1>This is HTML file from server</h1>

    <!-- <form action="/lab/form_data.php" method="POST"> -->
    <form action="/lab/db_connection.php" method="POST">

        <input class="mt" type="text" name="st_name" placeholder="Name">
        <br>
        <input class="mt" type="text" name="st_id" placeholder="ID">
        <br>
        <input class="mt" type="text" name="semester" placeholder="semester">
        <br>
        <button class="mt" type="submit"> Submit </button>

    </form>

</body>

</html>