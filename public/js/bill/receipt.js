function getRow(data, isTotal) {
    const $tag = document.createElement(`tr`);

    const $id = document.createElement(`th`);
    $id.scope = `row`;
    $id.innerText = data.id;
    const $name = document.createElement(`td`);
    $name.innerText = data.name;
    const $author = document.createElement(`td`);
    $author.innerText = data.author;
    const $price = document.createElement(`td`);
    $price.innerText = `${data.price}`;
    const $quantity = document.createElement(`td`);
    $quantity.innerText = `${data.num}`;
    const $money = document.createElement(`td`);
    $money.innerText = `${data.money}`;

    $tag.appendChild($id);
    $tag.appendChild($name);
    $tag.appendChild($author);
    $tag.appendChild($price);
    $tag.appendChild($quantity);
    $tag.appendChild($money);

    if (isTotal) {
        console.log(data);
        document
            .getElementsByName("sum_money")[0]
            .setAttribute("value", data.money);
        document
            .getElementsByName("book_id_list")[0]
            .setAttribute("value", data.sqlIdList);
        document
            .getElementsByName("book_quantity_list")[0]
            .setAttribute("value", data.sqlquantityList);

        const $payment = document.getElementsByName("payment")[0];
        if ($payment.value !== "") {
            const money = parseInt($payment.value);

            document
                .getElementsByName("debt")[0]
                .setAttribute("value", data.money - money);
        }
    }
    return $tag;
}

let totalPrice = 0;
function renderReceipt(buyList) {
    const $receipt = document.getElementById(`receipt-book-list`);
    $receipt.innerHTML = ``;

    totalPrice = 0;
    const idList = [];
    const quantityList = [];
    buyList.forEach((item) => {
        $receipt.appendChild(getRow(item));
        totalPrice += item.num * item.price;
        idList.push(item.id);
        quantityList.push(item.num);
    });
    $receipt.appendChild(
        getRow(
            {
                id: ``,
                name: ``,
                author: ``,
                price: ``,
                num: ``,
                money: totalPrice,
                sqlIdList: idList.join("|"),
                sqlquantityList: quantityList.join("|"),
            },
            true
        )
    );
}

const $btnCreateReceipt = document.getElementById(`btn-create-receipt`);
$btnCreateReceipt.onclick = function () {
    if (document.getElementById(`customer-id`).innerText === ``) {
        swal(`L???i!`, `Ch??a ch???n kh??ch h??ng!`, `error`);
        return;
    }
    if (document.getElementById(`receipt-book-list`).innerHTML === ``) {
        swal(`L???i!`, `Ch??a ch???n s??ch!`, `error`);
        return;
    }
    const $money = document.getElementById(`receipt-money-field`);
    if ($money.value === ``) {
        swal(`L??u ??!`, `Ch??a nh???p s??? ti???n thanh to??n!`, `info`);
        return;
    }
    const money = parseInt($money.value);
    if (money < 0) {
        swal(`L???i!`, `S??? ti???n kh??ng h???p l???!`, `error`);
        return;
    }

    swal(
        `Thanh to??n th??nh c??ng!`,
        `S??? ti???n: ${money} VN??` +
            (money < totalPrice
                ? `\nN???: ${totalPrice - money} VN??`
                : money > totalPrice
                ? `\nD??: ${money - totalPrice}`
                : ``),
        `success`
    );

    console.log(buyList);
};

export { renderReceipt };
