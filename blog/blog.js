document.addEventListener("DOMContentLoaded", function () {
    // Sidebar toggle (optional if you want to collapse categories)
    const sidebarToggle = document.querySelector("#categoryToggle");
    const categoryList = document.querySelector("#categoryList");

    if (sidebarToggle && categoryList) {
        sidebarToggle.addEventListener("click", function () {
            categoryList.classList.toggle("d-none");
        });
    }

    // Chatbot interaction (if you want to simulate opening the chat widget)
    const chatBtn = document.querySelector(".chat-toggle");
    const chatBox = document.querySelector(".chat-box");

    if (chatBtn && chatBox) {
        chatBtn.addEventListener("click", function () {
            chatBox.classList.toggle("d-none");
        });
    }

    // Tooltip initialization (optional if you use tooltips)
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
