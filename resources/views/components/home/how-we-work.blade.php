<div class="bg-[#145D76] py-16 px-4 sm:px-[5%] text-white font-poppins">

    <!-- HEADING -->
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-white text-3xl md:text-5xl font-extrabold leading-[1.1] mb-8">
            Simplified
            <span class="text-[#4DB8E1]">Booth <span class="italic font-light">Activation</span></span>
        </h2>
        <p class="text-white text-sm md:text-lg">
            A structured pathway connecting you with global exhibition leaders in just four streamlined stages.
        </p>
    </div>

    <div class="flex flex-col md:flex-row justify-center items-center gap-10">

        <!-- LEFT STEPS (HIDDEN ON MOBILE) -->
        <div class="hidden md:block md:w-[25%]">
            <div class="space-y-6">
                <div class="step-item active" data-step="0">Step-1</div>
                <div class="step-item" data-step="1">Step-2</div>
                <div class="step-item" data-step="2">Step-3</div>
                <div class="step-item" data-step="3">Step-4</div>
            </div>
        </div>

        <!-- RIGHT CIRCLE -->
        <div class="w-full md:w-fit flex justify-center">

            <div class="relative 
                w-[340px] h-[340px]">

                <!-- SVG -->
                <svg class="absolute inset-0 w-full h-full -rotate-90">
                    <circle cx="50%" cy="50%" r="45%" stroke="#ffffff10" stroke-width="2" fill="none" />

                    <circle id="progressArc" cx="50%" cy="50%" r="45%" stroke="#4DB8E1" stroke-width="4"
                        fill="none" stroke-linecap="round" />
                </svg>

                <!-- POINTS WITH NUMBERS -->
                <div class="point active" data-step="0" style="top:6%; left:50%">1</div>
                <div class="point" data-step="1" style="top:50%; right:-3%">2</div>
                <div class="point" data-step="2"style="bottom:-3%; left:50%">3</div>
                <div class="point" data-step="3" style="top:50%; left:5%">4</div>

                <!-- CONTENT -->
                <div class="absolute inset-0 flex items-center justify-center text-center px-4 sm:px-6">
                    <div class="px-3">
                        <p id="desc" class="text-white text-xs sm:text-sm mb-2 sm:mb-3"></p>
                        <h3 id="title" class="text-sm sm:text-lg md:text-xl font-bold leading-snug"></h3>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<style>
    .step-item {
        cursor: pointer;
        font-weight: 600;
        color: white;
        transition: 0.3s;
    }

    .step-item.active {
        color: #4DB8E1;
        transform: translateX(6px);
    }

    svg {
        pointer-events: none;
    }

    /* POINTS WITH NUMBERS */
    .point {
        position: absolute;
        width: 22px;
        height: 22px;
        background: #ffffff20;
        border: 2px solid #ffffff40;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        cursor: pointer;
        transition: 0.3s;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 10px;
        font-weight: 600;
        color: #fff;
    }

    @media (min-width: 640px) {
        .point {
            width: 26px;
            height: 26px;
            font-size: 11px;
        }
    }

    @media (min-width: 768px) {
        .point {
            width: 30px;
            height: 30px;
            font-size: 12px;
        }
    }

    .point.active {
        background: #4DB8E1;
        border-color: #4DB8E1;
        color: #0B2333;
        transform: translate(-50%, -50%) scale(1.2);
    }
</style>

<script>
    const data = [{
            title: "Requirement Analysis",
            desc: "Tell us your needs and booth specifications. We dive deep to find the perfect fit."
        },
        {
            title: "Builder Matching",
            desc: "Get tailored quotes and compare portfolios of pre-vetted top builders side-by-side."
        },
        {
            title: "Expert Consultation",
            desc: "Connect directly with industry experts to finalize designs and technical strategies."
        },
        {
            title: "Project Execution",
            desc: "Finalize your deal and launch your booth with full confidence on the global stage."
        }
    ];

    const steps = document.querySelectorAll('.step-item');
    const points = document.querySelectorAll('.point');

    const title = document.getElementById('title');
    const desc = document.getElementById('desc');
    const arc = document.getElementById('progressArc');

    // ✅ Dynamic circumference (fix for responsiveness)
    const radius = arc.r.baseVal.value;
    const circumference = 2 * Math.PI * radius;

    arc.style.strokeDasharray = circumference;
    arc.style.strokeDashoffset = circumference;

    function setActive(index) {
        index = Number(index);

        steps.forEach(s => s.classList.remove('active'));
        points.forEach(p => p.classList.remove('active'));

        if (steps[index]) steps[index].classList.add('active');
        if (points[index]) points[index].classList.add('active');

        title.innerText = data[index].title;
        desc.innerText = data[index].desc;

        const progress = (index + 1) / data.length;
        const offset = circumference - (progress * circumference);

        arc.style.strokeDashoffset = offset;
    }

    // Click events
    steps.forEach(s => {
        s.addEventListener('click', () => setActive(s.dataset.step));
    });

    points.forEach(p => {
        p.addEventListener('click', () => setActive(p.dataset.step));
    });

    // Init
    setActive(0);
</script>
