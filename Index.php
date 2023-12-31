<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="Boho Abstract Handwritten Brand Logo.ico" type="image/x-icon">
  <title> U-Glow-Accueil</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url("background3.png");
    }

    header {
      
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 80px; 
    padding :60px;
    
    }

    nav {
      
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-grow: 1; 
    text-align: center; 
    }

    nav a {
      color: black;
      text-decoration: none;
      margin: 0 15px; 
    }

    .logo {
      max-width: 100px;
      margin-bottom: 10px; 
    }
    .inscription-link {
           text-decoration: none;
        }
    h1{
      font-family:Lucida Handwriting;
      font-size:60 px;
	  }
    h2{
      font-family:Lucida Handwriting;
      font-size: 20px;
    }
    h4{
      font-family:Lucida Handwriting;
      margin-left: 4em;
    }
    
    nav a:hover {
      color:#c7b198 ;
    }

  
    img.lg {
    border-radius: 50%;
  
  }

.search-input {
        margin-left: 20%;
        margin-top: 20px;
        padding: 5px;
        width: 50%;
        border: 1px solid #ccc;
        border-radius: 4px;
        
    }

.search-button {
    background-color: #9fd3c7;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}

.search-icon {
    margin-left: 8px;
    color: #fff;
}
.search-container{
  text-align: right;
}
.marque-container {
text-align: center;
margin: 100px auto;

}

.marque-row {
display: flex;
justify-content: center;
flex-wrap: wrap;
max-width:fit-content;
margin: 0 auto;
}
.marque {
margin-bottom: 60px;
margin-top: 60px;

}
.marque-logo {
width: 180px;
height: 180px;
border-radius: 50%;
margin: 10px;
overflow: hidden;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.marque-logo img {
width: 100%;
height: 100%;
object-fit: cover;
}
.promo-section {
position: relative;
text-align: center;
margin: 0 0;

}

.promo-image {
  width: 100%;
max-height: 700px;
object-fit: cover;	  
  }

.promo-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
width: 100% ;
}

section {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  padding: 2em;
}
.additional-block {
  width: 100% ;
  display: flex;
  margin: 20px 0;
}

.additional-image {
  flex: 1;
  max-height: 300px; 
  object-fit: cover; 
  border-radius: 50%;
  margin-top: 50px;
}

.additional-text {
  flex: 2;
  padding: 20px;
}
.block-text {
  font-size: 300 px ;
}

.product {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  width: 15%; 
  margin: 10px;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  box-sizing: border-box;
}
.product img {
  max-width: 100%; 
  height: 100px;
  border-radius: 50%; 
}
.promo-text{
  font-size: 60px;
}

button {
  background-color: #9fd3c7;
  color: #fff;
  border: none;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
footer {
    background-color: #c7b198;
    color: #fff; 
    padding: 20px 0; 
   
}


.footer-container {
    display: flex;
    justify-content: space-between;
    max-width: 1200px; rgeur maximale du conteneur */
    margin: 0 auto; 
}

.contact-info {
    width: 40%; 
}


.quick-links {
    width: 40%; 
}

.quick-links ul {
    list-style-type: none;
    
}

.quick-links li {
    margin-bottom: 10px; 
}


.copyright {
    text-align: center; 
    margin-top: 20px; 
}

.social-icons {
    text-align: center; 
    margin-top: 20px; 
}

.social-icons a {
    color: #fff; 
    margin: 0 10px; 
    font-size: 24px; 
    text-decoration: none; 
}


.social-icons a:hover {
    color: #ffd700; 
}

.commitments {
  text-align: left;
  max-width: 800px;
  
}
    .modal {
      display: flex;
    position: fixed;
    top: 0;
    left: 50%;
    height: 100%;
    background-color:white;
    transform: translateX(-50%);
    justify-content: center;
    align-items: center;
    z-index: 1;
    width: 70%;
    }
   .modal-text{
    color: black;
   }
    .modal-content {
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .modal-photo {
        max-width: 300px;
        max-height: 400px;
        margin-right: 20px;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
        color: black;
    }
    #modal-container {
    display: none;
    
    
}

.modal-cont {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 70%;
}
.colomn-container {
  display: flex;
    justify-content: space-around;
    align-items: center;
   
}

.column {
  text-align: center;
    margin: 0px 10px;
    flex: 0 0 30%;
}

.column img {
    width: 1000px;
    height: 400px;
    max-width: 200px;
    border-radius: 8px; 
}

.buttoncolumn {
  display: inline-block;
    margin-top: 10px;
    padding: 8px 16px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
}
.colonneh1{
  margin-bottom: 70px;
  display: inline-block;
  text-align: center;
}
.newsletter-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 90px;
}

.newsletter-image img {
    max-width: 100%;
    height: 600px;
    border-radius: 8px;
   }

.newsletter-form {
    flex: 1;
    margin-left: 20px; 
}

.newsletter-form h4 {
    font-size: 18px;
    margin-bottom: 10px;
}

.newsletter-form form {
    display: flex;
    align-items: center;
}

.newsletter-input {
    padding: 10px;
    flex: 1;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 1000px;
}

.newsletter-form button {
    padding: 10px 16px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

  </style>
  <script>
     function openQuickView(photo,titre,description, price) {
        
        var modal = document.createElement('div');
        modal.className = 'modal';

        modal.innerHTML = `
            <span class="close-btn" onclick="closeQuickView()">&times;</span>
            <img src="${photo}" alt="Product Photo" class="modal-photo">
            <div class="modal-content">
                <h2 class="modal-text">${titre}</h2>
                <p class="modal-text">${description}</p>
                <p class="modal-text">${price}</p>
                <button onclick="addToCart()">Ajouter au panier</button>
                <button onclick="buyNow()">Acheter</button>
            </div>
        `;

        
        document.body.appendChild(modal);
    }

    function closeQuickView() {
      
        var modal = document.querySelector('.modal');
        if (modal) {
            modal.remove();
        }
    }

    function addToCart() {
        
        alert("Produit ajouté au panier !");
    }

    function buyNow() {
        
        alert("Achat immédiat effectué !");
    }
    function openModal() {
    document.getElementById('modal-container').style.display = 'flex';
    }

    function closeModal() {
    document.getElementById('modal-container').style.display = 'none';
    }

   function subscribe() {
      event.preventDefault();

      
      var emailInput = document.getElementById('emailInput');
      var inputContainer = document.getElementById('inputContainer');
      var welcomeMessage = document.createElement('div');
      welcomeMessage.innerHTML = 'Bienvenue! Merci pour votre abonnement.';

      
      inputContainer.innerHTML = '';
      inputContainer.appendChild(welcomeMessage);
            
    }
  
</script>
</head>
<body>
  <header>
    <div class="logo">
      <img class="lg" src="Boho Abstract Handwritten Brand Logo.png" alt="Logo" width="170">
    </div>
  
<nav><center>
  <a href="index.php">Accueil</a>
	<a href="skincare.php">Skincare</a>
	<a href="makeup.php">Makeup</a>
	<a href="parfums.php">Parfums</a>
	<a href="mailto:UGlow@gmail.com">Contactez-nous</a>
  <a onclick="openModal()" class="inscription-link">S'inscrire</a>
</center>
  </nav>
  
<div class="search-container">
  <form action="/search" method="GET" >
    <input type="text" class="search-input"  name="q">
    <button type="submit" class="search-button">
       <i class="fas fa-search search-icon"></i>
    </button>
</form>

</div>
</header>
<h4>U-Glow</h4><div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="makeup.php"><img src="pexels-zhugewala-2113855.jpg" style="width:300px;height:600px" class="d-block w-100" ></a>
                <div class="carousel-caption d-none d-md-block">
                    <h1>Sculptez votre Beauté : Inspirez-vous de notre Collection de Maquillage</h1>
                </div>
            </div>
            <div class="carousel-item">
            <a href="skincare.php"><img src="pexels-vlada-karpovich-6634652.jpg" style="width:500px;height:600px" class="d-block w-100" ></a>
                <div class="carousel-caption d-none d-md-block">
                    <h1>L'éclat naturel révélé : Notre secret pour une peau radieuse</h1>
                    </div>
            </div>
            <div class="carousel-item">
            <a href="parfums.php"><img src="pexels-valeria-boltneva-965989.jpg" style="width:500px;height:600px" class="d-block w-100" ></a>
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="color:black" >Des parfums qui racontent des histoires : trouvez le vôtre</h1>
                    
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>  
  <div class="marque-container">
    <h1 class="marque">Notre Sélection de Marques</h1>
    <div class="marque-row">
     
      <div class="marque-logo"><img src="mac1.png" alt="mac"></div>
      <div class="marque-logo"><img src="lancome1.png" alt="lancome"></div>
      <div class="marque-logo"><img src="dior1.png" alt="dior"></div>
      <div class="marque-logo"><img src="benefit1.png" alt="benefit"></div>
      <div class="marque-logo"><img src="chanel1.png" alt="chanel></div>
      <div class="marque-logo"><img src="charlotte1.png" alt="charlotte"></div>
      <div class="marque-logo"><img src="gucci.png" alt="gucci"></div>
      <div class="marque-logo"><img src="estee.png" alt="estee"></div>
      <div class="marque-logo"><img src="fenty1.png" alt="fenty"></div>
      <div class="marque-logo"><img src="nars1.png" alt="nars"></div>
      <div class="marque-logo"><img src="toofaced1.png" alt="nars"></div>
      <div class="marque-logo"><img src="yves.png" alt="yves"></div>
      <div class="marque-logo"><img src="rare1.png" alt="nars"></div>
    </div>
  </div>

  
  <center><h1>Nos best sellers 💫 </h1></center>
  <!--Products-->
  <section>
<div class="product">
<img src="idole.jpg" alt="Lipstick Photo" class="product-photo">
<h2>IDÔLE </h2>
<p>LANCÔME- IDÔLE Nectar Eau de parfum </p>
<p>Prix :1250 dh  </p>
<button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','  ', '1250 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="lipoil.png" alt="Lipstick Photo" class="product-photo">
<h2>Lip oil</h2>
<p>DIOR -Dior addict lip glow oil </p>
<p>Prix: 520 dh </p>
<button class="quick-view-btn" onclick="openQuickView('lipoil.png', 'DIOR - Dior addict lip glow oil','Dior Addict Lip Glow Oil est une huile à lèvres brillante qui protège, embellit et rehausse   ', '520 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="chance.jpg" alt="Lipstick Photo" class="product-photo">
<h2>chance</h2>
<p>CHANEL- chance eau de parfum  </p>
<p>Prix: 1670 dh </p>
<button class="quick-view-btn" onclick="openQuickView('chance.jpg', 'CHANEL- chance eau de parfum','  ', '1670 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="highlight.png" alt="Lipstick Photo" class="product-photo">
<h2>Highlighter</h2>
<p>FENTY Beauty-Diamond bomb </p>
<p>Prix: 580 dh </p>
<button class="quick-view-btn" onclick="openQuickView('highlight.png', 'FENTY Beauty-Diamond bomb','  ', '580 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="Libre.png" alt="Lipstick Photo" class="product-photo">
<h2>Libre</h2>
<p>Yves saint laurent-libre eau de parfum</p>
<p>Prix: 1450 dh </p>
<button class="quick-view-btn" onclick="openQuickView('Libre.png', 'Yves saint laurent-libre eau de parfum','  ', '1450 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="blush.png" alt="Lipstick Photo" class="product-photo">
<h2>Rose blush </h2>
<p>DIOR-Dior Rosy glow blush</p>
<p>Prix: 500 dh </p>
<button class="quick-view-btn" onclick="openQuickView('blush.png', 'DIOR-Dior Rosy glow blush','Dior Addict Lip Glow Oil est une huile à lèvres brillante qui protège, embellit et rehausse ', '520 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="rarebeauty.png" alt="Lipstick Photo" class="product-photo">
<h2>Rare blush</h2>
<p>RARE-BEAUTY-soft penchy dewy liquid blush</p>
<p>Prix: 380 dh</p>
<button class="quick-view-btn" onclick="openQuickView('rarebeauty.png', 'RARE-BEAUTY-soft penchy dewy liquid blus','  ', '380 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="palette.png" alt="Lipstick Photo" class="product-photo">
<h2>Luxury palette </h2>
<p>CHARLOTTE-TILBURRY-dream luxury palette </p>
<p>Prix: 650 dh</p>
<button class="quick-view-btn" onclick="openQuickView('palette.png', 'CHARLOTTE-TILBURRY-dream luxury palettel','  ', '650 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="mascara.png" alt="Lipstick Photo" class="product-photo">
<h2>Mascara </h2>
<p>LANCÔME-lash idole mascara</p>
<p>Prix: 360 dh</p>
<button class="quick-view-btn" onclick="openQuickView('mascara.png', 'LANCÔME-lash idole mascara','  ', '360 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="jadore.jpg" alt="Lipstick Photo" class="product-photo">
<h2>j'adore</h2>
<p>DIOR-j'adore eau de parfum </p>
<p>Prix: 980 dh </p>
<button class="quick-view-btn" onclick="openQuickView('jadore.jpg', 'DIOR-j adore eau de parfum','  ', '980 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="benefitbr.png" alt="Lipstick Photo" class="product-photo">
<h2>Brow pen</h2>
<p>BENEFIT-brow microfilling pen</p>
<p>Prix: 360 dh</p>
<button class="quick-view-btn" onclick="openQuickView('benefitbr.png', 'BENEFIT-brow microfilling pen','  ', '520 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="fond.png" alt="Lipstick Photo" class="product-photo">
<h2>Born this way </h2>
<p>TOO FACED- super coverage concealer</p>
<p>Prix: 520 dh </p>
<button class="quick-view-btn" onclick="openQuickView('fond.png', 'TOO FACED- super coverage concealer','  ', '520 dh')">Aperçu rapide</button>
</div>
</section>

<div class="additional-block">
  <img src="pexels-jonaorle-3828268.jpg" alt="Additional Image" class="additional-image">
  <div class="additional-text">
    <center><h1>Bienvenue dans l'univers de la Beauté Éclatante ✨ !</h1></center>
    <center><p class="block-text">Découvrez l'essence de la confiance en soi avec U-Glow, </p>
    <p class="block-text">votre destination ultime pour des produits cosmétiques exceptionnels </p>
    <p class="block-text">qui révèlent la vraie beauté qui réside en vous .</p>
    <p class="block-text">Nous croyons en la puissance transformative de la beauté </p>
    <p class="block-text">et en son rôle essentiel dans l'affirmation de votre individualité.</p>
    <p class="block-text"></p>✨ L'Art de l'Éclat Naturel</p>
    <p class="block-text">Chez U-Glow, nous vous offrons bien plus que des produits de beauté. </p>
    <p class="block-text">Nous vous invitons à embrasser votre propre lumière intérieure et à explorer l'art de l'éclat naturel.</p>
    <p class="block-text">Chaque produit que nous créons est conçu  avec soin pour sublimer votre beauté naturelle, mettant en valeur ce qui vous rend unique.</p></center>
              
  </div>
</div>
<center><h1 class="colonneh1" >Découvrez nos catégories 😍 !!</h1></center>
<div class="colomn-container">
    <div class="column">
        <img src="pexels-vlada-karpovich-6634653.jpg" alt="Produits Skincare" >
        <h4>Produits Skincare</h4>
        <a href="skincare.php" class="buttoncolumn">Voir plus</a>
    </div>
    <div class="column">
        <img src="pexels-valeria-boltneva-90297.jpg" alt="Maquillage">
        <h4>Maquillage</h4>
        <a href="makeup.php" class="buttoncolumn">Voir plus</a>
    </div>
    <div class="column">
        <img src="pexels-cottonbro-studio-4659793.jpg" alt="Parfums">
        <h4>Parfums</h4>
        <a href="parfums.php" class="buttoncolumn">Voir plus</a>
    </div>
</div>
<div class="newsletter-container">
    <div class="newsletter-image">
        <img src="pexels-cottonbro-studio-4659793.jpg" alt="Newsletter">
    </div>
    <div class="newsletter-form" id="newsletterFormContainer">
        <h4>Abonnez-vous à notre newsletter</h4>
        <form id="newsletterForm" action="" method="post" onsubmit="return subscribe()">
        <div id="inputContainer">
            <input type="email" name="email" id="emailInput" class="newsletter-input" placeholder="Entrez votre adresse e-mail" required>
      </div>
            <button type="submit" onclick="subscribe()">S'abonner</button>
        </form>
    </div>
    </div>
</div>

  <footer>
  <div class="footer-container">
            <div class="contact-info">
                <h3>Nous Contacter</h3>
                <p>Email : <a href="mailto:u-glow@gmail.com">u-glow@gmail.com</a></p>
                <p>Téléphone : +212 000 0000</p>
                <p>Adresse : 123 Rue de la Beauté, Casablanca, Maroc</p>
            </div>
            
            <div class="quick-links">
                <h3>Liens Rapides</h3>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="skincare.php">skincare</a></li>
                    <li><a href="makeup.php">makeup</a></li>
                    <li><a href="parfums.php">parfums</a></li>
                </ul>
            </div>
        </div>
        
        
    <div class="social-icons">
    <h3>Suivez-nous</h3>
      <a href="https://www.facebook.com/UuGlow/"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
	  <a href="#"><i class="fab fa-tiktok"></i></a>
    </div>
    <div class="copyright">
            <p>&copy; 2023 Votre Site Cosmétique. Tous droits réservés.</p>
        </div>
  </footer>

<!-- Section pour la fenêtre modale -->
<div id="modal-container" class="modal">
    <div class="modal-cont">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <?php include('inscriptiontest.php'); ?>
    </div>
</div>
</body>
</html>
