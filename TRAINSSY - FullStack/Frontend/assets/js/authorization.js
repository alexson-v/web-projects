document.addEventListener('DOMContentLoaded', () => {

    // Скрипт для попапа "Восстановление пароля"
    const popupRecoveryLinks = document.querySelectorAll('.popup_password-recovery-link');
    const bodyOfRecovery = document.querySelector('body');
    const lockPaddingRecovery = document.querySelectorAll('.lock-padding');

    if (typeof(popupRecoveryLinks) != 'undefined' && popupRecoveryLinks != null) {
        let unlockRecovery = true;

        const timeoutRecovery = 800;

        if (popupRecoveryLinks.length > 0) {
            for (let index = 0; index < popupRecoveryLinks.length; index++) {
                const popupLinkRecovery = popupRecoveryLinks[index];
                popupLinkRecovery.addEventListener('click', function (e) {
                    const popupNameRecovery = popupLinkRecovery.getAttribute('href').replace('#', '');
                    const currentPopupRecovery = document.getElementById(popupNameRecovery);
                    popupRecoveryOpen(currentPopupRecovery);
                }, {passive: true} );
            }
        }
        const popupCloseIconRecovery = document.querySelectorAll('.recovery-header__close-popup');
        if (popupCloseIconRecovery.length > 0) {
            for (let index = 0; index < popupCloseIconRecovery.length; index++) {
                const el = popupCloseIconRecovery[index];
                el.addEventListener('click', function (e) {
                    popupCloseRecovery(el.closest('.popup_password-recovery'));
                }, {passive: true} );
            }
        }
        function popupRecoveryOpen(currentPopupRecovery) {
            if (currentPopupRecovery && unlockRecovery) {
                const popupActiveRecovery = document.querySelector('.popup_password-recovery.open');
                if (popupActiveRecovery) {
                    popupCloseRecovery(popupActiveRecovery, false);
                } else {
                    bodyLockRecovery();
                }
                currentPopupRecovery.classList.add('open');
                currentPopupRecovery.addEventListener('click', function (e) {
                    if (!e.target.closest('.password-recovery_popup__content')) {
                        popupCloseRecovery(e.target.closest('.popup_password-recovery'));
                    }
                });
            }
        }
        function popupCloseRecovery(popupActiveRecovery, doUnlockRecovery = true) {
            if (unlockRecovery) {
                popupActiveRecovery.classList.remove('open');
                if (doUnlockRecovery) {
                    bodyUnlockRecovery();
                }
            }
        }

        function bodyLockRecovery() {
            bodyOfRecovery.classList.add('lock');

            unlockRecovery = false;
            setTimeout(function () {
                unlockRecovery = true;
            }, timeoutRecovery);
        }

        function bodyUnlockRecovery() {
            setTimeout(function () {
                if (lockPaddingRecovery.length > 0) {
                    for (let index = 0; index < lockPaddingRecovery.length; index++) {
                        const el = lockPaddingRecovery[index];
                        el.style.paddingRightRecovery = '0px';
                    }
                }
                bodyOfRecovery.style.paddingRightRecovery = '0px';
                bodyOfRecovery.classList.remove('lock');
            }, timeoutRecovery);

            unlockRecovery = false;
            setTimeout(function () {
                unlockRecovery = true;
            }, timeoutRecovery);
        }

        document.addEventListener('keydown', function (e) { 
            if (e.which === 27) {
                const popupActiveRecovery = document.querySelector('.popup_password-recovery.open');
                popupCloseRecovery(popupActiveRecovery);
            }
        }, {passive: true} );
    }

}, {passive: true} );