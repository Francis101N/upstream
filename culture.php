<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Culture | Upstream Development Company</title>
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

    <!-- SERVICES BANNER -->
    <div class="relative bg-cover bg-center py-32 overflow-hidden"
        style="background-image: url('assets/images/img8.jpg');">

        <!-- Dark overlay with subtle motion -->
        <div class="absolute inset-0 bg-black/60 backdrop-blur-[1px]"></div>

        <!-- Content -->
        <div class="container mx-auto relative z-10 text-center text-white space-y-6">

            <!-- Title -->
            <h1 class="reveal hero-title text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight">
                Our Culture
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
                        Our Culture
                    </li>
                </ol>
            </nav>

        </div>
    </div>

    <!-- OUR CULTURE SECTION -->
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h1 class="text-4xl md:text-5xl font-semibold tracking-tight text-gray-900">
                    Our Culture
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                    Learn about what makes our company unique and the values that guide everything we do.
                </p>
            </div>

            <!-- CULTURE PANELS -->
            <div class="space-y-28">

                <!-- PANEL 1 -->
                <div class="group flex flex-col lg:flex-row overflow-hidden bg-[#0f172a] text-white
                        transition-all duration-700 hover:-translate-y-2 hover:shadow-2xl">

                    <!-- Image -->
                    <div class="relative lg:w-1/2 h-[320px] lg:h-[480px] overflow-hidden">
                        <img src="https://dev.upstreaminnigeria.com/upload/culture_images/culture_panel_1742289859.jpg"
                            alt="Our way is the Upstream way" class="w-full h-full object-cover
                                transition-transform duration-[1200ms] ease-out
                                group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="lg:w-1/2 flex items-center px-8 md:px-16 py-14">
                        <div class="max-w-lg transition-all duration-700 group-hover:translate-x-2">
                            <h2 class="relative inline-block text-3xl md:text-4xl font-semibold mb-6
                                   after:content-[''] after:block after:w-0 after:h-[2px]
                                   after:bg-white after:mt-3 after:transition-all after:duration-700
                                   group-hover:after:w-16">
                                Our way is the Upstream way
                            </h2>
                            <p class="text-gray-300 leading-relaxed">
                                We’re a global team united by shared beliefs. We believe human ingenuity has the power
                                to overcome challenges and shape a more sustainable future.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- PANEL 2 -->
                <div class="group flex flex-col lg:flex-row-reverse overflow-hidden bg-[#7f1d1d] text-white
                        transition-all duration-700 hover:-translate-y-2 hover:shadow-2xl">

                    <!-- Image -->
                    <div class="relative lg:w-1/2 h-[320px] lg:h-[480px] overflow-hidden">
                        <img src="https://dev.upstreaminnigeria.com/upload/culture_images/culture_panel_1742289920.jpg"
                            alt="Operational excellence" class="w-full h-full object-cover
                                transition-transform duration-[1200ms] ease-out
                                group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="lg:w-1/2 flex items-center px-8 md:px-16 py-14">
                        <div class="max-w-lg transition-all duration-700 group-hover:-translate-x-2">
                            <h2 class="relative inline-block text-3xl md:text-4xl font-semibold mb-6
                                   after:content-[''] after:block after:w-0 after:h-[2px]
                                   after:bg-white after:mt-3 after:transition-all after:duration-700
                                   group-hover:after:w-16">
                                We strive for excellence
                            </h2>
                            <p class="text-gray-200 leading-relaxed">
                                Operational excellence defines how we work — protecting people, preserving the
                                environment, and delivering consistent, high-quality results.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- PANEL 3 -->
                <div class="group flex flex-col lg:flex-row overflow-hidden bg-[#4c1d95] text-white
                        transition-all duration-700 hover:-translate-y-2 hover:shadow-2xl">

                    <!-- Image -->
                    <div class="relative lg:w-1/2 h-[320px] lg:h-[480px] overflow-hidden">
                        <img src="https://dev.upstreaminnigeria.com/upload/culture_images/culture_panel_1742290152.jpg"
                            alt="Diversity and inclusion" class="w-full h-full object-cover
                                transition-transform duration-[1200ms] ease-out
                                group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="lg:w-1/2 flex items-center px-8 md:px-16 py-14">
                        <div class="max-w-lg transition-all duration-700 group-hover:translate-x-2">
                            <h2 class="relative inline-block text-3xl md:text-4xl font-semibold mb-6
                                   after:content-[''] after:block after:w-0 after:h-[2px]
                                   after:bg-white after:mt-3 after:transition-all after:duration-700
                                   group-hover:after:w-16">
                                Diversity makes us stronger
                            </h2>
                            <p class="text-gray-200 leading-relaxed">
                                We embrace diverse perspectives, encourage collaboration, and build inclusive
                                teams that create long-term impact.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-50 border-t border-gray-200 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">

                <!-- Image -->
                <div id="director-image"
                    class="md:w-5/12 transform -translate-x-24 opacity-0 transition-all duration-1000 ease-out">
                    <div class="relative">
                        <img src="assets/images/daniel.jpg" alt="Daniel Ubeh"
                            class="w-full h-auto rounded-xl shadow-2xl object-cover" />
                        <div
                            class="absolute bottom-3 left-3 bg-upsteamRed text-white text-xs font-semibold px-3 py-1 rounded-md shadow">
                            Project Director
                        </div>
                    </div>
                </div>

                <!-- Text -->
                <div class="md:w-7/12 space-y-5">
                    <h3 class="text-3xl font-bold text-gray-900">
                        Daniel Ubeh
                    </h3>

                    <p class="text-upsteamRed font-semibold tracking-wide uppercase text-sm">
                        Project Director
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        A visionary leader and trusted industry expert,
                        <strong>Daniel Ubeh</strong> plays a pivotal role in steering
                        <strong>Upstream Development Company</strong> toward sustained success,
                        reinforcing its reputation as a powerhouse in oil and gas exploration
                        and production.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        As an accomplished and results-driven Project Director, Daniel leads
                        with strategic insight and unwavering commitment to operational
                        excellence.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        With extensive experience across the EPIC lifecycle — from exploration
                        and drilling to production optimization and field management — he
                        consistently delivers world-class outcomes.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Under his leadership, <strong>Upstream Development Company</strong> has
                        set new benchmarks for efficiency, safety, and client satisfaction.
                    </p>

                    <!-- Quote -->
                    <blockquote class="mt-6 border-l-4 border-upsteamRed pl-5 italic text-gray-600">
                        “Excellence isn’t optional — it’s the standard. We don’t just deliver
                        projects; we shape the future of energy.”
                    </blockquote>
                </div>

            </div>
        </div>
    </section>

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

    <!-- Our Mission Section -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-16">

            <div class="flex flex-col lg:flex-row items-center gap-16">

                <!-- Text Content -->
                <div class="lg:w-1/2 space-y-8">
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 opacity-0 mission-animate">Our Mission</h3>
                    <p class="text-gray-700 leading-relaxed opacity-0 mission-animate delay-100">
                        Our mission is to <strong>explore, develop, and optimize oil and gas resources</strong> through
                        innovative technology and industry expertise.<br><br>
                        We are committed to delivering sustainable energy solutions by maximizing production efficiency,
                        minimizing operational downtime, and upholding the highest standards of safety and environmental
                        responsibility.<br><br>
                        We strive to create long-term value for our stakeholders while contributing to global energy
                        security and advancing the future of energy production.
                    </p>

                    <!-- List with SVG Checkmarks -->
                    <ul class="space-y-4">
                        <li class="flex items-start opacity-0 mission-animate delay-200">
                            <svg class="w-6 h-6 text-upsteamRed flex-shrink-0 mr-3 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Efficient Resource Development: Maximize oil and gas field
                                potential through advanced exploration and production.</span>
                        </li>

                        <li class="flex items-start opacity-0 mission-animate delay-300">
                            <svg class="w-6 h-6 text-upsteamRed flex-shrink-0 mr-3 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Production Optimization: Boost efficiency and reduce downtime
                                with smart technology.</span>
                        </li>

                        <li class="flex items-start opacity-0 mission-animate delay-400">
                            <svg class="w-6 h-6 text-upsteamRed flex-shrink-0 mr-3 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Safety & Compliance: Ensure the highest standards of health,
                                safety, and environmental compliance across all operations.</span>
                        </li>

                        <li class="flex items-start opacity-0 mission-animate delay-500">
                            <svg class="w-6 h-6 text-upsteamRed flex-shrink-0 mr-3 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Sustainability & Innovation: Adopt sustainable practices and
                                innovative solutions.</span>
                        </li>

                        <li class="flex items-start opacity-0 mission-animate delay-600">
                            <svg class="w-6 h-6 text-upsteamRed flex-shrink-0 mr-3 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Asset Lifecycle Management: Provide end-to-end management of oil
                                and gas fields, from discovery to decommissioning.</span>
                        </li>

                        <li class="flex items-start opacity-0 mission-animate delay-700">
                            <svg class="w-6 h-6 text-upsteamRed flex-shrink-0 mr-3 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Stakeholder Value Creation: Create lasting value for investors
                                and communities.</span>
                        </li>

                        <li class="flex items-start opacity-0 mission-animate delay-800">
                            <svg class="w-6 h-6 text-upsteamRed flex-shrink-0 mr-3 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Global Energy Contribution: Support global energy needs with
                                reliable production.</span>
                        </li>
                    </ul>
                </div>

                <!-- Video/Image Content -->
                <div class="lg:w-1/2 relative group">
                    <img src="https://dev.upstreaminnigeria.com/upload/mission_images/202502281248upstream1.jpg"
                        alt="Our Mission" class="w-full h-auto rounded-lg shadow-lg object-cover animate-fadeInRight">
                    <!-- Play Button Overlay -->
                    <a href="https://www.youtube.com/watch?v=JGYuCRYFxew"
                        class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 rounded-lg"
                        target="_blank">
                        <span class="text-white text-5xl">
                            <i class="fa fa-play-circle"></i>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY CHOOSING US -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-16">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 opacity-0 animate-fadeInUp">
                    WHY CHOOSING US
                </h2>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <!-- Card 1 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 group opacity-0 animate-fadeInUp delay-100">
                    <div class="overflow-hidden h-64">
                        <img src="https://dev.upstreaminnigeria.com/upload/reason_images/202501241244blog-3.jpg"
                            alt="End-to-End Expertise in Oil & Gas Operations."
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">End-to-End Expertise in Oil & Gas
                            Operations</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We handle every phase of the EPIC lifecycle — from exploration and drilling to production
                            optimization and field management. Our integrated approach ensures seamless project
                            execution, maximum resource recovery, and long-term operational success.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 group opacity-0 animate-fadeInUp delay-200">
                    <div class="overflow-hidden h-64">
                        <img src="https://dev.upstreaminnigeria.com/upload/reason_images/202501241314blog-4.jpg"
                            alt="Innovation-Driven Production Optimization"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Innovation-Driven Production Optimization
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            We leverage cutting-edge technologies, real-time data analytics, and industry-leading
                            practices to enhance production efficiency, minimize downtime, and extend asset lifecycles.
                            Our commitment to continuous improvement keeps your operations ahead of the curve.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 group opacity-0 animate-fadeInUp delay-300">
                    <div class="overflow-hidden h-64">
                        <img src="https://dev.upstreaminnigeria.com/upload/reason_images/202501241314blog-2.jpg"
                            alt="Unwavering Commitment to Safety & Sustainability"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Unwavering Commitment to Safety &
                            Sustainability</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We prioritize safety, environmental responsibility, and regulatory compliance in every
                            project. Our proactive risk management strategies and sustainable practices ensure not only
                            operational excellence but also a positive impact on communities and ecosystems.
                        </p>
                    </div>
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
    document.addEventListener("DOMContentLoaded", () => {
        const image = document.getElementById("director-image");

        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    image.classList.remove("-translate-x-24", "opacity-0");
                    image.classList.add("translate-x-0", "opacity-100");
                }
            },
            { threshold: 0.3 }
        );

        observer.observe(image);
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

    // Tailwind animation classes
    const animateClass = 'translate-y-6 opacity-0';
    const revealClass = 'translate-y-0 opacity-100 transition-all duration-700 ease-out';

    const items = document.querySelectorAll('.mission-animate');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0');
                entry.target.classList.add('opacity-100', 'translate-y-0');
            }
        });
    }, { threshold: 0.2 });

    items.forEach(item => {
        observer.observe(item);
    });

    const fadeItems = document.querySelectorAll('.animate-fadeInUp');
    const observerr = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0');
                entry.target.classList.add('opacity-100', 'translate-y-0');
            }
        });
    }, { threshold: 0.2 });

    fadeItems.forEach(item => observerr.observe(item));
</script>

</html>