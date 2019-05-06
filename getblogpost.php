<?php $mysql_pointer = mysqli_connect("localhost", "root", "", "mathpage");
    if (mysqli_connect_errno())
    {
    echo "Något gick fel: " . mysql_connect_error();
    }

$sql = "SELECT texts
FROM sections WHERE textid = ?";

$stmt = $mysql_pointer->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($texts);
$stmt->fetch();
$stmt->close();

echo "<div>" . $texts . "</div>";


?>
