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
        <a href="https://api.whatsapp.com/send?phone=1234567890&text=Hello+Upstream+Development+Company%2C+I%27m+interested+in+your+services"
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
            style="background-image: url('assets/images/img1.jpg');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 h-full flex items-center">
                <div class="max-w-7xl mx-auto px-6">
                    <div id="slide1-text" class="max-w-xl text-white opacity-0">
                        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                            Leading Marginal Field Development in Nigeria
                        </h1>
                        <p class="mt-4 text-lg text-gray-200">
                            Upsteam delivers efficient exploration, development, and operation of oil fields using
                            advanced technology.
                        </p>
                        <a href="services.php"
                            class="inline-block mt-6 px-6 py-3 bg-upsteamRed text-white font-semibold rounded hover:bg-opacity-90 transition">
                            Our Services
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
                        <a href="services.php"
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
                        <a href="services.php"
                            class="inline-block mt-6 px-6 py-3 bg-upsteamRed text-white font-semibold rounded hover:bg-opacity-90 transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-gray-50 border-t border-gray-200 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-10">

                <!-- Director Image -->
                <div
                    class="md:w-5/12 text-center md:text-left transform -translate-x-20 opacity-0 transition-all duration-1000 ease-out slide-left">
                    <div class="relative">
                        <img src="assets/images/daniel.jpg" alt="Daniel Ubeh"
                            class="rounded-lg shadow-lg w-full object-cover">
                        <div
                            class="absolute bottom-2 left-2 bg-upsteamRed text-white text-xs font-semibold px-2 py-1 rounded">
                            Project Director
                        </div>
                    </div>
                </div>

                <!-- Director Info -->
                <div class="md:w-7/12 space-y-4">
                    <h3 class="text-3xl font-bold text-gray-900">Daniel Ubeh</h3>
                    <p class="text-upsteamRed font-semibold">Project Director</p>

                    <p class="text-gray-700">
                        A visionary leader and trusted industry expert, <strong>Daniel Ubeh</strong> is instrumental in
                        steering
                        <strong>Upstream Development Company</strong> toward sustained success, reinforcing its
                        reputation as a powerhouse
                        in oil and gas exploration and production.
                    </p>

                    <p class="text-gray-700">
                        <strong>Daniel Ubeh</strong> is an accomplished and results-driven Project Director at
                        <strong>Upstream Development Company</strong>, where he leads with strategic vision and
                        unwavering dedication
                        to operational excellence.
                    </p>

                    <p class="text-gray-700">
                        With a distinguished track record in the oil and gas sector, he commands every phase of the EPIC
                        lifecycle
                        (from exploration and drilling to production optimization and full-scale field management).
                    </p>

                    <p class="text-gray-700">
                        Under <strong>Daniel’s</strong> leadership, <strong>Upstream Development Company</strong> has
                        strengthened its
                        position as an industry leader, delivering projects that exceed client expectations and set new
                        benchmarks
                        for operational efficiency and safety.
                    </p>

                    <!-- Quote -->
                    <blockquote class="mt-4 border-l-4 border-upsteamRed pl-4 italic text-gray-600">
                        "Excellence isn’t optional, It’s the standard. We don’t just deliver projects; we shape the
                        future of energy."
                    </blockquote>
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
        style="background-image: url('assets/images/oil-gas-water.jpg'); background-attachment: fixed;">

        <!-- Dark transparent overlay -->
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        <!-- Content -->
        <div class="container mx-auto px-6 relative z-10 text-center py-32">
            <h4 class="text-3xl md:text-5xl font-extrabold text-white mb-4 animate-fadeInDown">
                "Ready to Power Your Next Project?"
            </h4>
            <p class="text-lg md:text-2xl text-white/90 mb-8 animate-fadeInUp">
                Get in touch with us, let’s turn potential into production.
            </p>
            <a href="#" class="inline-block px-10 py-4 bg-white/90 text-upsteamRed font-semibold rounded-xl shadow-2xl
               hover:bg-white transition transform duration-500 hover:-translate-y-1 animate-bounce">
                CONTACT US
            </a>
        </div>
    </div>

    <br>
    <!-- BLOG -->
    <section class="section blog py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 reveal">
                <h2 class="text-4xl font-bold text-gray-800 mb-2">Recent News</h2>
                <p class="text-gray-600 text-lg">Stay updated with the latest insights and company news</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl reveal"
                    data-delay="0">
                    <img src="https://dev.upstreaminnigeria.com/upload/news_images/1743087469_E7WXmGJifr.jpg"
                        alt="Non-Destructive Testing Inspection Report" class="w-full h-56 object-cover">
                    <div class="p-6 flex flex-col h-full">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2 hover:text-upsteamRed transition-colors">
                            Non-Destructive Testing Inspection Report
                        </h4>
                        <p class="text-gray-500 text-sm mb-4">Mar 27, 2025</p>
                        <p class="text-gray-600 flex-grow">
                            Ensuring the integrity of welded components is crucial for safety and performance. A
                            Non-Destructive Testing (NDT) inspection was conducted to assess weld integrity, wall
                            thickness, and detect any flaws across various pipe and flange connections.
                        </p>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl reveal"
                    data-delay="150">
                    <img src="https://dev.upstreaminnigeria.com/upload/news_images/1744294634_bzLaZ7UNqZ.jpg"
                        alt="Honoring a Decade of Leadership and Community Growth" class="w-full h-56 object-cover">
                    <div class="p-6 flex flex-col h-full">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2 hover:text-upsteamRed transition-colors">
                            Honoring a Decade of Leadership and Community Growth
                        </h4>
                        <p class="text-gray-500 text-sm mb-4">Mar 27, 2025</p>
                        <p class="text-gray-600 flex-grow">
                            Leadership rooted in service and dedication strengthens communities. Upstream Development
                            Company joined in a momentous celebration to honor 10 years of impactful leadership. Through
                            shared meals, meaningful gifts, and a spirit of unity, the event brought people together in
                            appreciation of a leader who has played a vital role in the community’s progress.
                        </p>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl reveal"
                    data-delay="300">
                    <img src="https://dev.upstreaminnigeria.com/upload/news_images/1743085477_EADtfmUpXg.jpg"
                        alt="A Celebration of Togetherness and Joy" class="w-full h-56 object-cover">
                    <div class="p-6 flex flex-col h-full">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2 hover:text-upsteamRed transition-colors">
                            A Celebration of Togetherness and Joy
                        </h4>
                        <p class="text-gray-500 text-sm mb-4">Mar 27, 2025</p>
                        <p class="text-gray-600 flex-grow">
                            Coming together as a community to share moments of joy and connection is a powerful
                            experience. Upstream Development Company organized a special gathering filled with good
                            food, laughter, and unforgettable memories. With a grand feast and exciting entertainment
                            for children, the event fostered a sense of unity and happiness for all who attended.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
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


    <br>
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
</script>

</html>