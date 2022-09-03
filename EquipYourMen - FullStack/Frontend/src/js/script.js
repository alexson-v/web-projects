// PageUp script
jQuery(document).ready(function(){
    const btn = jQuery('.page-up'),
          header = jQuery('.main__header');

    $(window).scroll(function() {
        if ($(this).scrollTop() > 800) {
            btn.fadeIn();
        } else {
            btn.fadeOut();
        }
    });
    
    btn.on('click', function(e) {
        $('html, body').animate({scrollTop:0}, '300');
    });

    // Header shadow
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0.5) {
            header.addClass('shadow');
        } else {
            header.removeClass('shadow');
        }
    });
});

// Modal window
const file = document.querySelector('.file'),
      fileBody = document.querySelector('.file__body'),
      fileContent = document.querySelectorAll('.file__content'),
      fileBtn = document.querySelectorAll('.team__more'),
      body = document.querySelector('body'),
      closeElem = document.querySelectorAll('.file__close');

fileBtn.forEach(function(item){
    item.addEventListener('click', function(e) {

        let dataFileId = this.getAttribute('data-file'),
            dataFileContent = document.querySelector('.file__content[data-file="' + dataFileId + '"]');

        openModal();
        dataFileContent.classList.add('active');
        
    }, {passive: true} );
});

closeElem.forEach(function(item){
    item.addEventListener('click', function(e) {
        var dataFileId = this.getAttribute('data-file'),
            dataFileContent = document.querySelector('.file__content[data-file="' + dataFileId + '"]');
        file.classList.remove('active');
        fileBody.classList.remove('active');
        body.classList.remove('blocked');
        setTimeout(function(){ dataFileContent.classList.remove('active'); },500);
    }, {passive: true} );
});

function openModal() {
    file.classList.add('active');
    fileBody.classList.add('active');
    body.classList.add('blocked');
}

// jQuery Validate
function validateForms(form) {
    $(form).validate({
        rules: {
            name: {
                required: true,
                minlength: 4,
            },
            email: {
                required: true,
                email: true,
            },
            text: {
                required: true,
                minlength: 10,
            }
        },
        messages: {
            name: {
                required: "Будь ласка, введіть своє прізвище та ім'я",
                minlength: jQuery.validator.format("Введіть принаймні {0} символи")
            },
            email: {
                required: "Будь ласка, введіть свою електронну пошту",
                email: "Неправильно введено номер електронної пошти"
            },
            text: {
                required: "Будь ласка, викладіть суть свого звернення",
                minlength: jQuery.validator.format("Введіть принаймні {0} символів")
            }
        }
    });
}
validateForms('form');

// PHP Mailer
$('form').submit(function(e) {
    e.preventDefault();

    if (!$(this).valid()) {
        return;
    }

    $.ajax({
        type: "POST",
        url: "mailer/smart.php",
        data: $(this).serialize()
    }).done(function() {
        $(this).find("input").val("");
        document.querySelector('.thankyou').classList.add('active');
        document.querySelector('.thankyou__body').classList.add('active');
        body.classList.add('blocked');
        $('form').trigger('reset');
    });
    return false;
});

document.querySelector('.thankyou__btn').addEventListener('click', function(e) {

    document.querySelector('.thankyou').classList.remove('active');
    document.querySelector('.thankyou__body').classList.remove('active');
    body.classList.remove('blocked');
    
}, {passive: true} );


// Burger menu
const hamburger = document.querySelector('.hamburger'),
      menu = document.querySelector('.menu'),
      menuLinks = document.querySelectorAll('nav a'),
      closeMenu = document.querySelector('.menu__close'),
      overlayMenu = document.querySelector('.menu__overlay');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
    body.classList.add('blocked');
});

function closeHamburgerMenu() {
    menu.classList.remove('active');
    body.classList.remove('blocked');
}

closeMenu.addEventListener('click', () => {
    closeHamburgerMenu();
});

menuLinks.forEach(function(item){
    item.addEventListener('click', function(e) {
        closeHamburgerMenu();
    }, {passive: true} );
});

overlayMenu.addEventListener('click', () => {
    closeHamburgerMenu();
});

