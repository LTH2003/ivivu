const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");

if (registerButton) {
  registerButton.addEventListener("click", () => {
    if (container) {
      container.classList.add("right-panel-active");
    }
  });
}
if (loginButton) {
  loginButton.addEventListener("click", () => {
    if (container) {
      container.classList.remove("right-panel-active");
    }
  });
}