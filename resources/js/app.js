import "./bootstrap";

let type;

const form = document.querySelector(".taskCreator");
const formButton = document.querySelector(".taskbtn");
const cancelButton = document.querySelector(".cancelbtn");
const main = document.querySelector("main");

form.classList.add("hidden");

if (cancelButton) {
    cancelButton.addEventListener("click", (e) => {
        e.preventDefault();
        console.log("test");
        form.classList.add("hidden");
    });
}

if (main) {
    main.addEventListener("click", (e) => {
        if (e.target.className === "edBtn btn btn-warning") {
            type = "edit";
            formButton.innerHTML = "Edit";
            form.classList.remove("hidden");
            form.action = `/edit/${e.target.id}`;
        } else if (e.target.id === "add") {
            type = "add";
            formButton.innerHTML = "Add";
            form.classList.remove("hidden");
            form.action = "/add/";
        }
    });
}
