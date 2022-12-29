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
        swal(`Lỗi!`, `Chưa chọn khách hàng!`, `error`);
        return;
    }
    if (document.getElementById(`receipt-book-list`).innerHTML === ``) {
        swal(`Lỗi!`, `Chưa chọn sách!`, `error`);
        return;
    }
    const $money = document.getElementById(`receipt-money-field`);
    if ($money.value === ``) {
        swal(`Lưu ý!`, `Chưa nhập số tiền thanh toán!`, `info`);
        return;
    }
    const money = parseInt($money.value);
    if (money < 0) {
        swal(`Lỗi!`, `Số tiền không hợp lệ!`, `error`);
        return;
    }

    if (money > totalPrice) {
        swal(`Lỗi!`, `Số tiền thanh toán quá lớn! Mời nhập lại.`, `error`);
        return;
    }
    swal(
        `Thanh toán thành công!`,
        `Số tiền: ${money} VNĐ` +
            (money < totalPrice ? `\nNợ: ${totalPrice - money} VNĐ` : ``),
        `success`
    );

    console.log(buyList);
};

export { renderReceipt };
