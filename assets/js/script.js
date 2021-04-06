// On crée un "alias" sur jQuery
var $ = jQuery;

// Démarre le carousel
$('#carousel').slick();

// Initialise isotope
$('.properties').isotope({
    // options
    itemSelector: '.col-lg-3',
    layoutMode: 'fitRows'
});

// Au clic, on doit faire
$('.properties').isotope({ filter: '.filter-136' });
