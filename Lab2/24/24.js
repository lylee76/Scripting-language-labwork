
const dog = {};


console.log("Initial dog object:", dog);


dog.name = "Poppy";
dog.legs = 4;
dog.color = "White";
dog.age = 10;
dog.bark = function () {
    return "Woof Woof";
};


console.log("Dog's name:", dog.name);
console.log("Dog's legs:", dog.legs);
console.log("Dog's color:", dog.color);
console.log("Dog's age:", dog.age);
console.log("Dog's bark:", dog.bark());


dog.breed = "Dachshund";
dog.getDogInfo = function () {
    return `Name: ${this.name}, Age: ${this.age}, Color: ${this.color}, Legs: ${this.legs}, Breed: ${this.breed}`;
};


console.log("Updated dog object:", dog);
console.log("Dog info:", dog.getDogInfo());