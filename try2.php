<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try My Self</title>
</head>

<body>

    <h1>Welcome to Our Website</h1>

    <!-- This function to used in with out href button using -->
    <button onclick="window.location.href='index.php';">Go to Home</button>


    <!-- this function to using this page redirect after 5 to 10 second. -->
    <script>
        // Function to redirect after 5 seconds (5000 milliseconds)
        function redirectToHomePage() {
            setTimeout(function() {
                window.location.href = 'index.php'; // Change to your index/home page URL
            }, 5000);
        }

        // Call the function on page load
        window.onload = redirectToHomePage;
    </script>
</body>

</html>