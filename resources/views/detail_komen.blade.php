@extends('layout')
@push('cssjsexternal')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endpush
@section('content')
    <section class=" mb-8 ">
        @csrf
         <div class="w-[900px] bg-white rounded-md shadow-2xl mx-auto px-9 py-9 mt-4 gap-4">
            <div class="flex justify-center gap-4  overflow-hidden mx-auto mt-[20px]">
                <div class="">
                    <div class="w-[250px] h-[350px] overflow-hidden rounded-lg">
                        <img src="" alt="" id="fotodetail">
                    </div>
                    <div class=" mt-2">
                        <!--judul fpto-->
                        <span class="text-black font-bold font-inika" id="judulfoto">Judul fotonya</span>
                    </div>
                    <div id="deskripsifoto">
                        <span>Perayaan bersama teman-teman [deskripsi]</span>
                    </div>
                </div>
                <div class="w-full lg:w-[500px] h-200 bg-white rounded xl px-4 " id="listkomentar
                ">
                    <div class="flex">
                        <img src="" class="w-10 h-10 rounded-full" alt="" id="profile">
                        <h5 class="ml-2 mt-2 font-bold" id="username"></h5>
                    </div>
                    <div class="mt-4 ">
                        <span class="font-inika font-bold">Komentar :</span>
                    </div>
                    <!--komentar-->
                    <div class="mt-2 relative flex flex-col p-2 justify-between h-[250px] overflow-auto scrollbar-hidden" id="listkomentar">
                        {{-- <div class="flex mt-4">
                            <img src="/assets/gambar2.jpg" class="w-8 h-8 rounded-full" alt="">
                            <div>
                                <h5 class="text-sm mt-1 ml-2 font-inika font-bold">Alyya</h5>
                                <small class="text-xs ml-2 text-gray-500">12.00</small>
                            </div>
                            <h5 class="text-sm mt-1 ml-2">Cantik-cantik ya</h5>
                        </div>
                        <div class="flex mt-4">
                            <img src="/assets/gambar2.jpg" class="w-8 h-8 rounded-full" alt="">
                            <div>
                                <h5 class="text-sm mt-1 ml-2 font-inika font-bold">Alyya</h5>
                                <small class="text-xs ml-2 text-gray-500">12.00</small>
                            </div>
                            <h5 class="text-sm mt-1 ml-2">Cantik-cantik ya</h5>
                        </div>
                        <div class="flex mt-4">
                            <img src="/assets/gambar2.jpg" class="w-8 h-8 rounded-full" alt="">
                            <div>
                                <h5 class="text-sm mt-1 ml-2 font-inika font-bold">Alyya</h5>
                                <small class="text-xs ml-2 text-gray-500">12.00</small>
                            </div>
                            <h5 class="text-sm mt-1 ml-2">Cantik-cantik ya</h5>
                        </div>
                        <div class="flex mt-4">
                            <img src="/assets/gambar2.jpg" class="w-8 h-8 rounded-full" alt="">
                            <div>
                                <h5 class="text-sm mt-1 ml-2 font-inika font-bold">Alyya</h5>
                                <small class="text-xs ml-2 text-gray-500">12.00</small>
                            </div>
                            <h5 class="text-sm mt-1 ml-2">Cantik-cantik ya</h5>
                        </div>
                        <div class="flex mt-4">
                            <img src="/assets/gambar2.jpg" class="w-8 h-8 rounded-full" alt="">
                            <div>
                                <h5 class="text-sm mt-1 ml-2 font-inika font-bold">Alyya</h5>
                                <small class="text-xs ml-2 text-gray-500">12.00</small>
                            </div>
                            <h5 class="text-sm mt-1 ml-2">Cantik-cantik ya</h5>
                        </div>
                        <div class="flex mt-4">
                            <img src="/assets/gambar2.jpg" class="w-8 h-8 rounded-full" alt="">
                            <div>
                                <h5 class="text-sm mt-1 ml-2 font-inika font-bold">Alyya</h5>
                                <small class="text-xs ml-2 text-gray-500">12.00</small>
                            </div>
                            <h5 class="text-sm mt-1 ml-2">Cantik-cantik ya</h5>
                        </div>
                        <div class="flex mt-4">
                            <img src="/assets/gambar2.jpg" class="w-8 h-8 rounded-full" alt="">
                            <div>
                                <h5 class="text-sm mt-1 ml-2 font-inika font-bold">Alyya</h5>
                                <small class="text-xs ml-2 text-gray-500">12.00</small>
                            </div>
                            <h5 class="text-sm mt-1 ml-2">Cantik-cantik ya</h5>
                        </div>
                        <div class="flex mt-4">
                            <img src="/assets/gambar2.jpg" class="w-8 h-8 rounded-full" alt="">
                            <div>
                                <h5 class="text-sm mt-1 ml-2 font-inika font-bold">Alyya</h5>
                                <small class="text-xs ml-2 text-gray-500">12.00</small>
                            </div>
                            <h5 class="text-sm mt-1 ml-2">Cantik-cantik ya</h5>
                        </div> --}}
                    </div>
                    <div class="flex gap-2 mt-4">
                        @csrf
                        <img src="/assets/icon.jpg" class="w-10 h-10 rounded-full" alt="">
                        <div class="w-3/4">
                            <input type="text" name="isi_komentar"
                                class="w-full px-8 py-2 rounded-full border border black"
                                placeholder="Tulis Komentar">
                        </div>
                        <button class="px-4 rounded-full bg-red-600 py-1" onclick="kirimkomentar()">
                            <span class="text-white">Kirim</span></button>
                    </div>
                </div>
    </section>
@endsection
@push('footerjsexternal')
        <script src="/javascript/exploredetail.js"></script>
    @endpush


