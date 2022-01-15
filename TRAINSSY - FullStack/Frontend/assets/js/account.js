jQuery(document).ready(function($) {
    $("#billing_phone").mask("+38 (999) 999-99-99");
});

document.addEventListener('DOMContentLoaded', () => {

    // Табы меню аккаунта
    const accountTabTriggers = document.querySelectorAll(".account-tab__trigger"),
          accountTabContents = document.querySelectorAll(".main-block__account-tab");

    for (let i = 0; i < accountTabTriggers.length; i++) {

        accountTabTriggers[i].addEventListener("click", function(e){
        
        const activeTabAttr = e.target.getAttribute("data-account-tab");

        for (let j = 0; j < accountTabTriggers.length; j++) {
            let contentAttr = accountTabContents[j].getAttribute("data-account-content");

            if (activeTabAttr === contentAttr) {
            accountTabTriggers[j].classList.add("active");
            accountTabContents[j].classList.add("active");
            } else {
            accountTabTriggers[j].classList.remove("active");
            accountTabContents[j].classList.remove("active");
            }
        }
        });
    }

    // Popup-окна составов товара
    const openDetails = document.querySelectorAll('.open_details');
    openDetails.forEach(function(item){
        item.addEventListener('click', function(e) {
            const detailsId = this.getAttribute('data-details'),
                    detailsElem = document.querySelector('.details-dropdown[data-details="' + detailsId + '"]'),
                    detailsArrow = document.querySelector('.details-row__icon[data-details="' + detailsId + '"]');

            detailsElem.classList.toggle('active');
            detailsArrow.classList.toggle('active');
        }, {passive: true} );
    });

});