<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Container Demo App</title>
</head>

<body>

<h2>Student Task Tracker</h2>

<form action="add.php" method="POST">
Task:
<input type="text" name="task" required>

<input type="submit" value="Add">
</form>

<hr>

<h3>Tasks</h3>

<?php

$result=$conn->query("SELECT * FROM tasks");

while($row=$result->fetch_assoc()){
    echo "<p>".$row['task']."</p>";
}
?>

</body>
</html>