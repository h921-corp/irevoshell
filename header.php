<?php
include('db.php');

if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = "null";
}
if ($user_id != "null") {
    $stmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="gs1.css">
    <link rel="stylesheet" href="gs2.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>
<body>

<div id="brdheader" class="block">
	<div class="box">
		<div id="brdtitle" class="inbox">
			<h1><a href="index.php">irevo<span>shell</span></a></h1>
			<div id="brddesc"></div>
		</div>
		<div id="brdmenu" class="inbox">
			<ul>
            <?php if ($user_id != "null"): ?>
                    <li id="navindex"><a href="irevoUI.php">Index</a></li>
                    <li id="navlogout"><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li id="navregister"><a href="register.php">Register</a></li>
                    <li id="navlogin"><a href="login.php">Login</a></li>

                <?php endif; ?>
			</ul>
		</div>
		<div id="notifications-container" style="display: none;">
			<div id="notifications-body">
				<ul id="notifications-list"></ul>
			</div>
			<div id="notifications-footer">
				<p><a id="notifications-clear" href="#">Clear</a></p>
			</div>
		</div>
		<div id="brdwelcome" class="inbox">
        <?php if ($user_id == "null"): ?>
            <p class="conl">Je bent niet ingelogd</p>
        <?php else: ?>
            <p class="conl">Ingelogd als <strong id="gamsesense">
                
            <?php if ($user !== false && isset($user['username'])) {
                echo $user['username'];
            }
            else {
                echo "isbroken";
            }
            
            ?></strong></p>
        <?php endif; ?>
			<div class="clearer"></div>
		</div>
	</div>
</div>
</body>
</html>

