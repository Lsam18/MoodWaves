function makeEditable(fieldId) {
    document.getElementById(fieldId).readOnly = false;
    document.getElementById(fieldId).focus();
}

function toggleChangePassword() {
    var pwdFields = document.getElementById("password-fields");
    if (pwdFields.style.display === "none") {
        pwdFields.style.display = "block";
    } else {
        pwdFields.style.display = "none";
    }
}
