<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

<body>
    <!-- Preloader -->
    <!-- Preloader -->
    <div id="preloader"
        class="fixed inset-0 z-[9999] flex items-center justify-center bg-white transition-opacity duration-700">

        <div class="flex flex-col items-center space-y-6">

            <!-- Brand -->
            <h1 class="text-3xl md:text-4xl font-extrabold tracking-wide text-gray-900">
                Upstream<span class="text-upsteamRed">.</span>
            </h1>

            <!-- Animated Loader -->
            <div class="relative w-16 h-16">
                <span class="absolute inset-0 rounded-full border-4 border-upsteamRed/20"></span>
                <span
                    class="absolute inset-0 rounded-full border-4 border-upsteamRed border-t-transparent animate-spin">
                </span>
            </div>

            <!-- Tagline -->
            <p class="text-xs tracking-[0.3em] uppercase text-gray-500">
                Powering Nigeria’s Marginal Fields.
            </p>

        </div>
    </div>


</body>
<script>
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');

        // Let preloader stay briefly
        setTimeout(() => {
            preloader.classList.add('opacity-0');

            // After fade-out, redirect
            setTimeout(() => {
                window.location.href = 'home';
            }, 800);

        }, 5000);
    });
</script>



</html>