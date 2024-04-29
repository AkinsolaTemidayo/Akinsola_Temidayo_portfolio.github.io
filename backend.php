<?php
$connection = mysqli_connect('sql6.freesqldatabase.com', 'sql6700682', '4qhee91kQX', 'sql6700682');

if ($connection) {
    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $branding = $_POST['branding'];
        $ecommerce = $_POST['ecommerce'];
        $seo = $_POST['seo'];
        $message = $_POST['message'];

        $insertQuery = "INSERT INTO portfolio_form (name, email, website, branding, ecommerce, seo, message) 
                        VALUES ('$name', '$email', '$website', '$branding', '$ecommerce', '$seo', '$message')";

        if (mysqli_query($connection, $insertQuery)) {
            echo '<script>
                    alert("Your details has been successfully submitted. Thanks!");
                    window.location.href = "index.html"; // Redirect to the home page
                  </script>';
        } else {
            echo '<script>
                    alert("Error inserting data: ' . mysqli_error($connection) . '");
                    window.location.href = "index.html"; // Redirect to the home page
                  </script>';
        }
    }
} else {
    echo 'Database connection error: ' . mysqli_connect_error();
}