class User1 {
    constructor() {
        this._username = "";
    }
    get username() {
        return this._username;
    }
    set username(value) {
        this._username = value;
    }
    stateYourRole() {}
}
class Admin extends User1 {
    admin;
    stateYourRole() {
        return this.admin;
    }
}
class Viewer extends User1 {
    viewer;
    stateYourRole() {
        return this.viewer;
    }
}
const admin = new Admin();
admin.username = 'Baltazar';
console.log(admin.username);

const viewer = new Viewer();
viewer.username = 'Melchior';
console.log(viewer.username);
