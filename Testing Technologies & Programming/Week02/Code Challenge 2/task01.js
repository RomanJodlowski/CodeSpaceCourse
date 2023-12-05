class User {
constructor(firsName, lastName) {
    this.firstName = firsName;
    this.lastName = lastName;
}
    greeting() {
        console.log("Hello, ");
    }

}

const user1 = new User('John', 'Doe');
const user2 = new User('Jane', 'Doe');
user1.greeting()
console.log(user1.firstName, user1.lastName);
user2.greeting()
console.log(user2.firstName, user2.lastName);