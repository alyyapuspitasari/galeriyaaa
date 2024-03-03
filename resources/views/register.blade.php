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
</head>
<body>
    <form action="/cek_register" method="post">
        @csrf
   <section class="mt-[20px]">
       <div class="w-[500px] bg-gray-200 rounded-md shadow-xl mx-auto px-9 py-9">
            <div class="flex flex-col">
                 <!-- header login -->
                 <span class="mx-auto mt-5"><img src="/assets/Vector.png"></span>

                 <span class="mt-4 text-3xl font-elsie font-bold mx-auto mb-1">Daftar Sekarang</span>
                 <span class="font-inika mx-auto">Simpan segala momen berharga anda di
                    <span class="font-elsie font-bold text-red-600"> Galeriyaa</span>
                 </span>
                 <!-- end -->
                 <!-- input login -->
                 <input type="email" id="email" name="email"
                      class="mt-7 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full block w-full p-2.5 mb-3"
                      placeholder="Email" value="{{ old('email') }}" required />
                      @error('email')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                 <input type="text" id="username" name="username"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full block w-full p-2.5 mb-3" placeholder="Username" value="{{ old('username') }}">
                      @error('username')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                 <input type="password" id="password" name="password"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full block w-full p-2.5 mb-3"
                      placeholder="Password" required />
                      @error('password')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                 <!-- button -->
                 <button type="submit"
                      class="mt-4 text-white bg-red-600 hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-5">
                   Daftar
                 </button>
                </form>
                 <span class="text-center text-sm font-inika mb-5">Sudah pernah punya akun? klik
                      <a href="/login" class="text-red-600 font-inika">Masuk sekarang</a></span>
                 <!-- end -->
            </div>






       </div>
  </section>


 </h1>
</body>
</html>
