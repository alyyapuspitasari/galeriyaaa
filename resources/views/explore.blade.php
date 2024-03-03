@extends('layout')
@push('cssjsexternal')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endpush

    @section('content')
    <!-- Konten -->
    @csrf
    <section class="mt-8 mb-8">
        <div class="flex max-w-screen-xl mx-auto flex-wrap justify-center ml-[40px]" id="exploredata">

        </div>
    </section>
    <!-- End Konten -->
@endsection
@push('footerjsexternal')
        <script src="/javascript/explore.js"></script>
    @endpush
