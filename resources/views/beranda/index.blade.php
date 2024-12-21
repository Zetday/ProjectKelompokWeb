@extends('layouts.beranda.app')

@section('content')
    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Anggota</h2>
            <p>Daftar Anggota</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row-12 gy-4 d-flex justify-content-evenly">
                @foreach ($profiles as $profil)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <a href="{{ route('profil.show', $profil->NIM) }}" >
                                    <img src="{{ asset('storage/' . $profil->foto) }}" class="img-fluid" alt="">
                                </a>
                                    <div class="social">
                                        <a href="https://youtu.be/dQw4w9WgXcQ?si=8AFm6XDDASqeYnLv"><i
                                                class="bi bi-twitter-x"></i></a>
                                        <a href="https://youtu.be/dQw4w9WgXcQ?si=8AFm6XDDASqeYnLv"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="https://youtu.be/dQw4w9WgXcQ?si=8AFm6XDDASqeYnLv"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="https://youtu.be/dQw4w9WgXcQ?si=8AFm6XDDASqeYnLv"><i
                                                class="bi bi-youtube"></i></a>
                                    </div>
                                </div>
                                <a href="{{ route('profil.show', $profil->NIM) }}">
                                    <div class="member-info text-center">
                                        <h4>{{ $profil->nama_mahasiswa }}</h4>
                                        <span>{{ $profil->NIM }}</span>
                                    </div>
                                </a>
                            </div>
                        </div><!-- End Team Member -->
                @endforeach

            </div>

        </div>

    </section><!-- /Team Section -->
@endsection
