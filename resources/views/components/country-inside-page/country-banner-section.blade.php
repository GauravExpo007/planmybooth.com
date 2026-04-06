<div class="relative bg-bottom bg-no-repeat bg-fixed font-poppins" id="blogPage"
    style="background-image: url('{{ asset('assets/banner/home_banner.webp') }}');">
    <div
        class="bg-[#2F556A]/60 flex flex-col mt-[-80px] min-h-[40rem] md:min-h-[30rem] md:flex-row gap-5 py-20 p-5 md:pt-10 justify-center items-center">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-black/60 to-black/40"></div>
        <!-- First Section -->
        <section
            class="w-full mt-10 md:w-[90%] mx-auto flex flex-col justify-center items-center gap-5 relative z-10 ">

            <h1
                class="text-white text-xl lg:text-2xl xl:text-4xl tracking-wide text-center font-[Poppins] font-bold">
                {{ $page->title }}
            </h1>
            <p style="color: white ;">{{ $page?->country?->name }}</p>
        </section>
    </div>
</div>
