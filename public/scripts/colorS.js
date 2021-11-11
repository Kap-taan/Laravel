const lightColor = '--lightColor';
const darkColor = '--darkColor';
const buttonColor = '--buttonColor';
const borderColor = '--borderColor';
const headingColor = '--headingColor';
const textColor = '--textColor';
const circleColor = '--circleColor';

const theme = localStorage.getItem('theme');

if(theme === null || theme === 'white'){
    changeWhite();
} else if (theme === 'blue'){
    changeBlue();
} else if(theme === 'green'){
    changeGreen();
} else if (theme === 'purple'){
    changePurple();
}

function changeWhite(){
    document.documentElement.style.setProperty(darkColor, '#eaeaea');
    document.documentElement.style.setProperty(lightColor, '#fff');
    document.documentElement.style.setProperty(headingColor, '#000');
    document.documentElement.style.setProperty(textColor, '#656a6f');
    document.documentElement.style.setProperty(borderColor, '#d0d0d0');
    document.documentElement.style.setProperty(buttonColor, '#000');
    document.documentElement.style.setProperty(circleColor, '#21282f');
}

function changeBlue(){
    document.documentElement.style.setProperty(darkColor, '#15202b');
    document.documentElement.style.setProperty(lightColor, '#192734');
    document.documentElement.style.setProperty(headingColor, '#fff');
    document.documentElement.style.setProperty(textColor, '#fff');
    document.documentElement.style.setProperty(borderColor, '#153c45');
    document.documentElement.style.setProperty(buttonColor, '#17a2b8');
    document.documentElement.style.setProperty(circleColor, '#fff');
}

function changeGreen()
{
    document.documentElement.style.setProperty(darkColor, '#515a48');
    document.documentElement.style.setProperty(lightColor, '#606b56');
    document.documentElement.style.setProperty(headingColor, '#fff');
    document.documentElement.style.setProperty(textColor, '#fff');
    document.documentElement.style.setProperty(borderColor, '#31372c');
    document.documentElement.style.setProperty(buttonColor, '#669966');
    document.documentElement.style.setProperty(circleColor, '#fff');
}

function changePurple(){
    document.documentElement.style.setProperty(darkColor, '#382a3f');
    document.documentElement.style.setProperty(lightColor, '#46344e');
    document.documentElement.style.setProperty(headingColor, '#fff');
    document.documentElement.style.setProperty(textColor, '#fff');
    document.documentElement.style.setProperty(borderColor, '#000');
    document.documentElement.style.setProperty(buttonColor, '#8534a3');
    document.documentElement.style.setProperty(circleColor, '#fff');
}