<?php
require './includes/common.php';
// check if signed in
if (!isset($_SESSION["email"])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        footer {
            padding: 15px;
            border-top: 1px solid #e5e5e5;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
            text-align: right;
            font-size: 15px;
        }
    </style>
    <title>Success</title>
    <!-- link to Bootstrap minified css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- link to Jquery minified-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- link to Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- link to external CSS -->
</head>

<body>
    <?php
    include "./includes/header.php";

    // check all items to confirmed
    $user_id = $_SESSION["id"];
    $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    while ($row = mysqli_fetch_array($result)) {
        $item_id = $row["item_id"];
        $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";

        $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
    }
    ?>
    <div class="container panel-margin">
        <div class="alert alert-success">
            Your order is confirmed. Thank you for shopping with us.
            <a href="products.php">Click here</a> to purchase any other item.
        </div>
    </div>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>