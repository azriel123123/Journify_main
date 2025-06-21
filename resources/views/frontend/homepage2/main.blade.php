<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dynamic Journal Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif']
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-gradient-to-tr from-indigo-100 via-pink-100 to-yellow-100 min-h-screen text-gray-900 font-inter">

    <div class="max-w-7xl mx-auto px-4 py-10 flex flex-col md:flex-row gap-10">
        <!-- Main Content -->
        <main class="flex-1">
            <!-- Mood Categories -->
            <section class="mb-10 mx-4 md:mx-8">
                <h2 class="text-3xl font-extrabold mb-6 text-indigo-800 drop-shadow-md">Mood Categories</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                    <!-- Example Category Card -->
                    <div class="relative overflow-hidden rounded-2xl cursor-pointer transform transition hover:scale-105 z-0 hover:z-10 group"
                        role="button" tabindex="0">
                        <img src="https://storage.googleapis.com/a1aa/image/1769f1d0-0e6b-4a4e-e25e-45dc1c7f0b18.jpg"
                            alt="Happy Mood"
                            class="w-full h-[140px] object-cover brightness-75 rounded-2xl group-hover:brightness-90 transition" />
                        <div class="absolute bottom-3 left-4 text-white font-bold text-xl drop-shadow-md select-none">
                            Happy</div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl cursor-pointer transform transition hover:scale-105 z-0 hover:z-10 group"
                        role="button" tabindex="0">
                        <img src="https://storage.googleapis.com/a1aa/image/1769f1d0-0e6b-4a4e-e25e-45dc1c7f0b18.jpg"
                            alt="Happy Mood"
                            class="w-full h-[140px] object-cover brightness-75 rounded-2xl group-hover:brightness-90 transition" />
                        <div class="absolute bottom-3 left-4 text-white font-bold text-xl drop-shadow-md select-none">
                            Happy</div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl cursor-pointer transform transition hover:scale-105 z-0 hover:z-10 group"
                        role="button" tabindex="0">
                        <img src="https://storage.googleapis.com/a1aa/image/1769f1d0-0e6b-4a4e-e25e-45dc1c7f0b18.jpg"
                            alt="Happy Mood"
                            class="w-full h-[140px] object-cover brightness-75 rounded-2xl group-hover:brightness-90 transition" />
                        <div class="absolute bottom-3 left-4 text-white font-bold text-xl drop-shadow-md select-none">
                            Happy</div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl cursor-pointer transform transition hover:scale-105 z-0 hover:z-10 group"
                        role="button" tabindex="0">
                        <img src="https://storage.googleapis.com/a1aa/image/1769f1d0-0e6b-4a4e-e25e-45dc1c7f0b18.jpg"
                            alt="Happy Mood"
                            class="w-full h-[140px] object-cover brightness-75 rounded-2xl group-hover:brightness-90 transition" />
                        <div class="absolute bottom-3 left-4 text-white font-bold text-xl drop-shadow-md select-none">
                            Happy</div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl cursor-pointer transform transition hover:scale-105 z-0 hover:z-10 group"
                        role="button" tabindex="0">
                        <img src="https://storage.googleapis.com/a1aa/image/1769f1d0-0e6b-4a4e-e25e-45dc1c7f0b18.jpg"
                            alt="Happy Mood"
                            class="w-full h-[140px] object-cover brightness-75 rounded-2xl group-hover:brightness-90 transition" />
                        <div class="absolute bottom-3 left-4 text-white font-bold text-xl drop-shadow-md select-none">
                            Happy</div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl cursor-pointer transform transition hover:scale-105 z-0 hover:z-10 group"
                        role="button" tabindex="0">
                        <img src="https://storage.googleapis.com/a1aa/image/1769f1d0-0e6b-4a4e-e25e-45dc1c7f0b18.jpg"
                            alt="Happy Mood"
                            class="w-full h-[140px] object-cover brightness-75 rounded-2xl group-hover:brightness-90 transition" />
                        <div class="absolute bottom-3 left-4 text-white font-bold text-xl drop-shadow-md select-none">
                            Happy</div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl cursor-pointer transform transition hover:scale-105 z-0 hover:z-10 group"
                        role="button" tabindex="0">
                        <img src="https://storage.googleapis.com/a1aa/image/1769f1d0-0e6b-4a4e-e25e-45dc1c7f0b18.jpg"
                            alt="Happy Mood"
                            class="w-full h-[140px] object-cover brightness-75 rounded-2xl group-hover:brightness-90 transition" />
                        <div class="absolute bottom-3 left-4 text-white font-bold text-xl drop-shadow-md select-none">
                            Happy</div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl cursor-pointer transform transition hover:scale-105 z-0 hover:z-10 group"
                        role="button" tabindex="0">
                        <img src="https://storage.googleapis.com/a1aa/image/1769f1d0-0e6b-4a4e-e25e-45dc1c7f0b18.jpg"
                            alt="Happy Mood"
                            class="w-full h-[140px] object-cover brightness-75 rounded-2xl group-hover:brightness-90 transition" />
                        <div class="absolute bottom-3 left-4 text-white font-bold text-xl drop-shadow-md select-none">
                            Happy</div>
                    </div>
                </div>
            </section>

            <!-- Journal Cards -->
            <section>
                <h2 class="text-3xl font-extrabold mb-8 text-indigo-800 drop-shadow-md mx-4 md:mx-8">Your Journals</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mx-4 md:mx-8">
                    <!-- Contoh Journal -->
                    <article
                        class="relative group bg-white/10 border border-white/20 backdrop-blur-2xl rounded-3xl overflow-hidden p-8 shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 hover:border-white/30">

                        <!-- Icon mood -->
                        <div
                            class="absolute top-4 right-4 bg-white/20 rounded-full p-2 text-xl text-indigo-700 backdrop-blur-sm shadow-md">
                            🌞
                        </div>

                        <!-- Gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-white/5 via-white/0 to-white/5 rounded-3xl group-hover:from-white/10 transition duration-300">
                        </div>

                        <!-- Content -->
                        <h3 class="relative z-10 text-2xl font-bold mb-4 text-indigo-900 drop-shadow-sm">
                            A Joyful Morning
                        </h3>
                        <p class="relative z-10 text-indigo-800 mb-6 leading-relaxed">
                            Woke up feeling energized and ready to conquer the day. The sun was shining bright and the
                            birds were singing.
                        </p>
                        <time class="relative z-10 text-sm text-indigo-700 font-semibold" datetime="2024-06-01">
                            June 1, 2024
                        </time>
                    </article>
                    <!-- Salin dan ganti kontennya -->
                </div>
            </section>
        </main>

        <!-- Sidebar -->
        <aside class="w-full md:w-80 bg-white rounded-3xl shadow-xl p-8 flex flex-col items-center sticky top-10 h-fit">
            <h2 class="text-3xl font-extrabold mb-8 text-indigo-700 drop-shadow-md">Music Player</h2>
            <img class="rounded-3xl shadow-lg mb-6 w-64 h-64 object-cover"
                src="https://storage.googleapis.com/a1aa/image/c14602bb-4ee5-42a4-a96f-723cc2d4c7e6.jpg"
                alt="Album cover" />
            <div class="text-center mb-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-1">Dreamscape</h3>
                <p class="text-gray-600 text-sm">Artist: Synthwave Collective</p>
            </div>
            <audio class="w-full rounded-xl shadow-inner mb-6" controls>
                <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg" />
            </audio>
            <div class="flex justify-center space-x-10 text-indigo-600 text-3xl select-none">
                <button type="button" aria-label="Previous track"
                    class="hover:text-indigo-900 transition-transform active:scale-90">
                    <i class="fas fa-backward"></i>
                </button>
                <button type="button" aria-label="Play/Pause"
                    class="hover:text-indigo-900 transition-transform active:scale-90">
                    <i class="fas fa-play"></i>
                </button>
                <button type="button" aria-label="Next track"
                    class="hover:text-indigo-900 transition-transform active:scale-90">
                    <i class="fas fa-forward"></i>
                </button>
            </div>
        </aside>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const audio = document.querySelector('audio');
            const playBtn = document.querySelector('button[aria-label="Play/Pause"]');
            const playIcon = playBtn.querySelector('i');

            playBtn.addEventListener('click', function() {
                if (audio.paused) {
                    audio.play();
                    playIcon.classList.remove('fa-play');
                    playIcon.classList.add('fa-pause');
                } else {
                    audio.pause();
                    playIcon.classList.remove('fa-pause');
                    playIcon.classList.add('fa-play');
                }
            });
        });
    </script>

</body>

</html>
