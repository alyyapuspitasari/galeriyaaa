@extends('layout')
@section('content')
    <div>
        <form action="/tambah_album" method="post">
            @csrf
            <div class="flex justify-center gap-4 flex-wrap overflow mx-auto mt-8">
                <div class="">


                    <div class=" gap-4">
                        <div class="flex flex-col">
                            <div class="mt-8">
                                <span class="font-inika font-bold">Nama Album</span>
                                <input type="text" id="" name="nama_album"
                                    class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-1.5"
                                    placeholder="" required />
                            </div>
                            {{-- <div class="mt-8">
                                <span class="font-inika font-bold">Deskripsi Album</span>
                                <input type="text" id="" name="deskripsi_album"
                                    class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-1.5"
                                    placeholder="" required />
                            </div> --}}
                            <div class="mt-4">
                                <button type="submit"
                                    class="text-white bg-red-600 hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
<!-- Section Gambar -->
