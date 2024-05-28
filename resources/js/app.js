import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const del = document.getElementById("deleteComic");

del.addEventListener("click", (e) => {
    e.preventDefault();

    const modale = document.getElementById("exampleModal");
    const myModal = new bootstrap.Modal(modale);
    myModal.show();
    const btnSave = modale.querySelector(" .btn.btn-danger");
});
