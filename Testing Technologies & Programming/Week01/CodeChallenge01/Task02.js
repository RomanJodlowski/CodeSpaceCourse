// Write a function expression called reverseArray(). It should accept an array as a single argument. 
// It should return a reversed array and it should work for any data type.

function reverseString(name) {
    let splitName = name.split("");
    let reverseName = splitName.reverse();
    let joinName = reverseName.join("");
    return joinName;
    }
    
    console.log(reverseString("John"));
    console.log(reverseString("James"));