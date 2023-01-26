<div class="login-form show_if_not_connected">

    <div class="alert alert-info please-log-in">
        Merci de vous connecter!
    </div>

    <div class="alert alert-danger bad-credentials">
        Identifiants incorrects!
    </div>

    <form>
        <div class="mb-3">
            <label for="addressInput" class="form-label">E-mail:</label>
            <input type="email" class="form-control" name="email" placeholder="my@email.com">
        </div>
        <div class="mb-3">
            <label for="addressInput" class="form-label">Mot de passe:</label>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>

        <input type="submit" href="#" class="login btn btn-primary" value="Identification" />
    </form>
</div>

<div class="logout show_if_connected">
    Vous êtes actuellement connecté!
    <hr />
    <a href="#" class="logout btn btn-danger">Déconnexion</a>
</div>

<script type="text/javascript" src="js/login.js"></script>