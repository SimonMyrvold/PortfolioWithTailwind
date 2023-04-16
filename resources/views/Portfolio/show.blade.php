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
<body onload="page()" class="opacity-0 transition-all duration-500">
    <div class="flex flex-col h-fit min-h-screen lg:h-[100vh] w-full bg-[#F1F3F7] dark:bg-[#212427]">

        <div class="p-8 h-[20px] w-[20px] fixed z-10">
            <a href=".">
                <i class="border-[#212427] dark:border-[#F1F3F7] border-b-[2px] border-l-[2px] inline-block w-[20px] h-[20px] p-3 rotate-[45deg] hover:border-b-[3px] hover:border-l-[3px]"></i>
            </a>
        </div>
        
        <div class="w-max h-fit ml-auto mr-auto pt-28 md:pb-28 sm:pb-28 max-sm:pb-28">
            <h1 class="text-6xl font-semibold dark:text-white">{{ $project->title }}</h1>
        </div>

        @foreach ($tags as $tag)
            <div class="w-max h-fit ml-auto mr-auto pb-8">
                <h1 class="text-2xl font-semibold dark:text-white">{{ $tag }}</h1>
            </div>
        @endforeach


        <form action=""></form>

        
        <div class="grid lg:grid-cols-3 lg:w-[1020px] min-[1300px]:w-[1275px] md:grid-cols-2 md:w-[768px] sm:grid-cols-1 sm:w-[640px] max-sm:grid-cols-1 max-sm:w-[90%] gap-20 m-auto transition-all pb-8">

        </div>
    </div>
</body>

<script>

        // fade in page
    function page(){
        document.querySelector('body').classList.remove('opacity-0');
        card();
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