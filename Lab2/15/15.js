
function displayColors() {
    const colors = ["Blue", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow"];
    const ordinals = ["th", "st", "nd", "rd"];
    const resultElement = document.getElementById("colorList");

    resultElement.innerHTML = "";

    colors.forEach((color, index) => {
        const ordinal = (index + 1) % 10 <= 3 && (index + 1) % 100 > 20
            ? ordinals[(index + 1) % 10]
            : ordinals[0];
        const listItem = document.createElement("li");
        listItem.textContent = `${index + 1}${ordinal} choice is ${color}.`;
        resultElement.appendChild(listItem);
    });
}
function testClick() {
    alert('I am from test Click');
    this.removeEventListener('click', testClick);
}
let btn1 = document.getElementById('btn1');

btn1.addEventListener('click', testClick);
var like = 0;

let likebtn = document.getElementById('like');
function likeButton() {
    like++;
    alert(like);
    this.style.color = 'Blue';
    this.removeEventListener('click', likeButton)
}
likebtn.addEventListener('click', likeButton);
