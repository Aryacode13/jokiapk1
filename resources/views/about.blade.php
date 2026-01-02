@extends('layouts.app')

@section('title', 'About Us - Joki Web & Mobile Development')
@section('description', 'Tentang kami - Joki Web & Mobile Development Services')

@section('content')
<div class="py-20 bg-dark-bg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Tentang Kami</h1>
            <p class="text-dark-text text-lg max-w-2xl mx-auto">Kami adalah tim profesional yang berdedikasi untuk membantu bisnis Anda berkembang melalui teknologi</p>
        </div>

        <!-- About Content -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-dark-grey border border-primary-800 rounded-lg p-8 mb-8">
                <h2 class="text-2xl font-semibold text-white mb-4">Visi Kami</h2>
                <p class="text-dark-text leading-relaxed">
                    Menjadi partner terpercaya dalam pengembangan web dan mobile application yang membantu bisnis mencapai tujuan mereka melalui solusi teknologi yang inovatif dan berkualitas tinggi.
                </p>
            </div>

            <div class="bg-dark-grey border border-primary-800 rounded-lg p-8 mb-8">
                <h2 class="text-2xl font-semibold text-white mb-4">Misi Kami</h2>
                <ul class="space-y-3 text-dark-text">
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-3">✓</span>
                        <span>Memberikan layanan development dengan kualitas terbaik dan mengikuti best practices</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-3">✓</span>
                        <span>Membangun aplikasi yang scalable, maintainable, dan user-friendly</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-3">✓</span>
                        <span>Memberikan support dan maintenance yang responsif dan profesional</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-3">✓</span>
                        <span>Menggunakan teknologi terbaru untuk memberikan solusi yang modern dan efisien</span>
                    </li>
                </ul>
            </div>

            <!-- Values -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-dark-grey border border-primary-800 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">Professionalism</h3>
                    <p class="text-dark-text">Kami bekerja dengan standar profesional tinggi dan komitmen terhadap kualitas.</p>
                </div>

                <div class="bg-dark-grey border border-primary-800 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">Innovation</h3>
                    <p class="text-dark-text">Selalu mengikuti perkembangan teknologi terbaru untuk memberikan solusi terbaik.</p>
                </div>

                <div class="bg-dark-grey border border-primary-800 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">Reliability</h3>
                    <p class="text-dark-text">Komitmen terhadap deadline dan kualitas hasil kerja yang konsisten.</p>
                </div>

                <div class="bg-dark-grey border border-primary-800 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">Customer Focus</h3>
                    <p class="text-dark-text">Kepuasan klien adalah prioritas utama dalam setiap project yang kami kerjakan.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center">
                <a href="{{ route('contact') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors inline-block">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

