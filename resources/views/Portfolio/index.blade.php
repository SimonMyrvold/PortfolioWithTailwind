<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Portfolio</title>
</head>
<body onload="page()" class="opacity-0 transition-all duration-500">
    <div class="flex flex-col h-fit min-h-screen w-full gap-4 bg-[#F1F3F7] dark:bg-[#212427]">

        <div class="p-8 h-[20px] w-[20px] fixed z-10">
            <a href="/">
                <i class="border-[#212427] dark:border-[#F1F3F7] border-b-[2px] border-l-[2px] inline-block w-[20px] h-[20px] p-3 rotate-[45deg] hover:border-b-[3px] hover:border-l-[3px]"></i>
            </a>
        </div>
        
        <div class="w-full h-[200px] flex">
            <h1 id="Title" class="text-center m-auto text-5xl text-black dark:text-white font-semibold"></h1>
        </div>

        
        <div class="grid lg:grid-cols-3 lg:w-[1020px] min-[1300px]:w-[1275px] md:grid-cols-2 md:w-[768px] sm:grid-cols-1 sm:w-[640px] max-sm:grid-cols-1 max-sm:w-[90%] gap-y-20 ml-auto mr-auto transition-all pb-24">
            @forEach ($projects as $project)
                <div id="{{ $project->id }}" class="flex flex-col rounded-lg hover:scale-110 transition-all bg-[#fff] opacity-0 duration-1000 hover:duration-500 shadow-2xl m-auto">
                    <a class="flex flex-col gap-2 w-min" href="{{ Route('Portfolio.show', $project->id) }}">
                        <div class="min-[1300px]:w-[350px] lg:w-[256px] md:w-[256px] sm:w-[256px] max-sm:w-[256px] min-[1300px]:h-[175px] lg:h-[175px] md:h-[175px] sm:h-[175px] max-sm:h-[175px] rounded-t-lg" style="background-image: url(https://picsum.photos/id/{{ $project->id }}/350/175)"></div>
                        <h3 class="text-center p-2 text-xl">Project {{ $project->title }}</h3>
                        <p class="text-center p-2">{{ $project->description }}</p>
                    </a>
                </div>      
            @endforEach
        </div>
    </div>
</body>

<script>

    var i = 1;
    
    var txt = 'Portfolio';
    var x = 0;

    // type writer effect on title
    function typeWriter() {

    if (x < txt.length) {
        document.getElementById("Title").innerHTML += txt.charAt(x);
        x++;
        setTimeout(typeWriter, 75);
    }
    }

    // fade in page
    function page(){
        document.querySelector('body').classList.remove('opacity-0');
        card();
        typeWriter();
    }

    // fade in cards in order
    function card(){
        if (i <= {{ $projects->count() }}){
            document.getElementById(i).classList.remove('opacity-0');
            i++;
            setTimeout(card, 250);
        }
    }

    // change background position on mousemove
    const images = document.querySelectorAll('div[id]');
    images.forEach(image => {
        image.addEventListener('mousemove', (e) => {
            const x = e.offsetX;
            const y = e.offsetY;
            const width = e.target.offsetWidth;
            const height = e.target.offsetHeight;
            const xPercent = (x / width) * 100;
            const yPercent = (y / height) * 100;
            e.target.style.backgroundPosition = `${xPercent}% ${yPercent}%`;
        });
    });

    // change theme based on user preferences
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }

</script>

</html>