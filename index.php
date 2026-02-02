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
            background: #ffffff; /* White background */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            color: #000; /* Dark text for contrast */
        }

        /* Logo */
        #logo {
            width: 150px;
            height: auto;
            margin-bottom: 30px;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        /* Loading bar container */
        #loaderContainer {
            width: 250px;
            height: 10px;
            background: rgba(0, 0, 0, 0.1); /* subtle gray background */
            border-radius: 5px;
            overflow: hidden;
            margin-top: 20px;
            display: none; /* Hidden initially */
        }

        /* Loading bar */
        #loaderBar {
            width: 0%;
            height: 100%;
            background-color: #601000; /* Brand color */
        }

        /* Fade-in animation for logo */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Loader progress animation */
        @keyframes loadProgress {
            0% {
                width: 0%;
            }
            100% {
                width: 100%;
            }
        }

        /* Prompt text */
        #playPrompt {
            margin-top: 20px;
            font-size: 1.2rem;
            cursor: pointer;
            color: #601000; /* Brand color for text */
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
        <div id="playPrompt">Click to start the experience →</div>
    </div>

    <script>
        const audio = document.getElementById("introAudio");
        const overlay = document.getElementById("introOverlay");
        const prompt = document.getElementById("playPrompt");
        const loaderContainer = document.getElementById("loaderContainer");
        const loaderBar = document.getElementById("loaderBar");
        const homeURL = "home"; // Homepage URL

        function startIntro() {
            // Hide the prompt
            prompt.style.display = "none";

            // Show the loader
            loaderContainer.style.display = "block";

            // Start loader animation
            loaderBar.style.animation = "loadProgress 5s linear forwards"; // 5 seconds now

            // Play audio
            audio.play().catch(err => console.log("Error playing audio:", err));

            // Redirect after 5 seconds
            setTimeout(() => {
                window.location.href = homeURL;
            }, 5000);

            // Remove click listener
            window.removeEventListener("click", startIntro);
        }

        // Wait for first user interaction
        window.addEventListener("click", startIntro);
    </script>
</body>

</html>
