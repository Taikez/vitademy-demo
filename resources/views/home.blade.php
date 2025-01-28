<x-layout>
    <x-slot:title>
        Vitademy Home
    </x-slot:title>

    <section class="lg:px-52 md:px-36 sm:px-24 xs:px-24 pb-12">
        <img src="{{ url('/images/header_image.jpg') }}" alt="">
        <div class="text-center mt-6">
            <div id="typed-output" class="lg:text-xl md:text-lg sm:text-md text-[#c8a5e6] font-bold mt-10 inline"></div>
            <h1 class="font-bold text-gray-100 text-center lg:text-5xl md:text-2xl sm:text-xl my-3">Welcome to Vitademy
            </h1>
            <p class="text-center text-gray-400">Where knowledge and reality meets.</p>
            <button
                class="rounded-lg border text-[#4d3462] bg-[#c8a5e6] px-5 py-2 font-semibold mt-8 transition-transform transform hover:scale-105 hover:bg-[#b78cd9] hover:text-white hover:shadow-lg">
                Start Learning
            </button>
        </div>
    </section>
    <section class="bg-gradient-to-r from-[#ddd5ee] via-[#af9dcb] to-[#cab7f0] dark:bg-gray-900">
        <div class="gap-8 py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden rounded-lg" src="{{ url('/images/omnidirectional_learning.jpg') }}"
                alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-8 text-4xl tracking-tight font-extrabold text-[#131214] dark:text-white">Omnidirectional
                    Learning: A 360° Approach to Education</h2>
                <p class="mb-2 font-light text-[#3b2f47] md:text-lg dark:text-gray-400 leading-relaxed">Experience a
                    learning
                    journey
                    that goes beyond traditional methods. Omnidirectional learning combines diverse perspectives,
                    interdisciplinary insights, and dynamic techniques to empower deeper understanding and real-world
                    problem-solving. By embracing multiple viewpoints and modes of exploration, it cultivates
                    creativity, critical thinking, and adaptability—preparing learners for a rapidly evolving world.</p>
                <button
                    class="rounded-lg border border-[#c8a5e6] text-[#c8a5e6] bg-[#4d3462] px-5 py-2 font-semibold mt-8 transition-all duration-300 ease-in-out transform hover:bg-[#b68ed9] hover:text-[#4d3462] hover:shadow-lg hover:scale-105">
                    See what it's all about
                </button>
            </div>
        </div>
    </section>
    <section class="p-10">
        <h1 class="font-bold text-gray-100 text-3xl my-3 text-center mb-8">Our most popular courses</h1>
        <div class="grid xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
            {{-- Brok, ini nanti kasih top 3 courses berdasarkan review terbaik yaw. --}}
            @for ($i = 0; $i < 3; $i++)
                <a href="#" class="bg-white p-8 rounded-lg transform transition-transform duration-300 hover:scale-105 shadow-lg hover:shadow-xl relative group overflow-hidden">
                    <img src="{{ url('/images/header_image.jpg') }}" alt="" class="rounded-md transition-transform duration-300">
                    <div class="absolute inset-0 bg-[#dbd0f3] bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <h1 class="font-bold pt-3 transition-colors duration-300">Course {{ $i+1 }}</h1>
                        <h1 class="text-gray-400 pb-3 transition-colors duration-300">Taikez</h1>
                        <p class="group-hover:text-gray-900 transition-colors duration-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nam cumque, reiciendis similique consectetur quam officia nisi provident aspernatur voluptatem quas voluptatum obcaecati dolorum? Enim suscipit voluptates repellat voluptatem porro.</p>
                    </div>
                </a>
            @endfor
        </div>
        <div class="text-center">
            <button
                class="rounded-lg border text-[#4d3462] bg-[#c8a5e6] px-5 py-2 font-semibold mt-8 transition-transform transform hover:scale-105 hover:bg-[#b78cd9] hover:text-white hover:shadow-lg">
                View all courses
            </button>
        </div>
    </section>
    <section class="bg-gradient-to-r from-[#ddd5ee] via-[#af9dcb] to-[#cab7f0] dark:bg-gray-900 p-16">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">All-Round Ecosystem</h2>
            <p class="mb-5 font-light text-gray-600 sm:text-xl">A Tribute to the New Era of Education.</p>
        </div>
        <div class="grid xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <div class="bg-[#f3edff] p-5 lg:p-10 rounded-3xl flex flex-col justify-between">
                <h1 class="text-xl lg:text-3xl font-bold text-center mb-5">VitaFree</h1>
                <p class="text-md lg:text-xl text-center font-light text-gray-400 mb-5">The perfect starting point for students, VitaFree offers basic resources and introductory courses to help you explore Vitademy.</p>
                <div class="flex justify-center items-baseline my-5">
                    <span class="mr-2 text-xl lg:text-3xl font-extrabold">IDR 0.00</span>
                    <span class="text-gray-500 dark:text-gray-400">/forever</span>
                </div>
                <ul role="list" class="my-12 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">Limited learning templates</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">Limited modules</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">Free 30 minutes consultation</span>
                    </li>
                </ul>
                <button
                    class="rounded-3xl border border-[#f3edff] text-[#f3edff] bg-[#4d3462] px-5 py-2 font-semibold mt-8 transition-all duration-300 ease-in-out transform hover:bg-[#ddbff7] hover:text-[#705288] hover:shadow-lg hover:scale-105 w-full">
                    Get Started
                </button>
            </div>
            <div class="bg-[#f3edff] p-5 lg:p-10 rounded-3xl flex flex-col justify-between">
                <span class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-green-500 text-white text-sm font-bold rounded-full px-3 py-1">Most Popular</span>
                <h1 class="text-xl lg:text-3xl font-bold text-center mb-5">VitaStandard</h1>
                <p class="text-md lg:text-xl text-center font-light text-gray-400 mb-5">Aimed at dedicated learners, VitaStandard provides access to a wider range of courses and interactive content for deeper knowledge and skills.</p>
                <div class="flex justify-center items-baseline my-5">
                    <span class="mr-2 text-xl lg:text-3xl font-extrabold">IDR 100,000.00</span>
                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                </div>
                <ul role="list" class="my-12 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">All K12 modules</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">All K12 digital products</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">Topical consultation</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">Student program</span>
                    </li>
                </ul>
                <button
                    class="rounded-3xl border border-[#f3edff] text-[#f3edff] bg-[#4d3462] px-5 py-2 font-semibold mt-8 transition-all duration-300 ease-in-out transform hover:bg-[#ddbff7] hover:text-[#705288] hover:shadow-lg hover:scale-105 w-full">
                    Get Started
                </button>
            </div>
            <div class="bg-[#f3edff] p-5 lg:p-10 rounded-3xl flex flex-col justify-between">
                <h1 class="text-xl lg:text-3xl font-bold text-center mb-5">VitaPremium</h1>
                <p class="text-md lg:text-xl text-center font-light text-gray-400 mb-5">Unlock the full potential of your learning with VitaPremium, featuring unlimited access to all courses, exclusive content, and personalized mentorship.</p>
                <div class="flex justify-center items-baseline my-5">
                    <span class="mr-2 text-xl lg:text-3xl font-extrabold">IDR 1,000,000.00</span>
                    <span class="text-gray-500 dark:text-gray-400">/year</span>
                </div>
                <ul role="list" class="my-12 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">All advanced modules</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">All digital product bundles</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 lg:w-10 lg:h-10 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="lg:text-xl font-light">Unlimited consultations</span>
                    </li>
                </ul>
                <button
                    class="rounded-3xl border border-[#f3edff] text-[#f3edff] bg-[#4d3462] px-5 py-2 font-semibold mt-8 transition-all duration-300 ease-in-out transform hover:bg-[#ddbff7] hover:text-[#705288] hover:shadow-lg hover:scale-105 w-full">
                    Get Started
                </button>
            </div>
        </div>
    </section>
</x-layout>
