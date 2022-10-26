@extends('layouts.app')

@section('css')
    <style>
        .image {
            position: relative;
            overflow: hidden;
            padding-bottom: 65%;
        }

        .image img {
            position: absolute;
        }

        .image-text {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .5px;
            line-height: 24px;
            text-transform: uppercase;
            background-color: rgba(80, 85, 87, .8);
            border-radius: 4px;
            bottom: 16px;
            color: #fff;
            line-height: 32px;
            position: absolute;
            text-align: center;
            text-decoration: none;
            width: 320px;
            left: 50%;
            transform: translate(-50%);
        }

        .banner-image {
            position: relative;
            overflow: hidden;
            height: 80px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background-position: 50%;
            background-repeat: no-repeat;
            background-image:
                linear-gradient(0deg, rgba(0, 0, 0, .7) 0, transparent),
                url('https://styles.redditmedia.com/t5_2qwis/styles/bannerBackgroundImage_xsfxgk8a28g01.png');
        }

        .banner-image img {
            position: absolute;

        }

        .banner-text {
            position: absolute;
            bottom: 8px;
            left: 16px;
        }
    </style>
@endsection

@section('content')
    <section class="section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg" style="max-width: 664px;">

                    <!-- BUAT POSTINGAN -->
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex flex-row align-items-center m-1">
                                <div class="m-1">
                                    <img src="{{ asset('assets') }}/img/profile-img.jpg" class="rounded-circle"
                                        style="max-width: 38px;">
                                </div>
                                <div class="mx-1 flex-grow-1">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mx-2">
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="bi bi-image"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- END BUAT POSTINGAN -->

                    <!-- SORTING -->
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex flex-row align-items-center m-1">
                                <div class="m-2">
                                    <button type="button" class="btn btn-primary rounded-pill">
                                        <i class="bi bi-stars"></i>
                                        Best
                                    </button>
                                </div>
                                <div class="m-2">
                                    <button type="button" class="btn btn-outline-primary rounded-pill">
                                        <i class="bi bi-fire"></i>
                                        Hot
                                    </button>
                                </div>
                                <div class="m-2">
                                    <button type="button" class="btn btn-outline-primary rounded-pill">
                                        <i class="bi bi-fire"></i>
                                        New
                                    </button>
                                </div>
                                <div class="m-2">
                                    <button type="button" class="btn btn-outline-primary rounded-pill">
                                        <i class="bi bi-fire"></i>
                                        Top
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- END SORTING -->

                    <!-- POSTINGAN -->
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex flex-row">
                                <div class="bg-light text-dark">
                                    <div class="d-flex flex-column align-items-center m-2">
                                        <div>
                                            <button type="button" class="btn btn-outline-primary"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-up"></i>
                                            </button>
                                        </div>
                                        <div class="my-1">6969</div>
                                        <div>
                                            <button type="button" class="btn btn-outline-danger"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex flex-column">
                                        <div class="m-2">
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="me-2">
                                                    <img src="https://picsum.photos/50" class="rounded-circle"
                                                        style="max-width: 24px">
                                                </div>
                                                <div class="lh-1">
                                                    <span>k/indonesia</span>
                                                    <span>-</span>
                                                    <span>Diposting oleh</span>
                                                    <span>u/madang_bae</span>
                                                    <span>10 jam yang lalu</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-2 fw-semibold fs-5 lh-1">
                                            Mail Sabri congratulating Rishi Sunak on his appointment as the new PM of UK
                                        </div>
                                        <div class="m-2 lh-sm">
                                            Hello! I can use some feedback.

                                            So I expressed to my boss some safety concerns around the office and that I
                                            would feel unsafe. Due to safety concerns, I would have to quit if the new
                                            policies were implemented.

                                            I had a meeting with my boss, and it did not go well. The entire time they said
                                            stuff along the lines of "if you don't want to work here, then resign". The tone
                                            of the meeting sounded like they wanted me to quit on the spot, and grew
                                            agitated when I told them I would have to think about it. They said they need a
                                            response by the end of the day.

                                            I heard that they are typing up my resignation letter and want me to sign it.
                                            What should I do? I do all my work and I feel like this is all coming from the
                                            fact that I expressed safety concerns over new policies.
                                        </div>
                                        <div class="mt-1">
                                            <div class="image">
                                                <img src="https://picsum.photos/700/2000" class="img img-fluid">
                                                <div class="image-text">
                                                    LIHAT GAMBAR PENUH</div>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="mx-2">
                                                    <i class="bi bi-chat-left"></i>
                                                </div>
                                                <div>6969 Komentar</div>
                                                <div class="mx-2">
                                                    <i class="bi bi-arrow-90deg-right"></i>
                                                </div>
                                                <div>Bagikan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- END POSTINGAN -->

                </div>

                <!-- SIDEBAR KANAN -->
                <div class="col-lg d-none d-lg-block" style="max-width: 336px;">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div>
                                    <div class="banner-image">
                                        <img class="img img-fluid">
                                        <div class="banner-text text-white fs-6 fw-semibold">Komunitas Trending</div>
                                    </div>
                                </div>
                                <div>

                                    <!-- FOREACH DAFTAR KOMUNITAS -->
                                    <div class="d-flex flex-row align-items-center border-top">
                                        <div class="flex-grow-1 m-2">
                                            <div class="d-flex flex-row align-items-center mx-2">
                                                <div class="fw-semibold">1</div>
                                                <div class="mx-2">
                                                    <img src="{{ asset('assets') }}/img/profile-img.jpg"
                                                        class="rounded-circle" style="max-width: 32px;">
                                                </div>
                                                <div class="fw-semibold">k/madang</div>
                                            </div>
                                        </div>
                                        <div class="me-3">
                                            <button type="button" class="btn btn-primary btn-sm rounded-pill fw-semibold"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Gabung</button>
                                        </div>
                                    </div><!-- END FOREACH DAFTAR KOMUNITAS -->

                                    <div>
                                        <div class="d-grid gap-2 m-2">
                                            <button class="btn btn-primary btn-sm rounded-pill fw-semibold"
                                                type="button">Lihat Semua</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- END SIDEBAR KANAN -->

            </div>
        </div>
    </section>
@endsection
