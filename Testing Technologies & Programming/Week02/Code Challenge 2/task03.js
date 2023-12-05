class User {
    constructor(username) {
        this.username = username;
    }

    username() {
        console.log(this.username);
    }
}
class Admin extends User {

    expressYourRole() {
        return Admin;
    }
sayHello() {
        return 'Hello admin, ' + this.username;
}
}

const admin = new Admin('Baltazar');

console.log(admin.sayHello());