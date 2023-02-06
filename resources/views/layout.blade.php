<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Music Times | Find Cool Music Albums</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <div class="flex">
                <div>
                    <h3 class="text-2xl">
                        <a href=""></a>
                    </h3>
                    
                </div>
                <a href="/albums"
                    ><img class="w-24 p-6" src="{{asset('images/music-album.png')}}" alt="" class="logo"
                /></a>
            </div>
            
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="/zeroseven/premium" class="hover:text-slate-500"
                        ><i class="fa-solid fa-podcast"></i> See album with Images</a
                    >
                </li>
                <li>
                    <a href="https://www.zeroseven.de/kontakt" class="hover:text-slate-500"
                        ><i class="fa-solid fa-phone"></i>
                        Contact Us</a
                    >
                </li>
            </ul>
        </nav>
        <main>
            @yield('content')
        </main>
        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-black text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

            <a
                href="create.html"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >ZeroSeven</a
            >
        </footer>
    </body>
</html>
