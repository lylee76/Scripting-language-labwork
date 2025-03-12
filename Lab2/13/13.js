function joinArray() {
    const input = document.getElementById("joinInput").value;
    try {
        const array = JSON.parse(input);
        if (!Array.isArray(array)) {
            document.getElementById("result").innerText = "Input is not an array.";
            return;
        }
        const joinedString = array.join(", ");
        document.getElementById("result").innerText = `Joined string: ${joinedString}`;
    } catch (error) {
        document.getElementById("result").innerText = "Invalid input. Please enter a valid array.";
    }
}
function joinArrayElements() {
    let arr = ["This", "is", "a", "test"];
    console.log(arr.join(" ")); 
}
joinArrayElements();