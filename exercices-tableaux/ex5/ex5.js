let array = [666, 1, 7, 69, 33, 13];
let j = 1;
let n = array.length;

while (j !== n) {
  let i = j - 1;
  let tmp = array[j];

  while (i > -1 && array[i] > tmp) {
    array[i + 1] = array[i];
    i--;
  }

  array[i + 1] = tmp;
  j++;
}
