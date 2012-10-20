<div class="modal hide fade large_modal" id="post_cv">
    <div class="modal-header">
        <i class="icon-signin"></i> CV
        <button class="close" data-dismiss="modal">x</button>
    </div>
        <div class="modal-body">
            <div class="row-fluid">
                <div class="span12">
                    <h1>Déposez votre CV !</h1>
                    <h2>Remplissez ce formulaire et joignez-y votre CV.</h2>
                    <p>L'ensemble sera traité par notre chargée en ressources humaines qui s'occupera de la transmettre aux agents généraux d'assurance à la recherche de collaborateurs.</p>
                </div>
            </div>
            <form id="cv-form" action="index.php?p={$page}" method="post" class="form-horizontal">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="control-group">
                            <label class="control-label" for="cv_last_name">Nom :</label>
                            <div class="controls">
                                <input class="input" id="cv_last_name" name="cv_last_name" type="text" placeholder="Nom...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_first_name">Prénom :</label>
                            <div class="controls">
                                <input class="input" id="cv_first_name" name="cv_first_name" type="text" placeholder="Prénom...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_adress">Adresse :</label>
                            <div class="controls">
                                <input class="input" id="cv_adress" name="cv_adress" type="text" placeholder="Adresse...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_postal_code">Code postal :</label>
                            <div class="controls">
                                <input class="input" id="cv_postal_code" name="cv_postal_code" type="text" placeholder="Code postal...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_city">Ville :</label>
                            <div class="controls">
                                <input class="input" id="cv_city" name="cv_city" type="text" placeholder="Ville...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_phone_number">Téléphone :</label>
                            <div class="controls">
                                <input class="input" id="cv_phone_number" name="cv_phone_number" type="text" placeholder="Téléphone...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_mobile_number">Mobile :</label>
                            <div class="controls">
                                <input class="input" id="cv_mobile_number" name="cv_mobile_number" type="text" placeholder="Mobile...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_email">Adresse mail :</label>
                            <div class="controls">
                                <input class="input" id="cv_email" name="cv_email" type="text" placeholder="Adresse mail...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_birthdate">Date de naissance :</label>
                            <div class="controls">
                                <input class="input" id="cv_birthdate" name="cv_birthdate" type="text" placeholder="Date de naissance...">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_file">Fichier :</label>
                            <div class="controls">
                                <input class="input" id="cv_file" name="cv_file" type="file">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="cv_message">Message :</label>
                            <div class="controls">
                                <textarea name="cv_message" id="cv_message" rows="6" placeholder="Message..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="span6">

                        <h2>Type d'emploi recherché :</h2>

                        <label class="checkbox">
                            <input id="cv_emploi_attache_agence" name="cv_emploi_attache_agence" type="checkbox"> Attaché d'agence
                        </label>
                        <label class="checkbox">
                            <input id="cv_emploi_collaborateur_agence" name="cv_emploi_collaborateur_agence" type="checkbox"> Collaborateur d'agence
                        </label>
                        <label class="checkbox">
                            <input id="cv_emploi_charge_clientele" name="cv_emploi_charge_clientele" type="checkbox"> Chargé de clientèle
                        </label>
                        <label class="checkbox">
                            <input id="cv_emploi_autre" name="cv_emploi_autre" type="checkbox"> Autre
                        </label>

                        <h2>Type de contrat recherché :</h2>

                        <label class="checkbox">
                            <input id="cv_contrat_cdi" name="cv_contrat_cdi" type="checkbox"> CDI
                        </label>
                        <label class="checkbox">
                            <input id="cv_contrat_cdd" name="cv_contrat_cdd" type="checkbox"> CDD
                        </label>
                        <label class="checkbox">
                            <input id="cv_contrat_stage" name="cv_contrat_stage" type="checkbox"> Stage
                        </label>
                        <label class="checkbox">
                            <input id="cv_contrat_alternance" name="cv_contrat_alternance" type="checkbox"> Alternance 
                        </label>
                        <label class="checkbox">
                            <input id="cv_contrat_saisonnier" name="cv_contrat_saisonnier" type="checkbox"> Emploi saisonnier
                        </label>

                        <h2>Experience dans le(s) domaine(s) recherchés :</h2>

                        <label class="radio inline">
                            <input type="radio" name="cv_experience" id="cv_experience_oui" value="oui" checked>
                            Oui
                        </label>
                        <label class="radio inline">
                            <input type="radio" name="cv_experience" id="cv_experience_non" value="non">
                            Non
                        </label>

                        <h2>Mobilité :</h2>

                        <h4>Pays de la loire :</h4>

                        <label class="checkbox inline">
                            <input id="cv_mobilite_44" name="cv_mobilite_44" type="checkbox"> 44
                        </label>
                        <label class="checkbox inline">
                            <input id="cv_mobilite_49" name="cv_mobilite_49" type="checkbox"> 49
                        </label>
                        <label class="checkbox inline">
                            <input id="cv_mobilite_53" name="cv_mobilite_53" type="checkbox"> 53
                        </label>
                        <label class="checkbox inline">
                            <input id="cv_mobilite_72" name="cv_mobilite_72" type="checkbox"> 72
                        </label>
                        <label class="checkbox inline">
                            <input id="cv_mobilite_85" name="cv_mobilite_85" type="checkbox"> 85
                        </label>

                        <h4>Bretagne :</h4>

                        <label class="checkbox inline">
                            <input id="cv_mobilite_22" name="cv_mobilite_22" type="checkbox"> 22
                        </label>
                        <label class="checkbox inline">
                            <input id="cv_mobilite_29" name="cv_mobilite_29" type="checkbox"> 29
                        </label>
                        <label class="checkbox inline">
                            <input id="cv_mobilite_35" name="cv_mobilite_35" type="checkbox"> 35
                        </label>
                        <label class="checkbox inline">
                            <input id="cv_mobilite_56" name="cv_mobilite_56" type="checkbox"> 56
                        </label>

                        <h2>Important :</h2>

                        <label class="checkbox">
                            <input id="cv_terms" name="cv_terms" type="checkbox"> J’autorise AGEA Pays de la Loire et AGEA Bretagne à utiliser et communiquer toutes les informations fournies ci-dessus à ses agents.
                        </label>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <input id="cv-submit" class="btn btn-primary" type="submit" value="Envoyer">
        </div>
    </form>
</div>