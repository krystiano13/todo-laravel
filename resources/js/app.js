import "./bootstrap";

let type;

const form = document.querySelector("#addTask");
const form2 = document.querySelector("#editTask");
const editInput = document.querySelector('#editInput');
const main = document.querySelector("main");

form.classList.add("hidden");
form2.classList.add("hidden");

if (main) {
    main.addEventListener("click", (e) => {
        if (e.target.className === "edBtn btn btn-warning") {
            type = "edit";
            form2.classList.remove("hidden");
            form2.action = `/edit/${e.target.id}`;
            editInput.value = e.target.dataset.edit;
        } else if (e.target.id === "add") {
            type = "add";
            form.classList.remove("hidden");
        } else if (e.target.className === "cancelbtn btn btn-danger") {
            e.preventDefault();
            form.classList.add("hidden");
            form2.classList.add("hidden");
        }
    });
}
