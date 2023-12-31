<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" href="Boho Abstract Handwritten Brand Logo.ico" type="image/x-icon">

  <title>U-Glow-Makeup </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url("background1.png");
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
.modal {
      display: flex;
    position: fixed;
    top: 0;
    left: 50%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    transform: translateX(-50%);
    justify-content: center;
    align-items: center;
    z-index: 1;
    width: 70%;
    }
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
        color: black;
    }
    section {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  padding: 2em;
}
    .product {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  width: 20%; 
  margin: 10px;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  box-sizing: border-box;
}
.product img {
  max-width: 100%; 
  height: 200px;
  border-radius: 50%;
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
.modal {
      display: flex;
    position: fixed;
    top: 0;
    left: 50%;
    height: 100%;
    background-color: white;
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
<section>
    <div class="product">
	<img src="mac2.png" alt="Lipstick Photo" class="product-photo">
  <h2>foundation fluide spf 15 </h2>
      <p>MAC- Studio fix fluide spf 15</p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('mac2.png', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="dior7.png" alt="Lipstick Photo" class="product-photo">
  <h2>DIOR ADDICT LIP MAXIMIZER  </h2>
      <p>DIOR- Berries Eyeshadow Palette</p>
      <p>Prix :476 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('dior7.png', 'BYS- Berries Eyeshadow Palette','qsbciugazdiugazogazfpoaiep eupo  ', '250 dh')">Aperçu rapide</button>
    </div>

   
    <div class="product">
  <img src="blush.png" alt="Lipstick Photo" class="product-photo">
  <h2>Rosy glow blush </h2>
  <p>DIOR-Rosy glow blush</p>
  <p>Prix: 500 dh </p>
  <button class="quick-view-btn" onclick="openQuickView('blush.png', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>

    
    <div class="product">
	<img src="Chanel Les Beiges Healthy Glow Bronzing Cream 460.png" alt="Lipstick Photo" class="product-photo">
  <h2> Glow Bronzing Cream </h2>
      <p>CHANEL- Glow Bronzing Cream </p>
      <p>Prix :550 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('Chanel Les Beiges Healthy Glow Bronzing Cream 460.png', 'CHANEL- Glow Bronzing Cream','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    
    <div class="product">
	<img src="THE SLIM MATTE LONGWEAR LIPSTICK 360.png" alt="Lipstick Photo" class="product-photo">
  <h2> MATTE  LIPSTICK </h2>
      <p>YVES SAINT LAURENT- MATTE LIPSTIC</p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('THE SLIM MATTE LONGWEAR LIPSTICK 360.png', 'YVES SAINT LAURENT- MATTE LIPSTIC','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
<img src="rarebeauty.png" alt="Lipstick Photo" class="product-photo">
<h2>Rare blush</h2>
<p>RARE-BEAUTY-soft penchy dewy liquid blush</p>
<p>Prix: 380 dh</p>
<button class="quick-view-btn" onclick="openQuickView('rarebeauty.png', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>


<div class="product">
<img src="palette.png" alt="Lipstick Photo" class="product-photo">
<h2>Luxury palette </h2>
<p>CHARLOTTE-TILBURRY-dream luxury palette </p>
<p>Prix: 650 dh</p>
<button class="quick-view-btn" onclick="openQuickView('palette.png', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="mascara.png" alt="Lipstick Photo" class="product-photo">
<h2>Mascara </h2>
<p>LANCÔME-lash idole mascara</p>
<p>Prix: 360 dh</p>
<button class="quick-view-btn" onclick="openQuickView('mascara.png', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>


<div class="product">
<img src="benefitbr.png" alt="Lipstick Photo" class="product-photo">
<h2>Brow pen</h2>
<p>BENEFIT-brow microfilling pen</p>
<p>Prix: 360 dh</p>
<button class="quick-view-btn" onclick="openQuickView('benefitbr.png', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>

<div class="product">
<img src="fond.png" alt="Lipstick Photo" class="product-photo">
<h2>Born this way </h2>
<p>TOO FACED- super coverage concealer</p>
<p>Prix: 520 dh </p>
<button class="quick-view-btn" onclick="openQuickView('fond.png', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>


<div class="product">
<img src="lipoil.png" alt="Lipstick Photo" class="product-photo">
<h2>Lip oil</h2>
<p>DIOR -Dior addict lip glow oil </p>
<p>Prix: 520 dh </p>
<button class="quick-view-btn" onclick="openQuickView('lipoil.png', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>


<div class="product">
<img src="highlight.png" alt="Lipstick Photo" class="product-photo">
<h2>Highlighter</h2>
<p>FENTY Beauty-Diamond bomb </p>
<p>Prix: 580 dh </p>
<button class="quick-view-btn" onclick="openQuickView('highlight.png', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>

</section>
<!--Section modale d'inscription-->
<div id="modal-container" class="modal">
    <div class="modal-cont">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <?php include('inscriptiontest.php'); ?>
    </div>
</div>
</body>