const chatToggle = document.getElementById("chatToggle");
const chatContainer = document.getElementById("chatContainer");
const closeChat = document.getElementById("closeChat");

chatToggle.addEventListener("click", () => {
  chatContainer.style.display = "flex";
  chatToggle.style.display = "none";
});

closeChat.addEventListener("click", () => {
  chatContainer.style.display = "none";
  chatToggle.style.display = "flex";
});

const chatForm = document.getElementById("chatForm");
const userInput = document.getElementById("userInput");
const chatBox = document.getElementById("chatBox");

chatForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const message = userInput.value.trim();
  if (!message) return;

  addMessage("user", message);
  userInput.value = "";

  setTimeout(() => {
    const botReply = getBotResponse(message);
    addMessage("bot", botReply);
  }, 600);
});

function addMessage(sender, text) {
  const msgDiv = document.createElement("div");
  msgDiv.className = sender === "user" ? "user-message" : "bot-message";
  msgDiv.textContent = text;
  chatBox.appendChild(msgDiv);
  chatBox.scrollTop = chatBox.scrollHeight;
}

function getBotResponse(input) {
  input = input.toLowerCase();
  if (input.includes("hello") || input.includes("hi")) {
    return "Hi there! 😊 How can I assist you?";
  } else if (input.includes("help")) {
    return "Sure! I'm here to help. What do you need assistance with?";
  } else {
    return "I'm not sure how to respond to that. Try asking something else!";
  }
}
