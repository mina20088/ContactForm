var input = document.querySelector("#telephone");
window.intlTelInput(input, {
    allowDropdown : true,
    formatOnDisplay:true,
    separateDialCode: true,
    utilsScript: "www/js/utils.js"
});

