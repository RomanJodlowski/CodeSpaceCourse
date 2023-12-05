class User {
    constructor(firstName, lastName) {
        this._firstName = firstName;
        this._lastName = lastName;
    }

    hello() {
        return "Hello World!";
    }

    get firstName() {
        return this._firstName;
    }

    set firstName(value) {
        this._firstName = value;
    }

    get lastName() {
        return this._lastName;
    }

    set lastName(value) {
        this._lastName = value;
    }
}
const user = new User('firstName', 'lastName');
console.log(user.hello());
console.log('My name is ' + user.firstName, user.lastName);
