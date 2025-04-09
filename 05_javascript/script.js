function changeAllArticleColors() {
    const articles = document.querySelectorAll("#products > article");
    for (const article of articles) {
        article.classList.add("sale");
    }
}

function attachBuyEvents() {
    const buttons = document.querySelectorAll("#products button");
    const cart = document.querySelector("#cart > table");
    for (const button of buttons) {
        button.addEventListener('click', function () {
            const article = button.parentElement;
            article.classList.toggle("sale");
            const id = article.getAttribute("data-id");
            const title = article.querySelector("h2").textContent;
            const price = article.querySelector(".price").textContent;
            const quantity = article.querySelector(".quantity").value;

            const newRow = document.createElement("tr");
            const id_th = document.createElement("th");
            id_th.textContent = id;
            const title_th = document.createElement("th");
            title_th.textContent = title;
            const quantity_th = document.createElement("th");
            quantity_th.textContent = quantity;
            const price_th = document.createElement("th");
            price_th.textContent = price;
            const total_th = document.createElement("th");
            total_th.textContent = (parseInt(price) * parseInt(quantity)).toString();

            newRow.appendChild(id_th);
            newRow.appendChild(title_th);
            newRow.appendChild(quantity_th);
            newRow.appendChild(price_th);
            newRow.appendChild(total_th);
            cart.appendChild(newRow);
        })
    }
}

attachBuyEvents();
