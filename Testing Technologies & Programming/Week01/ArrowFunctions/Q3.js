// traditional function
// function counterFunc(counter) {
//     if (counter > 100) {
//       counter = 0;
//     } else {
//       counter++;
//     }
    
//     return counter;
//   }

// na arrow function 
  let counterFunc = (counter) => {
    if (counter > 100) {
      counter = 0;
    } else {
      counter++;
    }
    
    return counter;
  }

  console.log(counterFunc(5));