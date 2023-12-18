// Contact Me Tab

const fdtCmeTab = document.querySelector('#fdtcme-tab');

function hover(element, className) {
    element.addEventListener('mouseenter', e => element.classList.add(className))
    element.addEventListener('mouseleave', e => element.classList.remove(className))
}

hover(fdtCmeTab, 'fdtcme-banner-open');


// fdtCmeTab.addEventListener("click", function () {
//     fdtCmeTab.classList.toggle("fdtcme-banner-open");

// });

