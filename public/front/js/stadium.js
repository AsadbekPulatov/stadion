// Filter functionality
document.getElementById("stadium-search").addEventListener("input", function () {
    const query = this.value.toLowerCase();
    const stadiums = document.querySelectorAll(".stadium-card");

    stadiums.forEach((stadium) => {
        const name = stadium.getAttribute("data-name").toLowerCase();
        const location = stadium.getAttribute("data-location").toLowerCase();
        const size = stadium.getAttribute("data-size").toLowerCase();
        const price = stadium.getAttribute("data-price").toLowerCase();

        if (name.includes(query) || location.includes(query) || size.includes(query) || price.includes(query)) {
            stadium.style.display = "block";
        } else {
            stadium.style.display = "none";
        }
    });
});

// Modal functionality
function openBookingModal(stadiumName) {
    const modal = document.getElementById("booking-modal");
    document.getElementById("stadium-name").value = stadiumName;
    modal.style.display = "block";
}

function closeBookingModal() {
    const modal = document.getElementById("booking-modal");
    modal.style.display = "none";
}

// Close modal on clicking outside
window.onclick = function (event) {
    const modal = document.getElementById("booking-modal");
    if (event.target === modal) {
        closeBookingModal();
    }
};
