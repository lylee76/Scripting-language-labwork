function calculateDateDifference() {
    const date1 = new Date(document.getElementById("date1").value);
    const date2 = new Date(document.getElementById("date2").value);
    if (isNaN(date1) || isNaN(date2)) {
        document.getElementById("result").innerText = "Please select valid dates.";
        return;
    }
    const differenceInDays = Math.abs((date2 - date1) / (1000 * 60 * 60 * 24));
    document.getElementById("result").innerText = `Difference: ${differenceInDays} day(s)`;
}
function dateDifference() {
    let date1 = new Date(prompt("Enter the first date (YYYY-MM-DD):"));
    let date2 = new Date(prompt("Enter the second date (YYYY-MM-DD):"));
    let diffInTime = Math.abs(date2 - date1);
    let diffInDays = diffInTime / (1000 * 60 * 60 * 24);
    console.log(`Difference in days: ${diffInDays}`);
}
dateDifference();