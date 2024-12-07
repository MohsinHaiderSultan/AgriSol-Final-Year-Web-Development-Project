<?php
session_start();
if (isset($_SESSION['name'])) {
?>
    <div id='welcomeMessage' class='welcome-message text-center text-6xl text-green-800 font-bolder'>
        Welcome, <?php echo htmlspecialchars($_SESSION['name']);?>!
    </div>
    <style>
        #welcomeMessage {
            position: absolute; /* Position the element absolutely */
            top: 40%; /* Move it to the middle of the screen vertically */
            left: 35%; /* Move it to the middle of the screen horizontally */
            transform: translate(-45%, -45%); /* Adjust the position to center it */
            color: #4CAF50; /* Change the color to green */
            font-size: 36px; /* Change the font size to 36px */
            opacity: 0; /* Initial opacity is 0 */
            animation: welcome-animation 1s ease forwards; /* Add a simple animation */
        }
        @keyframes welcome-animation {
            0% { 
                opacity: 0; 
                transform: translateY(-20px); 
            }
            100% { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
    </style>

    <script>
        window.onload = function() {
            // Show the welcome message immediately
            document.getElementById('welcomeMessage').style.display = 'block';

            // Reveal the rest of the content after 2 seconds and hide the welcome message
            setTimeout(function() {
                document.body.style.opacity = 1;
                document.getElementById('welcomeMessage').style.display = 'none';
                // Redirect to home page after displaying the welcome message
                window.location.href = 'HomePage.php';
            }, 2000); // Change the timeout to 2000 (2 seconds)
        };
    </script>
<?php
} else {
    header("Location: SignIn.php");
    exit(); // Make sure to stop further script execution after redirection
}
?>