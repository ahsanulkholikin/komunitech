@extends('layouts.app')

@section('css')
    <style>
        .banner-image {
            filter: none;
            height: 228px;
            display: block;
        }
    </style>
@endsection

@section('content')
    <div>
        <span class="banner-image"
            style="background: url('https://styles.redditmedia.com/t5_12p4l2/styles/bannerBackgroundImage_8bpawrt1alq91.jpg?width=4000&format=pjpg&s=c374ac3906b72bbebdcd79bc97b83bfdf32a6f00') center center / cover no-repeat rgb(51, 168, 255); filter: none; height: 228px;"></span>
    </div>

    <section class="section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg" style="max-width: 1000px;">
                    <div class="d-flex flex-row align-items-center my-1">
                        <div>
                            <img src="https://picsum.photos/72" class="rounded-circle" style="max-width: 72px;">
                        </div>
                        <div>
                            <div class="d-flex flex-row align-items-center ps-3">
                                <div class="pe-3">
                                    <div class="fw-bold fs-4">Genshin Impact Official</div>
                                    <div class="fw-semibold">r/Genshin_Impact</div>
                                </div>
                                <div class="align-self-stretch">
                                    <button type="button"
                                        class="btn btn-outline-primary btn-sm rounded-pill">Gabung</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section mt-4">
        <div class="container">
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

                </div>
                <div class="col-lg d-none d-lg-block" style="max-width: 336px;">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class="p-3 bg-dark text-white fw-semibold">
                                    Tentang Komunitas
                                </div>
                                <div class="p-3 lh-sm">
                                    This is the official community for Genshin Impact (原神), the latest open-world action RPG
                                    from HoYoverse. The game features a massive, gorgeous map, an elaborate elemental combat
                                    system, engaging storyline & characters, co-op game mode, soothing soundtrack, and much
                                    more for you to explore!
                                </div>
                                <div class="px-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="fs-4">
                                            <i class="bi bi-flower3"></i>
                                        </div>
                                        <div>
                                            <span>Dibuat pada</span>
                                            <span>17 Agustus 1945</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top p-2">
                                    <div class="d-flex flex-row justify-content-evenly lh-sm">
                                        <div>
                                            <div class="fw-semibold">12</div>
                                            <div>Member</div>
                                        </div>
                                        <div>
                                            <div class="fw-semibold">123</div>
                                            <div>Sedang Online</div>
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
@endsection

@section('js')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            var main = document.getElementById('main');
            main.classList.add('p-0');

            if (window.innerWidth > 1195) {
                var body = document.getElementById('main-body');
                body.classList.add('toggle-sidebar');
            }
        });
    </script>
@endsection
