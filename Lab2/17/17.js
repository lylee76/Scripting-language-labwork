function findLargest() {
    const input = document.getElementById("largestInput").value;
    const numbers = input.split(',').map(Number);
    if (numbers.length !== 5 || numbers.some(isNaN)) {
        document.getElementById("result").innerText = "Please enter exactly 5 valid numbers.";
        return;
    }
    const largest = Math.max(...numbers);
    document.getElementById("result").innerText = `Largest number is: ${largest}`;
}
function findLargestNumber() {
    let numbers = prompt("Enter 5 numbers separated by commas:").split(',').map(Number);
    let largest = Math.max(...numbers);
    alert("The largest number is: " + largest);
}
findLargestNumber();