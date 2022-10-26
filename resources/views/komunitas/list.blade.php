@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg" style="max-width: 1000px;">
                    <div class="pagetitle">
                        <h1>Komunitas</h1>
                    </div>
                    <div class="card">
                        <div class="card-body p-0">

                            <!-- FOREACH LIST KOMUNITAS -->
                            @foreach ($komunitas as $item)
                                <div class="d-flex flex-row align-items-center p-3 border border-secondary">
                                    <div>
                                        <img src="{{ $item->logo }}" class="rounded-circle" style="max-width: 36px;">
                                    </div>
                                    <div class="flex-grow-1 mx-2" style="transform: rotate(0);">
                                        <div class="d-flex flex-column">
                                            <div>
                                                <span class="fw-semibold">k/{{ $item->slug }}</span>
                                                <span>&#x2022;</span>
                                                <span>{{ $item->users->count('id') }}</span>
                                                <span>Member</span>
                                            </div>
                                            <div class="lh-1">
                                                <a href="{{ route('k.detail', $item->slug) }}" class="stretched-link"></a>
                                                {{ $item->deskripsi }}
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-light rounded-pill text-primary fw-semibold">Gabung</button>
                                    </div>
                                </div>
                            @endforeach
                            <!-- END FOREACH LIST KOMUNITAS -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
