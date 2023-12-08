<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Links</title>
</head>
<body>

<script>
    function getRandomLink() {
        var links = [
            "https://example1.com",
            "https://example2.com",
            "https://example3.com",
            "https://example4.com",
            "https://example5.com",
            "https://example6.com",
            "https://example7.com",
            "https://example8.com",
            "https://example9.com",
            "https://example10.com"
        ];

        var randomIndex = Math.floor(Math.random() * links.length);
        var randomLink = links[randomIndex];

        window.location.href = randomLink;
    }

    // Call the function to redirect to a random link
    getRandomLink();
</script>

</body>
</html>
