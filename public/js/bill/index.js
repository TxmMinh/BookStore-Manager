import { renderReceipt } from "./receipt.js";

const $btnBuyBooks = document.getElementById("btn-buy-books");
$btnBuyBooks.addEventListener("click", () => {
    const buyList = [];
    const $bookList = document.getElementById(`book-list`);
    for (let i = 1; i < $bookList.childNodes.length; i += 2) {
        const x = $bookList.childNodes[i];
        const keys = [
            "id",
            "name",
            "author",
            "nxb",
            "publisher",
            "price",
            "quantity",
            "num",
        ];
        let idx = 0;
        const data = {};

        for (let j = 1; j < x.childNodes.length; j += 2) {
            if (x.childNodes[j].id === "buy-quantity") {
                data[keys[idx++]] = x.childNodes[j].childNodes[0].value;
                continue;
            }
            data[keys[idx++]] = x.childNodes[j].innerText;
        }

        if (data.num === "" || data.num === "0") continue;
        console.log(data);
        const num = parseInt(data.num);
        if (num < 0 || num > data.quantity) {
            swal("Lỗi!", "Số lượng không hợp lệ", "error");
            return;
        }
        buyList.push({
            ...data,
            money: num * data.price,
        });
    }

    if (buyList.length === 0) {
        swal("Warning!", "Chưa chọn sách", "info");
        return;
    }
    swal("Thành công!", "Thêm thành công", "success");
    document.getElementById("btn-close-add-book-modal").click();
    renderReceipt(buyList);
});

document
    .getElementById("receipt-money-field")
    .addEventListener("input", function () {
        const money = parseInt(this.value);
        document.getElementsByName("payment")[0].setAttribute("value", money);
        const totalPrice = parseInt(
            document.getElementsByName("sum_money")[0].value
        );
        document
            .getElementsByName("debt")[0]
            .setAttribute("value", totalPrice - money);
    });

document
    .getElementById("action-post-receipt-data")
    .addEventListener("submit", function (ev) {
        ev.preventDefault();
        const cols = [
            "customer_id",
            "staff_id",
            "sum_money",
            "payment",
            "debt",
            "book_id_list",
            "book_quantity_list",
        ];

        let cnt = 0;
        for (let name of cols) {
            if (document.getElementsByName(name)[0].value !== "") cnt++;
        }

        if (cnt === cols.length) this.submit();
    });

document.getElementById("choose-staff").addEventListener("change", function () {
    console.log("selected");
    document.getElementsByName("staff_id")[0].setAttribute("value", this.value);
});
