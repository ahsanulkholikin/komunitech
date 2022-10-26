@extends('layouts.app')

@section('css')
    <style>
        .banner-image {
            filter: none;
            height: 228px;
            display: block;
        }

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
    </style>
@endsection

@section('content')
    <div>
        <span class="banner-image"
            style="background: url('{{ $komunitas->banner }}') center center / cover no-repeat rgb(51, 168, 255); filter: none; height: 228px;"></span>
    </div>

    <section class="section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg" style="max-width: 1000px;">
                    <div class="d-flex flex-row align-items-center my-1">
                        <div>
                            <img src="{{ $komunitas->logo }}" class="rounded-circle" style="max-width: 72px;">
                        </div>
                        <div>
                            <div class="d-flex flex-row align-items-center ps-3">
                                <div class="pe-3">
                                    <div class="fw-bold fs-4">{{ $komunitas->nama }}</div>
                                    <div class="fw-semibold">r/{{ $komunitas->slug }}</div>
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

                    <!-- FOREACH POSTINGAN -->
                    @foreach ($posts as $item)
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
                                            <div class="my-1">{{ $item->vote->sum('vote') }}</div>
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
                                                    <div class="lh-1">
                                                        <span>Diposting oleh</span>
                                                        <span><a href="#">u/{{ $item->user->username }}</a></span>
                                                        <span>{{ $item->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-2 fw-semibold fs-5 lh-1" style="transform: rotate(0);">
                                                <a href="{{ route('p.detail', ['k_slug' => $item->komunitas->slug, 'id' => $item->encoded_id, 'p_slug' => $item->slug]) }}"
                                                    class="text-reset stretched-link">{{ $item->judul }}</a>
                                            </div>
                                            <div class="m-2 lh-sm" style="transform: rotate(0);">
                                                <a href="{{ route('p.detail', ['k_slug' => $item->komunitas->slug, 'id' => $item->encoded_id, 'p_slug' => $item->slug]) }}"
                                                    class="text-reset stretched-link">{{ $item->konten }}</a>
                                            </div>
                                            @if ($item->media->isNotEmpty())
                                                <div class="mt-1" style="transform: rotate(0);">
                                                    <div class="image">
                                                        <img src="{{ $item->media->pluck('url')->first() }}"
                                                            class="img img-fluid">
                                                        <div class="image-text"><a href="#"
                                                                class="text-reset stretched-link">lihat gambar penuh</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="m-1">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div class="mx-2">
                                                        <i class="bi bi-chat-left"></i>
                                                    </div>
                                                    <div>{{ $item->comment->count('id') }} Komentar</div>
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
                        </div>
                    @endforeach
                    <!-- END FOREACH POSTINGAN -->

                </div>
                <div class="col-lg d-none d-lg-block" style="max-width: 336px;">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class="p-3 bg-dark text-white fw-semibold">
                                    Tentang Komunitas
                                </div>
                                <div class="px-3 pt-3 pb-1 lh-sm">
                                    {{ $komunitas->deskripsi }}
                                </div>
                                <div class="px-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="fs-4">
                                            <i class="bi bi-flower3"></i>
                                        </div>
                                        <div>
                                            <span>Dibuat pada</span>
                                            <span>{{ $komunitas->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top p-2">
                                    <div class="d-flex flex-row justify-content-evenly lh-sm">
                                        <div>
                                            <div class="fw-semibold">{{ $komunitas->users->count() }}</div>
                                            <div>Member</div>
                                        </div>
                                        <div>
                                            <div class="fw-semibold">1</div>
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
