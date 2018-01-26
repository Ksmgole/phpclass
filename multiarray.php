<html>
<head>
    <title>Page</title>
</head>
<body>
<?php
$info = [
    [
        'name' => 'Kusum',
        'address' => 'Samakhusi'
    ],
    [
        'name' => 'Gole',
        'address' => 'Patan'
    ], [
        'name' => 'Gole',
        'address' => 'Patan'
    ],

];


?>

<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
    </tr>


    <?php foreach ($info as $value) { ?>
        <tr>
            <td> <?php echo $value['name']; ?>
            </td>
            <td><?php echo $value['address']; ?>
            </td>
        </tr>
    <?php } ?>
</table>


</body>
</html>