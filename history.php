<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our History | Upstream Development Company</title>
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

    body {
        overflow-x: hidden;
    }

    .hero-title {
        opacity: 0;
        transform: translateY(40px) scale(.96);
        transition: all 1s cubic-bezier(.22, 1, .36, 1);
    }

    .reveal.show .hero-title,
    .hero-title.show {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    nav.reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: all .8s ease .25s;
    }

    nav.reveal.show {
        opacity: 1;
        transform: translateY(0);
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
        transform: translateY(40px) scale(0.97);
        transition: all 0.8s cubic-bezier(.22, 1, .36, 1);
    }

    .reveal.show {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .image-zoom img {
        transition: transform 0.7s ease;
    }

    .image-zoom:hover img {
        transform: scale(1.08);
    }

    .float {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
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
    <div class="section banner-page about relative bg-cover bg-center py-32"
        style="background-image: url('assets/images/img8.jpg');">
        <!-- Overlay for better text visibility -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="container mx-auto relative z-10 text-center text-white space-y-6">

            <!-- Title -->
            <h1 class="hero-title reveal text-4xl md:text-5xl font-extrabold tracking-tight">
                Company History
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
                        Company History
                    </li>
                </ol>
            </nav>

        </div>

    </div>

    <section class="relative py-20 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-14 items-center">

            <!-- Carousel -->
            <div class="reveal image-zoom rounded-3xl overflow-hidden shadow-2xl 
            space-y-8 lg:-ml-10">
                <div id="caro" class="owl-carousel">
                    <div>
                        <img src="https://dev.upstreaminnigeria.com/upload/history_images/202501241629blog-1.jpg"
                            class="w-full h-[420px] object-cover">
                    </div>
                </div>
            </div>


            <!-- Content -->
            <div class="space-y-8">
                <h3 class="reveal text-3xl font-bold text-slate-900 leading-tight">
                    Delivering projects with precision, speed, and excellence.
                </h3>

                <div class="reveal bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition float">
                    <p class="font-semibold mb-2">Our Core Areas</p>
                    <ul class="list-disc list-inside text-slate-600 space-y-1">
                        <li>Finance</li>
                        <li>Design</li>
                        <li>Execution</li>
                    </ul>
                </div>

                <div class="reveal bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition float delay-200">
                    <p class="font-semibold mb-2">We can finance</p>
                    <ul class="list-disc list-inside text-slate-600 space-y-1">
                        <li>Oil & Gas Exploration</li>
                        <li>Production Optimization</li>
                        <li>Brown & Green Field Development</li>
                    </ul>
                </div>

                <blockquote
                    class="reveal border-l-4 border-red-600 bg-red-50 p-6 rounded-xl font-semibold text-slate-700">
                    We lead in marginal field development and operation in Nigeria
                </blockquote>
            </div>
        </div>

    </section>

    <!-- MAP -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15858.324844845241!2d3.4402838658401507!3d6.447777790937865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4f8698d3b89%3A0x4261abcc1e025cd9!2s1b%20Josephine%20Fingesi%20St%2C%20Lekki%20Phase%20I%2C%20Lagos%20106104%2C%20Lagos!5e0!3m2!1sen!2sng!4v1769160292481!5m2!1sen!2sng"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br><br>

    <?php
    include("inc/info.php");
    ?>

    <?php
    include("inc/footer.php");
    ?>


</body>
<script>
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>

</html>