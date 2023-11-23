// Write a function expression called reverseArray(). It should accept an array as a single argument. 
// It should return a reversed array and it should work for any data type.

function reverseArray() { 
const stringReverse = ["I", " like", " JavaScript"].reverse(),
      numbergReverse = [1, 2, 3, 4, 5].reverse();

return [stringReverse, numbergReverse];
}
    
    console.log(reverseArray().reverse());