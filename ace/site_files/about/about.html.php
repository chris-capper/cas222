<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/reset.css">
        <link rel="stylesheet" href="../styles/helper.css">
        <link rel="stylesheet" href="../styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../scripts/newscript.js"></script>
        <title>Ace in the Hole | About</title>
    </head>
    <body>
        <?php include '../includes/nav.inc.html.php'; ?>
        <?php include '../includes/header.inc.html.php'; ?>
        <main>
        <img src="../images/ace15.jpg" alt="smiling competitor"></img>
            <h2>About Us</h2>
            <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon 
                and running community. It has become a traditional destination race for athletes from across 
                the nation. There is something for every level of athletic ability. The weekend includes a first 
                timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come 
                to experience your first race or come to compete to win, but make sure you come to have fun!</p>
            <div class="contact-box">
                <h3>Contact Ace in the Hole</h3>
                <p>Questions? Comments? We'd love to hear from you!</p><br>
                <form method="post" action=" ">
                    <label for="myName">Name: </label>
                    <input type="text" id="myName" name="myName" required="required"><br>
                    <label for="myEmail">E-mail: </label>
                    <input type="email" id="myEmail" name="myEmail" required="required"><br>
                    <label for="myQuestion">Comments: </label>
                    <textarea name="myQuestion" id="myQuestion" rows="5" cols="50" required="required"></textarea><br>
                    <input id="contactsubmit" type="submit" value="Send">
                </form>
            </div>
        </main>
        <?php include '../includes/footer.inc.html.php' ?>
    </body>
</html>