<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Kholil Irsyad Marwan</title>
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
        
        .hero-container {
            flex: 1; display: flex; align-items: center; justify-content: center; padding: 40px 20px;
        }
        .hero-card {
            background: rgba(30, 41, 59, 0.5); backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1); width: 100%; max-width: 900px;
            padding: 45px; border-radius: 24px; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
            display: flex; align-items: center; gap: 40px; transition: transform 0.3s ease;
        }
        .hero-card:hover { border-color: rgba(56, 189, 248, 0.3); }
        .hero-card img {
            width: 200px; height: 250px; object-fit: cover; border-radius: 16px;
            border: 2px solid rgba(56, 189, 248, 0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.6);
        }
        .badge {
            display: inline-block; background: rgba(56, 189, 248, 0.12); color: #38bdf8;
            border: 1px solid rgba(56, 189, 248, 0.3); font-size: 12px; font-weight: 700;
            padding: 6px 14px; border-radius: 20px; margin-bottom: 12px; letter-spacing: 0.5px; text-transform: uppercase;
        }
        .hero-text h1 { font-size: 34px; font-weight: 800; color: #ffffff; margin-bottom: 4px; line-height: 1.2; }
        .hero-text h2 { font-size: 16px; font-weight: 600; color: #38bdf8; margin-bottom: 16px; }
        .hero-text p { color: #94a3b8; font-size: 14px; line-height: 1.7; margin-bottom: 22px; }
        
        .skills-list { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 24px; }
        .skill-item { background: rgba(15, 23, 42, 0.7); border: 1px solid rgba(255, 255, 255, 0.1); color: #e2e8f0; padding: 6px 14px; border-radius: 8px; font-size: 12px; font-weight: 600; }
        
        .stats-row { display: flex; gap: 16px; margin-bottom: 28px; }
        .stat-box { background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(255, 255, 255, 0.06); padding: 12px 18px; border-radius: 12px; flex: 1; }
        .stat-number { font-size: 16px; font-weight: 800; color: #38bdf8; }
        .stat-label { font-size: 11px; color: #94a3b8; margin-top: 2px; }

        .cta-group { display: flex; gap: 12px; }
        .btn {
            display: inline-block; padding: 12px 24px;
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            color: #ffffff; text-decoration: none; border-radius: 10px; font-weight: 700; font-size: 14px;
            box-shadow: 0 4px 20px rgba(2, 132, 199, 0.4); transition: all 0.3s ease;
        }
        .btn:hover { transform: translateY(-2px); box-shadow: 0 6px 24px rgba(2, 132, 199, 0.6); }
        .btn-outline {
            background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(56, 189, 248, 0.4); color: #38bdf8;
            box-shadow: none;
        }
        .btn-outline:hover { background: rgba(56, 189, 248, 0.1); border-color: #38bdf8; }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">LaraPress</div>
        <div class="nav-links">
            <a href="/" class="active">Beranda</a>
            <a href="/tentang-kami">Tentang Kami</a>
            <a href="/kontak">Kontak</a>
        </div>
    </div>

    <div class="hero-container">
        <div class="hero-card">
            <img src="{{ asset('foto.jpg') }}" alt="Kholil Irsyad Marwan">
            <div class="hero-text">
                <span class="badge">Data Science Enthusiast</span>
                <h1>Kholil Irsyad Marwan</h1>
                <h2>Data Analytics & Machine Learning Practitioner</h2>
                <p>Selamat datang di LaraPress. Portofolio interaktif berbasis <b>Laravel 12</b> ini menyajikan eksplorasi pemrosesan data, pemodelan statistik, dan analisis sistem komputer modern.</p>
                
                <div class="skills-list">
                    <span class="skill-item">Python</span>
                    <span class="skill-item">SQL</span>
                    <span class="skill-item">Machine Learning</span>
                    <span class="skill-item">Data Analytics</span>
                    <span class="skill-item">C++</span>
                </div>

                <div class="stats-row">
                    <div class="stat-box">
                        <div class="stat-number">Python & SQL</div>
                        <div class="stat-label">Core Analytics Stack</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">Data-Driven</div>
                        <div class="stat-label">Analytical Mindset</div>
                    </div>
                </div>

                <div class="cta-group">
                    <a href="/tentang-kami" class="btn">Eksplorasi Profil →</a>
                    <a href="/kontak" class="btn btn-outline">Hubungi Saya → </a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>