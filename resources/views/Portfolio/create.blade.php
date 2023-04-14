<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create</title>
</head>

<body>

    <div class="m-auto h-fit min-h-screen dark:bg-[#212427] flex flex-col bg-[#F1F3F7] gap-20">
        <div class="w-full flex pt-20">
            <h1 class="text-center m-auto text-5xl dark:text-white text-black font-semibold">Create</h1>
        </div>

        <form class="flex flex-col gap-5 items-center" action="{{ route('Portfolio.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <input class="w-1/2 h-10 border-2 border-gray-300 p-2 rounded-lg" type="text" name="title"
                placeholder="Title">
            <input class="w-1/2 h-10 border-2 border-gray-300 p-2 rounded-lg" type="body" name="description"
                placeholder="Description">
            <input class="w-1/2 h-10 border-2 border-gray-300 p-2 rounded-lg" type="text" name="github"
                placeholder="Github">
            <input class="w-1/2 h-10 border-2 border-gray-300 p-2 rounded-lg" type="text" name="demo"
                placeholder="Demo">

                    <select class="w-1/2 h-10 border-2 border-gray-300 rounded-lg" id="select-role" name="roles[]" multiple placeholder="Select roles..." autocomplete="off"
                        class="block w-full rounded-sm cursor-pointer focus:outline-none" multiple>
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="javascript">javascript</option>
                        <option value="php">php</option>
                        <option value="laravel">laravel</option>
                        <option value="vue">vue</option>
                        <option value="react">react</option>
                        <option value="tailwind">tailwind</option>
                        <option value="mysql">mysql</option>
                    </select>

            <div class="w-1/2 h-10 flex flex-row bg-white p-1 rounded-lg m-auto">
                <label class="text-gray-500 m-auto w-full p-1" for="">
                    Picture
                </label>
                <input class="w-full h-full" type="file" name="picture">
            </div>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-400">
                Submit Post
            </button>
        </form>

    </div>

</body>

<script>

    // change theme based on user preferences
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
    
</script>
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
<script>
    new TomSelect('#select-role', {
        maxItems: 7,
    });
</script>

</html>
