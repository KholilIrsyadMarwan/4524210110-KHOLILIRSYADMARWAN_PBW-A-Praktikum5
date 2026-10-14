<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - LaraPress</title>
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
        .navbar .logo { font-size: 22px; font-weight: 800; color: #38bdf8; letter-spacing: 0.5px; }
        .navbar .nav-links a {
            margin-left: 28px; text-decoration: none; color: #94a3b8; font-weight: 600; font-size: 14px; transition: all 0.3s ease;
        }
        .navbar .nav-links a:hover, .navbar .nav-links a.active { color: #38bdf8; text-shadow: 0 0 10px rgba(56, 189, 248, 0.4); }

        .container {
            flex: 1; display: flex; align-items: center; justify-content: center; padding: 40px 20px;
        }
        .contact-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 30px;
            width: 100%; max-width: 920px;
        }
        .card {
            background: rgba(30, 41, 59, 0.5); backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1); padding: 35px; border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
            display: flex; flex-direction: column; justify-content: space-between;
            transition: border-color 0.3s ease;
        }
        .card:hover { border-color: rgba(56, 189, 248, 0.25); }
        
        h1 { font-size: 22px; color: #ffffff; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 12px; font-weight: 800; }
        p.sub-text { color: #94a3b8; font-size: 13px; line-height: 1.6; margin-bottom: 22px; min-height: 42px; }

        .info-box {
            background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 16px; border-radius: 14px; margin-bottom: 14px; transition: all 0.2s ease;
        }
        .info-box:hover { 
            border-color: rgba(56, 189, 248, 0.4); 
            transform: translateY(-2px); 
            background: rgba(15, 23, 42, 0.85);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
        
        .label { color: #38bdf8; font-size: 11px; font-weight: 700; letter-spacing: 0.6px; margin-bottom: 5px; display: block; text-transform: uppercase; }
        .value { color: #f8fafc; font-size: 13.5px; font-weight: 600; word-break: break-all; }
        .value a { color: #38bdf8; text-decoration: none; transition: color 0.2s ease; }
        .value a:hover { color: #7dd3fc; text-decoration: underline; }

        .cta-group { margin-top: 15px; }
        .btn-outline {
            display: inline-block; padding: 11px 16px; width: 100%; text-align: center;
            background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255, 255, 255, 0.12); color: #94a3b8;
            text-decoration: none; border-radius: 10px; font-weight: 600; font-size: 13px; transition: all 0.3s ease;
        }
        .btn-outline:hover { color: #38bdf8; border-color: #38bdf8; background: rgba(56, 189, 248, 0.08); }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">LaraPress</div>
        <div class="nav-links">
            <a href="/">Beranda</a>
            <a href="/tentang-kami">Tentang Kami</a>
            <a href="/kontak" class="active">Kontak</a>
        </div>
    </div>

    <div class="container">
        <div class="contact-grid">
            <!-- Kolom Kiri: Informasi Kontak Publik & Sosmed -->
            <div class="card">
                <div>
                    <h1>Informasi & Sosial Media</h1>
                    <p class="sub-text">Detail saluran komunikasi publik dan media sosial resmi untuk kebutuhan diskusi akademik maupun kolaborasi.</p>

                    <div class="info-box">
                        <span class="label">Email Mahasiswa</span>
                        <div class="value">
                            <a href="mailto:marwansi4524110@univpancasila.ac.id.com">marwansi4524110@univpancasila.ac.id.com</a>
                        </div>
                    </div>

                    <div class="info-box">
                        <span class="label">Instagram Profil</span>
                        <div class="value">
                            <a href="https://www.instagram.com/marwansijabat?srtk=MTQyaGNsMzZodHZoMw==" target="_blank">
                                @Kholil_Irsyad_Marwan
                            </a>
                        </div>
                    </div>
                </div>

                <div class="cta-group">
                    <a href="/" class="btn-outline">← Kembali ke Beranda</a>
                </div>
            </div>

            <!-- Kolom Kanan: Khusus Repositori Kodingan (GitHub) -->
            <div class="card">
                <div>
                    <h1>Project Repositories</h1>
                    <p class="sub-text">Dokumentasi tugas riset, proyek analisis data kelompok, serta repositori kode di platform GitHub.</p>

                    <div class="info-box">
                        <span class="label">Featured Repository</span>
                        <div class="value">
                            <a href="https://github.com/KholilIrsyadMarwan/Kelompok_3_CrowdStrike-Global-Outage-Juli-2024" target="_blank">
                                CrowdStrike Global Outage Analysis
                            </a>
                        </div>
                    </div>

                    <div class="info-box">
                        <span class="label">GitHub Profile</span>
                        <div class="value">
                            <a href="https://github.com/KholilIrsyadMarwan" target="_blank">
                                github.com/KholilIrsyadMarwan
                            </a>
                        </div>
                    </div>
                </div>

                <div class="cta-group">
                    <a href="/tentang-kami" class="btn-outline">Eksplorasi Tentang Kami →</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>