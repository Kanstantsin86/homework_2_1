<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 10.04.2018
 * Time: 17:26
 */

$json = file_get_contents(__DIR__ . '/address_book.json');

$address_book = json_decode($json, true);

//var_dump($address_book);
?>

<html>
<head>
    <title>Address Book</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #C2C2FF;
            padding: 3px 7px 2px 7px;
        }
        th {
            text-align: left;
            padding: 5px;
            background-color: #9999FF;
            color: #fff;
        }
        tr:hover { background-color: #E0E0FF; }
        td:hover { background-color: #FFFFE0; }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Адрес</td>
        <td>Телефон</td>
    </tr>
    </thead>


    <tbody>
    <?php foreach ($address_book as $item => $value) { ?>
        <tr>
            <td><?php echo $value["firstName"]?></td>
            <td><?php echo $value["lastName"]?></td>
            <td><?php echo $value["address"]?></td>
            <td><?php echo $value["phoneNumber"]?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>
</body>
</html>