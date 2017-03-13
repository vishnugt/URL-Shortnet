
<?php
$link = mysqli_connect("localhost", "root", "qazedctgb369", "urlshort");
if (isset($_GET["page"]))
{
$page = $_GET["page"];
$sql = "SELECT * FROM main WHERE `text`='$page' LIMIT 1";
$result = mysqli_query($link, $sql);
while ($row=mysqli_fetch_row($result))
echo header('Location: '.$row[3]);
}

if(isset($_POST['url']))
{
$url = $_POST['url'];
$text = $_POST['text'];
$sql = "INSERT INTO `urlshort`.`main` (`id`, `user`, `text`, `url`) VALUES (NULL, 'website', '$text', '$url');";
$result = mysqli_query($link, $sql);
echo "Your url is https://meliodas.me/".$text;
}

?>
<!DOCTYPE HTML>
<html>
<body>

<form action="index.php" method="post">
Url: <input type="text" name="url"><br>
short text: <input type="text" name="text"><br>
<input type="submit">
</form>

</body>
</html>
