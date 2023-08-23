<!DOCTYPE html>
<html>
<head>
    <title>Random PHP Landing Page</title>
</head>
<body>
    <header>
        <h1>Welcome to Our Random Quote Landing Page</h1>
    </header>
    <main>
        <?php
        // Array of random quotes
        $quotes = array(
            "The only way to do great work is to love what you do. - Steve Jobs",
            "Innovation distinguishes between a leader and a follower. - Steve Jobs",
            "Your time is limited, don't waste it living someone else's life. - Steve Jobs",
            "The future belongs to those who believe in the beauty of their dreams. - Eleanor Roosevelt",
            "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill"
        );

        // Select a random quote
        $randomIndex = array_rand($quotes);
        $randomQuote = $quotes[$randomIndex];

        // Display the random quote
        echo "<blockquote>$randomQuote</blockquote>";
        ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Random Quote Landing Page</p>
    </footer>
</body>
</html>
