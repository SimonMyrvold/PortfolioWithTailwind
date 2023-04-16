<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $project->title }}</title>
</head>

<body onload="page()" class="bg-[#F1F3F7] dark:bg-[#212427] font-sans leading-normal tracking-normal opacity-0">    
    <!--Container-->
    <div class="p-8 h-[20px] w-[20px] fixed z-10">
        <a href="{{ URL::previous() }}">
            <i class="border-[#212427] dark:border-[#F1F3F7] border-b-[2px] border-l-[2px] inline-block w-[20px] h-[20px] p-3 rotate-[45deg] hover:border-b-[3px] hover:border-l-[3px]"></i>
        </a>
    </div>

    <div class="container w-full md:max-w-3xl mx-auto pt-20">

        <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

            <!--Title-->
            <div class="font-sans">
                <h1 class="font-bold font-sans break-normal dark:text-white pt-6 pb-2 text-3xl md:text-4xl">{{ $project->title }}</h1>
                <p class="text-sm md:text-base font-normal text-gray-500"> {{ $project->created_at }}</p>
            </div>

            <div 
            id="{{ $project->id }}"
            class="w-full h-[400px] bg-cover bg-center mt-8 rounded" 
            style="
            background-image: url('/pictures{{ $picture_link = Str::replace('C:\Users\simon.myrvold\Desktop\PortfolioTailwind\Portfolio\public\pictures\\', '/', $project->image) }}');">
            </div>

            <p class="py-6 dark:text-white">{{ $project->description }}</p>
            
            <h6 class="py-2 dark:text-white font-sans hover:underline underline-offset-8 hover:font-semibold"><a target="_blank" href="{{ $project->github }}">Github</a></h6>

            @if ($project->demo == 'none')
            
            @else
            <h6 class="py-2 dark:text-white font-sans hover:underline underline-offset-8 hover:font-semibold"><a target="_blank" href="{{ $project->link }}">Demo</a></h6>
            @endif


        </div>

        <!--Tags -->
        <div class="text-base md:text-sm text-gray-500 px-4 py-6">
            Tags: @foreach ($tags as $tag)
                {{ $tag . ","}}
            @endforeach
        </div>
</body>

<script>

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

        // fade in page
    function page(){
        document.querySelector('body').classList.remove('opacity-0');
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