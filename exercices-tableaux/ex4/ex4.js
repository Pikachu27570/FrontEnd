function bubbleSort(arr) {
    var len = arr.length;
    var swapped;
    
    do {
      swapped = false;
      
      for (var i = 0; i < len - 1; i++) {
        if (arr[i] > arr[i + 1]) {
          // Effectue l'échange
          var temp = arr[i];
          arr[i] = arr[i + 1];
          arr[i + 1] = temp;
          
          swapped = true;
        }
      }
    } while (swapped);
    
    return arr;
  }
  
  // Exemple d'utilisation
  var numbers = [5, 3, 8, 4, 2];
  console.log("Avant le tri : " + numbers);
  
  var sortedNumbers = bubbleSort(numbers);
  console.log("Après le tri : " + sortedNumbers);
  