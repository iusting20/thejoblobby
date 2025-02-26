@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-6 py-16 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                <span class="block xl:inline">Streamline Your Clinic's HR</span>
                <span class="block text-[#FF2D20] dark:text-[#FF2D20] xl:inline">with Our Powerful SaaS Platform</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 dark:text-gray-400 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl">
                Simplify HR management, boost productivity, and ensure compliance with our all-in-one solution designed specifically for medical clinics.
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center">
                <div class="rounded-md shadow">
                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-[#FF2D20] hover:bg-[#FF2D20]/90 md:py-4 md:text-lg md:px-10">
                        Get Started
                    </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-[#FF2D20] bg-[#FF2D20]/10 hover:bg-[#FF2D20]/20 md:py-4 md:text-lg md:px-10">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Features Section -->
    <div class="py-12 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-[#FF2D20] font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Everything You Need to Succeed
                </p>
            </div>
    
            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-[#FF2D20] text-white">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Employee Management</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                            Easily manage employee records, track time off, and streamline onboarding and offboarding processes.
                        </dd>
                    </div>
    
                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-[#FF2D20] text-white">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Compliance Management</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                            Stay compliant with industry regulations and standards, including HIPAA, with our built-in compliance tools and alerts.
                        </dd>
                    </div>
    
                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-[#FF2D20] text-white">
                                <!-- Heroicon name: outline/lightning-bolt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Performance Management</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                            Set goals, conduct performance reviews, and provide feedback to help your employees grow and succeed.
                        </dd>
                    </div>
    
                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-[#FF2D20] text-white">
                                <!-- Heroicon name: outline/annotation -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Reporting and Analytics</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-400">
                            Gain valuable insights into your workforce with our comprehensive reporting and analytics tools.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    
    <!-- CTA Section -->
    <div class="bg-[#FF2D20] dark:bg-[#FF2D20]">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Ready to Simplify Your HR?</span>
                <span class="block text-white/90">Start your free trial today.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-[#FF2D20] bg-white hover:bg-white/90">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection 