const text1 = "My Name is Benjamin Davies";
const text2 = "I'm a Web Developer";
const typingH1 = document.querySelector('#typing-text-h1');
const typingP = document.querySelector('#typing-text-p');
const cursor = document.querySelector('.cursor');

if (typingH1 && typingP && cursor) {
    function type() {
        for(let i = 0; i < text1.length; i++) {
        setTimeout(function(){
            document.querySelector('#typing-text-h1').innerHTML += text1[i];
        }, 100 * i); 
        }
        setTimeout(function(){
            document.querySelector('p').appendChild(document.querySelector('.cursor'));
            typeP()
        }, 100 * text1.length);
    }
    type();

    function typeP() {
        for(let i = 0; i < text2.length; i++) {
        setTimeout(function(){
            document.querySelector('#typing-text-p').innerHTML += text2[i];
        }, 100 * i); 
        }
    };
}