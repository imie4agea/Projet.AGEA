<div class="modal hide fade" id="login">
    <div class="modal-header">
        <i class="icon-signin"></i> Connexion
        <button class="close" data-dismiss="modal">x</button>
    </div>
    <form id="login-form" action="index.php?p={$page}" method="post" class="form-horizontal">
        <div class="modal-body">
                <div class="control-group">
                    <label class="control-label" for="login_username">Nom d'utilisateur :</label>
                    <div class="controls">
                        <input class="input" id="login_username" name="login_username" type="text" placeholder="Nom d'utilisateur...">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="login_password">Mot de passe :</label>
                    <div class="controls">
                        <input class="input" id="login_password" name="login_password" type="password" placeholder="Mot de passe...">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="login_remember">Se souvenir de moi :</label>
                    <div class="controls">
                         <input id="login_remember" name="login_remember" type="checkbox">
                    </div>
                </div>
                <div class="alert" id="login_remember_warning">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Attention:</strong> ne cochez pas cette case si vous vous connectez depuis un lieu public !
                </div>
        </div>
        <div class="modal-footer">
            <input class="btn btn-primary" type="submit" value="Connexion">
        </div>
    </form>
</div>