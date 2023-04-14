<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Simon Myrvold</title>
</head>

<body onload="typeWriter(), page()" class="opacity-0 transition-all duration-500">

    <div class="h-fit min-h-screen m-auto flex flex-col bg-[#F1F3F7] dark:bg-[#212427] gap-12 pb-24">
        <div class="w-full h-[300px] flex">
            <h1 id="Title" class="text-center m-auto text-5xl text-black dark:text-white font-semibold"></h1>
        </div>
        <div
            class="text-center w-[60vw] lg:w-[1024px] grid lg:grid-cols-7 md:w-[768px] md:grid-cols-2 sm:grid-cols-1 gap-14 ml-auto mr-auto transition-all">
            <div class="flex flex-col gap-4 m-auto hover:scale-110 transition-all">
                <div id="tooltip-1"
                        class="absolute -translate-y-12 z-10 w-fit px-3 py-2 text-sm font-medium transition-opacity duration-300 rounded-lg shadow-sm text-white bg-[#212427] dark:text-black dark:bg-white opacity-0 cursor-default">
                        Portfolio
                    <div class="tooltip-arrow"></div>
                </div>
                <a href="/Portfolio">
                    <i id="1" onmouseover="beat(1)" onmouseout="rBeat(1)"
                        class="fa-solid fa-folder text-7xl w-fit m-auto text-[#212427] dark:text-white">
                    </i>
                </a>
            </div>

            <div class="flex flex-col gap-4 m-auto hover:scale-110 transition-all">
                <div id="tooltip-2"
                        class="absolute -translate-y-12 z-10 w-fit px-3 py-2 text-sm font-medium transition-opacity duration-300 rounded-lg shadow-sm text-white bg-[#212427] dark:text-black dark:bg-white opacity-0 cursor-default">
                        Github
                    <div class="tooltip-arrow"></div>
                </div>
                <a href="https://github.com/SimonMyrvold" target="_blank">
                    <i id="2" onmouseover="beat(2)" onmouseout="rBeat(2)"
                    class="fa-brands fa-github text-7xl w-fit m-auto text-[#212427] dark:text-white">
                    </i>
                </a>
            </div>

            <div class="flex flex-col gap-4 m-auto hover:scale-110 transition-all">
                <div id="tooltip-3"
                        class="absolute -translate-y-12 z-10 w-fit px-3 py-2 text-sm font-medium transition-opacity duration-300 rounded-lg shadow-sm text-white bg-[#212427] dark:text-black dark:bg-white opacity-0 cursor-default">
                        LinkedIn
                    <div class="tooltip-arrow"></div>
                </div>
                <a href="https://www.linkedin.com/in/simon-myrvold-9766a0218/" target="_blank">
                    <i id="3" onmouseover="beat(3)" onmouseout="rBeat(3)"
                    class="fa-brands fa-linkedin text-7xl w-fit m-auto text-[#212427] dark:text-white">
                    </i>
                </a>
            </div>

            <div class="flex flex-col gap-4 m-auto hover:scale-110 transition-all">
                <div id="tooltip-4"
                        class="absolute -translate-y-12 z-10 t px-3 py-2 text-sm font-medium transition-opacity duration-300 rounded-lg shadow-sm text-white bg-[#212427] dark:text-black dark:bg-white opacity-0 cursor-default">
                        Twitter
                    <div class="tooltip-arrow"></div>
                </div>
                <a href="https://twitter.com/Simon_Myrvold" target="_blank">
                    <i id="4" onmouseover="beat(4)" onmouseout="rBeat(4)"
                    class="fa-brands fa-square-twitter text-7xl w-fit m-auto text-[#212427] dark:text-white">
                    </i>
                </a>
            </div>

            <div class="flex flex-col gap-4 m-auto hover:scale-110 transition-all">
                <div id="tooltip-5"
                        class="absolute -translate-y-12 z-10 w-fit px-3 py-2 text-sm font-medium transition-opacity duration-300 rounded-lg shadow-sm text-white bg-[#212427] dark:text-black dark:bg-white opacity-0 cursor-default">
                        Facebook
                    <div class="tooltip-arrow"></div>
                </div>
                <a href="https://www.facebook.com/profile.php?id=100077737064310" target="_blank">
                    <i id="5" onmouseover="beat(5)" onmouseout="rBeat(5)"
                    class="fa-brands fa-facebook text-7xl w-fit m-auto text-[#212427] dark:text-white">
                    </i>
                </a>
            </div>

             <div class="flex flex-col gap-4 m-auto hover:scale-110 transition-all">
                <div id="tooltip-6"
                        class="absolute -translate-y-12 z-10 w-fit px-3 py-2 text-sm font-medium transition-opacity duration-300 rounded-lg shadow-sm text-white bg-[#212427] dark:text-black dark:bg-white opacity-0 cursor-default">
                        Instagram
                    <div class="tooltip-arrow"></div>
                </div>
                <a href="https://www.instagram.com/simon_myrvold/" target="_blank">
                    <i id="6" onmouseover="beat(6)" onmouseout="rBeat(6)"
                        class="fa-brands fa-square-instagram text-7xl w-fit m-auto text-[#212427] dark:text-white">
                    </i>
                </a>
            </div>

            <div class="flex flex-col gap-4 m-auto hover:scale-110 transition-all">
                <div id="tooltip-7"
                        class="absolute -translate-y-12 z-10 w-fit px-3 py-2 text-sm font-medium transition-opacity duration-300 rounded-lg shadow-sm text-white bg-[#212427] dark:text-black dark:bg-white opacity-0 cursor-default">
                        Email
                    <div class="tooltip-arrow"></div>
                </div>
                <a href="mailto:simon.johan.myrvold@gmail.com" target="_blank">
                    <i id="7" onmouseover="beat(7)" onmouseout="rBeat(7)"
                        class="fa-solid fa-square-envelope text-7xl w-fit m-auto text-[#212427] dark:text-white">
                    </i>
                </a>
            </div>
        </div>
    </div>

</body>

<script>

    var i = 0;
    var txt = 'Hi, I am Simon Myrvold 👋';

    // type writer effect on title
    function typeWriter() {
    if (i < txt.length) {
        document.getElementById("Title").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, 75);
    }
    }

    function page(){
        document.querySelector('body').classList.remove('opacity-0');
    }

    // add bounce animation to icons
    function beat(id) {
        var el = document.getElementById(id);
        var el2 = document.getElementById('tooltip-' + id);
        el.classList.add('fa-shake');
        el2.classList.add('opacity-100');
    }

    // remove bounce animation from icons
    function rBeat(id) {
        var el = document.getElementById(id);
        var el2 = document.getElementById('tooltip-' + id);
        el.classList.remove('fa-shake');
        el2.classList.remove('opacity-100');
    }

    // change theme based on user preferences
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>

</html>
