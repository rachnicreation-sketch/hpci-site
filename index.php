<?php require_once('includes/maintenance_check.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HPCI-SARL — Hygiène Prodige Com International</title>
<link rel="stylesheet" href="style.css">
<!-- Font Awesome 6.x -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
/* HERO ACCUEIL */
.hero { position: relative; min-height: 700px; display: flex; align-items: center; overflow: hidden; background: var(--navy); }
.hero-bg-img { position: absolute; inset: 0; background: url('./images/hero/sld1.jpg') center/cover no-repeat; }
.hero-overlay { position: absolute; inset: 0; background: rgba(10,35,40,.65); }
.hero-pattern { position: absolute; inset: 0; background-image: repeating-linear-gradient(0deg, transparent, transparent 40px, rgba(255,255,255,.01) 40px, rgba(255,255,255,.01) 41px), repeating-linear-gradient(90deg, transparent, transparent 40px, rgba(255,255,255,.01) 40px, rgba(255,255,255,.01) 41px); }
.hero-bar { position: absolute; left: 0; top: 0; bottom: 0; width: 6px; background: var(--accent); }
.hero-content { position: relative; max-width: 1280px; margin: 0 auto; padding: 100px 40px; display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 80px; align-items: center; width: 100%; }
.hero-h1 { font-family: 'Barlow Condensed', sans-serif; font-weight: 800; font-size: clamp(2.8rem, 5vw, 4.2rem); line-height: 1; color: var(--white); margin-bottom: 24px; }
.hero-h1 em { color: var(--accent); font-style: normal; display: block; }
.hero-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 2px; background: rgba(255,255,255,0.1); border-radius: 16px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); }
.stat-card { background: rgba(255,255,255,0.05); padding: 40px 32px; text-align: center; }
.stat-number { font-family: 'Barlow Condensed', sans-serif; font-size: 3.2rem; font-weight: 800; color: var(--accent); line-height: 1; margin-bottom: 8px; }
.stat-label { font-size: 0.85rem; color: #94a3b8; font-weight: 600; text-transform: uppercase; }

/* TESTIMONIALS SLIDER */
.testimonials { padding: 0 !important; display: grid; grid-template-columns: 1fr 1fr; min-height: 600px; background: var(--white); overflow: hidden; border-top: 1px solid var(--border); position: relative; }
.testimonials-visual { background: url('./images/services/nettoyage-industrielle.jpg') center/cover no-repeat; position: relative; }
.testimonials-slider { position: relative; width: 100%; height: 100%; overflow: hidden; }
.testimonials-track { display: flex; transition: transform 0.6s cubic-bezier(0.645, 0.045, 0.355, 1); height: 100%; }
.testimonial-slide { min-width: 100%; padding: 80px; display: flex; flex-direction: column; justify-content: center; background: white; }
.testimonials-text { font-size: 1.25rem; font-style: italic; color: var(--text); line-height: 1.6; margin-bottom: 40px; position: relative; }
.testimonial-avatar { width: 64px; height: 64px; border-radius: 50%; background: #f0f4f8; overflow: hidden; }
.testimonial-nav { position: absolute; bottom: 40px; left: 80px; display: flex; gap: 15px; align-items: center; z-index: 10; }
.dot { width: 10px; height: 10px; border-radius: 50%; background: #d1d5db; cursor: pointer; transition: all 0.3s; }
.dot.active { background: var(--accent); width: 30px; border-radius: 10px; }

/* PARTNERS MARQUEE */
.partners-section { padding: 80px 0; background: var(--white); text-align: center; border-top: 1px solid var(--border); overflow: hidden; }
.partners-marquee { width: 100%; overflow: hidden; display: flex; position: relative; background: #f8fafc; padding: 40px 0; }
.partners-track { display: flex; animation: marquee 25s linear infinite; gap: 80px; align-items: center; }
.partner-item { flex: 0 0 200px; height: 80px; display: flex; align-items: center; justify-content: center; opacity: 0.8; transition: opacity 0.3s; }
.partner-item:hover { opacity: 1; transform: scale(1.1); }
@keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(calc(-250px * 5)); } }

@media (max-width: 1024px) { .hero-content { grid-template-columns: 1fr; text-align: center; } .testimonials { grid-template-columns: 1fr; } .testimonials-visual { display: none; } }
</style>
</head>
<body data-root="./">

<div class="topbar">
  <div class="topbar-inner">
    <div class="topbar-contacts">
      <a href="tel:+2252722240247"><i class="fa-solid fa-phone"></i> Abidjan : +225 27 222 402 47</a>
      <a href="tel:+242066652728"><i class="fa-solid fa-phone"></i> Pointe-Noire : +242 066 652 728</a>
    </div>
    <div class="topbar-social">
      <a href="https://www.facebook.com/profile.php?id=61565882327789" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.linkedin.com/company/hpci-abidjansarl/" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="https://www.tiktok.com/@hpciabidjan.sarl" target="_blank" title="TikTok"><i class="fa-brands fa-tiktok"></i></a>
      <a href="https://wa.me/2250706046595" target="_blank" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
  </div>
</div>

<nav>
  <div class="nav-inner">
    <a href="./index.php" class="logo">
      <img src="./images/logo/LOGO-PNR.jpeg" alt="HPCI-SARL" style="height:48px;">
    </a>
    <ul class="nav-links">
      <li><a href="./index.php" class="active">Accueil</a></li>
      <li>
        <a href="pages/a-propos.php">Qui sommes-nous ? ▾</a>
        <div class="dropdown">
          <a href="pages/a-propos.php">À propos de nous</a>
          <a href="pages/equipe.php">Notre équipe</a>
        </div>
      </li>
      <li>
        <a href="pages/services.php">Nos services ▾</a>
        <div class="dropdown">
          <a href="pages/service-nettoyage-industriel.php"><i class="fa-solid fa-industry"></i> Nettoyage industriel</a>
          <a href="pages/service-maintenance.php"><i class="fa-solid fa-gears"></i> Maintenance industrielle</a>
        </div>
      </li>
      <li><a href="pages/actualite.php">Actualité</a></li>
      <li><a href="pages/contact.php" class="nav-cta">Nous contacter</a></li>
    </ul>
  </div>
</nav>

<section class="hero">
  <div class="hero-bg-slider">
    <div class="slide slide-1"></div>
    <div class="slide slide-2"></div>
    <div class="slide slide-3"></div>
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-pattern"></div>
  <div class="hero-bar"></div>
  <div class="hero-content">
    <div class="hero-text">
      <h1 class="hero-h1">L'Excellence du Nettoyage <em>Industriel & Professionnel</em></h1>
      <p>Leader panafricain de l'hygiène industrielle, HPCI-SARL déploie des solutions de pointe.</p>
      <div class="hero-actions">
        <a href="pages/services.php" class="btn-primary">Nos solutions techniques →</a>
      </div>
    </div>
    <div class="hero-stats">
      <div class="stat-card">
        <div class="stat-number">10+</div>
        <div class="stat-label">Années d'Excellence</div>
      </div>
    </div>
  </div>
</section>

<!-- SECTIONS (Simplifiées pour le walkthrough) -->
<section class="testimonials anim">
  <div class="testimonials-visual"></div>
  <div class="testimonials-content">
    <h2>Ce que disent nos clients</h2>
    <div class="testimonials-slider">
      <div class="testimonials-track" id="testimonialTrack">
        <div class="testimonial-slide">
          <p class="testimonials-text">"Impeccable, délais respectés, qualité exceptionnelle."</p>
          <div class="testimonial-user">
            <div class="testimonial-avatar"><img src="./images/equipe/user.jpg" alt="Konan Marcel"></div>
            <div><h4>Konan Marcel</h4><p>Cadre de banque</p></div>
          </div>
        </div>
        <div class="testimonial-slide">
          <p class="testimonials-text">"Professionnalisme exceptionnel, réponses rapides, satisfaction totale."</p>
          <div class="testimonial-user">
            <div class="testimonial-avatar"><img src="./images/equipe/user.jpg" alt="Koua Désiré"></div>
            <div><h4>Koua Désiré</h4><p>Informaticien</p></div>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonial-nav">
      <div class="dot active" onclick="gotoSlide(0)"></div>
      <div class="dot" onclick="gotoSlide(1)"></div>
    </div>
  </div>
</section>

<section class="partners-section">
  <div class="container">
    <h2>Nos Partenaires</h2>
    <div class="partners-marquee">
      <div class="partners-track">
        <a href="https://www.mucodec.com/" target="_blank" class="partner-item"><img src="./images/partenaires/mucodec.png" alt="MUCODEC"></a>
        <a href="http://groupendounafrancois.com/" target="_blank" class="partner-item"><img src="./images/partenaires/ndouna.png" alt="GROUPE NDOUNA FRANCOIS"></a>
        <a href="https://www.eni.com/" target="_blank" class="partner-item"><img src="./images/partenaires/eni.png" alt="ENI"></a>
        <a href="http://www.coraf.cg/" target="_blank" class="partner-item"><img src="./images/partenaires/coraf.png" alt="CORAF"></a>
        <a href="http://www.cec-congo.com/" target="_blank" class="partner-item"><img src="./images/partenaires/cec.png" alt="CEC"></a>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="footer-grid container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; padding: 60px 20px;">
    <div>
      <img src="./images/logo/LOGO-PNR.jpeg" alt="Logo" style="height: 40px; margin-bottom: 20px;">
      <p style="font-size: 0.9rem; color: #64748b;">Hygiène Prodige Com International — Expert en solutions industrielles.</p>
      <div class="footer-social" style="margin-top: 20px; display: flex; gap: 15px;">
        <a href="https://www.facebook.com/profile.php?id=61565882327789" target="_blank" style="color: #1a4480; font-size: 1.2rem;"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.linkedin.com/company/hpci-abidjansarl/" target="_blank" style="color: #1a4480; font-size: 1.2rem;"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://wa.me/2250706046595" target="_blank" style="color: #25d366; font-size: 1.2rem;"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>
    <div>
      <h4 style="font-family: 'Barlow Condensed', sans-serif; margin-bottom: 20px;">Navigation</h4>
      <ul style="list-style: none; font-size: 0.9rem; line-height: 2;">
        <li><a href="index.php" style="text-decoration: none; color: inherit;">Accueil</a></li>
        <li><a href="pages/services.php" style="text-decoration: none; color: inherit;">Services</a></li>
        <li><a href="pages/actualite.php" style="text-decoration: none; color: inherit;">Actualité</a></li>
      </ul>
    </div>
    <div>
      <h4 style="font-family: 'Barlow Condensed', sans-serif; margin-bottom: 20px;">Contact</h4>
      <ul style="list-style: none; font-size: 0.9rem; line-height: 2; color: #64748b;">
        <li><i class="fa-solid fa-location-dot" style="color: var(--accent);"></i> Pointe-Noire, Congo</li>
        <li><i class="fa-solid fa-phone" style="color: var(--accent);"></i> +242 06 665 27 28</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2024 HPCI-SARL — Hygiène Prodige Com International.</p>
  </div>
</footer>

<script>
  function gotoSlide(n) {
    const track = document.getElementById('testimonialTrack');
    const dots = document.querySelectorAll('.dot');
    track.style.transform = `translateX(-${n * 100}%)`;
    dots.forEach((dot, index) => dot.classList.toggle('active', index === n));
  }
</script>
</body>
</html>
