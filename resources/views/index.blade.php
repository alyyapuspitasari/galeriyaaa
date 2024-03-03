<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Brawler&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @stack('cssjsexternal')
</head>

<body>
    <nav class="text-black bg-white shadow-md">
        <div class="flex justify-between mx-auto items-center container">
            <div class="flex justify-center gap-3">
                <img src="/assets/Vector.png" alt="" class="w-13 h-11 mt-4">
                <span class="font-elsie text-[50px]">Galeriyaa</span>
            </div>
            <div class="flex gap-4">
                <button class= "text-black font-inika text-[15px] ml-3"><a href="/login">Masuk</a></button>
                <button class= "text-black font-inika text-[15px] ml-3"><a href="/register" class="mt-2">Daftar</a></button>
            </div>
        </div>
    </nav>

<div class="mx-auto flex flex-col justify-center items-center mt-5">
    <span class="font-elsie text-[50px] mb-8">Selamat Datang Di Galeriyaa!</span>
</div>

<!-- Section Gambar -->
<div>
    <div class="flex justify-center gap-4 flex-wrap overflow">
         <div>
           <img src="/assets/gambar1.jpg" alt="" class="shadow-md rounded-lg w-[650px] h-[580px] max-[480px]:w-full">
         </div>
         <div>
           <div class="flex flex-col gap-4">
               <div >
                   <img src="/assets/gambar2.jpg" alt="" class="rounded-lg w-[295px] h-[280px] shadow-md shadow-mt">
               </div>
               <div>
                   <img src="/assets/gambar3.jpg" alt="" class="rounded-lg w-[295px] h-[280px] shadow-md shadow-mt">
               </div>
          </div>
         </div>
         <div>
           <div class="flex flex-col gap-4 mb-8">
               <div >
                   <img src="/assets/gambar3.jpg" alt="" class="rounded-lg w-[295px] h-[280px] shadow-md shadow-mt">
               </div>
               <div>
                   <img src="/assets/gambar2.jpg" alt="" class="rounded-lg w-[295px] h-[280px] shadow-md shadow-mt">
               </div>
          </div>
         </div>
    </div>
</div>


