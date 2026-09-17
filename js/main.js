const text1 = "My Name is Benjamin Davies";
const text2 = "I'm a Web Developer";

function type() {
    for(let i = 0; i < text1.length; i++) {
       setTimeout(function(){
        document.querySelector('#typing-text-h1').innerHTML += text1[i];
       }, 150 * i); 
    }
    setTimeout(function(){
        document.querySelector('p').appendChild(document.querySelector('.cursor'));
        typeP()
    }, 150 * text1.length);
}
type();

function typeP() {
    for(let i = 0; i < text2.length; i++) {
       setTimeout(function(){
        document.querySelector('#typing-text-p').innerHTML += text2[i];
       }, 150 * i); 
    }
};

