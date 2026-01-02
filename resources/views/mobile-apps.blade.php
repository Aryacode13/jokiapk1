@extends('layouts.app')

@section('title', 'Mobile Apps Projects - Joki Web & Mobile Development')
@section('description', 'Koleksi aplikasi mobile yang telah kami buat dengan desain modern dan user experience yang intuitif')

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
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Mobile Apps Projects</h1>
            <p class="text-dark-text text-lg max-w-2xl mx-auto">Koleksi aplikasi mobile yang telah kami buat dengan desain modern dan user experience yang intuitif</p>
        </div>

        <!-- Projects List -->
        <div class="max-w-4xl mx-auto space-y-24">
            <!-- Project 1: Mile X -->
            <div>
                <!-- Image -->
                <div class="w-full bg-dark-bg p-4 mb-8">
                    <img src="{{ asset('images/mobileapps.png') }}" alt="Mile X" class="w-full h-auto object-contain max-h-[350px] mx-auto">
                </div>
                <!-- Description -->
                <div class="mb-16">
                    <h2 class="text-2xl font-bold text-white mb-6">Mile X</h2>
                    <p class="text-dark-text leading-relaxed mb-8">
                        Mile X adalah aplikasi Flutter untuk manajemen aktivitas olahraga dan event. Menggunakan Supabase sebagai backend, terintegrasi dengan Strava API untuk sinkronisasi aktivitas, dan Firebase untuk push notifications. Fitur utama: autentikasi (Strava OAuth, Google Sign-In, Email/OTP), dashboard aktivitas dan event, sistem pendaftaran event, integrasi payment gateway menggunakan Midtrans untuk pembayaran event, dan panel admin. Aplikasi ini mendukung Android, iOS, dan Web untuk komunitas olahraga.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Flutter</span>
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Dart</span>
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Supabase</span>
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Firebase</span>
                        <span class="px-3 py-1 bg-primary-800 text-primary-200 rounded-full text-xs font-medium">Midtrans</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-20 max-w-3xl mx-auto">
            <h3 class="text-2xl font-bold text-white mb-4">Ingin Aplikasi Mobile Seperti Ini?</h3>
            <p class="text-dark-text mb-6">Hubungi kami untuk konsultasi gratis dan dapatkan aplikasi mobile profesional untuk bisnis Anda</p>
            <a href="{{ route('contact') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors inline-block">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>
@endsection

