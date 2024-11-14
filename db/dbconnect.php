


<?php
// connecting to the database
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "hs";

// create a connection
$conn = mysqli_connect($server, $username, $password, $database);
// Die if connecton was not successful
if (!$conn) {
    die("Sorry! We failed to connect: " . mysqli_connect_error());
}
    else{
        // echo "connection was successful<br>";
    }
?>

<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-sm">
        <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">

            <form action="../admin/category_view.php" method="POST">
                <div class="form-group">
                    <label for="categoryname" class="mb-0">Category name:-</label>
                    <input type="text" id="categoryname" name="categoryname" class="form-control"
                        placeholder="Cleaning" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html> -->