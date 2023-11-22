// Write a function expression called reverseArray(). It should accept an array as a single argument. 
// It should return a reversed array and it should work for any data type.

function reverseString(name) {
    let splitArray = name.split("");
    let reverseArray = splitArray.reverse();
    let joinArray = reverseArray.join("");
    return joinArray;
    }
    
    console.log(reverseString(1, 2, 3, 4, 5));
    console.log(reverseString("JavaScript", "like", "I"));