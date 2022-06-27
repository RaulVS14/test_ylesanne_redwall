const modals = document.querySelectorAll('.modal');
modals.forEach((el) => {
    el.addEventListener("shown.bs.modal", () => {
        console.log(el.querySelector('.map-pin'));
        el.querySelector('.map-pin').scrollIntoView();
    })
})

AOS.init();
