function convertUsernameToLowerCase() {
    const usernameInput = document.getElementById("user");
    usernameInput.value = usernameInput.value.toLowerCase();
}

const form = document.getElementById("form");
form.addEventListener("submit", convertUsernameToLowerCase);
