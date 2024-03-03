@extends('layout')
@section('content')
    <form action="/ubah_password" method="post">
        @csrf
        <section class="mt-[20px]">
            <div class="w-[500px] bg-gray-200 rounded-md shadow-xl mx-auto px-9 py-9">
                <div class="flex flex-col">
                    <!-- header login -->
                    <span class="mt-4 text-[50px] font-elsie font-bold mx-auto mb-1">Galeriyaa</span>
                    </span>
                    <!-- end -->
                    <!-- input login -->
                    <span class="font-inika text-gray-500 text-xs">Password Lama</span>
                    <input type="password" id="email" name="current_password"
                        class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-2.5 mb-3"
                        placeholder="" required />
                    <span class="font-inika text-gray-500 text-xs">Password Lama</span>
                    <input type="password" id="email" name="password"
                        class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-2.5 mb-3"
                        placeholder="" required />
                    <span class="font-inika text-gray-500 text-xs">Konfirmasi</span>
                    <input type="password" id="email" name="password_confirmation"
                        class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-2.5 mb-3"
                        placeholder="" required />
                    <!-- button -->
                    <button type="submit"
                        class="mt-4 text-white bg-red-600 hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-5">Simpan
                    </button>
                    <!-- end -->
                </div>
            </div>
        </section>
    </form>
    @include('sweetalert::alert')
@endsection
