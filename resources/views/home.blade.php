@extends('layouts.app')

@section('title', 'Home - Joki Web & Mobile Development Services')
@section('description', 'Layanan joki web dan mobile development profesional dengan kualitas terbaik')

@section('content')
<div>
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-dark-bg via-dark-grey to-dark-bg py-20 lg:py-32">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    Joki Web & Mobile
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-primary-600">Development</span>
                </h1>
                <p class="text-lg sm:text-xl text-dark-text mb-8 max-w-2xl mx-auto">
                    Solusi profesional untuk kebutuhan web dan mobile development Anda. Kami membantu mewujudkan ide bisnis Anda menjadi aplikasi yang powerful dan modern.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                        Mulai Project
                    </a>
                    <a href="{{ route('portfolio') }}" class="bg-dark-grey hover:bg-opacity-80 border border-primary-600 text-primary-400 px-8 py-3 rounded-lg font-semibold transition-colors">
                        Lihat Portfolio
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-dark-grey">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Layanan Kami</h2>
                <p class="text-dark-text max-w-2xl mx-auto">Kami menyediakan berbagai layanan development untuk memenuhi kebutuhan bisnis Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-dark-bg border border-primary-800 rounded-lg p-6 hover:border-primary-600 transition-colors">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-600 to-primary-800 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Web Development</h3>
                    <p class="text-dark-text">Pembuatan website modern, responsive, dan user-friendly dengan teknologi terbaru.</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-dark-bg border border-primary-800 rounded-lg p-6 hover:border-primary-600 transition-colors">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-600 to-primary-800 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Mobile Development</h3>
                    <p class="text-dark-text">Pengembangan aplikasi mobile untuk iOS dan Android dengan performa optimal.</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-dark-bg border border-primary-800 rounded-lg p-6 hover:border-primary-600 transition-colors">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-600 to-primary-800 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Maintenance & Support</h3>
                    <p class="text-dark-text">Layanan maintenance dan support untuk menjaga aplikasi Anda tetap berjalan optimal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-dark-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Mengapa Pilih Kami?</h2>
                <p class="text-dark-text max-w-2xl mx-auto">Kami berkomitmen memberikan layanan terbaik dengan kualitas tinggi</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-600 to-primary-800 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">100%</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Satisfaction</h3>
                    <p class="text-dark-text text-sm">Kepuasan klien adalah prioritas utama kami</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-600 to-primary-800 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">24/7</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Support</h3>
                    <p class="text-dark-text text-sm">Layanan support tersedia setiap saat</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-600 to-primary-800 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">Fast</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Delivery</h3>
                    <p class="text-dark-text text-sm">Pengerjaan cepat tanpa mengorbankan kualitas</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-600 to-primary-800 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">✓</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Quality</h3>
                    <p class="text-dark-text text-sm">Kode bersih dan best practices</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary-800 to-primary-600">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Siap Memulai Project Anda?</h2>
            <p class="text-primary-100 mb-8 max-w-2xl mx-auto">Hubungi kami sekarang dan dapatkan konsultasi gratis untuk project Anda</p>
            <a href="{{ route('contact') }}" class="bg-white text-primary-600 hover:bg-primary-50 px-8 py-3 rounded-lg font-semibold transition-colors inline-block">
                Hubungi Kami
            </a>
        </div>
    </section>
</div>
@endsection

