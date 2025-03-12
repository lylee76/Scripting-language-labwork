function sortArray() {
    const input = document.getElementById("sortInput").value;
    try {
        const array = JSON.parse(input);
        if (!Array.isArray(array)) {
            document.getElementById("result").innerText = "Input is not an array.";
            return;
        }
        const sortedArray = array.sort((a, b) => a - b);
        document.getElementById("result").innerText = `Sorted array: [${sortedArray}]`;
    } catch (error) {
        document.getElementById("result").innerText = "Invalid input. Please enter a valid array.";
    }
}