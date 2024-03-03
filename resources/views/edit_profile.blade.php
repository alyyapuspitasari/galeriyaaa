@extends('layout')
@section('content')
    <form action="/updateprofile" method="post" enctype="multipart/form-data">
        @csrf
        <section class="mt-10">
            <div class="flex mx-auto justify-center">
                <div class="w-1/2">
                    <div class="flex flex-col mb-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="flex gap-4 justify-center mx-auto ml-[300px]">
                                    <div>
                                        <section
                                            class="mt-[50px] bg-[#d9d9d9] rounded-lg lg:px-10 py-10 flex flex-col lg:flex-row mt-10 px-5 py-5">
                                            <div class="flex flex-col mx-auto">
                                                <div class="flex justify-center items-center py-7">
                                                    <img src="{{ asset('foto_profile/' . auth()->user()->picture) }}"
                                                        class="rounded-full w-24 h-24 hover tra">
                                                </div>
                                                <div class="px-6 py-5">
                                                    <input type="file" class="-ml-2 bg-[#ffff]" name="picture">
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                    <div class="w-[364px] bg-[#d9d9d9] rounded-md shadow-xl mb-10 mx-auto px-10 py-5 mt-10">
                                        <div class="mb-4 text-center">

                                            <span class="text-6xl font-elsie mx-auto text-center mt-4">Galeriyaa</span>
                                        </div>

                                        <span class="text-sm mb-1">Nama Lengkap</span>
                                        <input type="text" id="name_lengkap" name="name_lengkap"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                            placeholder="" value="{{ $dataprofile->name_lengkap }}" />

                                        <span class="text-sm mb-1">Username</span>
                                        <input type="text" id="username" name="username"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                            placeholder="" value="{{ $dataprofile->username }}" required />

                                        <span class="text-sm mt-4 mb-1">Alamat</span>
                                        <input type="text" id="alamat" name="alamat"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                            placeholder="" value="{{ $dataprofile->alamat }}" required />

                                        <span class="text-sm mt-4 mb-1">Bio</span>
                                        <input type="text" id="alamat" name="bio"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                            placeholder="" value="{{ $dataprofile->bio }}" required />

                                        <div class="flex gap-2">
                                            <div class="flex mt-8 justify-between ml-14">
                                                <button type="submit" class="bg-red-600 text-white rounded-md px-4 py-2"><a
                                                        href="/edit_pw">Edit Password</a></button>
                                            </div>
                                            <div class="flex mt-8 justify-between ml-14">
                                                <button type="submit"
                                                    class="bg-red-600 text-white rounded-md px-4 py-2">Perbaharui</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
