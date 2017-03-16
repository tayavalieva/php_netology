<?php
$firstName = 'Taya';
$lastName = 'Valieva';
$country = 'China';
$city = 'Hangzhou';
$birthYear = 1990;
$currentYear = 2017;
$age = $currentYear - $birthYear;
$email = 'email';
$about = 'Currently doing purchasing in China for an industrial automation company.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About me</title>
</head>
<body>
<p>Name: <?= $firstName; ?></p>
<p>Surname: <?= $lastName; ?></p>
<p>Place of living: <?= $country; echo ', '.$city; ?></p>
<p>Age: <?= $age; ?></p>
<p>E-mail: <?= $email; ?></p>
<p> <?= $about; ?></p>
</body>
</html>