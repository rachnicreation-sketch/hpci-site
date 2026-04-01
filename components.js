/* ============================================================
   HPCI-SARL — composants partagés (nav + footer)
   Inclure dans chaque page : <script src="../components.js"></script>
   Appeler après le body : injectNav('accueil'); injectFooter();
   ============================================================ */

function injectTopbar() {
  return `
  <div class="topbar">
    <div class="topbar-inner">
      <div class="topbar-contacts">
        <a href="tel:+2252722240247">📞 Abidjan : +225 27 222 402 47</a>
        <a href="tel:+242066652728">📞 Pointe-Noire : +242 066 652 728</a>
        <a href="tel:+242057911680">📞 Brazzaville : +242 05 791 16 80</a>
      </div>
      <div class="topbar-social">
        <a href="https://www.facebook.com/profile.php?id=61565882327789" target="_blank">Facebook</a>
        <a href="https://www.linkedin.com/company/hpci-abidjansarl/" target="_blank">LinkedIn</a>
        <a href="http://www.tiktok.com/@hpciabidjan.sarl" target="_blank">TikTok</a>
        <a href="http://wa.me/2250706046595" target="_blank">WhatsApp</a>
      </div>
    </div>
  </div>`;
}

function injectNav(activePage) {
  const root = document.body.dataset.root || './';
  const pages = {
    accueil: root + 'index.html',
    apropos: root + 'pages/a-propos.html',
    engagements: root + 'pages/engagements.html',
    equipe: root + 'pages/equipe.html',
    certifications: root + 'pages/certifications.html',
    services: root + 'pages/services.html',
    nettoyage_ind: root + 'pages/service-nettoyage-industriel.html',
    maintenance: root + 'pages/service-maintenance.html',
    nettoyage_pro: root + 'pages/service-nettoyage-pro.html',
    bio_nettoyage: root + 'pages/service-bio-nettoyage.html',
    phytosanitaire: root + 'pages/service-phytosanitaire.html',
    hse: root + 'pages/service-hse.html',
    engineering: root + 'pages/service-engineering.html',
    mediatheque: root + 'pages/mediatheque.html',
    actualite: root + 'pages/actualite.html',
    partenaires: root + 'pages/partenaires.html',
    contact: root + 'pages/contact.html',
  };

  document.body.insertAdjacentHTML('afterbegin', `
    ${injectTopbar()}
    <nav>
      <div class="nav-inner">
        <a href="${pages.accueil}" class="logo">
          <img src="${root}images/logo/logo-hpci.png" alt="HPCI-SARL" style="height:48px;">
        </a>
        <ul class="nav-links">
          <li><a href="${pages.accueil}" class="${activePage === 'accueil' ? 'active' : ''}">Accueil</a></li>
          <li>
            <a href="${pages.apropos}" class="${['apropos', 'engagements', 'equipe', 'certifications'].includes(activePage) ? 'active' : ''}">Qui sommes-nous ? ▾</a>
            <div class="dropdown">
              <a href="${pages.apropos}">À propos de nous</a>
              <a href="${pages.engagements}">Nos engagements</a>
              <a href="${pages.equipe}">Notre équipe</a>
              <a href="${pages.certifications}">Nos certifications</a>
            </div>
          </li>
          <li>
            <a href="${pages.services}" class="${activePage === 'services' || activePage.startsWith('service') ? 'active' : ''}">Nos services ▾</a>
            <div class="dropdown">
              <a href="${pages.nettoyage_ind}"> Nettoyage industriel</a>
              <a href="${pages.maintenance}"> Maintenance industrielle & équipements</a>
              <a href="${pages.nettoyage_pro}"> Nettoyage professionnel & entretien</a>
              <a href="${pages.bio_nettoyage}"> Bio nettoyage en milieu hospitalier</a>
              <a href="${pages.phytosanitaire}"> Traitement phytosanitaire & assainissement</a>
              <a href="${pages.hse}"> Mise à disposition personnel HSE</a>
              <a href="${pages.engineering}"> Engineering</a>
            </div>
          </li>
          <li><a href="${pages.mediatheque}" class="${activePage === 'mediatheque' ? 'active' : ''}">Médiathèque</a></li>
          <li><a href="${pages.actualite}" class="${activePage === 'actualite' ? 'active' : ''}">Actualité</a></li>
          <li><a href="${pages.partenaires}" class="${activePage === 'partenaires' ? 'active' : ''}">Partenaires</a></li>
          <li><a href="${pages.contact}" class="nav-cta ${activePage === 'contact' ? 'active' : ''}">Nous contacter</a></li>
        </ul>
        <button class="hamburger" onclick="toggleMobileMenu()" aria-label="Menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </nav>
  `);
}

function injectFooter() {
  const root = document.body.dataset.root || './';
  document.body.insertAdjacentHTML('beforeend', `
    <div class="cta-band">
      <div class="cta-inner">
        <div class="cta-text">
          <h2>Prêt à travailler avec nous ?</h2>
          <p>Contactez-nous dès aujourd'hui pour un devis personnalisé et gratuit.</p>
        </div>
        <a href="${root}pages/contact.html" class="btn-dark">Demander un devis →</a>
      </div>
    </div>

    <footer>
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="${root}index.html" class="footer-logo">
            <img src="${root}images/logo/logo-hpci.png" alt="HPCI-SARL" style="height:40px;">
          </a>
          <p>Hygiène Prodige Com International — Spécialiste du nettoyage industriel, de la maintenance et de l'assainissement en Afrique centrale et de l'Ouest.</p>
          <div class="footer-social">
            <a href="https://www.facebook.com/profile.php?id=61565882327789" target="_blank">FB</a>
            <a href="https://www.linkedin.com/company/hpci-abidjansarl/" target="_blank">IN</a>
            <a href="http://www.tiktok.com/@hpciabidjan.sarl" target="_blank">TK</a>
            <a href="http://wa.me/2250706046595" target="_blank">WA</a>
          </div>
        </div>
        <div class="footer-col">
          <h4>Qui sommes-nous</h4>
          <ul>
            <li><a href="${root}pages/a-propos.html">À propos de nous</a></li>
            <li><a href="${root}pages/engagements.html">Nos engagements</a></li>
            <li><a href="${root}pages/equipe.html">Notre équipe</a></li>
            <li><a href="${root}pages/certifications.html">Nos certifications</a></li>
            <li><a href="${root}pages/partenaires.html">Nos partenaires</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Nos services</h4>
          <ul>
            <li><a href="${root}pages/service-nettoyage-industriel.html">Nettoyage industriel</a></li>
            <li><a href="${root}pages/service-maintenance.html">Maintenance industrielle</a></li>
            <li><a href="${root}pages/service-nettoyage-pro.html">Nettoyage professionnel</a></li>
            <li><a href="${root}pages/service-bio-nettoyage.html">Bio nettoyage</a></li>
            <li><a href="${root}pages/service-phytosanitaire.html">Traitement phytosanitaire</a></li>
            <li><a href="${root}pages/service-hse.html">Personnel HSE</a></li>
            <li><a href="${root}pages/service-engineering.html">Engineering</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Liens utiles</h4>
          <ul>
            <li><a href="${root}pages/mediatheque.html">Médiathèque</a></li>
            <li><a href="${root}pages/actualite.html">Actualités</a></li>
            <li><a href="${root}pages/contact.html">Nous contacter</a></li>
            <li><a href="mailto:hygieneprodige@hpci-sarl.net">E-mail général</a></li>
            <li><a href="tel:+242066652728">Pointe-Noire</a></li>
            <li><a href="tel:+242044378055">Brazzaville</a></li>
            <li><a href="tel:+2252722240247">Abidjan</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2024 HPCI-SARL — Hygiène Prodige Com International. Tous droits réservés.</p>
        <p>Pointe-Noire · Brazzaville · Abidjan</p>
      </div>
    </footer>
  `);
}

function toggleMobileMenu() {
  const links = document.querySelector('.nav-links');
  const isOpen = links.classList.toggle('mobile-open');
  if (isOpen) {
    links.style.cssText = 'display:flex;flex-direction:column;position:absolute;top:72px;left:0;right:0;background:white;padding:20px;box-shadow:0 8px 30px rgba(0,0,0,.15);z-index:999;gap:4px;';
  } else {
    links.style.cssText = 'display:none;';
  }
}

// Scroll animations
function initAnimations() {
  const els = document.querySelectorAll('.anim');
  const obs = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) {
        setTimeout(() => e.target.classList.add('visible'), i * 80);
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });
  els.forEach(el => obs.observe(el));
}

document.addEventListener('DOMContentLoaded', initAnimations);
