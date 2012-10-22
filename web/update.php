<?php

/* ==============================================================================
  CONSTANTES
  ============================================================================== */

define('ROOT_DIR', dirname(dirname(__FILE__)) . '/');

/* ==============================================================================
  CONFIGURATION
  ============================================================================== */

include_once ROOT_DIR . 'app/config/config.php';

/* ==============================================================================
  MISE À JOUR
  ============================================================================== */

echo 'Suppression des tables... </br>';
exec('php ' . ROOT_DIR . 'doctrine.php orm:schema-tool:drop --force');
echo 'Suppression terminée ! </br>';

echo 'Création des tables... </br>';
exec('php ' . ROOT_DIR . 'doctrine.php orm:schema-tool:create');
echo 'Création terminée ! </br>';

echo 'Chargement des sections... </br>';

$public = new Section();
$public->setName('public');
$public->setAuthRequired(0);
$em->persist($public);

$membre = new Section();
$membre->setName('membre');
$membre->setAuthRequired(1);
$em->persist($membre);

$administration = new Section();
$administration->setName('administration');
$administration->setAuthRequired(2);
$em->persist($administration);

$em->flush();

echo 'Chargement des pages... </br>';

$accueil = new Page();
$accueil->setSection($public);
$accueil->setName('accueil');
$accueil->setTitle('Accueil');
$accueil->setIcon('icon-home');
$em->persist($accueil);

$qui_sommes_nous = new Page();
$qui_sommes_nous->setSection($public);
$qui_sommes_nous->setName('qui_sommes_nous');
$qui_sommes_nous->setTitle('Qui sommes nous');
$qui_sommes_nous->setIcon('icon-question-sign');
$em->persist($qui_sommes_nous);

$actions = new Page();
$actions->setSection($public);
$actions->setName('actions');
$actions->setTitle('Actions');
$actions->setIcon('icon-globe');
$em->persist($actions);

$actualites = new Page();
$actualites->setSection($public);
$actualites->setName('actualites');
$actualites->setTitle('Actualités');
$actualites->setIcon('icon-globe');
$em->persist($actualites);

$partenariats = new Page();
$partenariats->setSection($public);
$partenariats->setName('partenariats');
$partenariats->setTitle('Partenariats');
$partenariats->setIcon('icon-hand-right');
$em->persist($partenariats);

$adherer = new Page();
$adherer->setSection($public);
$adherer->setName('adherer');
$adherer->setTitle('Adhérer');
$adherer->setIcon('icon-check');
$em->persist($adherer);

$mentions_legales = new Page();
$mentions_legales->setSection($public);
$mentions_legales->setName('mentions_legales');
$mentions_legales->setTitle('Mentions légales');
$mentions_legales->setIcon('icon-legal');
$em->persist($mentions_legales);

$_soumettre_cv = new Page();
$_soumettre_cv->setSection($public);
$_soumettre_cv->setName('_soumettre_cv');
$_soumettre_cv->setTitle('Soumettre un CV');
$_soumettre_cv->setIcon('icon-list');
$em->persist($_soumettre_cv);

$recruter = new Page();
$recruter->setSection($membre);
$recruter->setName('recruter');
$recruter->setTitle('Recruter');
$recruter->setIcon('icon-list');
$em->persist($recruter);

$evenements = new Page();
$evenements->setSection($membre);
$evenements->setName('evenements');
$evenements->setTitle('Évenements');
$evenements->setIcon('icon-calendar');
$em->persist($evenements);

$actualites = new Page();
$actualites->setSection($membre);
$actualites->setName('actualites');
$actualites->setTitle('Actualités');
$actualites->setIcon('icon-pushpin');
$em->persist($actualites);

$contenus = new Page();
$contenus->setSection($administration);
$contenus->setName('informations_generales');
$contenus->setTitle('Informations générales');
$contenus->setIcon('icon-pencil');
$em->persist($contenus);

$contenus = new Page();
$contenus->setSection($administration);
$contenus->setName('contenus');
$contenus->setTitle('Contenus');
$contenus->setIcon('icon-pushpin');
$em->persist($contenus);

$contenus = new Page();
$contenus->setSection($administration);
$contenus->setName('types_contenus');
$contenus->setTitle('Types de contenus');
$contenus->setIcon('icon-wrench');
$em->persist($contenus);

$contenus = new Page();
$contenus->setSection($administration);
$contenus->setName('pages');
$contenus->setTitle('Pages');
$contenus->setIcon('icon-sitemap');
$em->persist($contenus);

$em->flush();

echo 'Chargement des métadonnées... </br>';

$title = new Metadata();
$title->setName('title');
$title->setLabel('Titre');
$title->setValue('AGEA - Côte Ouest');
$title->setMetadata(true);
$em->persist($title);

$site_name = new Metadata();
$site_name->setName('site_name');
$site_name->setLabel('Nom du site');
$site_name->setValue('AGEA');
$site_name->setMetadata(false);
$em->persist($site_name);

$site_url = new Metadata();
$site_url->setName('site_url');
$site_url->setLabel('URL du site');
$site_url->setValue('http://www.ageapaysdelaloire.fr');
$site_url->setMetadata(false);
$em->persist($site_url);

$domain = new Metadata();
$domain->setName('domain');
$domain->setLabel('Nom de domaine');
$domain->setValue('ageapaysdelaloire.fr');
$domain->setMetadata(false);
$em->persist($domain);

$timezone = new Metadata();
$timezone->setName('timezone');
$timezone->setLabel('Fuseau horaire');
$timezone->setValue('Europe/Paris');
$timezone->setMetadata(false);
$em->persist($timezone);

$locale = new Metadata();
$locale->setName('locale');
$locale->setLabel('Locale');
$locale->setValue('Fr');
$locale->setMetadata(false);
$em->persist($locale);

$email = new Metadata();
$email->setName('email');
$email->setLabel('Adresse mail');
$email->setValue('rg-paysloire@agea.fr');
$email->setMetadata(false);
$em->persist($email);

$em->flush();

echo 'Chargement des types de contenus... </br>';

$actualite = new ContentType();
$actualite->setLabel('Actualité');
$actualite->setPage($actualites);
$actualite->setPicture(true);
$actualite->setHtml(false);
$actualite->setFeed(true);
$em->persist($actualite);

$action = new ContentType();
$action->setLabel('Action');
$action->setPage($actions);
$action->setPicture(false);
$action->setHtml(true);
$action->setFeed(true);
$em->persist($action);

$em->flush();

echo 'Chargement des resources... </br>';

$image1 = new Resource();
$image1->setTitle('Image 1');
$image1->setUrl('');
$image1->setImage(true);
$image1->setExternal(true);
$image1->setSlider(false);
$em->persist($image1);

$image2 = new Resource();
$image2->setTitle('Image 2');
$image2->setUrl('');
$image2->setImage(true);
$image2->setExternal(true);
$image2->setSlider(false);
$em->persist($image2);

$em->flush();

echo 'Chargement des contenus... </br>';

$actu1 = new Content();
$actu1->setTitle('Actu 1');
$actu1->setBody('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.');
$actu1->setDatetime(time());
$actu1->setContentType($actualite);
$actu1->setResource($image1);
$em->persist($actu1);

$actu2 = new Content();
$actu2->setTitle('Actu 2');
$actu2->setBody('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.');
$actu2->setDatetime(time());
$actu2->setContentType($actualite);
$actu2->setResource($image1);
$em->persist($actu2);

$actu3 = new Content();
$actu3->setTitle('Actu 3');
$actu3->setBody('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.');
$actu3->setDatetime(time());
$actu3->setContentType($actualite);
$actu3->setResource($image2);
$em->persist($actu3);

$action1 = new Content();
$action1->setTitle('Action 1');
$action1->setBody('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.');
$action1->setDatetime(time());
$action1->setContentType($action);
$em->persist($action1);

$em->flush();

echo 'Chargement terminé ! </br>';