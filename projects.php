<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Upstream Development Company</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-papfY0xTq1Qm9G+N0a2C+G8p7G5tVx1OzOfh1aUeJONxvT5v0F0sL3k5u+K4m0j1n7xR27RZDJx0kX75XED9CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    video {
        transition: transform 0.6s ease, box-shadow 0.6s ease;
    }

    video:hover {
        transform: scale(1.02);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.25);
    }

    /* Fade in animation */
    .animate-fadeInUp {
        transition: all 0.7s ease-out;
    }

    /* 3D Tilt Container */
    .gallery-card {
        perspective: 1000px;
        /* Gives depth to 3D transform */
        overflow: hidden;
        border-radius: 1rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transform-style: preserve-3d;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .gallery-card img {
        transition: transform 0.4s ease;
        display: block;
    }

    /* Hover effect */
    .gallery-card:hover {
        transform: rotateX(5deg) rotateY(5deg) scale(1.05);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
    }

    .gallery-card:hover img {
        transform: scale(1.1);
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

    <!-- PROJECTS BANNER -->
    <div class="section banner-page about relative bg-cover bg-center py-32"
        style="background-image: url('assets/images/IMG_9750.JPG.jpeg');">
        <!-- Overlay for better text visibility -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="container mx-auto relative z-10 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fadeInDown">Corporate Social Responsibility (CSR) </h1>
            <nav class="inline-block text-gray-200 text-lg animate-fadeInUp" aria-label="breadcrumb">
                <ol class="list-reset flex justify-center space-x-2">
                    <li>
                        <a href="#" class="hover:text-upsteamRed transition">Home</a>
                        <span class="mx-2">/</span>
                    </li>
                    <li class="text-upsteamRed font-semibold">Corporate Social Responsibility (CSR) </li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="py-16 bg-gray-50">
        <!-- Header -->
        <div class="max-w-7xl mx-auto px-6 text-center mb-12">
            <h5 class="text-2xl md:text-3xl font-bold text-slate-900 mb-3 animate-fadeInUp">
                 Showcasing our commitment to social responsibility and community development.
            </h5>
        </div>



        <!-- Gallery Section -->
        <section class="py-16 bg-gray-50">

            <!-- Section Heading -->
            <div class="max-w-7xl mx-auto px-6 mb-10 text-center">
                <h3 class="text-3xl font-bold text-gray-800 mb-2">
                   Upstream Medical Outreach Showcase
                </h3>
                <p class="text-gray-600">
                    Highlights from our community medical outreach initiatives
                </p>
            </div>
            <!-- Gallery Grid -->
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <!-- Image Card -->
                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251118_080443_318.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251115_101408_391.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251113_090434_860.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251115_104630_925.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251114_114119_774.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251114_122444_817.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251117_115408_131.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251118_094523_057.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251117_113136_075.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251115_111941_434.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251117_094634_629.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/medical outreach/IMG_20251119_073803_607.jpg"
                        alt="Medical Outreach Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

            </div>
        </section>
        <section class="py-16 bg-gray-50">

            <!-- Section Heading -->
            <div class="max-w-7xl mx-auto px-6 mb-10 text-center">
                <h3 class="text-3xl font-bold text-gray-800 mb-2">
                    Upstream Community Relation (We choose relation over exploitation)
                </h3>
                <p class="text-gray-600">
                    Through impactful initiatives, meaningful partnerships, and sustainable programs, we create opportunities that uplift lives and strengthen communities.
                </p>
            </div>
            <!-- Gallery Grid -->
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <!-- Image Card -->
                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 3.01.14 PM.jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.47 PM.jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.55 PM (1).jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.41 PM.jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.43 PM.jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.45 PM (1).jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.46 PM.jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.44 PM.jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/DSC_2432.jpg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.42 PM.jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/WhatsApp Image 2026-01-28 at 2.56.56 PM.jpeg"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/community outreach/dji_fly_20241224_141550_0085_1735067140989_video.mp4.00_00_14_24.Still002.bmp"
                        alt="Community Relation Activity" class="w-full h-64 object-cover rounded-xl">
                </div>

            </div>
        </section>
        <section class="py-16 bg-gray-50">

            <!-- Section Heading -->
            <div class="max-w-7xl mx-auto px-6 mb-10 text-center">
                <h3 class="text-3xl font-bold text-gray-800 mb-2">
                    Celebrating Joy: Upstream Children’s Day Outreach
                </h3>
                <p class="text-gray-600">
                    Bringing smiles, learning, and unforgettable experiences to children through our community initiatives.
                </p>
            </div>
            <!-- Gallery Grid -->
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <!-- Image Card -->
                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2426.JPG"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2855.jpg"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2536.jpg"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2139.JPG"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2318.JPG"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2086.JPG"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2498.JPG"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2439.JPG"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2490.JPG"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2619.jpg"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2477.JPG"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

                <div class="gallery-card">
                    <img src="assets/images/Children Day/DSC_2083.JPG"
                        alt="Upstream Children’s Day Outreach" class="w-full h-64 object-cover rounded-xl">
                </div>

            </div>
        </section>

    </section>

    <?php
    include("inc/footer.php");
    ?>

</body>
<script>
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