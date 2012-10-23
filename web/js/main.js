/* ==============================================================================
  LIBRAIRIES
  ============================================================================== */

// Active les tooltips bootstrap

$(".tooltip-top").tooltip({placement: "top"});
$(".tooltip-bottom").tooltip({placement: "bottom"});
$(".tooltip-left").tooltip({placement: "left"});
$(".tooltip-right").tooltip({placement: "right"});

// Active les carousels
// 
$('.carousel').carousel({
  interval: 3000
})

// Raccourci clavier pour le modal de debug

shortcut.add("Control+Alt+D",function() {
    $('#modal-debug').modal('show');
});

// Activation des onglets pour le modal de debug

$('#debug-tabs').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
})

$(function () {
    $('#debug-tabs a:first').tab('show');
})

// Ouvre automatiquement la première node des dumps krumo

$(document).ready(function(){
    $('.krumo-first > .krumo-child > .krumo-nest').show();
});

// Alertes
$(document).ready(function(){
    $('.alert').hide();
});

$('#login_remember').on('click', function(e){
    if ($('#login_remember').attr('checked') == 'checked'){
        $('#login_remember_warning').show();
    } else {
        $('#login_remember_warning').hide();
    }
});


/* ==============================================================================
  MODAUX
  ============================================================================== */

// Affiche les modaux automatiques

$(document).ready(function(){
    $('.auto-modal').modal('show')
});

// Place les modales en centre de page

$('.modal').css({
    'margin-top': function () {
        return -($(this).height() / 2);
    }
})

// Envoi des formulaires
/*
$('#login-submit').on('click', function(e){
    $('#login-form').submit();
});
 */

$('#login-admin-submit').on('click', function(e){
    $('#login-admin-form').submit();
});

$('#cv-submit').on('click', function(e){
    $('#cv-form').submit();
});