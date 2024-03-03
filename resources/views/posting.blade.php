@extends('layout')
@section('content')
    <!--section-->
    <form action="/up_foto" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="flex justify-center gap-4 flex-wrap overflow mx-auto mt-8">
                <div class="mt-[45px]">

                    <div class="flex items-center justify-center w-full pt-8">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-64 h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                        to
                                        upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                                </p>
                            </div>
                            <input id="dropzone-file" type="file" name="filefoto" class="hidden" />
                        </label>
                    </div>
                </div>
                <div class="flex justify-center gap-4 mb-8 mt-5">
                    <div>
                        <div class="flex flex-col gap-4 flax-warp">
                            <div class="mt-[45px]">
                                <span class="text-sm mt-5 mb-1"> Judul</span>
                                <input type="text" id="judul" name="judul_foto"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 place py-2"
                                    placeholder="" required />
                            </div>
                            <div class="">
                                <span class="text-sm mt-5 mb-1">Deskripsi</span>
                                <input type="text" id="deskripsi" name="deskripsi_foto"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 place py-8 "
                                    placeholder="" required />
                            </div>
                            <div class="">
                                <span class="text-sm mt-5 mb-1">Album</span>
                                <div class="flex flex-row">
                                    <select name="nama_album" id="album"
                                        class="block w-full p-2.5 mb-6 text-sm text-gay-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="" class="text-black hidden">Choose Album</option>
                                        @foreach ($album as $item )
                                        <option value="{{ $item->id }}">{{ $item->nama_album }}</option>
                                        @endforeach

                                    </select>
                                    <a href="/buat_album"><button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 h-full ml-4"
                                        type="button">
                                        <i class="bi bi-plus-lg"></i>
                                        </button></a>
                                </div>
                            </div>
                            <!-- button -->
                            <div class="flex">
                                <button type="submit"
                                    class="mt-5 text-white bg-red-600 hover:bg-red-300 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-xl text-md w-[100px] h-[30px]  sm:w-25 px-1 py-0 ml-[240px] text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endsection
