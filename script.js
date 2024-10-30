window.onscroll = function() {
    document.getElementById("scrollTopBtn").style.display = window.scrollY > 20 ? "block" : "none";
};

document.getElementById("scrollTopBtn").onclick = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
};

document.getElementById("weatherForm").onsubmit = function(event) {
    const cityInput = document.querySelector("input[name='city']");
    if (!cityInput.value.trim()) {
        alert("Prosím, zadejte název města.");
        event.preventDefault();
    } else {
        document.getElementById("loader").style.display = "block";
    }
};