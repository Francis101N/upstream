<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Leaders | Upstream Development Company</title>
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

    .reveal {
        opacity: 0;
        transform: translateY(40px) scale(.96);
        transition: all 1s cubic-bezier(.22, 1, .36, 1);
    }

    .reveal.show {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .hero-title {
        text-shadow: 0 15px 45px rgba(0, 0, 0, .45);
    }

    /* Optional cinematic slow float */
    .hero-title.show {
        animation: heroFloat 7s ease-in-out infinite;
    }

    @keyframes heroFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
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
        transform: translateY(40px) scale(.97);
        transition: all .9s cubic-bezier(.22, 1, .36, 1);
    }

    .reveal.show {
        opacity: 1;
        transform: translateY(0) scale(1);
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

    <!-- SERVICES BANNER -->
    <div class="section banner-page about relative bg-cover bg-center py-32"
        style="background-image: url('assets/images/IMG_9750.JPG.jpeg');">
        <!-- Overlay for better text visibility -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="container mx-auto relative z-10 text-center text-white space-y-6">

            <!-- Title -->
            <h1 class="hero-title reveal text-4xl md:text-5xl font-extrabold tracking-tight">
                Board of Directors and Management Team
            </h1>

            <!-- Breadcrumb -->
            <nav class="reveal" aria-label="breadcrumb">
                <ol class="flex justify-center items-center space-x-2 text-lg text-gray-200">
                    <li>
                        <a href="https://dev.upstreaminnigeria.com"
                            class="hover:text-upsteamRed transition-all duration-300 hover:underline underline-offset-4">
                            Home
                        </a>
                        <span class="mx-2 opacity-60">/</span>
                    </li>
                    <li class="text-upsteamRed font-semibold">
                        Board of Directors and Management Team
                    </li>
                </ol>
            </nav>

        </div>

    </div>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <h2 class="reveal text-center text-4xl font-extrabold tracking-tight text-slate-900 mb-16">
                Meet Our Team
            </h2>

            <!-- Team Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10">

                <!-- Card -->
                <div
                    class="reveal group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <!-- Image -->
                        <img src="assets/images/Chinwe Ezenwa.png" alt="Chinwe Ezenwa"
                            class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/80 flex flex-col justify-center items-center
             text-center px-6
             opacity-0 translate-y-6
             group-hover:opacity-100 group-hover:translate-y-0
             transition-all duration-500">

                            <h3 class="text-xl font-bold text-white">Chinwe Ezenwa</h3>
                            <p class="text-sm text-upsteamRed font-semibold mt-1">EXECUTIVE CHAIRPERSON</p>

                            <p class="mt-4 text-sm text-gray-200 leading-relaxed">
                                Chartered Librarian and public administrator with 35 years in civil service. Chief
                                Promoter of Oceanserve & Logistics and LeLook House of Bags.
                            </p>
                        </div>

                    </div>

                    <!-- Normal Card Footer -->
                    <div class="p-6 text-center space-y-2 group-hover:opacity-0 transition duration-300">
                        <h3 class="text-xl font-bold text-slate-900">Chinwe Ezenwa</h3>
                        <p class="text-sm text-upsteamRed font-semibold">EXECUTIVE CHAIRPERSON</p>
                        <span
                            class="inline-block mt-2 px-4 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-600">
                            EC
                        </span>
                    </div>

                </div>
                <div
                    class="reveal group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <!-- Image -->
                        <img src="assets/images/WhatsApp Image 2026-01-30 at 2.08.28 PM.jpeg" alt="Edwin Iyk"
                            class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/80 flex flex-col justify-center items-center
             text-center px-6
             opacity-0 translate-y-6
             group-hover:opacity-100 group-hover:translate-y-0
             transition-all duration-500">

                            <h3 class="text-xl font-bold text-white">Iyk Edwin Anyadigbe</h3>
                            <p class="text-sm text-upsteamRed font-semibold mt-1">CHAIRMAN</p>

                            <p class="mt-4 text-sm text-gray-200 leading-relaxed">
                                The decision we made has shaped the way oil and gas EPC projects will be done in Nigeria
                                going forward.
                            </p>
                        </div>

                    </div>

                    <!-- Normal Card Footer -->
                    <div class="p-6 text-center space-y-2 group-hover:opacity-0 transition duration-300">
                        <h3 class="text-xl font-bold text-slate-900">Iyk Edwin Anyadigbe</h3>
                        <p class="text-sm text-upsteamRed font-semibold">CHAIRMAN</p>
                        <span
                            class="inline-block mt-2 px-4 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-600">
                            CHAIR
                        </span>
                    </div>

                </div>
                <div
                    class="reveal group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <!-- Image -->
                        <img src="assets/images/WhatsApp Image 2026-01-30 at 4.02.08 PM.jpeg" alt="Chinwe Ezenwa"
                            class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/80 flex flex-col justify-center items-center
             text-center px-6
             opacity-0 translate-y-6
             group-hover:opacity-100 group-hover:translate-y-0
             transition-all duration-500">

                            <h3 class="text-xl font-bold text-white">Iyk- Edwin Ifeoma</h3>
                            <p class="text-sm text-upsteamRed font-semibold mt-1">DIRECTOR,
                                ENTERPRISE & HUMAN CAPITAL DEVELOPMENT </p>

                            <p class="mt-4 text-sm text-gray-200 leading-relaxed">
                                Experienced director in enterprise and HR development, driving organizational growth and
                                talent management initiatives.
                            </p>
                        </div>

                    </div>

                    <!-- Normal Card Footer -->
                    <div class="p-6 text-center space-y-2 group-hover:opacity-0 transition duration-300">
                        <h3 class="text-xl font-bold text-slate-900">Iyk- Edwin Ifeoma</h3>
                        <p class="text-sm text-upsteamRed font-semibold">DIRECTOR,
                            ENTERPRISE & HUMAN CAPITAL DEVELOPMENT</p>
                        <span
                            class="inline-block mt-2 px-4 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-600">
                            DEHCD
                        </span>
                    </div>

                </div>
                <div
                    class="reveal group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <!-- Image -->
                        <img src="assets/images/Segun Faniran.png" alt="Segun Faniran"
                            class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/80 flex flex-col justify-center items-center
             text-center px-6
             opacity-0 translate-y-6
             group-hover:opacity-100 group-hover:translate-y-0
             transition-all duration-500">

                            <h3 class="text-xl font-bold text-white">Segun Faniran</h3>
                            <p class="text-sm text-upsteamRed font-semibold mt-1">CHIEF OPERATING OFFICER
                            </p>

                            <p class="mt-4 text-sm text-gray-200 leading-relaxed">
                                Experienced COO driving operational efficiency and strategic growth across energy and
                                infrastructure projects.
                            </p>
                        </div>

                    </div>

                    <!-- Normal Card Footer -->
                    <div class="p-6 text-center space-y-2 group-hover:opacity-0 transition duration-300">
                        <h3 class="text-xl font-bold text-slate-900">Segun Faniran</h3>
                        <p class="text-sm text-upsteamRed font-semibold">CHIEF OPERATING OFFICER</p>
                        <span
                            class="inline-block mt-2 px-4 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-600">
                            COO
                        </span>
                    </div>

                </div>
                <div
                    class="reveal group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <!-- Image -->
                        <img src="assets/images/Daniel Ubeh.png" alt="Daniel Ubeh"
                            class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/80 flex flex-col justify-center items-center
             text-center px-6
             opacity-0 translate-y-6
             group-hover:opacity-100 group-hover:translate-y-0
             transition-all duration-500">

                            <h3 class="text-xl font-bold text-white">Daniel Ubeh</h3>
                            <p class="text-sm text-upsteamRed font-semibold mt-1">PROJECT DIRECTOR
                            </p>

                            <p class="mt-4 text-sm text-gray-200 leading-relaxed">
                                Seasoned Project Director with extensive experience in infrastructure development,
                                strategic planning, and energy project execution.
                            </p>
                        </div>

                    </div>

                    <!-- Normal Card Footer -->
                    <div class="p-6 text-center space-y-2 group-hover:opacity-0 transition duration-300">
                        <h3 class="text-xl font-bold text-slate-900">Daniel Ubeh</h3>
                        <p class="text-sm text-upsteamRed font-semibold">PROJECT DIRECTOR</p>
                        <span
                            class="inline-block mt-2 px-4 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-600">
                            PD
                        </span>
                    </div>

                </div>
                <div
                    class="reveal group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <!-- Image -->
                        <img src="assets/images/Benjamin.png" alt="Benjamin"
                            class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/80 flex flex-col justify-center items-center
             text-center px-6
             opacity-0 translate-y-6
             group-hover:opacity-100 group-hover:translate-y-0
             transition-all duration-500">

                            <h3 class="text-xl font-bold text-white">Benjamin Akande</h3>
                            <p class="text-sm text-upsteamRed font-semibold mt-1">PROJECT MANAGER
                            </p>

                            <p class="mt-4 text-sm text-gray-200 leading-relaxed">
                                Project Manager with expertise in coordinating multi-disciplinary teams and ensuring
                                timely delivery of infrastructure projects.
                            </p>
                        </div>

                    </div>

                    <!-- Normal Card Footer -->
                    <div class="p-6 text-center space-y-2 group-hover:opacity-0 transition duration-300">
                        <h3 class="text-xl font-bold text-slate-900">Benjamin Akande</h3>
                        <p class="text-sm text-upsteamRed font-semibold">PROJECT MANAGER</p>
                        <span
                            class="inline-block mt-2 px-4 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-600">
                            PM
                        </span>
                    </div>

                </div>
                <div
                    class="reveal group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <!-- Image -->
                        <img src="assets/images/Isaac.png" alt="isaac"
                            class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/80 flex flex-col justify-center items-center
             text-center px-6
             opacity-0 translate-y-6
             group-hover:opacity-100 group-hover:translate-y-0
             transition-all duration-500">

                            <h3 class="text-xl font-bold text-white">Isaac Igwebuike, Ikechukwu</h3>
                            <p class="text-sm text-upsteamRed font-semibold mt-1">HEAD, FINANCE AND ACCOUNTS
                            </p>

                            <p class="mt-4 text-sm text-gray-200 leading-relaxed">
                                saac is the Head, Finance and Accounts of Equal Logistics Services Limited, under whose
                                careful watch the Company has developed a deep business insight that influences all her
                                actions and directions.
                            </p>
                        </div>

                    </div>

                    <!-- Normal Card Footer -->
                    <div class="p-6 text-center space-y-2 group-hover:opacity-0 transition duration-300">
                        <h3 class="text-xl font-bold text-slate-900">Isaac Igwebuike, Ikechukwu</h3>
                        <p class="text-sm text-upsteamRed font-semibold">HEAD, FINANCE AND ACCOUNTS</p>
                        <span
                            class="inline-block mt-2 px-4 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-600">
                            HFA
                        </span>
                    </div>

                </div>
                <div
                    class="reveal group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <!-- Image -->
                        <img src="assets/images/sarrita.png" alt="sarrita"
                            class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/80 flex flex-col justify-center items-center
             text-center px-6
             opacity-0 translate-y-6
             group-hover:opacity-100 group-hover:translate-y-0
             transition-all duration-500">

                            <h3 class="text-xl font-bold text-white">Saritta Kassis</h3>
                            <p class="text-sm text-upsteamRed font-semibold mt-1">LEAD BUSINESS ADVISOR
                            </p>

                            <p class="mt-4 text-sm text-gray-200 leading-relaxed">
                                Saritta Kassis is a seasoned Business Development Consultant with nearly two decades of
                                experience driving growth through digital transformation, AI solutions, strategic
                                partnerships, and advanced negotiation skills.
                            </p>
                        </div>

                    </div>

                    <!-- Normal Card Footer -->
                    <div class="p-6 text-center space-y-2 group-hover:opacity-0 transition duration-300">
                        <h3 class="text-xl font-bold text-slate-900">Saritta Kassis</h3>
                        <p class="text-sm text-upsteamRed font-semibold">LEAD BUSINESS ADVISOR</p>
                        <span
                            class="inline-block mt-2 px-4 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-600">
                            LBA
                        </span>
                    </div>

                </div>
                <div
                    class="reveal group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <!-- Image -->
                        <img src="assets/images/veronica.png" alt="sarrita"
                            class="w-full h-80 object-cover transition-transform duration-700 group-hover:scale-110">

                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/80 flex flex-col justify-center items-center
             text-center px-6
             opacity-0 translate-y-6
             group-hover:opacity-100 group-hover:translate-y-0
             transition-all duration-500">

                            <h3 class="text-xl font-bold text-white">Veronica Okereke</h3>
                            <p class="text-sm text-upsteamRed font-semibold mt-1">BUSINESS DEVELOPMENT EXECUTIVE
                            </p>

                            <p class="mt-4 text-sm text-gray-200 leading-relaxed">
                                Veronica Okereke is a dynamic business development professional known for her strategic
                                vision and results-driven approach to growth. With a keen eye for emerging market
                                opportunities, she consistently identifies and leverages new prospects that align with
                                the company’s objectives.
                            </p>
                        </div>

                    </div>

                    <!-- Normal Card Footer -->
                    <div class="p-6 text-center space-y-2 group-hover:opacity-0 transition duration-300">
                        <h3 class="text-xl font-bold text-slate-900">Veronica Okereke</h3>
                        <p class="text-sm text-upsteamRed font-semibold">BUSINESS DEVELOPMENT EXECUTIVE</p>
                        <span
                            class="inline-block mt-2 px-4 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-600">
                            BDE
                        </span>
                    </div>

                </div>


            </div>
        </div>
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

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    const observerr = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.reveal').forEach(el => observerr.observe(el));
</script>

</html>