<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input'])) {
    $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');

    echo "Input yang disaring : " . $input . "<br><br>";

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email yang dimasukkan : " . $email;
        } else {
            echo "Email yang dimasukkan tidak valid.";
        }
    }
} else {
    echo "Harap berikan input yang valid.<br><br>";
?>
    <form method="post" action="">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input">
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">

        <button type="submit">Submit</button>
    </form>
<?php
}
?>

</body>
</html>