<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LaraPress</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: radial-gradient(circle at top right, #1e293b, #0f172a 60%);
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background-color: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(12px);
            padding: 20px 50px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky; top: 0; z-index: 100;
        }
        .navbar .logo { font-size: 22px; font-weight: 800; color: #38bdf8; }
        .navbar .nav-links a {
            margin-left: 28px; text-decoration: none; color: #94a3b8; font-weight: 600; font-size: 14px; transition: all 0.3s ease;
        }
        .navbar .nav-links a:hover, .navbar .nav-links a.active { color: #38bdf8; text-shadow: 0 0 10px rgba(56, 189, 248, 0.4); }

        .container {
            flex: 1; display: flex; align-items: center; justify-content: center; padding: 40px 20px;
        }
        .about-grid {
            display: grid; grid-template-columns: 1fr 2fr; gap: 30px;
            width: 100%; max-width: 920px;
        }
        .side-card, .main-card {
            background: rgba(30, 41, 59, 0.5); backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1); padding: 35px; border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
        }
        .side-card { display: flex; flex-direction: column; gap: 18px; }
        .side-card h3 { font-size: 18px; color: #fff; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px; font-weight: 700; }
        .side-item label { color: #38bdf8; font-size: 11px; font-weight: 700; display: block; margin-bottom: 3px; letter-spacing: 0.5px; }
        .side-item span { color: #e2e8f0; font-size: 14px; font-weight: 500; }
        
        h1 { font-size: 22px; color: #ffffff; margin-bottom: 12px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px; font-weight: 800; }
        p.desc { color: #94a3b8; font-size: 14px; line-height: 1.7; margin-bottom: 20px; }
        
        .timeline { border-left: 2px solid rgba(56, 189, 248, 0.3); padding-left: 20px; margin-top: 10px; margin-bottom: 25px; }
        .timeline-item { position: relative; margin-bottom: 20px; }
        .timeline-item::before { content: ''; position: absolute; left: -26px; top: 4px; width: 10px; height: 10px; border-radius: 50%; background: #38bdf8; box-shadow: 0 0 10px #38bdf8; }
        .timeline-title { color: #f8fafc; font-size: 14px; font-weight: 700; }
        .timeline-desc { color: #94a3b8; font-size: 13px; line-height: 1.6; margin-top: 2px; }

        .cta-group { display: flex; gap: 12px; }
        .btn {
            display: inline-block; padding: 10px 20px;
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            color: #ffffff; text-decoration: none; border-radius: 8px; font-weight: 700; font-size: 13px;
            box-shadow: 0 4px 16px rgba(2, 132, 199, 0.35); transition: all 0.3s ease;
        }
        .btn:hover { transform: translateY(-2px); }
        .btn-outline {
            background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255, 255, 255, 0.15); color: #94a3b8;
            box-shadow: none;
        }
        .btn-outline:hover { color: #fff; border-color: rgba(255,255,255,0.3); }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">LaraPress</div>
        <div class="nav-links">
            <a href="/">Beranda</a>
            <a href="/tentang-kami" class="active">Tentang Kami</a>
            <a href="/kontak">Kontak</a>
        </div>
    </div>

    <div class="container">
        <div class="about-grid">
            <div class="side-card">
                <h3>Biografi Ringkas</h3>
                <div class="side-item">
                    <label>NAMA</label>
                    <span>Kholil Irsyad Marwan</span>
                </div>
                <div class="side-item">
                    <label>FOKUS UTAMA</label>
                    <span>Data Science & Analytics</span>
                </div>
                <div class="side-item">
                    <label>HOBI & MINAT</label>
                    <span>Data Exploration, Gaming, Reading Tech Articles, & Coding</span>
                </div>
            </div>

            <div class="main-card">
                <h1>Metodologi & Alur Kerja Data</h1>
                <p class="desc">Aplikasi web <b>LaraPress</b> berbasis <b>Laravel 12</b> ini difungsikan sebagai platform portofolio untuk menyajikan proses eksplorasi data secara terstruktur dan profesional.</p>
                
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-title">Data Cleaning & Preprocessing (Python, Pandas)</div>
                        <div class="timeline-desc">Pembersihan dataset mentah, transformasi variabel, dan manipulasi data berkinerja tinggi.</div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-title">Exploratory Data Analysis (EDA & Visualisasi)</div>
                        <div class="timeline-desc">Ekstraksi pola, pengujian korelasi statistik, serta penyajian grafik analitis.</div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-title">Penerapan Web Integration (Laravel 12)</div>
                        <div class="timeline-desc">Integrasi laporan analisis data dan dashboard ke dalam antarmuka web modern.</div>
                    </div>
                </div>

                <div class="cta-group">
                    <a href="/kontak" class="btn">Lihat Repositori & Kontak →</a>
                    <a href="/" class="btn btn-outline">← Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>