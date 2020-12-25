@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')
@section('searchbar')
@endsection
@section('userlocation')
@endsection

@section('content')
    {{-- preloader --}}
<section>
    <div class="loader-cont">
        <div class="loaderimg1">
            <img src="assets/images/preloader1.png" alt="">
        </div>

        <div id="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="loaderimg2">
            <img src="assets/images/preloader.png" alt="">
        </div>
    </div>
    <div class="msg-load">
        <p>Wait ! We are connecting with Garage ...</p>
    </div>
</section>
{{-- preloader end --}}

@endsection
