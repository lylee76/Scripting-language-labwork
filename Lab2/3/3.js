function countVowels(str) {
    const vowels = /[aeiouAEIOU]/g;
    const matches = str.match(vowels);
    return matches ? matches.length : 0;
}
console.log(countVowels("Basanta Chapagain"));
console.log(countVowels("Scripting Language"));
