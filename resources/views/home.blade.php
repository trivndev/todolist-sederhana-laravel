<x-layouts.main-app>
    <div class="mt-16 sm:mt-24 flex flex-col items-center justify-center transition-all duration-300 sm:-space-y-2">
        <lottie-player
            src="https://lottie.host/7b34b9e4-f305-4416-ba45-21ab61295ae1/BGWR1qpg1w.json"
            background="transparent"
            speed="1"
            class="aspect-square size-64 sm:size-72 md:size-64"
            loop
            autoplay>
        </lottie-player>
        <h1 id="greetingsToUser"
            class="text-center text-2xl font-medium transition-all duration-300 sm:text-2xl md:text-3xl"></h1>
        <div class="flex items-center opacity-0 transition-all duration-300" id="greetings">
            <flux:text id="greetingsText"
                       class="text-center text-lg font-medium transition-all duration-300 sm:text-xl md:text-2xl"></flux:text>
            <lottie-player id="running-animation"
                           src="https://lottie.host/19a9f84e-2a62-47fc-92ed-478ef3628cdc/5jjVPn7Jbd.json"
                           background="transparent"
                           speed="1"
                           class="-ml-4 hidden aspect-square size-18 sm:block"
                           loop
                           autoplay
            ></lottie-player>
        </div>
        <flux:button href="/todolist"
                     id="start-btn"
                     class="hidden opacity-0 transition-opacity duration-700 mt-2"
        >
            Let's go 🔥
        </flux:button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const withCursor = window.innerWidth < 640;
            new TypeIt("#greetingsToUser", {
                strings: [
                    "Welcome, {{ Auth::user()->name }} 😀"
                ],
                breakLines: false,
                waitUntilVisible: true,
                cursor: withCursor,
                afterComplete: function () {
                    setTimeout(function () {
                        const cursor = document.querySelector('#greetingsToUser .ti-cursor');
                        if (cursor) {
                            cursor.remove()
                        }
                        document.getElementById("greetings").classList.remove("opacity-0");
                        let loop = false;
                        new TypeIt("#greetings>#greetingsText", {
                            strings: [
                                "Feeling good? Let’s get things moving.",
                                "Organize your life. One task at a time.",
                            ],
                            speed: 90,
                            breakLines: false,
                            waitUntilVisible: true,
                            cursor: withCursor,
                            loop: loop,
                            afterComplete: function () {
                                let btn = document.getElementById("start-btn");

                                btn.classList.remove("hidden");

                                setTimeout(() => {
                                    btn.classList.remove("opacity-0");
                                }, 10);

                                const runnerAnimation = document.getElementById('running-animation');
                                runnerAnimation.addEventListener('click', () => {
                                    loop = true;
                                });
                            }
                        }).go();
                    }, 300)
                }
            }).go();
        });
    </script>
</x-layouts.main-app>
