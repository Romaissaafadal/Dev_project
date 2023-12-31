<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" href="Boho Abstract Handwritten Brand Logo.ico" type="image/x-icon">
  <title>U-Glow-Parfums </title>
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
  height: 100px;
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
	<img src="idole.jpg" alt="Lipstick Photo" class="product-photo">
  <h2>IDÔLE </h2>
      <p>LANCÔME- IDÔLE Nectar Eau de parfum </p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
<img src="Libre.png" alt="Lipstick Photo" class="product-photo">
<h2>Libre</h2>
<p>Yves saint laurent-libre eau de parfum</p>
<p>Prix: 1450 dh </p>
<button class="quick-view-btn" onclick="openQuickView('Libre.png', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>


   
<div class="product">
<img src="chance.jpg" alt="Lipstick Photo" class="product-photo">
<h2>chance</h2>
<p>CHANEL- chance eau de parfum  </p>
<p>Prix: 1670 dh </p>
<button class="quick-view-btn" onclick="openQuickView('chance.jpg', 'CHANEL- chance eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1670 dh')">Aperçu rapide</button>
</div>
    
<div class="product">
  <img src="jadore.jpg" alt="Lipstick Photo" class="product-photo">
  <h2>j'adore</h2>
  <p>DIOR-j'adore eau de parfum </p>
  <p>Prix: 980 dh </p>
  <button class="quick-view-btn" onclick="openQuickView('jadore.jpg', 'DIOR - Dior addict lip glow oil','qsbciugazdiugazogazfpoaiep eupo  ', '520 dh')">Aperçu rapide</button>
</div>

    
    <div class="product">
	<img src="allure.jpg" alt="Lipstick Photo" class="product-photo">
  <h2>ALLURE</h2>
      <p>CHANEL- Allure Eau de parfum </p>
      <p>Prix :970 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('allure.jpg', 'CHANEL- Allure Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="CHANEL COCO MADEMOISELLE Eau de Parfum 1350.png" alt="Lipstick Photo" class="product-photo">
  <h2>COCO MADEMOISELLE  </h2>
      <p>CHANEL- COCO MADEMOISELLE Eau de Parfum </p>
      <p>Prix :1000 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('CHANEL COCO MADEMOISELLE Eau de Parfum 1350.png', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="DIOR Poison Girl Eau De Parfum 1770.png" alt="Lipstick Photo" class="product-photo">
  <h2>Poison Girl</h2>
      <p>DIOR-   Poison   Girl Eau De Parfum </p>
      <p>Prix :1300dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('DIOR Poison Girl Eau De Parfum 1770.png', 'DIOR- Poison Girl Eau De Parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="vie.jpg" alt="Lipstick Photo" class="product-photo">
  <h2>la vie est belle E </h2>
      <p>LANCÔME-la vie est belle Eau de parfum </p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('vie.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="missdior.png" alt="Lipstick Photo" class="product-photo">
  <h2>MISS DIOR </h2>
      <p>DIOR-MISS DIOR EAU DE PARFUM </p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="joydior.png" alt="Lipstick Photo" class="product-photo">
  <h2>JOY DE DIOR</h2>
      <p> DIOR-JOY EAU DE PARFUM INTENSE  </p>
      <p>Prix :1250 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="gucci1.png" alt="Lipstick Photo" class="product-photo">
  <h2>Moonlight </h2>
      <p>GUCCI- Moonlight eau de parfum </p>
      <p>Prix :2680 dh  </p>
      <button class="quick-view-btn" onclick="openQuickView('idole.jpg', 'LANCÔME- IDÔLE Nectar Eau de parfum','qsbciugazdiugazogazfpoaiep eupo  ', '1250 dh')">Aperçu rapide</button>
    </div>

    <div class="product">
	<img src="nuittresor.png" alt="Lipstick Photo" class="product-photo">
  <h2>Nuit trésor </h2>
      <p>LANCÔME- nuit trésor Eau de parfum </p>
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