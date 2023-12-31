<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" href="Boho Abstract Handwritten Brand Logo.ico" type="image/x-icon">

  <title>U-Glow-Skincare </title>
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
    background-color:white;
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
  height: 150px;
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
    background-color: rgba(0, 0, 0, 0.7);
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
	<img src="diorskin.png" alt="Lipstick Photo" class="product-photo">
  <h2>SOIN VISAGE ANTI-ÂGE GLOBAL  </h2>
      <p>DIOR- SOIN VISAGE ANTI-ÂGE GLOBAL</p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('diorskin.png', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="estee1.png" alt="Lipstick Photo" class="product-photo">
  <h2>PERFECTIONIST PRO UV SPF45</h2>
      <p>ESTEE LAUDER-MULTI-PROTECTION UV SPF45 </p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

   
    <div class="product">
	<img src="chanel3.png" alt="Lipstick Photo" class="product-photo">
  <h2>LE LIFT PRO CRÈME VOLUME </h2>
      <p>CHANEL-LE LIFT PRO CRÈME VOLUME </p>
      <p>Prix :1838 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('chanel3.png', 'CHAnel-CRÈME VOLUME','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    
    <div class="product">
	<img src="estee2.png" alt="Lipstick Photo" class="product-photo">
  <h2>ULTIMATE DIAMOND SÉRUM YEUX </h2>
      <p>ESTEE LAUDER- ULTIMATE DIAMOND SÉRUM YEUX</p>
      <p>Prix : 2497dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('estee2.png', 'ESTEE LAUDER- ULTIMATE DIAMOND SÉRUM YEUX','qsbciugazdiugazogazfpoaiep eupo  ', '2497 dh')">Aperçu rapide</button>
    </div>

    
    <div class="product">
	<img src="dior5.png" alt="Lipstick Photo" class="product-photo">
  <h2>DIOR PRESTIGE LA CRÈME DE NUIT </h2>
      <p>DIOR- DIOR PRESTIGE LA CRÈME DE NUIT </p>
      <p>Prix :4752 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('dior5.png', 'DIOR- DIOR PRESTIGE LA CRÈME DE NUIT','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="dior6.png" alt="Lipstick Photo" class="product-photo">
  <h2>SÉRUM VISAGE ANTI-ÂGE </h2>
      <p>DIOR- LA MICRO-HUILE DE ROSE ADVANCED SERUM  </p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="chanel2.png" alt="chanel lift " class="product-photo">
  <h2>CHANEL LE LIFT FLUIDE </h2>
      <p>CHANEL- le serum lift fluide de chanel  </p>
      <p>Prix :1483 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('chanel2.png', 'CHANEL- LE serum lift fluide','LE LIFT Fluide aux vertus lissantes et raffermissantes diminue les zones de brillance et l’apparence des pores. La peau est lissée, raffermie, matifiée, éclatante de jeunesse.  ', '1483 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="dior3.png" alt="eye cream" class="product-photo">
  <h2>Dior prestige eye cream</h2>
      <p>DIOR prestige -le concentrate Eye cream </p>
      <p>Prix :1630 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('dior3.png', 'DIOR prestige -le concentrate Eye cream ','qsbciugazdiugazogazfpoaiep eupo  ', '1630 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="lancome3.png" alt="Lipstick Photo" class="product-photo">
  <h2>DÉMAQUILLANT YEUX </h2>
      <p>LANCÔME- BI-FACIL CLEAN & CARE DÉMAQUILLANT YEUX </p>
      <p>Prix :381 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="dior4.png" alt="Lipstick Photo" class="product-photo">
  <h2>Dior serum</h2>
      <p>DIOR PRESTIGE LE MICRO-SÉRUM DE ROSE YEUX </p>
      <p>Prix :2603 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('dior4.png', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="lancome2.png" alt="Lipstick Photo" class="product-photo">
  <h2>Creme de nuit  </h2>
      <p>LANCÔME- génifique crème nuit réparatrice </p>
      <p>Prix :1100 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="lancome4.png" alt="Lipstick Photo" class="product-photo">
  <h2>SÉRUM GÉNIFIQUE YEUX LIGHT-PEARL </h2>
      <p>LANCÔME- SÉRUM GÉNIFIQUE YEUX LIGHT-PEARL</p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
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