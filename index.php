<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro Page</title>
    <style>
        /* Full-screen overlay */
        #introOverlay {
            position: fixed;
            inset: 0;
            background: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            color: #000;
        }

        /* Logo */
        #logo {
            width: 180px;
            height: auto;
            margin-bottom: 30px;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Loader */
        #loaderContainer {
            width: 250px;
            height: 10px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            margin-top: 20px;
            display: none;
        }

        #loaderBar {
            width: 0%;
            height: 100%;
            background-color: #601000;
        }

        @keyframes loadProgress {
            0% {
                width: 0%;
            }

            100% {
                width: 100%;
            }
        }

        /* Click prompt */
        #playPrompt {
            margin-top: 20px;
            font-size: 1.3rem;
            cursor: pointer;
            color: #601000;
            padding: 12px 25px;
            border: 2px solid #601000;
            border-radius: 10px;
            transition: all 0.3s ease;
            user-select: none;
        }

        #playPrompt:hover {
            background-color: #601000;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Audio -->
    <audio id="introAudio" src="assets/images/Back-to-Reality-[AudioTrimmer.com].mp3"></audio>

    <!-- Intro overlay -->
    <div id="introOverlay">
        <!-- Logo -->
        <img id="logo" src="assets/images/upstreamlogoanimation-Trim-ezgif.com-optimize.gif" alt="Company Logo">

        <!-- Loader -->
        <div id="loaderContainer">
            <div id="loaderBar"></div>
        </div>

        <!-- Click prompt -->
        <div id="playPrompt">Click to Start Experience →</div>
    </div>

    <script>
        const audio = document.getElementById("introAudio");
        const overlay = document.getElementById("introOverlay");
        const prompt = document.getElementById("playPrompt");
        const loaderContainer = document.getElementById("loaderContainer");
        const loaderBar = document.getElementById("loaderBar");
        const homeURL = "home"; // Change to your homepage URL

        function startIntro() {
            // Hide the prompt
            prompt.style.display = "none";

            // Show the loader
            loaderContainer.style.display = "block";

            // Start loader animation
            loaderBar.style.animation = "loadProgress 5s linear forwards";

            // Play audio directly on user interaction
            audio.play().catch(err => console.log("Audio error:", err));

            // Redirect after 5 seconds
            setTimeout(() => {
                window.location.href = homeURL;
            }, 5000);

            // Remove click listeners
            prompt.removeEventListener("click", startIntro);
            overlay.removeEventListener("touchstart", startIntro);
        }

        // Listen for tap or click
        prompt.addEventListener("click", startIntro);
        overlay.addEventListener("touchstart", startIntro);
    </script>
</body>

</html>
