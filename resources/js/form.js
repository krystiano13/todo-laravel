export class Form {
    type = "";
    action;

    constructor(type) {
        this.type = type;
    }

    createForm = () => {
        if (this.type === "add") {
            this.action = "/createTask";
        } else if (this.type === "edit") {
            this.action = "/edit";
        }

        return this.action;
    };

}
