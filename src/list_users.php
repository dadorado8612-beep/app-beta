<?php
require("../config/database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border ="1" align = "center">
        <tr>
            <th> Fullname </th>
            <th>E-mail</th>
            <th>Mobile phone</th>
            <th>Status</th>
            <th>Photo</th>
            <th>options</th>
        </tr>
        <tr>
            <td>Peter loza</td>
            <td>peter@mail.com</td>
            <td>31542084</td>
            <td>Active</td>
            <td><img src="profile_photo/user_default.png" width="50" alt="User Photo"></td>
            <td>
                <a href="#"><img src="icons/edit.png" width="30" alt="Edit user"></a>
            &nbsp;&nbsp;
                <a href="#"><img src="icons/delete.png" width="30" alt="Delete user"></a>    
            </td>
        </tr>
    </table>
</body>
</html>