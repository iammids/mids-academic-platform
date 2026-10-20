
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIDS — My Integrated Daily Study</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
       
    </style>
</head>

<body>
    <div class="layout">

        <aside class="sidebar">
            <div class="brand">MIDS.</div>
            <p class="brand-subtitle">My Integrated Daily Study</p>

            <nav class="menu">
                <p class="menu-label">MENU UTAMA</p>
                <a href="#" class="active">⌂ &nbsp; Dashboard</a>
                <a href="#">▦ &nbsp; Jadwal Kuliah</a>
                <a href="#">✓ &nbsp; Tugas & Deadline</a>
                <a href="#">▣ &nbsp; Kalender Akademik</a>
                <a href="#">◎ &nbsp; Target Belajar</a>
            </nav>
        </aside>

        <main class="main">
            <header class="topbar">
                <div>
                    <h1>Dashboard</h1>
                    <p class="subtitle">Ringkasan aktivitas akademikmu.</p>
                </div>

                <div class="profile">
                    <div class="avatar">M</div>
                    <div class="profile-name">
                        <strong>Mahasiswa</strong>
                        <p class="subtitle">Student Account</p>
                    </div>
                </div>
            </header>

            <section class="welcome">
                <h2>Halo, selamat datang! 👋</h2>
                <p>
                    Atur jadwal, selesaikan tugas, dan capai target belajarmu.
                    Mulai langkah kecil hari ini untuk hasil yang lebih baik.
                </p>
            </section>

            <section>
                <div class="section-heading">
                    <h2>Ringkasan Akademik</h2>
                    <span>Data contoh</span>
                </div>

                <div class="stats">
                    <div class="card">
                        <p class="stat-label">Jadwal Hari Ini</p>
                        <p class="stat-value">3</p>
                        <p class="stat-note">Kegiatan terjadwal</p>
                    </div>

                    <div class="card">
                        <p class="stat-label">Tugas Aktif</p>
                        <p class="stat-value">5</p>
                        <p class="stat-note">Perlu diperhatikan</p>
                    </div>

                    <div class="card">
                        <p class="stat-label">Deadline Dekat</p>
                        <p class="stat-value">2</p>
                        <p class="stat-note">Segera diselesaikan</p>
                    </div>

                    <div class="card">
                        <p class="stat-label">Target Belajar</p>
                        <p class="stat-value">70%</p>
                        <p class="stat-note">Progres mingguan</p>
                    </div>
                </div>
            </section>

            <div class="content-grid">
                <section class="card">
                    <div class="section-heading">
                        <h2>Tugas Mendatang</h2>
                        <span>Lihat semua →</span>
                    </div>

                    <div class="task">
                        <div class="task-icon">📝</div>
                        <div class="task-info">
                            <h3>Makalah Bahasa Indonesia</h3>
                            <p>Bahasa Indonesia · Contoh tugas</p>
                        </div>
                        <span class="tag">Besok</span>
                    </div>

                    <div class="task">
                        <div class="task-icon">💻</div>
                        <div class="task-info">
                            <h3>Praktikum Pemrograman</h3>
                            <p>Informatika · Contoh tugas</p>
                        </div>
                        <span class="tag">3 hari</span>
                    </div>

                    <div class="task">
                        <div class="task-icon">📚</div>
                        <div class="task-info">
                            <h3>Belajar untuk UTS</h3>
                            <p>Persiapan akademik · Contoh</p>
                        </div>
                        <span class="tag">1 minggu</span>
                    </div>
                </section>

                <section class="card">
                    <div class="section-heading">
                        <h2>Jadwal Kuliah</h2>
                        <span>Hari ini</span>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">08.00</div>
                        <div class="schedule-info">
                            <h3>Algoritma dan Pemrograman</h3>
                            <p>Ruang kelas · Contoh jadwal</p>
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">10.00</div>
                        <div class="schedule-info">
                            <h3>Matematika Diskrit</h3>
                            <p>Ruang kelas · Contoh jadwal</p>
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">13.00</div>
                        <div class="schedule-info">
                            <h3>Pengantar Informatika</h3>
                            <p>Ruang kelas · Contoh jadwal</p>
                        </div>
                    </div>
                </section>
            </div>
        </main>

    </div>
</body>
</html>
