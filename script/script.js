// Scroll Effect for Navbar
window.addEventListener('scroll', function () {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Hamburger Menu Toggle
function updatemenu() {
    const navbar = document.getElementById('navbar');
    if (document.getElementById('responsive-menu').checked) {
        navbar.style.borderBottomRightRadius = '0';
        navbar.style.borderBottomLeftRadius = '0';
    } else {
        navbar.style.borderRadius = '0px';
    }
}
// Deploy Number Animation
const counters = document.querySelectorAll('.count-up');

const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
};

const callback = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            const target = +counter.getAttribute('data-target');
            animateCounter(counter, target);
            observer.unobserve(counter);
        }
    });
};

const observer = new IntersectionObserver(callback, options);

counters.forEach(counter => {
    observer.observe(counter);
});

function animateCounter(element, target) {
    let current = 0;
    const increment = target / 100;

    const updateCounter = () => {
        current += increment;
        if (current < target) {
            element.textContent = Math.ceil(current).toLocaleString();
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = target.toLocaleString();
        }
    };

    updateCounter();
}

// Modal for Images
function openImageModal(imgElement) {
    var modal = document.getElementById("postModal");
    var modalImg = document.getElementById("post-modalImg");
    modal.style.display = "block";
    modalImg.src = imgElement.src;
}

function closeImageModal() {
    var modal = document.getElementById("postModal");
    modal.style.display = "none";
}

// Modal for Licenses
var licenseModal = document.getElementById("licenseModal");
var licenseModalClose = document.getElementsByClassName("closeLicenses")[0];

licenseModalClose.onclick = function () {
    licenseModal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == licenseModal) {
        licenseModal.style.display = "none";
    }
}

var licenseCards = document.getElementsByClassName("licenses-card");
for (var i = 0; i < licenseCards.length; i++) {
    licenseCards[i].onclick = function () {
        var license = this.getAttribute("data-license");
        var description = this.getAttribute("data-description");
        var file = this.getAttribute("data-file");
        var image = this.getAttribute("data-image");

        document.getElementById("modal-title").innerText = license;
        document.getElementById("modal-description").innerText = description;
        document.getElementById("modal-image").src = image;

        licenseModal.style.display = "block";
    }
}

// Modal for Sea-Based Services
function openServiceModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

function closeServiceModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}

window.onclick = function (event) {
    const serviceModals = document.querySelectorAll('.sb-modal');
    serviceModals.forEach(modal => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
}

function goBack() {
    window.history.back();
}
