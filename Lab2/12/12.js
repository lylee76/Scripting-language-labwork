function checkIfArray() {
    const input = document.getElementById("arrayInput").value;
    try {
        const parsedInput = JSON.parse(input);
        const isArray = Array.isArray(parsedInput);
        document.getElementById("result").innerText = isArray 
            ? "The input is an array." 
            : "The input is NOT an array.";
    } catch (error) {
        document.getElementById("result").innerText = "Invalid input. Please enter a valid array format.";
    }
}

function isArray(input) {
    console.log(Array.isArray(input) ? "It is an array." : "It is not an array.");
}
isArray([1, 2, 3]); 
isArray("Arpana");  