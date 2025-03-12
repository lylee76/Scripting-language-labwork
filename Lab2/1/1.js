function reverseNumber(num) {
    let reversed = num.toString().split('').reverse().join('');
    return parseFloat(reversed) * Math.sign(num);
}
console.log(reverseNumber(5656));
console.log(reverseNumber(235444));
