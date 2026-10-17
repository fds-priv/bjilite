<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandar Judi Indo Lite App - Download Aplikasi Mobile</title>

    <!-- PWA / Icons -->
    <meta name="theme-color" content="#0a0a0c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="BJI Lite">

    <!-- iOS Home Screen -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon-180.png') }}">

    <!-- Favicon / Android / desktop -->
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('icon-128x128.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('icon-512x512.png') }}">

    <link rel="manifest" href="{{ asset('manifest.json') }}">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --bg-dark: #0a0a0c;
            --card-bg: #121318;
            --gold-primary: #f0c040;
            --gold-light: #fbe682;
            --gold-dark: #b8860b;
            --gold-glow: rgba(240, 192, 64, 0.4);
            --text-main: #f0f0f5;
            --text-muted: #a0a0b0;
            --border-gold: rgba(240, 192, 64, 0.25);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background-image: 
                radial-gradient(circle at 50% 10%, rgba(240, 192, 64, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 50% 90%, rgba(184, 134, 11, 0.05) 0%, transparent 50%);
        }

        .container {
            width: 100%;
            max-width: 440px;
            background: var(--card-bg);
            border-radius: 24px;
            border: 1px solid var(--border-gold);
            padding: 28px 22px 24px 22px;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.8),
                0 0 30px rgba(240, 192, 64, 0.05),
                inset 0 1px 1px rgba(255, 255, 255, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .brand-header {
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            font-size: 22px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            background: linear-gradient(180deg, #fff 0%, var(--gold-light) 30%, var(--gold-primary) 70%, var(--gold-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .brand-header i {
            -webkit-text-fill-color: var(--gold-primary);
            font-size: 18px;
        }

        .icon-wrapper {
            position: relative;
            margin-bottom: 24px;
        }

        .icon-glow {
            position: absolute;
            top: -10px; left: -10px; right: -10px; bottom: -10px;
            background: radial-gradient(circle, var(--gold-glow) 0%, transparent 70%);
            filter: blur(15px);
            border-radius: 50%;
        }

        .app-icon {
            width: 110px;
            height: 110px;
            background: linear-gradient(145deg, #1d1e24, #0b0c0e);
            border-radius: 24px;
            border: 2px solid var(--gold-primary);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6);
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .app-icon-symbol {
            font-size: 32px;
            color: var(--gold-primary);
            margin-bottom: 2px;
        }

        .app-icon-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 11px;
            font-weight: 900;
            color: #fff;
            text-transform: uppercase;
        }

        .app-icon-badge {
            margin-top: 5px;
            background: linear-gradient(90deg, #d4af37, #fbe682, #d4af37);
            color: #000;
            font-size: 9px;
            font-weight: 800;
            padding: 2px 10px;
            border-radius: 10px;
            text-transform: uppercase;
        }

        .main-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 23px;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 10px;
        }

        .main-title span {
            background: linear-gradient(90deg, var(--gold-light), var(--gold-primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .sub-title {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 24px;
        }

        .sub-title strong {
            color: var(--gold-light);
        }

        .btn-install {
            width: 100%;
            padding: 16px 20px;
            background: linear-gradient(135deg, #fbe682 0%, #f0c040 50%, #b8860b 100%);
            border: none;
            border-radius: 50px;
            color: #0d0d0f;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 800;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 0 6px 20px rgba(240, 192, 64, 0.35);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
            transition: all 0.25s ease;
            margin-bottom: 8px;
        }

        .btn-install:disabled {
            opacity: 0.6;
            cursor: default;
        }

        .install-status {
            width: 100%;
            min-height: 15px;
            margin-bottom: 3px;
            font-size: 12px;
            line-height: 15px;
            text-align: center;
            color: var(--gold-light);
        }

        .features-list {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 24px;
            text-align: left;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 13px;
            color: #d1d1e0;
            background: rgba(255, 255, 255, 0.02);
            padding: 10px 12px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.04);
        }

        .check-icon {
            width: 20px;
            height: 20px;
            min-width: 20px;
            background: linear-gradient(135deg, var(--gold-light), var(--gold-primary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            font-size: 11px;
        }

        .feature-item strong {
            color: #ffffff;
        }

        .highlight-banner {
            font-size: 13.5px;
            font-weight: 700;
            color: var(--gold-light);
            margin-bottom: 22px;
        }

        .footer-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 12px;
            color: var(--text-muted);
            border-top: 1px dashed rgba(240, 192, 64, 0.2);
            padding-top: 16px;
            width: 100%;
        }

        .footer-info i { color: var(--gold-primary); }
        .dot { font-size: 6px; opacity: 0.5; }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-header">
            <i class="fa-solid fa-crown"></i> BANDAR JUDI INDO
        </div>

        <div class="icon-wrapper">
            <div class="icon-glow"></div>
            <div class="app-icon">
                <i class="fa-solid fa-crown app-icon-symbol"></i>
                <div class="app-icon-title">BANDAR JUDI</div>
                <div class="app-icon-badge">LITE</div>
            </div>
        </div>

        <h1 class="main-title">
            Install <span>Bandar Judi Indo</span> Lite App
        </h1>

        <p class="sub-title">
            Mau pengalaman main yang lebih nyaman?<br>
            Pasang <strong>Lite App</strong> kami di HP kamu sekarang!
        </p>

        <!-- Tombol Install -->
        <button type="button" class="btn-install" id="installBtn" aria-describedby="installStatus">
            <i class="fa-solid fa-download" aria-hidden="true"></i> Install Sekarang
        </button>
        <p class="install-status" id="installStatus" role="status" aria-live="polite"></p>

        <div class="features-list">
            <div class="feature-item">
                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                <div><strong>Akses lebih cepat</strong> &mdash; langsung main ke bji.asia</div>
            </div>
            <div class="feature-item">
                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                <div><strong>Ga perlu login ulang</strong> setiap saat</div>
            </div>
            <div class="feature-item">
                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                <div><strong>Link selalu aktif</strong>, ga bakal kena blokir</div>
            </div>
            <div class="feature-item">
                <div class="check-icon"><i class="fa-solid fa-check"></i></div>
                <div><strong>Ringan</strong>, ga makan storage HP kamu</div>
            </div>
        </div>

        <div class="highlight-banner">
            Satu kali pasang, main selamanya tanpa ribet!
        </div>

        <div class="footer-info">
            <i class="fa-solid fa-mobile-screen"></i>
            <span>Gratis</span>
            <span class="dot">&bull;</span>
            <span>Tanpa Blokir</span>
            <span class="dot">&bull;</span>
            <span>Ringan</span>
        </div>
    </div>

    <script>
    (function () {
        'use strict';

        const FALLBACK_URL = 'https://bji.asia/';

        // WAJIB jauh di bawah ~5s transient-activation window Chrome.
        // Kalau lewat, prompt() diam-diam no-op.
        const PROMPT_WAIT_MS = 900;

        const btn = document.getElementById('installBtn');
        const status = document.getElementById('installStatus');
        if (!btn) return;

        const isStandalone = () =>
            window.matchMedia('(display-mode: standalone)').matches ||
            window.navigator.standalone === true;

        // Chromium mengekspos IDL attribute ini; Firefox/Safari/iOS tidak pernah.
        const canEverPrompt = 'onbeforeinstallprompt' in window;

        let deferredPrompt = null;
        let resolvePending = null;
        let busy = false;
        let showingWaitHint = false;

        const setStatus = (msg) => { if (status) status.textContent = msg || ''; };

        // start_url = "/", jadi halaman ini ADALAH tampilan app yang ter-install.
        if (isStandalone()) {
            window.location.replace(FALLBACK_URL);
            return;
        }

        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            if (resolvePending) { resolvePending(e); resolvePending = null; return; }
            // Event tiba terlambat — kalau user sudah diklik sekali dan dapat
            // pesan "masih siap-siap", bersihkan supaya tak perlu menebak.
            if (showingWaitHint) {
                showingWaitHint = false;
                setStatus('');
            }
        });

        window.addEventListener('appinstalled', () => {
            deferredPrompt = null;
            window.location.replace(FALLBACK_URL);
        });

        const waitForPrompt = (ms) => new Promise((resolve) => {
            setTimeout(() => { resolvePending = null; resolve(null); }, ms);
            resolvePending = (e) => { resolvePending = null; resolve(e); };
        });

        btn.addEventListener('click', async () => {
            if (busy) return;          // prompt() hanya bisa dipanggil sekali
            busy = true;
            try {
                let prompt = deferredPrompt;

                // Browser mendukung, event-nya cuma belum sampai.
                if (!prompt && canEverPrompt) {
                    setStatus('Menyiapkan…');
                    prompt = await waitForPrompt(PROMPT_WAIT_MS);
                    setStatus('');
                }

                if (prompt) {
                    deferredPrompt = null;   // event sekali pakai
                    btn.disabled = true;
                    prompt.prompt();
                    await prompt.userChoice;
                    return;
                }

                // Firefox / Safari / iOS — event-nya memang tidak pernah ada.
                if (!canEverPrompt) {
                    window.location.href = FALLBACK_URL;
                    return;
                }

                // Chromium tapi tidak bisa install. Bedakan "alamat HTTP"
                // dari "SW masih aktivasi" — tester sering tertukar dua ini.
                if (!window.isSecureContext) {
                    setStatus('Install hanya jalan di alamat HTTPS. Deploy ke hosting ber-SSL atau pakai tunnel HTTPS (mis. ngrok / cloudflared).');
                    return;
                }

                // Secure context tapi event belum sampai — biasanya service
                // worker masih aktivasi pada kunjungan pertama (cold load di
                // HP via seluler bisa >2 detik). Jangan disable tombolnya:
                // event tetap tertangkap di atas, jadi tap kedua langsung jalan.
                setStatus('Service worker masih siap-siap. Tunggu sebentar, lalu tap Install lagi.');
                showingWaitHint = true;
            } finally {
                busy = false;
            }
        });
    })();
    </script>

    @laravelPwa
</body>
</html>