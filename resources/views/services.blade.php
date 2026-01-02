@extends('layouts.app')

@section('title', 'Services - Joki Web & Mobile Development')
@section('description', 'Layanan joki web dan mobile development yang kami tawarkan')

@section('content')
<div class="py-20 bg-dark-bg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Layanan Kami</h1>
            <p class="text-dark-text text-lg max-w-2xl mx-auto">Kami menyediakan berbagai layanan development untuk memenuhi kebutuhan bisnis Anda</p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Web Development -->
            <div class="bg-dark-grey border border-primary-800 rounded-lg p-8 hover:border-primary-600 transition-colors">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-600 to-primary-800 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-white mb-4">Web Development</h3>
                <p class="text-dark-text mb-4">Pembuatan website modern dan responsive dengan teknologi terbaru seperti Laravel, React, Vue.js, dan lainnya.</p>
                <ul class="space-y-2 text-dark-text text-sm">
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>Custom Web Application</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>E-Commerce Platform</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>Company Profile Website</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>Web API Development</span>
                    </li>
                </ul>
            </div>

            <!-- Mobile Development -->
            <div class="bg-dark-grey border border-primary-800 rounded-lg p-8 hover:border-primary-600 transition-colors">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-600 to-primary-800 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-white mb-4">Mobile Development</h3>
                <p class="text-dark-text mb-4">Pengembangan aplikasi mobile untuk iOS dan Android dengan performa optimal dan user experience yang baik.</p>
                <ul class="space-y-2 text-dark-text text-sm">
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>Native iOS & Android Apps</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>Cross-Platform Apps (React Native, Flutter)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>Mobile API Integration</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>App Store Optimization</span>
                    </li>
                </ul>
            </div>

            <!-- Maintenance & Support -->
            <div class="bg-dark-grey border border-primary-800 rounded-lg p-8 hover:border-primary-600 transition-colors">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-600 to-primary-800 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-white mb-4">Maintenance & Support</h3>
                <p class="text-dark-text mb-4">Layanan maintenance dan support untuk menjaga aplikasi Anda tetap berjalan optimal dan up-to-date.</p>
                <ul class="space-y-2 text-dark-text text-sm">
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>Bug Fixing & Updates</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>Performance Optimization</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>Security Updates</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary-400 mr-2">•</span>
                        <span>24/7 Technical Support</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Process Section -->
        <div class="bg-dark-grey border border-primary-800 rounded-lg p-8 mb-16">
            <h2 class="text-3xl font-semibold text-white mb-8 text-center">Proses Kerja Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold">1</span>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Konsultasi</h3>
                    <p class="text-dark-text text-sm">Diskusi kebutuhan dan requirement project</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold">2</span>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Planning</h3>
                    <p class="text-dark-text text-sm">Perencanaan dan timeline project</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold">3</span>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Development</h3>
                    <p class="text-dark-text text-sm">Pengerjaan dengan update progress berkala</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold">4</span>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Delivery</h3>
                    <p class="text-dark-text text-sm">Testing, deployment, dan support</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center">
            <a href="{{ route('contact') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors inline-block">
                Konsultasi Gratis
            </a>
        </div>
    </div>
</div>
@endsection

