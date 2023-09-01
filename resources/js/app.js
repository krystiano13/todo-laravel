import "./bootstrap";
import { Form } from "./form";

let type;

const form = document.querySelector(".taskCreator");
const formButton = document.querySelector(".taskbtn");
const cancelButton = document.querySelector(".cancelbtn");
const main = document.querySelector("main");

form.classList.add("hidden");

cancelButton.addEventListener('click', (e) => {
    e.preventDefault();
    console.log('test');
    form.classList.add("hidden");
});

main.addEventListener("click", (e) => {
    console.log(e.target);

    if (e.target.className === "edBtn btn btn-warning") {
        type = "edit";
        formButton.innerHTML = "Edit";
        form.classList.remove("hidden");
    } else if (e.target.id === "add") {
        type = "add";
        formButton.innerHTML = "Add";
        form.classList.remove("hidden");
    }

    if (form && formButton && cancelButton) {
        const formInstance = new Form(type, formButton);
        form.action = formInstance.createForm();
    }
});
