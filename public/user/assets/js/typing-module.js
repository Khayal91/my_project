"use strict";
const textElement = document.querySelector("#typing-text");
const headerElement = document.querySelector(".header");
let wordsIndex = 0;
let tempText = "";
let isDeleting = false;
let imageArray = {};
function typingText(wordsArray) {
    const SPEED_TYPING_TEXT = 128;
    const WAIT_TYPING_TEXT = 1536;
    const SPEED_DELETING_TEXT = 128;
    const WAIT_DELETING_TEXT = 128;
    const currentWord = wordsArray[wordsIndex].s_name;
    const currentImage = imageArray[currentWord];
    headerElement.style.backgroundImage = currentImage;
    if (!isDeleting) {
        tempText = currentWord.slice(0, tempText.length + 1);
        textElement.innerHTML = tempText;
        if (tempText === currentWord) {
            isDeleting = true;
            setTimeout(() => typingText(wordsArray), WAIT_TYPING_TEXT);
        } else {
            setTimeout(() => typingText(wordsArray), SPEED_TYPING_TEXT);
        }
    } else {
        tempText = currentWord.slice(0, tempText.length - 1);
        textElement.innerHTML = tempText;
        if (tempText === "") {
            isDeleting = false;
            wordsIndex = (wordsIndex + 1) % wordsArray.length;
            setTimeout(() => typingText(wordsArray), WAIT_DELETING_TEXT);
        } else {
            setTimeout(() => typingText(wordsArray), SPEED_DELETING_TEXT);
        }
    }
}
fetch("http://flash.az/api/slider_get", {
    method: "GET",
})
    .then((response) => response.json())
    .then((response) => {
        imageArray = response.reduce((acc, item) => {
            acc[item.s_name] = `url('uploads/slider/${item.s_img}')`;
            return acc;
        }, {});
        const wordsArray = response.map((item) => {
            return { s_name: item.s_name };
        });
        typingText(wordsArray);
    })
    .catch((error) => {
        console.error("Ошибка при выполнении запроса:", error);
    });