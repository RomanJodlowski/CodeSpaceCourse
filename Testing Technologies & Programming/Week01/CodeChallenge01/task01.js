// Write a function expression called reverseString(). 
// It should accept a single argument representing a person's name. 
// It should return a reverse string as shown below.


function reverseString(name) {
let splitArray = name.split("");
let reverseArray = splitArray.reverse();
let joinArray = reverseArray.join("");
return joinArray;
}

console.log(reverseString(1, 2, 3, 4, 5));
console.log(reverseString("JavaScript", "like", "I"));