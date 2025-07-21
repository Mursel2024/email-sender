<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
    <link rel="stylesheet" href="example.css">
</head>

<body>

    <div class="container">
        <div class="gradient-section">
            <div class="gradient"></div>
            <div class="gradient-content">
                <h1 class="heading">Welcome to our
                    <h1 class="heading">Welcome to our <span>Creative</span> Hub!</h1>
                    <p class="paragraph">Your gateway to a world of creative possibilities begins here.</p>
            </div>
        </div>

        <div class="form-section">
            <h2>Hi, Friend!</h2>
            <p>Welcome to our Email Sender form!</p>
            <form id="emailForm" action="send_email.php" method="POST">
                <div class="form-group">
                    <label for="to">To:</label>
                    <input type="email" name="to" id="to" required autocomplete="off" placeholder="Example@gmail.com">
                </div>

                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject" required autocomplete="off" placeholder="Collaboration Request">
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" required spellcheck="false" autocomplete="off" placeholder="Your text..."></textarea>
                </div>

                <div class="form-group result-container">
                    <p class="result" style="display: none;">Email sent successfully.</p>
                    <button type="submit" class="send-btn">Send Email</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@email.js/browser@3/dist/email.min.js"></script>
    <script src="example.js"></script>
</body>

</html>