// open login popup when login button is clicked
document.getElementById("loginBtn").addEventListener("click", () => openPopup("loginPopup"));

// open create-account popup when button is clicked
document.getElementById("createBtn").addEventListener("click", () => openPopup("createPopup"));

// shows the selected popup and the overlay
function openPopup(id) {
  document.getElementById(id).style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

// hides all popups and removes overlay
function closePopup() {
  document.querySelectorAll(".popup").forEach(p => p.style.display = "none");
  document.getElementById("overlay").style.display = "none";
}

// handles user account creation using localStorage
function createAccount() {
  const username = document.getElementById("createUsername").value;
  const password = document.getElementById("createPassword").value;

  // require both fields
  if (!username || !password) {
    alert("Please fill out both fields.");
    return;
  }

  // stop if username already exists
  if (localStorage.getItem(username)) {
    alert("Username already exists!");
    return;
  }

  // store new account in localStorage
  localStorage.setItem(username, password);
  alert("Account created successfully!");
  closePopup();
}

// handles user login using stored credentials
function login() {
  const username = document.getElementById("loginUsername").value;
  const password = document.getElementById("loginPassword").value;
  const storedPassword = localStorage.getItem(username);

  // check stored password match
  if (storedPassword === password) {
    alert(`Welcome back, ${username}!`);
    closePopup();
  } else {
    alert("Invalid username or password.");
  }
}
