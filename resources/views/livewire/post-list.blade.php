<div>
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
                                    <div class="me-2">
                                        <img src="{{ $item->komunitas->logo }}" class="rounded-circle"
                                            style="max-width: 24px">
                                    </div>
                                    <div class="lh-1">
                                        <span><a href="#">k/{{ $item->komunitas->slug }}</a></span>
                                        <span>&#8226;</span>
                                        <span>Diposting oleh</span>
                                        <span><a href="#">u/{{ $item->user->username }}</a></span>
                                        <span>{{ $item->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-2 fw-semibold fs-5 lh-1">
                                <a href="#">{{ $item->judul }}</a>
                            </div>
                            <div class="m-2 lh-sm">
                                {{ $item->konten }}
                            </div>
                            @if ($item->media->isNotEmpty())
                                <div class="mt-1">
                                    <div class="image">
                                        <img src="{{ $item->media->pluck('url')->first() }}" class="img img-fluid">
                                        <div class="image-text">lihat gambar penuh</div>
                                    </div>
                                </div>
                            @endif
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
        </div>
    @endforeach
    <div wire:loading>
        Loading...
    </div>
</div>
