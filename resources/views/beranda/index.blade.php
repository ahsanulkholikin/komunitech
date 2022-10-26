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
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
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
                                    <input type="text" class="form-control" placeholder="Buat Postingan">
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

                    <!-- FOREACH POSTINGAN -->
                    @livewire('post-list')
                    <!-- END FOREACH POSTINGAN -->

                </div>

                <!-- SIDEBAR KANAN -->
                <div class="col-lg d-none d-lg-block" style="max-width: 336px;">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div>
                                    <div class="banner-image">
                                        <img class="img img-fluid">
                                        <div class="banner-text text-white fs-6 fw-semibold">Komunitas Rekomendasi</div>
                                    </div>
                                </div>
                                <div>

                                    <!-- FOREACH DAFTAR KOMUNITAS -->
                                    @foreach ($recommended_komunitas as $item)
                                        <div class="d-flex flex-row align-items-center border-top">
                                            <div class="flex-grow-1 m-2">
                                                <div class="d-flex flex-row align-items-center mx-2">
                                                    <div class="fw-semibold">{{ $loop->iteration }}</div>
                                                    <div class="mx-2">
                                                        <img src="{{ $item->logo }}" class="rounded-circle"
                                                            style="max-width: 32px;">
                                                    </div>
                                                    <div class="fw-semibold lh-1">k/{{ $item->slug }}</div>
                                                </div>
                                            </div>
                                            <div class="me-3">
                                                <button type="button"
                                                    class="btn btn-primary btn-sm rounded-pill fw-semibold"
                                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Gabung</button>
                                            </div>
                                        </div><!-- END FOREACH DAFTAR KOMUNITAS -->
                                    @endforeach

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

@section('js')
    <script type="text/javascript">
        window.isLoading = false
        window.onscroll = ev => {
            // Check scroll position
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                // Check loading flag
                if (window.isLoading) {
                    return true
                }
                // Load more data
                window.livewire.emit('load-more');
                // Set the flag to disable loading
                window.isLoading = true;
            }
        };
        // To reset the isLoading flag we'll emit an event from the Livewire component to the browser
        window.addEventListener('loading-complete', event => {
            window.isLoading = false;
        })
    </script>
@endsection
