<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chairman | Upstream</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-papfY0xTq1Qm9G+N0a2C+G8p7G5tVx1OzOfh1aUeJONxvT5v0F0sL3k5u+K4m0j1n7xR27RZDJx0kX75XED9CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
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
                        }
                    },
                    animation: {
                        slideInLeft: 'slideInLeft 1s ease-out forwards'
                    }
                }
            }
        }
    </script>
</head>
<style>
    .slide-left {
        transform: translateX(-80px);
        opacity: 0;
    }

    .slide-in {
        transform: translateX(0);
        opacity: 1;
    }

    /* Executive Card Style */
    .exec-card {
        background: #f9fafb;
        border-radius: 14px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        padding: 20px;
        transition: all 1s ease;
        opacity: 0;
    }

    .exec-card img {
        width: 100%;
        height: 340px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 16px;
    }

    .exec-card p {
        font-size: 1rem;
        line-height: 1.6;
        color: #374151;
        font-weight: 500;
    }

    /* Animations */
    .slide-left2 {
        transform: translateX(-80px);
    }

    .slide-right2 {
        transform: translateX(80px);
    }

    .slide-in2 {
        transform: translateX(0);
        opacity: 1;
    }

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

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-40px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInDown {
        animation: fadeInDown 1s ease forwards;
    }

    .animate-fadeInUp {
        animation: fadeInUp 1s ease forwards;
    }

    /* Bounce animation on hover and idle bounce */
    @keyframes bounceUpDown {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-bounceHover {
        animation: bounceUpDown 1s infinite;
        transition: transform 0.3s ease;
    }

    #back-to-top:hover {
        transform: translateY(-15px);
    }
</style>

<body>
    <?php
    include("inc/header.php");
    ?>

    <!-- WHATSAPP CHAT BUTTON -->
    <div class="fixed bottom-6 left-6 z-50">
        <a href="https://api.whatsapp.com/send?phone=02014537053&text=Hello+Upstream+Development+Company%2C+I%27m+interested+in+your+services"
            target="_blank"
            class="flex items-center space-x-2 bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-3 rounded-full shadow-lg transform transition duration-300 hover:scale-105">

            <!-- WhatsApp SVG Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 0C5.373 0 0 5.373 0 12c0 2.12.55 4.1 1.515 5.838L0 24l6.24-1.56A11.934 11.934 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm5.33 17.658c-.232.65-1.35 1.22-1.88 1.29-.51.07-1.16.1-2.09-.22-1.43-.46-2.35-.74-3.47-2.23-1.11-1.49-.93-1.44-1.72-2.47-.79-1.03-.666-1.44-.382-2.14.273-.7.61-.93 1.03-1.37.42-.44.557-.72.835-1.2.273-.47.137-.88-.07-1.23-.204-.35-1.8-4.33-2.47-5.94-.65-1.61-1.31-1.39-1.8-1.42-.487-.03-1.05-.04-1.61-.04-.557 0-1.46.19-2.23.91-.77.72-2.94 2.87-2.94 6.99 0 4.12 3.01 8.12 3.44 8.69.433.57 5.94 9.17 14.2 6.64 8.26-2.53 6.74-9.23 6.71-9.69-.03-.45-.55-.66-1.22-1.21-.666-.55-3.84-3.63-4.06-3.82z" />
            </svg>

            <span class="text-sm md:text-base">Chat with us</span>
        </a>
    </div>

    <!-- BACK TO TOP BUTTON -->
    <div id="back-to-top"
        class="fixed bottom-6 right-6 z-50 cursor-pointer w-12 h-12 bg-upsteamRed text-white rounded-full flex items-center justify-center shadow-lg animate-bounceHover">
        <!-- Arrow -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </div>

    <!-- CHAIRMAN BANNER -->
    <div class="section banner-page about relative bg-cover bg-center py-32"
        style="background-image: url('assets/images/IMG_9750.JPG.jpeg');">
        <!-- Overlay for better text visibility -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="container mx-auto relative z-10 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fadeInDown">Chairman</h1>
            <nav class="inline-block text-gray-200 text-lg animate-fadeInUp" aria-label="breadcrumb">
                <ol class="list-reset flex justify-center space-x-2">
                    <li>
                        <a href="home" class="hover:text-upsteamRed transition">Home</a>
                        <span class="mx-2">/</span>
                    </li>
                    <li class="text-upsteamRed font-semibold">Chairman</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="bg-gray-50 border-t border-gray-200 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-12">

                <!-- Chairman Image -->
                <div
                    class="md:w-4/12 flex justify-center md:justify-start transition-all duration-1000 ease-out slide-left observe">
                    <div class="relative w-60 sm:w-72 md:w-80">
                        <img src="assets/images/chairman2.jpeg" alt="Edwin Iyk Anyadigibe"
                            class="rounded-xl shadow-xl w-full h-auto object-cover">
                        <div
                            class="absolute bottom-3 left-3 bg-upsteamRed text-white text-xs uppercase tracking-wider font-semibold px-3 py-1 rounded">
                            Chairman
                        </div>
                    </div>
                </div>

                <!-- Chairman Info -->
                <div class="md:w-8/12 space-y-6 text-center md:text-left">

                    <div>
                        <h3 class="text-4xl font-bold text-gray-900">
                            Iyk Edwin Anyadigibe
                        </h3>
                        <span class="mt-1 text-upsteamRed font-semibold tracking-wide">
                            Chairman
                        </span> <br>
                        <span class="text-gray-600 font-medium">
                            <img src="assets/images/upstreamlogoanimation-Trim-ezgif.com-optimize.gif"
                                alt="Upsteam Energy Logo" class="h-20 md:h-18 w-auto">
                        </span>
                    </div>

                    <!-- Divider -->
                    <div class="w-20 h-1 bg-upsteamRed mx-auto md:mx-0"></div>

                    <!-- Quote -->
                    <blockquote class="border-l-4 border-upsteamRed pl-6 italic text-gray-700 leading-relaxed text-lg">
                        “The oil and gas contracting pattern has to be disrupted now ... let's do it differently to safe
                        time, cost with reference to high safety standards.....”
                    </blockquote>

                    <!-- Optional Description -->
                    <p class="text-gray-600 leading-relaxed max-w-2xl">
                        WE ARE CLOSE TO CONCLUDING THE <b>$70M</b> ATA 6 EPC PROJECT
                        FOR TENOIL PETROLEUM .
                    </p>

                </div>

            </div>
        </div>
    </section>

    <section class="bg-white py-19 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- Left Item -->
                <div class="exec-card slide-left2 observe">
                    <img src="assets/images/chairman9.jpeg" alt="Chairman at project site">
                    <p>
                        The mystery has been demystified , this was my energy project delivery goal.
                    </p>
                </div>

                <!-- Right Item -->
                <div class="exec-card slide-right2 observe">
                    <img src="assets/images/chairman12.jpeg" alt="Chairman leadership moment">
                    <p>
                        I believe in His presence, Christ Jesus my Lord.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-10">
                Viscosupport ! Where We Believe in Doing the Very Best
            </h3>

            <!-- Slider container -->
            <div class="relative w-full overflow-hidden rounded-xl shadow-lg h-[28rem]">
                <div class="slider flex flex-col h-full transition-transform duration-700 ease-in-out">

                    <!-- Slide 1 -->
                    <div class="slide flex-shrink-0 w-full h-full px-4">
                        <img src="assets/images/visco.jpeg" alt="Iyk Edwin Anyadigibe at Viscosupport site visit"
                            class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                    </div>

                    <!-- Slide 2 -->
                    <div class="slide flex-shrink-0 w-full h-full px-4">
                        <img src="assets/images/chairman7.jpeg"
                            alt="Iyk Edwin Anyadigibe leading staff meeting at Viscosupport"
                            class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                    </div>

                    <!-- Slide 3 -->
                    <div class="slide flex-shrink-0 w-full h-full px-4">
                        <img src="assets/images/chairman4.jpeg"
                            alt="Iyk Edwin Anyadigibe inspecting engineering projects at Viscosupport"
                            class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                    </div>
                    <div class="slide flex-shrink-0 w-full h-full px-4">
                        <img src="assets/images/chairman3.jpeg"
                            alt="Iyk Edwin Anyadigibe inspecting engineering projects at Viscosupport"
                            class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                    </div>

                    <!-- Slide 4 -->
                    <div class="slide flex-shrink-0 w-full h-full px-4">
                        <img src="assets/images/chairman8.jpeg"
                            alt="Team collaboration at Viscosupport headquarters with Iyk Edwin Anyadigibe"
                            class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">

                        <!-- Slide 5 -->
                        <div class="slide flex-shrink-0 w-full h-full px-4">
                            <img src="assets/images/chairman14.jpeg"
                                alt="Team collaboration at Viscosupport headquarters with Iyk Edwin Anyadigibe"
                                class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                        </div>

                        <!-- Slide 6 -->
                        <div class="slide flex-shrink-0 w-full h-full px-4">
                            <img src="assets/images/chairman16.jpeg"
                                alt="Team collaboration at Viscosupport headquarters with Iyk Edwin Anyadigibe"
                                class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                        </div>

                        <!-- Slide 7 -->
                        <div class="slide flex-shrink-0 w-full h-full px-4">
                            <img src="assets/images/chairman11.jpeg"
                                alt="Team collaboration at Viscosupport headquarters with Iyk Edwin Anyadigibe"
                                class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                        </div>

                        <div class="slide flex-shrink-0 w-full h-full px-4">
                            <img src="assets/images/chairman12.jpeg"
                                alt="Team collaboration at Viscosupport headquarters with Iyk Edwin Anyadigibe"
                                class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                        </div>

                        <!-- Slide 8 -->
                        <div class="slide flex-shrink-0 w-full h-full px-4">
                            <img src="assets/images/chairman17.jpeg"
                                alt="Team collaboration at Viscosupport headquarters with Iyk Edwin Anyadigibe"
                                class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                        </div>

                        <!-- Slide 9 -->
                        <div class="slide flex-shrink-0 w-full h-full px-4">
                            <img src="assets/images/chairman18.jpeg"
                                alt="Team collaboration at Viscosupport headquarters with Iyk Edwin Anyadigibe"
                                class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                        </div>

                        <!-- Slide 10 -->
                        <div class="slide flex-shrink-0 w-full h-full px-4">
                            <img src="assets/images/chairman19.jpeg"
                                alt="Team collaboration at Viscosupport headquarters with Iyk Edwin Anyadigibe"
                                class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                        </div>

                        <!-- Slide 11 -->
                        <div class="slide flex-shrink-0 w-full h-full px-4">
                            <img src="assets/images/chairman20.jpeg"
                                alt="Team collaboration at Viscosupport headquarters with Iyk Edwin Anyadigibe"
                                class="w-full h-full object-cover rounded-xl scale-100 transition-transform duration-700">
                        </div>

                    </div>
                </div>
            </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <!-- Heading -->
            <h4 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
                Showcasing Our Commitment to Social Responsibility and Community Development
            </h4>

            <!-- Video -->
            <div class="relative rounded-xl shadow-lg overflow-hidden">
                <video src="assets/images/commuity video.mp4" controls autoplay muted loop
                    class="w-full h-[28rem] object-contain rounded-xl bg-black">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Optional Description -->
            <p class="mt-6 text-gray-600 text-lg max-w-3xl mx-auto">
                At Viscosupport, we actively engage with communities to create sustainable impact.
                Our projects focus on education, empowerment, and environmental stewardship.
            </p>
        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <!-- Heading -->
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
                Connect with Our Chairman
            </h3>

            <p class="text-gray-600 mb-10">
                Click on the icons below to visit Iyk Edwin Anyadigibe's LinkedIn profile or send him an email directly.
            </p>

            <!-- Icons Container -->
            <div class="flex justify-center gap-8">

                <!-- LinkedIn Icon -->
                <div class="flex flex-col items-center">
                    <a href="https://www.linkedin.com/in/edwin-iyk-anyadigibe-0397b7343" target="_blank"
                        rel="noopener noreferrer"
                        class="text-blue-700 hover:text-blue-800 transform hover:scale-110 transition duration-300"
                        aria-label="Visit Chairman LinkedIn Profile">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 md:h-12 md:w-12" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM0 8h5v16H0V8zm7.5 0h4.8v2.2h.1c.67-1.27 2.3-2.6 4.73-2.6 5.06 0 6 3.33 6 7.65V24h-5v-7.6c0-1.81-.03-4.14-2.53-4.14-2.53 0-2.92 1.97-2.92 4V24h-5V8z" />
                        </svg>
                    </a>
                    <span class="mt-1 text-gray-700 font-medium text-sm">LinkedIn</span>
                </div>

                <!-- Gmail / Email Icon -->
                <div class="flex flex-col items-center">
                    <a href="mailto:edwiniyk.globe@gmail.com"
                        class="text-red-600 hover:text-red-700 transform hover:scale-110 transition duration-300"
                        aria-label="Email Chairman">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 md:h-12 md:w-12" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M12 13.065L0 5V19h24V5l-12 8.065zm0-2.13L24 3H0l12 7.935z" />
                        </svg>
                    </a>
                    <span class="mt-1 text-gray-700 font-medium text-sm">Email</span>
                </div>

            </div>

        </div>
    </section>

    <?php
    include("inc/info.php");
    ?>

    <?php
    include("inc/footer.php");
    ?>


</body>
<script>
    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-in');
                }
            });
        },
        { threshold: 0.3 }
    );

    document.querySelectorAll('.observe').forEach(el => observer.observe(el));

    const observer2 = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-in2');
                }
            });
        },
        { threshold: 0.3 }
    );

    document.querySelectorAll('.observe').forEach(el => observer2.observe(el));

    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide img');
    let index = 0;

    function showSlide(i) {
        slider.style.transform = `translateY(-${i * 100}%)`;

        // Reset zoom
        slides.forEach(img => img.classList.remove('scale-105'));

        // Zoom in active slide
        slides[i].classList.add('scale-105');
    }

    // Auto-slide every 4 seconds
    setInterval(() => {
        index = (index + 1) % slides.length;
        showSlide(index);
    }, 4000);

    // Initial display
    showSlide(index);

    // Mobile menu toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    const backToTop = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.style.display = 'flex';
        } else {
            backToTop.style.display = 'none';
        }
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

</script>

</html>