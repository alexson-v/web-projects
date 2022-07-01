const hamburger = document.querySelector('.hamburger'),
      menu = document.querySelector('.menu'),
      body = document.querySelector('body'),
      overlay = document.querySelector('.menu__overlay'),
      closeElem = document.querySelector('.menu__close');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
    body.classList.add('blocked');
});
closeElem.addEventListener('click', () => {
    menu.classList.remove('active');
    body.classList.remove('blocked');
});
overlay.addEventListener('click', () => {
    menu.classList.remove('active');
    body.classList.remove('blocked');
});

const counters = document.querySelectorAll('.skills__progress-item-value'),
      lines = document.querySelectorAll('.skills__progress-item-progline');

counters.forEach( (item, i) => {
    lines[i].style.width = item.innerHTML;
});

const menuList = document.querySelectorAll('.menu__link');

menuList.forEach((item) => {
    item.addEventListener('click', () => {
        menu.classList.remove('active');
        body.classList.remove('blocked');
    });
});

// jQuery Validate
$('.contacts__form').validate({
    rules: {
        name: {
            required: true,
            minlength: 2,
        },
        email: {
            required: true,
            email: true,
        },
        text: {
            required: true,
            minlength: 10,
        },
        checkbox: {
            required: true,
        }
    },
    messages: {
        name: {
            required: "Будь ласка, введіть своє ім'я",
            minlength: jQuery.validator.format("Введіть принаймні {0} символи")
        },
        email: {
            required: "Будь ласка, введіть свою пошту",
            email: "Неправильна поштова адреса"
        },
        text: {
            required: "Будь ласка, викладіть суть свого листа",
            minlength: jQuery.validator.format("Введіть принаймні {0} символів")
        },
        checkbox: {
            required: "Необхідно надати згоду"
        }
    }
});

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
        $('.thankyou-modal').addClass("active");
        $('body').addClass("blocked");
        $('form').trigger('reset');
    });
    return false;
});
$('.thankyou-modal .btn').on('click', function() {
    $('.thankyou-modal').removeClass("active");
    $('body').removeClass("blocked");
});