function checkOddEven() {
    const number = document.getElementById("userNumber").value;
    const resultElement = document.getElementById("result");


    if (number === "") {
        resultElement.textContent = "Please enter a number.";
        return;
    }

    const parsedNumber = parseInt(number, 10);
    if (isNaN(parsedNumber)) {
        resultElement.textContent = "Invalid input. Please enter a valid number.";
    } else {
        resultElement.textContent = `The given number ${parsedNumber} is ${parsedNumber % 2 === 0 ? "Even" : "Odd"}.`;
    }
}function checkEvenOdd() {
    for (let i = 0; i <= 15; i++) {
        console.log(`${i} is ${i % 2 === 0 ? 'even' : 'odd'}.`);
    }
}
checkEvenOdd();