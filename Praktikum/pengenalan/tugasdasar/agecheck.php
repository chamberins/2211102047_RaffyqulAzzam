<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Umur</title>
</head>
<body>
    <form method="POST">
        Nama: <input type="text" name="name"><br>
        Umur: <input type="number" name="age"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo "Nama: $name<br>";
        echo $age >= 18 ? "Dewasa" : "Belum Dewasa";
    }
    ?>
</body>
</html>
