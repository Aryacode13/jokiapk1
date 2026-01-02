@extends('layouts.app')

@section('title', 'Portfolio - Joki Web & Mobile Development')
@section('description', 'Portfolio project yang telah kami kerjakan')

@section('content')
<div class="py-20 bg-dark-bg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Portfolio</h1>
            <p class="text-dark-text text-lg max-w-2xl mx-auto">Beberapa project yang telah kami kerjakan dengan hasil yang memuaskan</p>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Portfolio Item 1 -->
            <a href="{{ route('mobile-apps') }}" class="bg-dark-grey border border-primary-800 rounded-lg overflow-hidden hover:border-primary-600 transition-colors block">
                <div class="h-48 bg-dark-bg overflow-hidden">
                    <img src="{{ asset('images/mobiletum.png') }}" alt="Mobile Apps" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Mobile Apps</h3>
                    <p class="text-dark-text text-sm mb-3">Aplikasi mobile dengan keamanan tinggi dan UX yang intuitif</p>
                    <p class="text-primary-400 text-xs font-medium">Klik untuk melihat semua portofolio mobile apps</p>
                </div>
            </a>

            <!-- Portfolio Item 3 -->
            <a href="{{ route('company-profile') }}" class="bg-dark-grey border border-primary-800 rounded-lg overflow-hidden hover:border-primary-600 transition-colors block">
                <div class="h-48 bg-dark-bg overflow-hidden">
                    <img src="{{ asset('images/companytum.png') }}" alt="Company Profile Website" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Company Profile Website</h3>
                    <p class="text-dark-text text-sm mb-3">Website company profile modern dan responsive</p>
                    <p class="text-primary-400 text-xs font-medium">Klik untuk melihat semua portofolio company profile</p>
                </div>
            </a>

        </div>

        <!-- CTA -->
        <div class="text-center mt-16">
            <p class="text-dark-text mb-6">Ingin melihat project Anda di sini?</p>
            <a href="{{ route('contact') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors inline-block">
                Mulai Project Anda
            </a>
        </div>
    </div>
</div>
@endsection

