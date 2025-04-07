function changeAllArticleColors() {
    const articles = document.querySelectorAll("#products > article");
    for (const article of articles) {
        article.classList.add("sale");
    }
}

function attachBuyEvents() {
    const buttons = document.querySelectorAll("#products button");
    for (const button of buttons) {
        button.addEventListener('click', function () {
            console.log(this)
        })
    }
}

attachBuyEvents();
