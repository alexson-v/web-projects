document.addEventListener('DOMContentLoaded', () => {

    // Табы меню Помощи
    const helpTabTriggers = document.querySelectorAll(".help-tab__trigger"),
          helpTabContents = document.querySelectorAll(".main-block__help-tab");

    for (let i = 0; i < helpTabTriggers.length; i++) {

        helpTabTriggers[i].addEventListener("click", function(e){
        
            const activeTabAttr = e.target.getAttribute("data-help-tab");

            for (let j = 0; j < helpTabTriggers.length; j++) {
                let contentAttr = helpTabContents[j].getAttribute("data-help-content");

                if (activeTabAttr === contentAttr) {
                helpTabTriggers[j].classList.add("active");
                helpTabContents[j].classList.add("active");
                } else {
                helpTabTriggers[j].classList.remove("active");
                helpTabContents[j].classList.remove("active");
                }
            }
        }, {passive: true} );
    }

}, {passive: true} );