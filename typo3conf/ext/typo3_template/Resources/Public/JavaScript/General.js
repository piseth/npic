$('li.dropdown-submenu a').click(function(e) {
    e.preventDefault();
    window.location.href = $(this).attr('href');
});
(function($) {
    $('#contact-form').validate();
}).apply(this, [jQuery]);