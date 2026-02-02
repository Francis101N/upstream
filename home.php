<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Upstream Development Company</title>
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

    /* Responsive scaling for headings */
    @media (max-width: 768px) {
        h1 {
            font-size: 2.25rem;
        }

        h2 {
            font-size: 2rem;
        }

        h3 {
            font-size: 1.75rem;
        }

        h4 {
            font-size: 1.25rem;
        }
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

    .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s cubic-bezier(.22, 1, .36, 1);
    }

    .reveal.show {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes slideInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-in-up {
        animation: slideInUp 1s ease-out forwards;
    }

    .delay-150 {
        animation-delay: 0.15s;
    }

    .delay-300 {
        animation-delay: 0.3s;
    }
</style>

<body class="relative">

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

    <!-- Hero Carousel -->
    <section class="relative w-full h-[90vh] overflow-hidden">

        <!-- Slide 1 -->
        <div id="slide1" class="absolute inset-0 opacity-100 transition-opacity duration-1000 bg-cover bg-center"
            style="background-image: url('assets/images/IMG_0594.JPG.jpeg');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 h-full flex items-center">
                <div class="max-w-7xl mx-auto px-6">
                    <div id="slide1-text" class="max-w-xl text-white opacity-0">
                        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                            We are an Exploration & Development Company.
                        </h1>
                        <p class="mt-4 text-lg text-gray-200">
                            Our activities focus on project development, exploration, and asset management.
                        </p>
                        <a href="services"
                            class="inline-block mt-6 px-6 py-3 bg-upsteamRed text-white font-semibold rounded hover:bg-opacity-90 transition">
                            FOCUS AREAS
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div id="slide2" class="absolute inset-0 opacity-0 transition-opacity duration-1000 bg-cover bg-center"
            style="background-image: url('assets/images/img4.jpg');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 h-full flex items-center">
                <div class="max-w-7xl mx-auto px-6">
                    <div id="slide2-text" class="max-w-xl text-white opacity-0">
                        <h1 class="text-4xl md:text-5xl font-bold">
                            Operators of Oil & Gas Assets
                        </h1>
                        <p class="mt-4 text-lg text-gray-200">
                            We manage oil and gas fields from drilling through production with operational excellence.
                        </p>
                        <a href="services"
                            class="inline-block mt-6 px-6 py-3 bg-upsteamRed text-white font-semibold rounded hover:bg-opacity-90 transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div id="slide3" class="absolute inset-0 opacity-0 transition-opacity duration-1000 bg-cover bg-center"
            style="background-image: url('assets/images/img3.jpg');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 h-full flex items-center">
                <div class="max-w-7xl mx-auto px-6">
                    <div id="slide3-text" class="max-w-xl text-white opacity-0">
                        <h1 class="text-4xl md:text-5xl font-bold">
                            Production Optimization Through Technology
                        </h1>
                        <p class="mt-4 text-lg text-gray-200">
                            Data-driven optimization to maximize recovery, efficiency, and asset value.
                        </p>
                        <a href="services"
                            class="inline-block mt-6 px-6 py-3 bg-upsteamRed text-white font-semibold rounded hover:bg-opacity-90 transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-gray-50 border-t border-gray-200 py-20 mx-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-12">

                <!-- Chairman Image -->
                <div
                    class="md:w-4/12 flex justify-center md:justify-start transform -translate-x-20 opacity-0 transition-all duration-1000 ease-out slide-left">
                    <div class="relative w-60 sm:w-72 md:w-80">
                        <img src="assets/images/WhatsApp Image 2026-01-30 at 2.08.28 PM.jpeg" alt="Edwin Iyk Anyadigibe"
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
                        </span>
                        <br>
                        <span class="text-gray-600 font-medium">
                            Upstream Development Company Limited
                        </span>
                    </div>

                    <!-- Divider -->
                    <div class="w-20 h-1 bg-upsteamRed mx-auto md:mx-0"></div>

                    <!-- Quote -->
                    <blockquote class="border-l-4 border-upsteamRed pl-6 italic text-gray-700 leading-relaxed text-lg">
                        “The decision we made has shaped the way oil and gas EPC projects will be done in Nigeria going
                        forward.”
                    </blockquote>

                    <!-- Description -->
                    <p class="text-gray-600 leading-relaxed max-w-2xl mx-auto md:mx-0">
                        Under his leadership, Upstream Development Company Limited continues to set new standards in
                        engineering, procurement, and construction across Nigeria’s oil and gas sector.
                    </p>

                    <!-- Profile Button (NEW UPDATE) -->
                    <div class="pt-4">
                        <a href="chairman"
                            class="inline-flex items-center gap-2 bg-upsteamRed text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-red-700 transition duration-300">
                            View Chairman Profile
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <?php
    include("inc/services.php");
    ?>

    <br><br>

    <!-- CTA Section -->
    <div class="section cta relative overflow-hidden bg-cover bg-center"
        style="background-image: url('assets/images/IMG_9750.JPG.jpeg'); background-attachment: fixed;">

        <!-- Dark transparent overlay -->
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        <!-- Content -->
        <div class="container mx-auto px-6 relative z-10 text-center py-32">
            <h4 class="text-3xl md:text-5xl font-extrabold text-white mb-4 animate-fadeInDown">
                "From Potential to Production!"
            </h4>
            <p class="text-lg md:text-2xl text-white/90 mb-8 animate-fadeInUp">
                Together, we create and manage strategic energy initiatives responsibly.
            </p>
            <a href="contact" class="inline-block px-10 py-4 bg-white/90 text-upsteamRed font-semibold rounded-xl shadow-2xl
               hover:bg-white transition transform duration-500 hover:-translate-y-1 animate-bounce">
                CONTACT US
            </a>
        </div>
    </div>

    <section id="testimonials" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Heading -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-2">What Our Clients Say</h2>
                <p class="text-gray-600 text-lg">Hear from our satisfied partners across Nigeria</p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Testimonial 1 -->
                <div class="testimonial-card opacity-0 transform -translate-x-10 bg-white p-6 rounded-xl shadow-lg">
                    <p class="text-gray-700 mb-4">
                        "Upstream has transformed our operations. Their professionalism and efficiency are unmatched!"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-upsteamRed/20 flex items-center justify-center text-white font-bold mr-3">
                            A</div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Adeola Adebayo</h4>
                            <span class="text-sm text-gray-500">Lagos, Nigeria</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card opacity-0 transform -translate-x-10 bg-white p-6 rounded-xl shadow-lg">
                    <p class="text-gray-700 mb-4">
                        "Excellent service delivery! Their attention to detail and safety standards are top-notch."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-upsteamRed/20 flex items-center justify-center text-white font-bold mr-3">
                            B</div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Bolaji Ogunleye</h4>
                            <span class="text-sm text-gray-500">Port Harcourt, Nigeria</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card opacity-0 transform -translate-x-10 bg-white p-6 rounded-xl shadow-lg">
                    <p class="text-gray-700 mb-4">
                        "Working with Upstream was a great decision. They deliver on time and exceed expectations!"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-upsteamRed/20 flex items-center justify-center text-white font-bold mr-3">
                            C</div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Chinwe Eze</h4>
                            <span class="text-sm text-gray-500">Enugu, Nigeria</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card opacity-0 transform -translate-x-10 bg-white p-6 rounded-xl shadow-lg">
                    <p class="text-gray-700 mb-4">
                        "They truly understand the Nigerian oil & gas landscape. Highly recommended!"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-upsteamRed/20 flex items-center justify-center text-white font-bold mr-3">
                            D</div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Damilola Yusuf</h4>
                            <span class="text-sm text-gray-500">Abuja, Nigeria</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-card opacity-0 transform -translate-x-10 bg-white p-6 rounded-xl shadow-lg">
                    <p class="text-gray-700 mb-4">
                        "Upstream’s team is reliable, skilled, and very professional. We are very satisfied!"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-upsteamRed/20 flex items-center justify-center text-white font-bold mr-3">
                            E</div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Efe Okonkwo</h4>
                            <span class="text-sm text-gray-500">Rivers State, Nigeria</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="testimonial-card opacity-0 transform -translate-x-10 bg-white p-6 rounded-xl shadow-lg">
                    <p class="text-gray-700 mb-4">
                        "Professional, efficient, and knowledgeable. Our partnership with Upstream exceeded
                        expectations."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-upsteamRed/20 flex items-center justify-center text-white font-bold mr-3">
                            F</div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Funke Adedayo</h4>
                            <span class="text-sm text-gray-500">Ondo, Nigeria</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        const cards = document.querySelectorAll('.testimonial-card');

        const observerrrrr = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    // stagger animations: each card delayed by 0.2s * index
                    setTimeout(() => {
                        entry.target.classList.add('opacity-100', 'translate-x-0');
                        entry.target.classList.remove('opacity-0', '-translate-x-10');
                    }, index * 200);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        cards.forEach(card => observerrrrr.observe(card));
    </script>

    <style>
        .testimonial-card {
            transition: all 0.8s ease-out;
        }
    </style>

    <!-- Carousel Wrapper -->
    <div class="relative w-full h-[80vh] min-h-[500px] overflow-hidden">

        <!-- Company Logo -->
        <img src="assets/images/upstreamlogoanimation-Trim-ezgif.com-optimize.gif" alt="Company Logo" id="carousel-logo"
            class="absolute top-4 right-4 w-32 opacity-0 transition-all duration-700 z-20">

        <!-- Slides Container -->
        <div id="carousel" class="flex transition-transform duration-700 ease-in-out">

            <!-- Slide 1 -->
            <div class="relative w-full flex-shrink-0 h-[80vh] min-h-[500px]">
                <img src="assets/images/IMG_0594.JPG.jpeg"
                    class="absolute inset-0 w-full h-full object-cover opacity-80" />
                <div class="slide-text absolute inset-0 flex items-center justify-center text-center px-6
                        text-white text-3xl md:text-4xl font-bold
                        opacity-0 translate-y-6 transition-all duration-1000 ease-out">
                    We don’t just use energy,<br class="hidden md:block"> we preserve it.
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="relative w-full flex-shrink-0 h-[80vh] min-h-[500px]">
                <img src="assets/images/WhatsApp Image 2026-01-27 at 11.54.16 AM.jpeg"
                    class="absolute inset-0 w-full h-full object-cover opacity-80" />
                <div class="slide-text absolute inset-0 flex items-center justify-center text-center px-6
                        text-white text-3xl md:text-4xl font-bold
                        opacity-0 translate-y-6 transition-all duration-1000 ease-out">
                    Environmental Conservation<br class="hidden md:block">
                    Is Our Commitment.
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="relative w-full flex-shrink-0 h-[80vh] min-h-[500px]">
                <img src="assets/images/WhatsApp Image 2026-01-27 at 11.54.15 AM.jpeg"
                    class="absolute inset-0 w-full h-full object-cover opacity-80" />
                <div class="slide-text absolute inset-0 flex items-center justify-center text-center px-6
                        text-white text-3xl md:text-4xl font-bold
                        opacity-0 translate-y-6 transition-all duration-1000 ease-out">
                    Standing Together to<br class="hidden md:block">
                    Protect Endangered Species.
                </div>
            </div>

        </div>

        <!-- Controls -->
        <button onclick="prevSlide()"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/60 text-white px-3 py-2 rounded">
            ‹
        </button>
        <button onclick="nextSlide()"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/60 text-white px-3 py-2 rounded">
            ›
        </button>
    </div>

    <script>
        const carousel = document.getElementById("carousel");
        const texts = document.querySelectorAll(".slide-text");
        const logo = document.getElementById("carousel-logo");
        let index = 0;

        function showSlide(i) {
            carousel.style.transform = `translateX(-${i * 100}%)`;

            texts.forEach((text, idx) => {
                text.classList.remove("opacity-100", "translate-y-0");
                text.classList.add("opacity-0", "translate-y-6");

                if (idx === i) {
                    setTimeout(() => {
                        text.classList.remove("opacity-0", "translate-y-6");
                        text.classList.add("opacity-100", "translate-y-0");

                        // Show logo with same timing as slide text
                        logo.classList.remove("opacity-0");
                        logo.classList.add("opacity-100");
                    }, 400);
                }
            });

            // Hide logo when not active
            texts.forEach((_, idx) => {
                if (idx !== i) {
                    logo.classList.remove("opacity-100");
                    logo.classList.add("opacity-0");
                }
            });
        }

        function nextSlide() {
            index = (index + 1) % texts.length;
            showSlide(index);
        }

        function prevSlide() {
            index = (index - 1 + texts.length) % texts.length;
            showSlide(index);
        }

        setInterval(nextSlide, 6000);
        showSlide(index);
    </script>

    <!-- BLOG -->
    <section class="section blog py-20 bg-gray-50">
        <div class="container mx-auto px-6">

            <div class="text-center mb-12 reveal">
                <h2 class="text-4xl font-bold text-gray-800 mb-2">Recent News</h2>
                <p class="text-gray-600 text-lg">
                    Stay updated with the top 3 latest insights and company news
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <?php
                include('connection/connect.php');

                $query = "SELECT * FROM news ORDER BY date_created DESC LIMIT 3";
                $result = mysqli_query($db, $query);

                while ($row = mysqli_fetch_assoc($result)):
                    ?>
                    <!-- Article Card -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                            transform transition duration-500
                            hover:-translate-y-2 hover:shadow-2xl
                            animate-fadeInUp flex flex-col">

                        <!-- Image -->
                        <img src="./admin/uploads/<?= htmlspecialchars($row['blog_img']) ?>"
                            alt="<?= htmlspecialchars($row['blog_title']) ?>" class="w-full h-48 object-cover">

                        <!-- Content -->
                        <div class="p-5 flex flex-col flex-grow">
                            <h4 class="font-bold text-lg mb-1">
                                <?= htmlspecialchars($row['blog_title']) ?>
                            </h4>

                            <p class="text-gray-500 text-sm mb-3">
                                <?= date("M d, Y", strtotime($row['date_created'])) ?>
                            </p>

                            <p class="text-gray-700 text-sm mb-4">
                                <?= nl2br(htmlspecialchars(substr($row['blog_story'], 0, 100))) ?>...
                            </p>

                            <!-- Read More -->
                            <a href="news_details.php?id=<?= $row['id'] ?>"
                                class="mt-auto inline-block text-upsteamRed font-semibold hover:underline">
                                Read More →
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>

            <!-- View More News Button -->
            <div class="mt-14 text-center">
                <a href="news" class="inline-block px-8 py-3 rounded-full
                      border-2 border-upsteamRed
                      text-upsteamRed font-semibold tracking-wide
                      hover:bg-upsteamRed hover:text-white
                      transition-all duration-300">
                    VIEW MORE NEWS
                </a>
            </div>

        </div>
    </section>

    <!-- Company Impact / Stats Section -->
    <section id="stats-section" class="relative py-24 text-gray-900 bg-fixed bg-center bg-cover"
        style="background-image:url('assets/images/oil-gas2.jpg');">
        <!-- Optional overlay for depth -->
        <div class="absolute inset-0 bg-white/80"></div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 text-center">

                <!-- Stat 1 -->
                <div class="space-y-4">
                    <div class="stat-number text-5xl md:text-6xl font-extrabold tracking-tight" data-target="10">
                        0
                    </div>
                    <p class="uppercase text-sm tracking-widest text-gray-700 leading-snug">
                        Global<br>Office Locations
                    </p>
                </div>

                <!-- Stat 2 -->
                <div class="space-y-4">
                    <div class="stat-number text-5xl md:text-6xl font-extrabold tracking-tight" data-target="570">
                        0
                    </div>
                    <p class="uppercase text-sm tracking-widest text-gray-700 leading-snug">
                        Trusted<br>Team Members
                    </p>
                </div>

                <!-- Stat 3 -->
                <div class="space-y-4">
                    <div class="stat-number text-5xl md:text-6xl font-extrabold tracking-tight" data-target="22">
                        0
                    </div>
                    <p class="uppercase text-sm tracking-widest text-gray-700 leading-snug">
                        Industry<br>Awards Earned
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Highlights / Activities Section -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-2">Upstream Outreach Showcases</h2>
                <p class="text-gray-600 text-lg">
                    See how Upstream is shaping sustainable exploration, development, and community initiatives.
                </p>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-8">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="assets/images/medical outreach/IMG_20251113_090434_860.jpg" alt="Gallery Image 1"
                        class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.43 PM.jpeg"
                        alt="Gallery Image 2"
                        class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="assets/images/Children Day/DSC_2855.jpg" alt="Gallery Image 3"
                        class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="assets/images/community outreach/DSC_2432.jpg" alt="Gallery Image 4"
                        class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>

            <!-- Explore More Link -->
            <div class="text-center">
                <a href="projects"
                    class="inline-block px-6 py-3 bg-upsteamRed text-white font-semibold rounded-lg hover:bg-red-700 transition">
                    Explore More →
                </a>
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
<!-- Scripts -->
<script>
    // Mobile menu toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Hero carousel with slide-in text
    const heroSlides = [
        { slide: document.getElementById('slide1'), text: document.getElementById('slide1-text') },
        { slide: document.getElementById('slide2'), text: document.getElementById('slide2-text') },
        { slide: document.getElementById('slide3'), text: document.getElementById('slide3-text') }
    ];

    let currentHero = 0;

    // Initialize first slide
    heroSlides.forEach((s, index) => {
        s.slide.classList.toggle('opacity-100', index === 0);
        s.slide.classList.toggle('opacity-0', index !== 0);
        if (index === 0) s.text.classList.add('animate-slideInLeft');
    });

    setInterval(() => {
        // Hide current slide
        heroSlides[currentHero].slide.classList.remove('opacity-100');
        heroSlides[currentHero].slide.classList.add('opacity-0');
        heroSlides[currentHero].text.classList.remove('animate-slideInLeft');
        heroSlides[currentHero].text.classList.add('opacity-0');

        // Next slide
        currentHero = (currentHero + 1) % heroSlides.length;

        heroSlides[currentHero].slide.classList.remove('opacity-0');
        heroSlides[currentHero].slide.classList.add('opacity-100');
        heroSlides[currentHero].text.classList.remove('opacity-0');
        heroSlides[currentHero].text.classList.add('animate-slideInLeft');
    }, 6000);

    // Slide-in animation on scroll
    const slideLeftElements = document.querySelectorAll('.slide-left');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('-translate-x-20', 'opacity-0');
                entry.target.classList.add('translate-x-0', 'opacity-100');
            }
        });
    }, { threshold: 0.3 });

    slideLeftElements.forEach(el => observer.observe(el));

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

    document.addEventListener("DOMContentLoaded", () => {
        const statsSection = document.getElementById("stats-section");
        const numbers = document.querySelectorAll(".stat-number");
        let hasAnimated = false;

        function animateNumber(el, target) {
            let current = 0;
            const randomInterval = setInterval(() => {
                el.textContent = Math.floor(Math.random() * target * 2);
            }, 60);

            setTimeout(() => {
                clearInterval(randomInterval);

                const duration = 1200;
                const startTime = performance.now();

                function smoothCount(time) {
                    const progress = Math.min((time - startTime) / duration, 1);
                    const value = Math.floor(progress * target);
                    el.textContent = value;

                    if (progress < 1) {
                        requestAnimationFrame(smoothCount);
                    } else {
                        el.textContent = target;
                    }
                }

                requestAnimationFrame(smoothCount);
            }, 900);
        }

        const observer = new IntersectionObserver(
            (entries) => {
                if (entries[0].isIntersecting && !hasAnimated) {
                    hasAnimated = true;

                    numbers.forEach((num) => {
                        const target = parseInt(num.dataset.target, 10);
                        animateNumber(num, target);
                    });
                }
            },
            { threshold: 0.4 }
        );

        observer.observe(statsSection);
    });

    document.addEventListener('DOMContentLoaded', () => {
        const reveals = document.querySelectorAll('.reveal');

        const observerrr = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const delay = entry.target.dataset.delay || 0;
                    setTimeout(() => {
                        entry.target.classList.add('show');
                    }, delay);
                }
            });
        }, { threshold: 0.2 });

        reveals.forEach(el => observerrr.observe(el));
    });

    // Scroll fade animation
    const observerr = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-fadeInUp').forEach(el => {
        el.classList.add('opacity-0', 'translate-y-10');
        observerr.observe(el);
    });
</script>
</html>