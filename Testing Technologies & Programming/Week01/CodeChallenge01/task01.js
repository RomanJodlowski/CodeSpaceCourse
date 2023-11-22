// Write a function expression called reverseString(). 
// It should accept a single argument representing a person's name. 
// It should return a reverse string as shown below.

function reverseString(name) {
    let splitName = name.split("");
    let reverseName = splitName.reverse();
    let joinName = reverseName.join("");
    return joinName;
    }
    
    console.log(reverseString("John"));
    console.log(reverseString("James"));
