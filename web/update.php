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
$contenus->setName('contenus');
$contenus->setTitle('Contenus');
$contenus->setIcon('icon-pencil');
$em->persist($contenus);

$em->flush();

echo 'Chargement des métadonnées... </br>';

$title = new Metadata();
$title->setName('title');
$title->setLabel('titre');
$title->setValue('AGEA - Côte Ouest');
$em->persist($title);

$site_name = new Metadata();
$site_name->setName('site_name');
$site_name->setLabel('nom du site');
$site_name->setValue('AGEA');
$em->persist($site_name);

$site_url = new Metadata();
$site_url->setName('site_url');
$site_url->setLabel('URL du site');
$site_url->setValue('http://www.ageapaysdelaloire.fr');
$em->persist($site_url);

$domain = new Metadata();
$domain->setName('domain');
$domain->setLabel('nom de domaine');
$domain->setValue('ageapaysdelaloire.fr');
$em->persist($domain);

$timezone = new Metadata();
$timezone->setName('timezone');
$timezone->setLabel('fuseau horaire');
$timezone->setValue('Europe/Paris');
$em->persist($timezone);

$locale = new Metadata();
$locale->setName('locale');
$locale->setLabel('locale');
$locale->setValue('Fr');
$em->persist($locale);

$email = new Metadata();
$email->setName('email');
$email->setLabel('adresse mail');
$email->setValue('rg-paysloire@agea.fr');
$em->persist($email);

$em->flush();

echo 'Chargement terminé ! </br>';