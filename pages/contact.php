<?php require_once('../includes/maintenance_check.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact — HPCI-SARL</title>
<link rel="stylesheet" href="../style.css">
<!-- Font Awesome 6.x -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
  .contact-header { background: var(--navy); padding: 80px 0; color: white; text-align: center; }
  .contact-grid { display: grid; grid-template-columns: 1fr 1.5fr; gap: 60px; margin-top: 60px; }
  .contact-info-card { background: #f8fafc; padding: 40px; border-radius: 16px; border: 1px solid var(--border); }
  .info-item { display: flex; gap: 20px; margin-bottom: 32px; }
  .info-item i { width: 48px; height: 48px; background: white; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--accent); font-size: 1.2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.05); flex-shrink: 0; }
  .info-item h4 { font-family: 'Barlow Condensed', sans-serif; font-size: 1.1rem; color: var(--navy); margin-bottom: 4px; }
  .info-item p { color: #64748b; font-size: 0.95rem; line-height: 1.5; }
  .contact-form-card { background: white; padding: 40px; border-radius: 16px; border: 1px solid var(--border); box-shadow: 0 30px 60px rgba(0,0,0,0.05); }
  .form-group { margin-bottom: 24px; }
  .form-group label { display: block; font-size: 0.85rem; font-weight: 700; color: #64748b; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.05em; }
  .form-group input, .form-group textarea { width: 100%; padding: 14px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 1rem; }
  .social-links { display: flex; gap: 15px; margin-top: 40px; }
  .social-links a { width: 44px; height: 44px; border-radius: 50%; background: var(--navy); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; transition: all 0.3s; }
  .social-links a:hover { transform: translateY(-5px); background: var(--accent); color: var(--navy); }
</style>
</head>
<body data-root="../">

<nav>
  <div class="nav-inner">
    <a href="../index.php" class="logo"><img src="../images/logo/LOGO-PNR.jpeg" alt="Logo" style="height:48px;"></a>
    <ul class="nav-links">
      <li><a href="../index.php">Accueil</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contact.php" class="active">Contact</a></li>
    </ul>
  </div>
</nav>

<section class="contact-header">
  <div class="container">
    <h1>Parlons de vos Projets</h1>
    <p>Une présence stratégique en Afrique pour une réactivité maximale.</p>
  </div>
</section>

<section class="container" style="padding-bottom: 100px;">
  <div class="contact-grid">
    <div class="contact-info-card">
      <h2 style="font-family: 'Barlow Condensed', sans-serif; font-size: 1.8rem; margin-bottom: 32px;">Coordonnées</h2>
      
      <div class="info-item">
        <i class="fa-solid fa-location-dot"></i>
        <div>
          <h4>Pointe-Noire, Congo</h4>
          <p>Ex Bât. CFCO, face au Restaurant le SILMANDE</p>
        </div>
      </div>

      <div class="info-item">
        <i class="fa-solid fa-phone"></i>
        <div>
          <h4>Téléphone</h4>
          <p>+242 06 665 27 28<br>+242 05 791 16 80</p>
        </div>
      </div>

      <div class="info-item">
        <i class="fa-solid fa-envelope"></i>
        <div>
          <h4>Email</h4>
          <p>hygieneprodige@hpci-sarl.net<br>info@hpci-sarl.net</p>
        </div>
      </div>

      <div class="social-links">
        <a href="https://www.facebook.com/profile.php?id=61565882327789" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com/company/hpci-abidjansarl/" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://wa.me/2250706046595" target="_blank" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>

    <div class="contact-form-card">
      <h2 style="font-family: 'Barlow Condensed', sans-serif; font-size: 1.8rem; margin-bottom: 32px;">Nous écrire</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="name">Nom Complet</label>
          <input type="text" id="name" name="name" required placeholder="Ex: Jean Dupont">
        </div>
        <div class="form-group">
          <label for="email">Adresse E-mail</label>
          <input type="email" id="email" name="email" required placeholder="Ex: jean.dupont@email.com">
        </div>
        <div class="form-group">
          <label for="subject">Objet</label>
          <input type="text" id="subject" name="subject" required placeholder="Ex: Demande de devis maintenance">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" required style="height: 154px;" placeholder="Détaillez votre demande..."></textarea>
        </div>
        <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; font-size: 1rem; border: none; cursor: pointer;">Envoyer le message →</button>
      </form>
    </div>
  </div>
</section>

<footer>
  <div class="footer-bottom">
    <p>© 2024 HPCI-SARL — Tous droits réservés.</p>
  </div>
</footer>

</body>
</html>
