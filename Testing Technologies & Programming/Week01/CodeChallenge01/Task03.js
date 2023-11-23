// Write a function expression called mostExpensiveItem(). 
// It should accept an array of items as a single argument. 
// It should return the item that has the most cost tied up, 
// calculated by the amount in stock * price.

let items = [
    { item: "irn bru", price: 3.25, stock: 50 },
    { item: "fanta", price: 3.98, stock: 45 },
    { item: "diet coke", price: 4.40, stock: 38 }, 
    { item: "7up", price: 3.99, stock: 42 }, 
 ];

const mostExpensiveItem = items => { 
    
    let expensive = 0;
    let name;
    
    for(let i = 0; i < items.length; i++) {
      
      if(items[i].price * items[i].stock > expensive) {
        expensive = items[i].price * items[i].stock; 
        name = items[i].item;
      }
    }
    return name;

    }

// const mostExpensiveItem = (items) => {
//     let mostExpensive = items[0];
//     for (let i = 1; i < items.length; i++) {
//       if (items[i].price * items[i].stock > mostExpensive.price * mostExpensive.stock) {
//         mostExpensive = items[i];
//       }
//     }
//     return mostExpensive;
//   }
  
        console.log("The most expensive stock is: " + mostExpensiveItem(items));