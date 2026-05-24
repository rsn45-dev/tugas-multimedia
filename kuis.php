<?php
// Data Kuis (Bisa dikembangkan menggunakan Database MySQL nanti)
$kuis = [
    [
        "pertanyaan" => "Apa kepanjangan dari RAM?",
        "opsi" => ["Random Access Memory", "Read Access Memory", "Run Application Module", "Real Audio Media"],
        "jawaban" => 0
    ],
    [
        "pertanyaan" => "Perangkat mana yang berfungsi sebagai otak dari komputer?",
        "opsi" => ["Harddisk", "Monitor", "CPU", "Keyboard"],
        "jawaban" => 2
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Interaktif TIK</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> </head>
<body class="bg-gradient-to-br from-purple-900 to-black min-h-screen text-white flex flex-col justify-between">

    <header class="p-6 flex justify-between items-center bg-black/20">
        <h1 class="text-2xl font-black text-yellow-400">🎮 TIK CHALLENGE</h1>
        <a href="index.php" class="bg-white/20 px-4 py-2 rounded-lg hover:bg-white/30 transition">Keluar</a>
    </header>

    <main class="container mx-auto px-6 py-8 max-w-2xl bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 shadow-xl my-auto">
        <div id="quiz-container">
            <script>
                const dataKuis = <?php echo json_encode($kuis); ?>;
                let indeksSekarang = 0;
                let skor = 0;

                function tampilkanKuis() {
                    if (indeksSekarang >= dataKuis.length) {
                        tampilkanHasil();
                        return;
                    }

                    const soal = dataKuis[indeksSekarang];
                    let html = `<h2 class="text-2xl font-bold mb-6">Soal ${indeksSekarang + 1}: ${soal.pertanyaan}</h2>`;
                    html += `<div class="space-y-4">`;
                    
                    soal.opsi.forEach((opsi, i) => {
                        html += `
                            <button onclick="cekJawaban(${i})" class="w-full text-left bg-white/20 hover:bg-pink-600 p-4 rounded-xl font-semibold transition duration-200 border border-white/10 transform hover:scale-102">
                                ${String.fromCharCode(65 + i)}. ${opsi}
                            </button>
                        `;
                    });
                    html += `</div>`;
                    
                    document.getElementById('quiz-container').innerHTML = html;
                }

                function cekJawaban(pilihan) {
                    const jawabanBenar = dataKuis[indeksSekarang].jawaban;
                    if (pilihan === jawabanBenar) {
                        skor += 50; // Per soal 50 poin
                        Swal.fire({ title: 'Keren! Jawaban Benar 🚀', icon: 'success', timer: 1200, showConfirmButton: false, background: '#1e1b4b', color: '#fff' });
                    } else {
                        Swal.fire({ title: 'Yah, Kurang Tepat 😢', icon: 'error', timer: 1200, showConfirmButton: false, background: '#1e1b4b', color: '#fff' });
                    }
                    
                    indeksSekarang++;
                    setTimeout(tampilkanKuis, 1300);
                }

                function tampilkanHasil() {
                    document.getElementById('quiz-container').innerHTML = `
                        <div class="text-center py-8">
                            <h2 class="text-4xl font-extrabold mb-4 text-yellow-400">Kuis Selesai! 🎉</h2>
                            <p class="text-2xl mb-6">Total Skor Kamu: <span class="text-pink-400 font-black">${skor}</span> / 100</p>
                            <button onclick="location.reload()" class="bg-gradient-to-r from-pink-500 to-purple-600 px-6 py-3 rounded-full font-bold hover:opacity-90 transition transform hover:scale-105">Main Lagi</button>
                        </div>
                    `;
                }

                // Jalankan kuis pertama kali saat halaman dimuat
                window.onload = tampilkanKuis;
            </script>
        </div>
    </main>

    <footer class="text-center py-6 text-sm text-gray-500">
        Gunakan kemampuan terbaikmu!
    </footer>
</body>
</html>