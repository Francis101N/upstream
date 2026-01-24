<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Upstream Development Company</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        upsteamRed: '#601000',
                        upsteamGray: '#7a7a7a',
                    },
                    keyframes: {
                        slideInLeft: {
                            '0%': { transform: 'translateX(-100%)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' }
                        },
                        slideInRight: {
                            '0%': { transform: 'translateX(100%)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' }
                        }
                    },
                    animation: {
                        slideInLeft: 'slideInLeft 1s ease-out forwards',
                        slideInRight: 'slideInRight 1s ease-out forwards'
                    }
                }
            }
        }
    </script>

    <style>
        /* Headings */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.2;
            letter-spacing: 0.5px;
        }

        h1 {
            font-size: 3rem;
        }

        /* Large hero headings */
        h2 {
            font-size: 2.25rem;
        }

        /* Section headings */
        h3 {
            font-size: 1.875rem;
        }

        h4 {
            font-size: 1.5rem;
        }

        h5 {
            font-size: 1.25rem;
        }

        h6 {
            font-size: 1rem;
        }

        /* Paragraphs */
        p {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 1.25rem;
        }

        /* Optional: Small paragraph text */
        p.small {
            font-size: 0.875rem;
        }

        body {
            overflow-x: hidden;
        }

        .reveal {
            opacity: 0;
            transform: translateY(40px) scale(.96);
            transition: all 1s cubic-bezier(.22, 1, .36, 1);
        }

        .reveal.show {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .animate-bounceHover {
            animation: bounceUpDown 1s infinite;
            transition: transform 0.3s ease;
        }

        @keyframes bounceUpDown {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-slide-in-left {
            animation: slideInLeft 1s ease forwards;
        }

        .animate-slide-in-right {
            animation: slideInRight 1s ease forwards;
        }
    </style>
</head>

<body class="bg-gray-50">

    <?php include("inc/header.php"); ?>

    <!-- HERO / BANNER -->
    <div class="relative w-full h-[450px] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('assets/images/img8.jpg');">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
        <div class="relative z-10 text-center text-white space-y-4">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold reveal">Contact Us</h1>
            <nav class="flex justify-center space-x-2 reveal" aria-label="breadcrumb">
                <a href="https://dev.upstreaminnigeria.com" class="hover:text-upsteamRed transition">Home</a>
                <span class="opacity-60">/</span>
                <span class="text-upsteamRed font-semibold">Contact Us</span>
            </nav>
        </div>
    </div>

    <!-- CONTACT INFO BOXES -->
    <section class="py-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- BOX 1: Phone -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl reveal">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-upsteamRed text-white rounded-full mb-3 animate-bounce">
                        <!-- Smaller icon container -->
                        <!-- Phone SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <!-- Smaller icon -->
                            <path
                                d="M3 2.5a1 1 0 011-1h3a1 1 0 011 .85c.1.54.35 1.97.76 3.48.36 1.31 1.04 2.53 1.92 3.42l1.52 1.52a15.053 15.053 0 006.36 3.99 1 1 0 01.53 1.33l-1.2 2.4a1 1 0 01-.94.57 19.89 19.89 0 01-7.32-1.56A19.58 19.58 0 013.7 9.28a19.89 19.89 0 01-1.56-7.32 1 1 0 01.57-.94l2.4-1.2z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-1 text-gray-800">Call Us Now</h4>
                    <p class="text-gray-600 text-base">0201 4537 053</p>
                </div>

                <!-- BOX 2: Map -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl reveal">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-upsteamRed text-white rounded-full mb-3 animate-bounceHover">
                        <!-- Map Marker SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                            <circle cx="12" cy="9" r="2.5" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-1 text-gray-800">Come Visit Us</h4>
                    <p class="text-gray-600 text-center text-base">
                        No 1b Josephine Fingesi Street,<br>Off Admiralty Way, Lekki Phase 1, Lagos, Nigeria
                    </p>
                </div>

                <!-- BOX 3: Envelope -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl reveal">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-upsteamRed text-white rounded-full mb-3 animate-bounceHover">
                        <!-- Envelope SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m0 0v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8m18 0L12 13 3 8" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-1 text-gray-800">Send Us a Message</h4>
                    <p class="text-gray-600 text-base">contact@upstreaminnigeria.com</p>
                </div>

                <!-- BOX 4: Clock -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl reveal">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-upsteamRed text-white rounded-full mb-3 animate-bounceHover">
                        <!-- Clock SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-1 text-gray-800">Open Hours</h4>
                    <p class="text-gray-600 text-base">Mon - Sat 09:00 - 17:00</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto reveal animate-slide-in-right">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-3xl font-bold text-gray-800 mb-6">Send Us a Message</h3>
                    <form method="POST" action="proc-contact.php" id="contactForm"
                        class="space-y-6">
                        <input type="hidden" name="_token" value="Pjc4GVbhlqycVrCJolp78H0ed8NKRsUdV4k7Vvpt">

                        <input type="text" name="name" placeholder="Full Name..." required
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-upsteamRed transition">
                        <input type="email" name="email" placeholder="Email Address..." required
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-upsteamRed transition">
                        <input type="text" name="subject" placeholder="Subject..." required
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-upsteamRed transition">
                        <textarea name="message" rows="6" placeholder="Write message..." required
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-upsteamRed transition resize-y"></textarea>
                        <button type="submit"
                            class="bg-upsteamRed text-white font-semibold px-6 py-3 rounded-lg shadow-lg hover:bg-upsteamRed/90 transform transition duration-300 hover:-translate-y-1">Send
                            Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15858.324844845241!2d3.4402838658401507!3d6.447777790937865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4f8698d3b89%3A0x4261abcc1e025cd9!2s1b%20Josephine%20Fingesi%20St%2C%20Lekki%20Phase%20I%2C%20Lagos%20106104%2C%20Lagos!5e0!3m2!1sen!2sng!4v1769160292481!5m2!1sen!2sng"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br><br>

    <?php include("inc/footer.php"); ?>

    <!-- Reveal Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.reveal');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    }
                });
            }, { threshold: 0.2 });
            elements.forEach(el => observer.observe(el));
        });
    </script>

</body>

</html>