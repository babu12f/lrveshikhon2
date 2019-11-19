<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
</head>
<body>
    <h1>Person List</h1>

    <ul>
        <?php foreach($people as $p): ?>
            <li> <?=$p ?> </li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach($people_reg_no as $p): ?>
            <li> <?=$p ?> </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>