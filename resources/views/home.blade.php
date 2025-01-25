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
</x-layout>
