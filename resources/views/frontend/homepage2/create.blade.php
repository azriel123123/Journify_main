<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Create Journal</title>
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
            <section class="mx-4 md:mx-8 mb-10">
                <!-- Tombol Back -->
                <div class="mb-6">
                    <button onclick="history.back()"
                        class="inline-flex items-center text-indigo-700 hover:text-indigo-900 font-semibold transition text-base">
                        <i class="fas fa-arrow-left mr-2"></i> Back
                    </button>
                </div>

                <!-- Judul -->
                <h2 class="text-3xl font-extrabold mb-8 text-indigo-800 drop-shadow-md">Create Journal</h2>

                <!-- Form -->
                <form class="space-y-8 bg-white/40 border border-white/30 backdrop-blur-2xl rounded-3xl shadow-xl p-8">
                    <div>
                        <label class="block text-lg font-semibold text-indigo-800 mb-2">Journal Title</label>
                        <input type="text"
                            class="w-full p-4 rounded-xl border border-indigo-200 bg-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-300 shadow-inner"
                            placeholder="Enter your journal title..." />
                    </div>
                    <!-- Question 1 -->
                    <div>
                        <label class="block text-lg font-semibold text-indigo-800 mb-2">How do you feel today?</label>
                        <textarea rows="3"
                            class="w-full p-4 rounded-xl border border-indigo-200 bg-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-300 resize-none shadow-inner"
                            placeholder="Describe your mood..."></textarea>
                    </div>

                    <!-- Question 2 -->
                    <div>
                        <label class="block text-lg font-semibold text-indigo-800 mb-2">What was the highlight of your
                            day?</label>
                        <textarea rows="3"
                            class="w-full p-4 rounded-xl border border-indigo-200 bg-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-300 resize-none shadow-inner"
                            placeholder="Tell us about a moment that stood out..."></textarea>
                    </div>

                    <!-- Question 3 -->
                    <div>
                        <label class="block text-lg font-semibold text-indigo-800 mb-2">Anything you're grateful
                            for?</label>
                        <textarea rows="3"
                            class="w-full p-4 rounded-xl border border-indigo-200 bg-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-300 resize-none shadow-inner"
                            placeholder="Write something you're thankful for..."></textarea>
                    </div>

                    <!-- Deskripsi Tambahan -->
                    <div>
                        <label class="block text-lg font-semibold text-indigo-800 mb-2">Additional Notes or
                            Description</label>
                        <textarea rows="4"
                            class="w-full p-4 rounded-xl border border-indigo-200 bg-white/60 focus:outline-none focus:ring-2 focus:ring-indigo-300 resize-none shadow-inner"
                            placeholder="Write any additional notes or reflection..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-right">
                        <button type="submit"
                            class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl shadow-md transition">
                            Save Journal
                        </button>
                    </div>
                </form>
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
