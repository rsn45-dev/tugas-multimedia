<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimedia Pembelajaran TIK</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-700 min-h-screen text-white font-sans overflow-x-hidden">

    <header class="p-6 flex justify-between items-center backdrop-blur-md bg-white/10 sticky top-0 z-50">
        <h1 class="text-2xl font-black tracking-wider animate__animated animate__bounceInLeft">⚡ TIK SMART LEARNING</h1>
        <nav class="space-x-6 text-lg font-semibold">
            <a href="index.php" class="hover:text-pink-400 transition duration-300">Home</a>
            <a href="materi.php" class="hover:text-pink-400 transition duration-300">Materi</a>
            <a href="kuis.php" class="hover:text-pink-400 transition duration-300">Kuis Interaktif</a>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-16 text-center">
        <div class="animate__animated animate__zoomIn">
            <h2 class="text-5xl md:text-7xl font-extrabold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-yellow-300 to-pink-400">
                Belajar TIK Jadi Lebih Seru!
            </h2>
            <p class="text-xl md:text-2xl text-purple-200 max-w-2xl mx-auto mb-12">
                Eksplorasi dunia teknologi, pemrograman, dan multimedia dengan metode yang interaktif dan menyenangkan.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white/10 p-8 rounded-2xl backdrop-blur-lg border border-white/20 transform hover:scale-105 transition duration-300 hover:shadow-2xl hover:bg-white/20 group text-left cursor-pointer" onclick="window.location.href='materi.php'">
                <div class="text-4xl mb-4 group-hover:animate-bounce">📖</div>
                <h3 class="text-2xl font-bold mb-2">Modul & Video Tutorial</h3>
                <p class="text-purple-200">Pelajari Microsoft Office, Dasar Komputer, hingga Jaringan dengan video visual yang menarik.</p>
                <span class="inline-block mt-4 text-pink-400 font-bold group-hover:translate-x-2 transition duration-300">Mulai Belajar →</span>
            </div>

            <div class="bg-white/10 p-8 rounded-2xl backdrop-blur-lg border border-white/20 transform hover:scale-105 transition duration-300 hover:shadow-2xl hover:bg-white/20 group text-left cursor-pointer" onclick="window.location.href='kuis.php'">
                <div class="text-4xl mb-4 group-hover:animate-spin">🎮</div>
                <h3 class="text-2xl font-bold mb-2">Kuis & Game Interaktif</h3>
                <p class="text-purple-200">Uji kemampuan TIK kamu di sini dan dapatkan skor tertinggi secara real-time!</p>
                <span class="inline-block mt-4 text-pink-400 font-bold group-hover:translate-x-2 transition duration-300">Mainkan Sekarang →</span>
            </div>
        </div>
    </main>

    <footer class="text-center py-8 text-sm text-purple-300">
        &copy; <?php echo date('Y'); ?> TIK Smart Learning - Multimedia Interaktif.
    </footer>
</body>
</html>