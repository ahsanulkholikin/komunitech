@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg" style="max-width: 664px;">

                    <!-- POSTINGAN -->
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex flex-row mb-2 border-bottom">
                                <div class="bg-light text-dark">
                                    <div class="d-flex flex-column align-items-center m-2">
                                        <div>
                                            <button type="button" class="btn btn-outline-primary"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-up"></i>
                                            </button>
                                        </div>
                                        <div class="my-1">{{ $post->vote->sum('vote') }}</div>
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
                                                    <span><a href="#">u/{{ $post->user->username }}</a></span>
                                                    <span>{{ $post->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-2 fw-semibold fs-5 lh-1">
                                            {{ $post->judul }}
                                        </div>
                                        <div class="m-2 lh-sm">
                                            {{ $post->konten }}
                                        </div>
                                        @if ($post->media->isNotEmpty())
                                            @if ($post->media->first()->tipe == 'gambar')
                                                <div class="mt-1" style="transform: rotate(0);">
                                                    <div class="image">
                                                        <img src="{{ $post->media->pluck('url')->first() }}"
                                                            class="img img-fluid">
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                        <div class="m-1">
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="mx-2">
                                                    <i class="bi bi-chat-left"></i>
                                                </div>
                                                <div>{{ $post->comment->count('id') }} Komentar</div>
                                                <div class="mx-2">
                                                    <i class="bi bi-arrow-90deg-right"></i>
                                                </div>
                                                <div>Bagikan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 d-flex flex-column border-bottom">
                                <div>
                                    <div id="editor"></div>
                                </div>
                                <div class="ms-auto pt-2">
                                    <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill">Komentar</button>
                                </div>
                            </div>

                            <!-- FOREACH KOMENTAR -->
                            @foreach ($komentar as $item)
                            {{ $item }}
                                <div class="pt-3 px-3 d-flex flex-row">
                                    <div>
                                        <img src="https://picsum.photos/200" class="rounded-circle" style="max-width: 32px">
                                    </div>
                                    <div class="ms-2">
                                        <div class="d-flex flex-column">
                                            <div>
                                                <span class="fw-semibold"><a href="#">u/{{ $item->user->username }}</a></span>
                                                <span>&#8226;</span>
                                                <span>{{ $item->created_at->diffForHumans() }}</span>
                                            </div>
                                            <div class="my-2 lh-sm">
                                                {{ $item->komentar }}
                                            </div>
                                            <div>
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm">
                                                            <i class="bi bi-reply"></i>
                                                            Balas
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- END FOREACH KOMENTAR -->

                        </div>
                    </div><!-- END POSTINGAN -->

                </div>

                <!-- SIDEBAR KANAN -->
                <div class="col-lg d-none d-lg-block" style="max-width: 336px;">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class="p-3 bg-dark text-white fw-semibold">
                                    Tentang Komunitas
                                </div>
                                <div class="d-flex flex-row align-items-center p-3">
                                    <div class="me-2">
                                        <img src="{{ $komunitas->logo }}" class="img-fluid rounded-circle"
                                            style="max-width: 54px;">
                                    </div>
                                    <div>
                                        <a href="#" class="text-reset fw-semibold">k/{{ $komunitas->slug }}</a>
                                    </div>
                                </div>
                                <div class="px-3 pb-1 lh-sm">
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
                </div><!-- END SIDEBAR KANAN -->

            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Berikan komentar...',
        });
    </script>
@endsection
