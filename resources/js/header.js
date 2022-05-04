const header = document.querySelector('.header');
const performance = document.querySelector('.performance');
const clientHeight = header.clientHeight; // высота block


const scrollTopDoc = performance.scrollTop; // скролл всего документа


document.addEventListener('scroll', () => {
    console.log(clientHeight)
    console.log(scrollTopDoc)
});


const viewportHeight = window.innerHeight; // размер экрана


