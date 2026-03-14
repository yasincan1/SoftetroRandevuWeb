<?php
// Senin sağladığın data.json dosyasını okuyoruz
$jsonData = file_get_contents('data.json');
$data = json_decode($jsonData, true);

// Kolay erişim için değişkenler
$vizyon = $data['proje_vizyonu'];
$moduller = $data['moduller_ve_kapasite'];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Softetro Randevu</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="style.css?v=9999">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<header class="main-navbar">
    <div class="container navbar-wrapper">
        <div class="nav-logo">
            <a href="/"><?php echo $data['proje_kimligi']['logo'] ?? 'Softetro<b>Randevu</b>'; ?></a>
        </div>

        <nav class="nav-menu">
            <a href="#" class="nav-item active">Anasayfa</a>
            <a href="#ozellikler" class="nav-item">Özellikler</a>
            <a href="#paketler" class="nav-item">Paketler</a>
            <a href="#iletisim" class="nav-item">İletişim</a>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="hero-bg-text">SYSTEM</div>
    <div class="container hero-wrapper">
        <div class="hero-content">
           <h1 class="hero-title">
    Premium <br>
    Berber & Salon <br>
    <span class="marker">Dijital Dönüşüm</span> Ekosistemi
</h1>
            <p><?php echo $vizyon['amac']; ?></p>
            
            <div class="btn-group">
                <a href="#" class="btn-main">Hemen Keşfedin</a>
            </div>
        </div>

        <div class="showcase-scene">
            <div class="device-card device-main">
                <img src="assets/randevulartablet.png" alt="Ajanda">
            </div>

            <div class="device-card device-float-bottom">
                <img src="assets/wpdogrulamamobil.png" alt="Doğrulama">
            </div>

            <div class="device-card device-float-top">
                <img src="assets/admindasboardmobil.png" alt="Dashboard">
            </div>
        </div>
    </div>
</section>
<div class="ticker">
    <div class="ticker-wrapper">
        <div class="ticker-content">
            <?php foreach($vizyon['ana_hedefler'] as $hedef): ?>
                <span><?php echo mb_strtoupper($hedef, 'UTF-8'); ?></span>
                <span class="separator">•</span>
            <?php endforeach; ?>
            
            <?php foreach($vizyon['ana_hedefler'] as $hedef): ?>
                <span><?php echo mb_strtoupper($hedef, 'UTF-8'); ?></span>
                <span class="separator">•</span>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<section class="tech-benefits-section">
    <div class="container">
 
        <div class="bento-grid">
 
            <!-- ANA BÜYÜK BENTO (kırmızı, 7 kolon x 2 satır) -->
            <div class="bento-item main-bento reveal">
                <span class="top-tag">Altyapı</span>
                <h3>Teknik Üstünlük<br>ve Altyapı</h3>
                <p>En güncel teknolojilerle donatılmış,<br>güvenilir ve ölçeklenebilir bir sistem.</p>
                <div class="bento-line">
                    <span></span><span></span><span></span>
                </div>
            </div>
 
            <!-- KART 2 -->
            <div class="bento-item reveal">
                <div class="bento-icon"><i class="fa-solid fa-lock"></i></div>
                <h4>Veri Güvenliği</h4>
                <p>Yüksek şifreleme standartları ile korunan müşteri veritabanı.</p>
            </div>
 
            <!-- KART 3 -->
            <div class="bento-item reveal">
                <div class="bento-icon"><i class="fa-solid fa-display"></i></div>
                <h4>Erişilebilirlik</h4>
                <p>Tüm telefon, tablet ve bilgisayarlarla %100 uyumlu yapı.</p>
            </div>
 
            <!-- GENİŞ BENTO -->
            <div class="bento-item wide-bento reveal">
                <div class="bento-icon"><i class="fa-solid fa-cloud"></i></div>
                <div class="bento-text">
                    <h4>Kesintisiz Çalışma</h4>
                    <p>Bulut tabanlı altyapı sayesinde 7/24 aktif ve hızlı erişim.</p>
                </div>
            </div>
 
        </div>
 
        <!-- BENEFITS SPLIT -->
        <div class="benefits-split">
 
            <div class="benefits-header reveal">
                <h2 class="hero-title">İşletmenize <br><span class="marker">Neler Katar?</span></h2>
                <p>Dijital dönüşümün işletmeniz üzerindeki somut ve ölçülebilir etkileri.</p>
            </div>
 
            <div class="benefits-grid">
                <div class="benefit-card reveal">
                    <div class="benefit-stat">
                        <span class="count-up" data-target="80">0</span>%
                    </div>
                    <p>Telefon trafiğinde azalma</p>
                </div>
                <div class="benefit-card reveal">
                    <div class="benefit-tag"><i class="fa-solid fa-clock"></i></div>
                    <p>Boş kalan saat dilimlerinin minimize edilmesi</p>
                </div>
                <div class="benefit-card reveal">
                    <div class="benefit-tag"><i class="fa-solid fa-star"></i></div>
                    <p>Profesyonel ve modern marka imajı</p>
                </div>
                <div class="benefit-card reveal">
                    <div class="benefit-tag"><i class="fa-solid fa-money-bill-trend-up"></i></div>
                    <p>Randevu kaynaklı gelir kaybının önlenmesi</p>
                </div>
            </div>
 
        </div>
 
    </div>
</section>
<section id="ozellikler" class="features-section">
    <div class="container">
        <div class="section-header">
            <h2 class="hero-title">Zengin Özellik  Seti</h2>
            <p>Sizin için geliştirilmiş, yan yana dizili güçlü modüller.</p>
        </div>

        <div class="features-grid-side">
            <div class="f-side-card">
                <div class="f-icon"><i class="fa-solid fa-gauge"></i></div>
                <h4>Dashboard</h4>
                <p>Canlı dükkan verileri ve kazanç projeksiyonları.</p>
            </div>
            <div class="f-side-card">
                <div class="f-icon"><i class="fa-brands fa-whatsapp"></i></div>
                <h4>WhatsApp OTP</h4>
                <p>Sahte randevuyu bitiren güvenli doğrulama.</p>
            </div>
            <div class="f-side-card">
                <div class="f-icon"><i class="fa-solid fa-calendar-check"></i></div>
                <h4>Akıllı Ajanda</h4>
                <p>Usta bazlı, çakışmayan dinamik takvim sistemi.</p>
            </div>
            <div class="f-side-card">
                <div class="f-icon"><i class="fa-solid fa-user-tie"></i></div>
                <h4>Personel</h4>
                <p>Çalışan performansı ve prim hesaplama paneli.</p>
            </div>
            <div class="f-side-card">
                <div class="f-icon"><i class="fa-solid fa-wallet"></i></div>
                <h4>Gider Takibi</h4>
                <p>Kira, fatura ve ürün alımlarını anlık kaydedin.</p>
            </div>
            <div class="f-side-card">
                <div class="f-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h4>Güvenlik</h4>
                <p>Müşteri verilerini yüksek standartlarda koruyun.</p>
            </div>
            <div class="f-side-card">
                <div class="f-icon"><i class="fa-solid fa-ban"></i></div>
                <h4>Kara Liste</h4>
                <p>Sorunlu müşterileri sistemden uzak tutun.</p>
            </div>
            <div class="f-side-card">
                <div class="f-icon"><i class="fa-solid fa-chart-pie"></i></div>
                <h4>Raporlama</h4>
                <p>Gelecek hedefleriniz için analitik çözümler.</p>
            </div>
        </div>
    </div>
</section>
<section id="paketler" class="pricing-section">
    <div class="container">

        <div class="section-header" id="pricingHeader">
            <h2 class="hero-title">Size Uygun <span class="marker">Paketi Seçin</span></h2>
            <p>Yıllık alımlarda tasarruf edin, işletmenizi büyütün.</p>
        </div>

        <div class="pricing-toggle-wrapper" id="pricingToggle">
            <button class="toggle-btn active" onclick="pricingSwitch('monthly', this)">Aylık</button>
            <button class="toggle-btn" onclick="pricingSwitch('yearly', this)">Yıllık</button>
        </div>

        <div class="pricing-grid">
            <?php foreach($data['paketler'] as $paket): ?>
                <div class="price-card <?php echo isset($paket['populer']) ? 'popular' : ''; ?>">

                    <?php if(isset($paket['populer'])): ?>
                        <div class="border-trail"></div>
                        <span class="badge"><i class="fa-solid fa-star"></i> Popüler</span>
                    <?php endif; ?>

                    <div class="card-header">
                        <h3 class="plan-name"><?php echo $paket['ad']; ?></h3>
                        <div class="price-wrapper">
                            <span class="price-val"
                                data-monthly="<?php echo $paket['fiyat']; ?>"
                                data-yearly="<?php echo intval($paket['fiyat']) * 10; ?> TL">
                                <?php echo $paket['fiyat']; ?>
                            </span>
                            <span class="price-period">/ay</span>
                        </div>
                    </div>

                    <ul class="features-list">
                        <?php foreach($paket['ozellikler'] as $ozellik): ?>
                            <li><i class="fa-solid fa-circle-check"></i> <?php echo $ozellik; ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="card-footer">
                        <a href="#iletisim" class="btn-price-main">Hemen Başla</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<footer id="iletisim" class="footer">
    <div class="container footer-content">
        <div class="footer-info">
            <h2><?php echo $data['proje_kimligi']['logo'] ?? 'MakasAdmin'; ?></h2>
            <p>Berber dükkanınızı cebinizden yönetin.</p>
        </div>
        <div class="footer-contact">
            <p><i class="fa-solid fa-envelope"></i> destek@projeniz.com</p>
            <p><i class="fa-solid fa-phone"></i> +90 (555) 000 00 00</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2026 <?php echo strip_tags($data['proje_kimligi']['logo']); ?>. Tüm hakları saklıdır.</p>
    </div>
</footer>
<script>
(function () {

    /* ── 1. SCROLL REVEAL ── */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.bento-item.reveal, .benefits-header.reveal, .benefit-card.reveal')
        .forEach(el => revealObserver.observe(el));


    /* ── 2. COUNT-UP ANİMASYONU ── */
    function countUp(el, target, duration) {
        let start = null;
        function step(ts) {
            if (!start) start = ts;
            const progress = Math.min((ts - start) / duration, 1);
            const ease = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.round(ease * target);
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target.querySelector('.count-up');
                if (el) countUp(el, parseInt(el.dataset.target), 1600);
                countObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.6 });

    document.querySelectorAll('.benefit-card').forEach(c => countObserver.observe(c));


    /* ── 3. DARK THEME TETİKLEYİCİ ── */
    const techSection = document.querySelector('.tech-benefits-section');
    if (techSection) {
        const darkObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                document.body.classList.toggle('is-dark-theme', entry.isIntersecting);
            });
        }, { threshold: 0.3 });
        darkObserver.observe(techSection);
    }


    /* ── 4. PRICING — BAŞLIK + TOGGLE REVEAL ── */
    const pricingHeader = document.getElementById('pricingHeader');
    if (pricingHeader) {
        const hObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                e.target.classList.add('is-visible');
                document.getElementById('pricingToggle')?.classList.add('is-visible');
                hObs.unobserve(e.target);
            });
        }, { threshold: 0.35 });
        hObs.observe(pricingHeader);
    }


    /* ── 5. PRICING — KART REVEAL ── */
    const cObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (!e.isIntersecting) return;
            e.target.classList.add('is-visible');
            cObs.unobserve(e.target);
        });
    }, { threshold: 0.15 });
    document.querySelectorAll('.price-card').forEach(c => cObs.observe(c));


    /* ── 6. PRICING — AYLИК / YILLIK TOGGLE ── */
    window.pricingSwitch = function (period, btn) {
        document.querySelectorAll('.pricing-toggle-wrapper .toggle-btn')
            .forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        document.querySelectorAll('.price-val').forEach(el => {
            const next = el.dataset[period];
            if (!next) return;
            el.classList.remove('switching');
            void el.offsetWidth;
            el.classList.add('switching');
            el.textContent = next;
            el.addEventListener('animationend', () => el.classList.remove('switching'), { once: true });
        });
    };

})();
</script>
</body>
</html>