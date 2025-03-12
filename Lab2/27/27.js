
const firstParagraph = document.querySelector('p');
console.log("First Paragraph:", firstParagraph.textContent);


const secondParagraph = document.querySelector('#para2');
const thirdParagraph = document.querySelector('#para3');
console.log("Second Paragraph:", secondParagraph.textContent);
console.log("Third Paragraph:", thirdParagraph.textContent);

const allParagraphs = document.querySelectorAll('p');
console.log("All Paragraphs:", allParagraphs);


allParagraphs.forEach((paragraph, index) => {
    console.log(`Paragraph ${index + 1}:`, paragraph.textContent);
});


allParagraphs[3].textContent = "Fourth Paragraph";


allParagraphs.forEach((paragraph, index) => {
    paragraph.id = `para${index + 1}`;
    paragraph.setAttribute('class', `paragraph-class-${index + 1}`);
});


allParagraphs.forEach((paragraph, index) => {
    paragraph.style.color = index % 2 === 0 ? "blue" : "green";
    paragraph.style.backgroundColor = index % 2 === 0 ? "lightgray" : "lightyellow";
    paragraph.style.border = "1px solid black";
    paragraph.style.fontSize = `${16 + index * 2}px`;
    paragraph.style.fontFamily = "Arial, sans-serif";
});


allParagraphs.forEach((paragraph, index) => {
    if (index === 0 || index === 2) {
        paragraph.style.color = "green";
    } else if (index === 1 || index === 3) {
        paragraph.style.color = "red";
    }
});


allParagraphs.forEach((paragraph, index) => {
    paragraph.textContent = `This is paragraph number ${index + 1}`;
    paragraph.id = `new-para${index + 1}`;
    paragraph.className = `new-class-${index + 1}`;
});