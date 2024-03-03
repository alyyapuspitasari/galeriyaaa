<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Brawler&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <nav class="text-black bg-red-800 shadow-md">
        <div class="flex justify-between mx-auto items-center container">
            <div class="flex justify-center gap-3">
                <img src="/assets/Vector.png" alt="" class="w-13 h-11 mt-4">
                <span class="font-elsie text-[50px]">Galeriyaa</span>
            </div>
            <div class="flex gap-4">
                <button class="text-center font-inika text-[15px]"><a href="/explore"> Beranda </a></button>
                <button class= "text-black font-inika text-[15px] ml-3"><a href="/posting">Posting +</a></button>
                <button class= "text-black font-inika text-[15px] ml-3"><a href="/logout" class="mt-2">Keluar</button></a>
                <button class= "text-black font-inika text-[15px] ml-3"><a href="/profile">Profile</button></a>
            </div>
        </div>
    </nav>

    <div class="flex max-w-screen-md mx-auto flex-wrap mt-4">
        @foreach ($album->foto as $foto)
            <div class="lg:w-1/2 mx-auto">
                <div class="flex flex-col">
                    <div class="w-[363px] h-[192px] bg-slate-500 overflow-hidden mt-4">
                        <img src="/foto/{{ $foto->lokasi_file }}" alt="">
                        <h3 class="mb-10"><b>{{ $foto->judul_foto }}</b></h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
