<?php declare(strict_types=1);

use App\WebApp;

require __DIR__ . '/../vendor/autoload.php';

$app = new WebApp();
$app->run($_GET, $_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/" method="POST" >
    Side
    <select name="data_storage" id="data_storage">
        <option value="1">MySQL</option>
        <option value="2">File</option>
        <option value="3">Secret</option>
    </select>
    <select name="view" id="view">
        <option value="2">WebPage</option>
    </select>
    <br>
    <button type="submit">Ok</button>
</form>
</body>
</html>
