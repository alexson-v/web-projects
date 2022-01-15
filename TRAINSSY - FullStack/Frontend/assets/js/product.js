// Копировать код товара
function copyCodeText(el) {
  const tmp = jQuery("<textarea>");

  jQuery("body").append(tmp);
  tmp.val(jQuery(el).text()).select();
  document.execCommand("copy");
  tmp.remove();

  jQuery(".ui-elements__product-code__message").addClass('active');
  jQuery(".message_icon").addClass('active');

  setTimeout(function() { 
    jQuery(".ui-elements__product-code__message").removeClass('active');
    jQuery(".message_icon").removeClass('active');
  }, 3000);
}


document.addEventListener('DOMContentLoaded', () => {

  // Табы меню товара
  const productTabTriggers = document.querySelectorAll(".product-tab__trigger"),
        productTabContents = document.querySelectorAll(".main-block__product-tab"),
        productStickyCard = document.querySelector('.main-block__product__sticky-card'),
        fakeBtnStickyCard = document.querySelector('.fake-button_add-to-cart'),
        excerptBtn = document.querySelector('.descr-link-btn');

  for (let i = 0; i < productTabTriggers.length; i++) {

    productTabTriggers[i].addEventListener("click", function(e){
      
      const activeTabAttr = e.target.getAttribute("data-product-tab");

      for (let j = 0; j < productTabTriggers.length; j++) {
        let contentAttr = productTabContents[j].getAttribute("data-product-content");

        if (activeTabAttr === contentAttr) {
          productTabTriggers[j].classList.add("active");
          productTabContents[j].classList.add("active");
        } else {
          productTabTriggers[j].classList.remove("active");
          productTabContents[j].classList.remove("active");
        }
      }
    }, {passive: true});

    productTabTriggers[1].addEventListener("click", function(e){
      productStickyCard.classList.add("active");
    }, {passive: true});

    productTabTriggers[3].addEventListener("click", function(e){
      productStickyCard.classList.add("active");
    }, {passive: true});

    productTabTriggers[0].addEventListener("click", function(e){
      productStickyCard.classList.remove("active");
    }, {passive: true});

    productTabTriggers[2].addEventListener("click", function(e){
      productStickyCard.classList.remove("active");
    }, {passive: true});


    if (typeof(fakeBtnStickyCard) != 'undefined' && fakeBtnStickyCard != null) {
      fakeBtnStickyCard.onclick = function() {

        productTabTriggers.forEach(function(item) {
          item.classList.remove('active');
        });
        productTabContents.forEach(function(item) {
          item.classList.remove('active');
        });

        productTabTriggers[0].classList.add('active');
        productTabContents[0].classList.add('active');

        productStickyCard.classList.remove("active");

        jQuery('html, body').animate({scrollTop:0}, '300');
      };
    }

    if (typeof(excerptBtn) != 'undefined' && excerptBtn != null) {
      excerptBtn.onclick = function() {

        productTabTriggers[0].classList.remove('active');
        productTabTriggers[1].classList.add('active');
  
        productTabContents[0].classList.remove('active');
        productTabContents[1].classList.add('active');
  
        productStickyCard.classList.add("active");
      };
    }
  }


  // Табы фотографий товара
  const productImageTriggers = document.querySelectorAll(".pagination-image"),
  productCurrImage = document.querySelectorAll(".current-image");

    for (var i = 0; i < productImageTriggers.length; i++) {

      productImageTriggers[i].addEventListener("click", function(e){
      
      const activeTabAttr = e.target.getAttribute("data-product-image_trigger");

      for (let j = 0; j < productImageTriggers.length; j++) {
        let contentAttr = productCurrImage[j].getAttribute("data-product-image_current");

        if (activeTabAttr === contentAttr) {
          productImageTriggers[j].classList.add("active");
          productCurrImage[j].classList.add("active"); 
        } else {
          productImageTriggers[j].classList.remove("active");
          productCurrImage[j].classList.remove("active");
        }
      }
    });
  }


  // Скрипт для попапа c таблицей размеров
  const popupTableLinks = document.querySelectorAll('.popup-table-link');
  const bodyOfTable = document.querySelector('body');
  
  let unlockTable = true;
  
  const timeoutTable = 800;
  
  if (popupTableLinks.length > 0) {
      for (let index = 0; index < popupTableLinks.length; index++) {
          const popupLinkTable = popupTableLinks[index];
          popupLinkTable.addEventListener('click', function (e) {
              const popupNameTable = popupLinkTable.getAttribute('href').replace('#', '');
              const currentPopupTable = document.getElementById(popupNameTable);
              popupOpen(currentPopupTable);
              
          }, {passive: true});
      }
  }
  const popupCloseIconCart = document.querySelectorAll('.close-popup-table');
  if (popupCloseIconCart.length > 0) {
      for (let index = 0; index < popupCloseIconCart.length; index++) {
          const el = popupCloseIconCart[index];
          el.addEventListener('click', function (e) {
              popupCloseTable(el.closest('.popup_table'));
              
          }, {passive: true});
      }
  }
  function popupOpen(currentPopupTable) {
      if (currentPopupTable && unlockTable) {
          const popupActiveCart = document.querySelector('.popup_table.open');
          if (popupActiveCart) {
              popupCloseTable(popupActiveCart, false);
          } else {
              bodyLockTable();
          }
          currentPopupTable.classList.add('open');
          currentPopupTable.addEventListener('click', function (e) {
              if (!e.target.closest('.table_popup__content')) {
                  popupCloseTable(e.target.closest('.popup_table'));
              }
          }, {passive: true});
      }
  }
  function popupCloseTable(popupActiveCart, dounlockTable = true) {
      if (unlockTable) {

          popupActiveCart.classList.remove('open');
          if (dounlockTable) {
              bodyunlockTable();
          }
      }
  }
  function bodyLockTable() {
      bodyOfTable.classList.add('lock');
      unlockTable = false;
      setTimeout(function () {
          unlockTable = true;
      }, timeoutTable);
  }
  function bodyunlockTable() {
      setTimeout(function () {
          bodyOfTable.classList.remove('lock');
      }, timeoutTable);
  
      unlockTable = false;
      setTimeout(function () {
          unlockTable = true;
      }, timeoutTable);
  }
  document.addEventListener('keydown', function (e) {
      if (e.which === 27) {
          const popupActiveCart = document.querySelector('.popup_table.open');
          popupCloseTable(popupActiveCart);
      }
  }, {passive: true});


  // popup-окно "Поделиться"
  const openShare = document.querySelector('.ui-elements__share-icon'),
        modalShare = document.querySelector('.ui-elements__share-popup'),
        closeShare = document.querySelector('.ui-elements__share-close_icon'),
        overlay = document.querySelector('.overlay'),
        thisUrl = window.document.location.href,
        thisTitle = document.title;


  // Вызов меню "Поделиться" для Android и IOS
  if (typeof(openShare) != 'undefined' && openShare != null) {
    openShare.addEventListener('click', event => {
      if (navigator.share) {
        navigator.share({
          title: thisTitle,
          url: thisUrl
        }).then(() => {
          alert('Спасибо, что поделились!');
        })
        .catch(console.error);
      } else {
        modalShare.classList.add('active');
        overlay.classList.add('active');
      }
    }, {passive: true});

    closeShare.addEventListener('click', function() {
      document.querySelector('.ui-elements__share-popup.active').classList.remove('active');
      overlay.classList.remove('active');
    }, {passive: true});

    overlay.addEventListener('click', function() {
      document.querySelector('.ui-elements__share-popup').classList.remove('active');
      this.classList.remove('active');
    }, {passive: true});

  }


  // Выпадающая информация по поводу Доставки и Способов оплаты товара
  const openInfoDropdown = document.querySelectorAll('.dropdown-heading');
  openInfoDropdown.forEach(function(item){
      item.addEventListener('click', function(e) {
          const infoDropdownId = this.getAttribute('data-info-dropdown'),
                infoDropdownElem = document.querySelector('.dropdown-content[data-info-dropdown_content="' + infoDropdownId + '"]'),
                infoIconElem = document.querySelector('.dropdown-info-icon[data-info-dropdown_icon="' + infoDropdownId + '"]');
          infoDropdownElem.classList.toggle('active');
          infoIconElem.classList.toggle('active');
      }, {passive: true} );
  });

});