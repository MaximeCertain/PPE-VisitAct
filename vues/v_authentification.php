
<link rel="stylesheet" type="text/css" href="includes/css/cssConnexion.css">
<body>
<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="index.php?uc=authentification&action=verifier">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" placeholder="Matricule" name="login" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="mdp" placeholder="Mot de passe" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" onClick="submit('contact-form');">Se connecter</button>
            </form>
            <p>ta mere </p>
            <form class="form-subscribe" method="POST" action="index.php?uc=authentification&action=inscrire">
            	<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" onClick="submit('contact-form');">S'inscrire ! </button>


            </form>
        </div>
    </div>
  </body>