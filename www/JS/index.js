var input = document.querySelector("#telephone");
window.intlTelInput(input, {
    allowDropdown : true,
    formatOnDisplay:true,
    separateDialCode: true,
    hiddenInput:"full_Phone",
    utilsScript: "www/js/utils.js"
});

