@extends('front.layout')
@section('content')

<style>
    p{
        font-size: 125% ;
    }
</style>
        <header class="masthead"
        @if(isset($long_description_image))
        style="background-image: url('{{ $long_description_image }}')"
        @endif
        >
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading segoui">
                            <h1 style="color:{{ $long_description_title_color }} ; ">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p class="segoui">
                            {{ $long_description }}
                        </p>
                    </div>
                    <div class="text-center section-padding">
                        <img  src="{{ $long_description_sub_image }}">
                    </div>
                </div>
            </div>
        </article>
@endsection
