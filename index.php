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
  
    <link rel="stylesheet" href="d.css">


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
            <a href="#demo" class="nav-item">Demo</a>
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
<section  id="ozellikler" class="tech-benefits-section">
    <div class="container">
 
        <div class="tech-top-grid">

    <!-- SOL — VİDEO KART (ÖNCE GELMELİ) -->
    <div class="bento-item main-bento reveal" style="background:#0f0f0f !important; padding:0; overflow:hidden; justify-content:flex-start; flex-direction:column; height:460px; grid-column:unset !important; grid-row:unset !important;">
        <video autoplay muted loop playsinline style="width:100%; max-height:280px; object-fit:cover; display:block; flex-shrink:0;">
            <source src="assets/hizmetlerpc.mp4" type="video/mp4">
        </video>
        <div style="padding:20px 28px 24px; display:flex; flex-direction:column; flex:1;">
            <span class="top-tag" style="margin-bottom:10px;">Altyapı</span>
            <div style="display:flex; align-items:flex-start; justify-content:space-between; gap:12px;">
                <div>
                    <h3 style="margin-bottom:6px;">Teknik Üstünlük<br>ve Altyapı</h3>
                    <p>En güncel teknolojilerle donatılmış, güvenilir ve ölçeklenebilir bir sistem.</p>
                </div>
                <div class="bento-line" style="flex-shrink:0; flex-direction:column; gap:5px; margin-top:4px;">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </div>

    <!-- SAĞ — FAN KARTLAR (SONRA GELMELİ) -->
    <div class="fan-stack-wrapper">
        <div class="fan-stack" id="fanStack">
            <div class="fan-card">
                <div class="fan-card-icon"><i class="fa-solid fa-cloud"></i></div>
                <h4>Kesintisiz Çalışma</h4>
                <p>Bulut tabanlı altyapı sayesinde 7/24 aktif ve hızlı erişim.</p>
            </div>
            <div class="fan-card">
                <div class="fan-card-icon"><i class="fa-solid fa-comment"></i></div>
                <h4>Erişilebilirlik</h4>
                <p>Tüm telefon, tablet ve bilgisayarlarla %100 uyumlu yapı.</p>
            </div>
            <div class="fan-card active">
                <div class="fan-card-icon"><i class="fa-solid fa-lock"></i></div>
                <h4>Veri Güvenliği</h4>
                <p>Yüksek şifreleme standartları ile korunan müşteri veritabanı.</p>
            </div>
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
                    <div class="benefit-tag"><i class="fa fa-envelope-open" aria-hidden="true"></i></div>
                    <p>Randevu kaynaklı gelir kaybının önlenmesi</p>
                </div>
            </div>
 
        </div>
 
    </div>
</section>
<section class="features-section">
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
<section id="demo" class="demo-section">
    <div class="container">
        <div class="section-header">
            <h2 class="hero-title">Canlı <span class="marker">Demo</span></h2>
            <p>Sistemi hemen deneyin, kayıt gerekmez.</p>
        </div>
        <div class="demo-wrapper">
            <iframe src="http://localhost:5043" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<section id="paketler" class="pricing-section">
    <div class="container">

        <div class="section-header" id="pricingHeader">
            <h2 class="hero-title">Size Uygun <span class="marker">Paketi Seçin</span></h2>
            <p>Yıllık alımlarda tasarruf edin, işletmenizi büyütün.</p>
        </div>


        <div class="pricing-grid">
            <?php foreach($data['paketler'] as $paket): ?>
                <div class="price-card <?php echo isset($paket['populer']) ? 'popular' : ''; ?>">

                    <?php if(isset($paket['populer'])): ?>
                        <div class="border-trail"></div>
                        <span class="badge">En çok tercih</span>
                    <?php endif; ?>

                    <div class="card-header">
                        <h3 class="plan-name"><?php echo $paket['ad']; ?></h3>
                        <div class="price-wrapper">
                            <span class="price-val"
                                data-monthly="<?php echo $paket['fiyat']; ?>"
                                data-yearly="<?php echo $paket['fiyat']; ?>">
                                <?php echo $paket['fiyat']; ?>
                            </span>
                            <span class="price-period">/ ay</span>
                        </div>
                        <div class="price-meta">
                            Kurulum: <strong><?php echo $paket['kurulum']; ?></strong>
                            &nbsp;·&nbsp;
                            Bakım: <strong><?php echo $paket['bakim']; ?></strong>
                        </div>
                    </div>

                    <div class="price-divider"></div>

                    <ul class="features-list">
                        <?php foreach($paket['ozellikler'] as $ozellik): ?>
                            <?php if(strpos($ozellik, '<strong') === 0): ?>
                                <li class="feature-category"><?php echo $ozellik; ?></li>
                            <?php else: ?>
                                <li><i class="fa-solid fa-check"></i> <?php echo $ozellik; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

                    <div class="sms-quota">
                        <span class="sms-number"><?php echo explode(' SMS', $paket['sms_kotasi'])[0]; ?></span>
                        <span class="sms-label">SMS / ay</span>
                    </div>

                    <div class="card-footer">
                        <a href="#iletisim" class="btn-price-main">Hemen Başla</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<footer id="iletisim" class="footer">
    <div class="container">
 
        <div class="footer-top">
 
            <!-- LOGO & AÇIKLAMA -->
            <div class="footer-brand">
                <div class="footer-logo"><?php echo $data['proje_kimligi']['logo'] ?? 'Softetro<b>Randevu</b>'; ?></div>
                <p class="footer-desc">Berber & salon işletmenizi dijital çağa taşıyan, akıllı randevu ve yönetim ekosistemi.</p>
                <div class="footer-socials">
                    <a href="#" class="footer-social"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="footer-social"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" class="footer-social"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="footer-social"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
 
            <!-- ÜRÜN -->
            <div class="footer-col">
                <h5>Ürün</h5>
                <ul>
                    <li><a href="#ozellikler">Özellikler</a></li>
                    <li><a href="#paketler">Paketler</a></li>
                    <li><a href="#demo">Demo</a></li>
                </ul>
            </div>
 
            
 
            <!-- İLETİŞİM -->
            <div class="footer-col">
                <h5>İletişim</h5>
                <div class="footer-contact">
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <span>yasincanatici@projeniz.com</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <span>+90 (505) 075 50 42</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Konya, Türkiye</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>WhatsApp Destek</span>
                    </div>
                </div>
            </div>
 
        </div>
 
        <div class="footer-bottom">
            <p>&copy; 2026 <?php echo $data['proje_kimligi']['logo'] ?? 'SoftetroRandevu'; ?>. Tüm hakları saklıdır.</p>
            <div class="footer-status">
                <span class="footer-status-dot"></span>
                Sistem aktif &amp; çalışıyor
            </div>
        </div>
 
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

    document.querySelectorAll('.bento-item.reveal, .benefits-header.reveal, .benefit-card.reveal, .fan-stack-wrapper')
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
        if (entry.isIntersecting) {
            setTimeout(() => {
                document.body.classList.add('is-dark-theme');
            }, 50);
        } else {
            setTimeout(() => {
                document.body.classList.remove('is-dark-theme');
            }, 50);
        }
    });
}, { threshold: 0.1 });
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
})();
(function () {
    const stack = document.getElementById('fanStack');
    if (!stack) return;

    const cards = Array.from(stack.querySelectorAll('.fan-card'));
    const total = cards.length;
    let current = total - 1;

    function updateCards() {
        cards.forEach((card, i) => {
            card.classList.remove('active');
            const offset = i - current;

            if (offset === 0) {
                card.style.transition  = 'transform 0.6s cubic-bezier(0.34,1.56,0.64,1), opacity 0.5s ease, box-shadow 0.4s ease';
                card.style.transform   = 'rotate(0deg) translateY(0px) scale(1)';
                card.style.opacity     = '1';
                card.style.zIndex      = '10';
                card.style.boxShadow   = '0 30px 60px rgba(201,73,73,0.25)';
                card.style.borderColor = 'var(--primary)';
                card.classList.add('active');
            } else if (offset === -1 || offset === total - 1) {
                card.style.transition  = 'transform 0.6s cubic-bezier(0.34,1.56,0.64,1), opacity 0.5s ease';
                card.style.transform   = 'rotate(-4deg) translateY(5px) scale(0.94)';
                card.style.opacity     = '0.75';
                card.style.zIndex      = '5';
                card.style.boxShadow   = 'none';
                card.style.borderColor = '';
            } else if (offset === -2 || offset === total - 2) {
                card.style.transition  = 'transform 0.6s cubic-bezier(0.34,1.56,0.64,1), opacity 0.5s ease';
                card.style.transform   = 'rotate(-8deg) translateY(12px) scale(0.88)';
                card.style.opacity     = '0.5';
                card.style.zIndex      = '1';
                card.style.boxShadow   = 'none';
                card.style.borderColor = '';
            } else {
                card.style.transition  = 'transform 0.5s ease, opacity 0.4s ease';
                card.style.transform   = 'rotate(-10deg) translateY(80px) scale(0.82)';
                card.style.opacity     = '0';
                card.style.zIndex      = '0';
                card.style.boxShadow   = 'none';
                card.style.borderColor = '';
            }
        });
    }

    function goTo(index) {
        /* Aktif kartı alta göm, sonra indexe geç */
        const prev = cards[current];
        prev.style.transition = 'transform 0.5s ease, opacity 0.4s ease';
        prev.style.transform  = 'rotate(4deg) translateY(120px) scale(0.85)';
        prev.style.opacity    = '0';
        prev.style.zIndex     = '0';

        setTimeout(() => {
            current = ((index % total) + total) % total;
            updateCards();
        }, 180);
    }

    stack.addEventListener('click', () => {
        goTo(current === 0 ? total - 1 : current - 1);
    });

    /* Swipe desteği */
    let startX = 0;
    stack.addEventListener('touchstart', e => { startX = e.touches[0].clientX; });
    stack.addEventListener('touchend', e => {
        const diff = startX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) goTo(diff > 0 ? current - 1 : current + 1);
    });

    updateCards();
})();
</script>
</body>
</html>