<?php
session_start();
$self_url = $_SERVER['PHP_SELF'];

?>

<form action="<?php echo $self_url; ?>" method="POST">
    好きな数値を入力してください:<input type="number" name="user_number">
    <input type="submit" name="type" value="入力">
</form>

<?php
if (isset($_POST['type'])) {
    if ($_POST['type'] === '入力') {
        $_SESSION['number'] = $_POST['user_number'] * 2;
    }
}

?>

<h1>入力した値の2倍の数値です:<?php echo $_SESSION['number']; ?></h1>