
<div class="card p-4 m-5">
    <form action="admin.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="teacher_name" placeholder="Enter Name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="String" class="form-control" id="phone_number" placeholder="Enter Phone Number" name="phone_no"
                required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password"
                required>
        </div>

        <div class="text-center">
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <input class="btn btn-primary btn-lg" type="submit" name="teacher_add" value="Submit" />
        </div>
    </form>
</div>

<?php

if ($_SESSION["login"] and isset($_POST["teacher_add"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone_no"];
    $password = $_POST["password"];

    $sql = "INSERT INTO teacher (name, email, school, phone_no, password) VALUES ('$name', '$email', '$detail[2]', '$phone_no', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        echo "<script type = \"text/javascript\">
                    window.location = (\"admin.php\")
                    </script>";
    } else {
        echo "<h3>  Failed to upload!</h3>";
    }
}
?>

