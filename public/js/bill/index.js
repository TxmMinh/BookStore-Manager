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
