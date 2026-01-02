@extends('layouts.app')

@section('title', 'Company Profile Projects - Joki Web & Mobile Development')
@section('description', 'Koleksi website company profile yang telah kami buat menggunakan Laravel PHP')

@section('content')
<div class="py-20 bg-dark-bg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center text-primary-400 hover:text-primary-300 mb-6 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Portfolio
            </a>
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Company Profile Projects</h1>
            <p class="text-dark-text text-lg max-w-2xl mx-auto">Koleksi website company profile yang telah kami buat dengan desain modern dan responsive</p>
        </div>

        <!-- Projects List -->
        <div class="max-w-4xl mx-auto space-y-24">
            <!-- Project 1: JokiAPK.id -->
            <div>
                <!-- Image -->
                <div class="w-full bg-dark-bg p-4 mb-8">
                    <img src="{{ asset('images/company.png') }}" alt="JokiAPK.id" class="w-full h-auto object-contain max-h-[350px] mx-auto">
                </div>
                <!-- Description -->
                <div class="mb-16">
                    <h2 class="text-2xl font-bold text-white mb-6">JokiAPK.id</h2>
                    <p class="text-dark-text leading-relaxed mb-8">
                        Web profile jokiAPK.id dibuat menggunakan Laravel PHP. Website company profile modern dan responsive dengan tema ungu, hitam, dan dark grey. Menampilkan informasi tentang layanan joki web dan mobile development dengan desain yang clean dan simple. Website ini dilengkapi dengan fitur responsive design, sticky footer, dan header dengan efek fade out saat scroll.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">PHP</span>
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Alpine.js</span>
                    </div>
                </div>
            </div>

            <!-- Project 2: Lari Terus -->
            <div>
                <!-- Image -->
                <div class="w-full bg-dark-bg p-4 mb-8">
                    <img src="{{ asset('images/company-profile-2.png') }}" alt="Lari Terus" class="w-full h-auto object-contain max-h-[350px] mx-auto">
                </div>
                <!-- Description -->
                <div class="mb-16">
                    <h2 class="text-2xl font-bold text-white mb-6">Lari Terus</h2>
                    <p class="text-dark-text leading-relaxed mb-8">
                        Web profile dari vendor bernama Lari Terus, menampilkan informasi tentang vendor dan menampilkan race result. Website ini dirancang khusus untuk vendor race timing solution dengan fitur untuk menampilkan hasil lomba dan informasi event. Website ini memiliki desain yang modern dengan layout yang memudahkan pengunjung untuk melihat informasi vendor dan hasil race yang telah dilaksanakan.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Flutter</span>
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Dart</span>
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Supabase</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-20 max-w-3xl mx-auto">
            <h3 class="text-2xl font-bold text-white mb-4">Ingin Website Company Profile Seperti Ini?</h3>
            <p class="text-dark-text mb-6">Hubungi kami untuk konsultasi gratis dan dapatkan website company profile profesional untuk bisnis Anda</p>
            <a href="{{ route('contact') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors inline-block">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>
@endsection

