@extends('client.layouts.main')
@section('title', 'Trang chủ')
@section('content')
<section id="banner" class="owl-carousel owl-theme">
    <div class="banner-item">
        <img src="{{ asset('assets/client') }}/images/banner.jpg" alt="">
    </div>
    <div class="banner-item">
        <img src="{{ asset('assets/client') }}/images/banner.jpg" alt="">
    </div>
    <div class="banner-item">
        <img src="{{ asset('assets/client') }}/images/banner.jpg" alt="">
    </div>
</section>

<section class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="welcome-img d-flex justify-content-center">
                    <img src="{{ asset('assets/client') }}/images/1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-8 mx-auto d-flex align-items-center h-100">
                    <div class="welcome-content">
                        <h2 class="mb-3 animated bounce">Welcome</h2>
                        <p>Chúng tôi mong muốn cung cấp cho bạn những bộ quần áo độc đáo được làm bằng tất cả tâm huyết
                            và trái tim vậy nên
                            Fredom.6ix chắc chắn sẽ có thứ bạn đang tìm kiếm.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="collection" class="owl-carousel owl-theme">
    <div class="collection-item">
        <div class="collection-wrap">
            <div class="collection-content">
                <h1 class="collection-content--title">lemon project</h1>
                <p class="collection-content--des">Bộ sưu tập mới nhất của chúng tôi đã ra mắt, hãy cùng xem nhé</p>
                <a href="" class="btn-discover">khám phá</a>
            </div>
        </div>
        <img src="{{ asset('assets/client') }}/images/collection-1.png" alt="">
    </div>
    <div class="collection-item">
        <div class="collection-wrap">
            <div class="collection-content">
                <h1 class="collection-content--title">glow</h1>
                <p class="collection-content--des">Bộ sưu tập mới nhất của chúng tôi đã ra mắt</p>
                <a href="" class="btn-discover">khám phá</a>
            </div>
        </div>
        <img src="{{ asset('assets/client') }}/images/collection-2.jpg" alt="">
    </div>
</section>

<section id="intro" class="welcome owl-carousel owl-theme">
    <div class="intro-item">
        <div class="d-flex justify-content-center">
            <div class="intro-content ">
                <div class="intro-content--box w-50 text-center mb-4 mx-auto">
                    <span class="ti-quote-right"></span>
                    <p>The name comes from the original Japanese translation - Moon. We've always been enchanted by her astrological beauty.</p>
                </div>
                <div class="intro-content--author d-flex justify-content-center align-items-center">
                    <div class="logo">
                        <img src="{{ asset('assets/client') }}/images/logo.png" alt="">
                    </div>
                    <strong>fredom.6ix</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-item">
        <div class="d-flex justify-content-center">
            <div class="intro-content ">
                <div class="intro-content--box w-50 text-center mb-5 mx-auto">
                    <span class="ti-quote-right"></span>
                    <p>The name comes from the original Japanese translation - Moon. We've always been enchanted by her astrological beauty.</p>
                </div>
                <div class="intro-content--author d-flex justify-content-center align-items-center">
                    <div class="logo">
                        <img src="{{ asset('assets/client') }}/images/logo.png" alt="">
                    </div>
                    <strong>fredom.6ix</strong>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
