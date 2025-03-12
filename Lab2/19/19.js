function calculateAge() {
    const birthdate = new Date(document.getElementById("birthdate").value);
    if (isNaN(birthdate)) {
        document.getElementById("result").innerText = "Please select a valid birthdate.";
        return;
    }
    const today = new Date();
    const age = today.getFullYear() - birthdate.getFullYear();
    const monthDifference = today.getMonth() - birthdate.getMonth();
    const dayDifference = today.getDate() - birthdate.getDate();
    const adjustedAge = monthDifference < 0 || (monthDifference === 0 && dayDifference < 0) 
        ? age - 1 
        : age;
    document.getElementById("result").innerText = `Your age is: ${adjustedAge} year(s)`;
}
