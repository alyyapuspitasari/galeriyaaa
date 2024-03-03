@extends('layout')
@section('content')
    <!--section-->
    <section>
        <div class="flex items-center justify-center w-full pt-8">
            <div class="flex items-center justify-center">
                <img src="{{ asset('foto_profile/' . auth()->user()->picture) }}" width="90" height="90"
                    viewBox="0 0 70 70"fill="none" class="rounded-full" id="foto">

            </div>
        </div>
        <div class="flex flex-col mt-2">
            <div class="flex-row">
                <p class="text-2xl text-center text-black font-inika" id="username">{{ auth()->user()->username }}</p>
                <p class="text-sm text-center text-black" id="bio">
                    {{ auth()->user()->bio }}
                </p>
            </div>
        </div>
        <hr class="mt-2 shadow-md">
    </section>
    <!-- Konten -->
    <section class="mt-8 mb-8">
        <div class="flex max-w-screen-xl mx-auto flex-wrap justify-center ml-[40px]">
            <div class="flex flex-col">
                <div class="flex max-w-screen-md mx-auto flex-wrap">
                    @foreach ($unggahan as $foto)
                        <div class="lg:w-1/3 mx-auto">
                            <div class="flex flex-col">
                                <div class="w-[363px] h-[192px] mt-4 bg-slate-500 overflow-hidden">
                                    <img src="/foto/{{ $foto->lokasi_file }}" alt="" class="" id="foto">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('sweetalert::alert')

    <!-- End Konten -->
@endsection
