document.addEventListener('DOMContentLoaded', () => {

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
    
}, {passive: true} );