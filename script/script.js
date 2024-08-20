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

// Dark Mode Toggle
const darkModeToggle = document.getElementById('dark-mode-button');
const popupMessage = document.getElementById('popupMessage');

darkModeToggle.addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');
    const darkModeOn = document.body.classList.contains('dark-mode');
    showPopupMessage(darkModeOn ? 'Dark Mode On' : 'Dark Mode Off');
    updateIcon();
});

function showPopupMessage(message) {
    popupMessage.textContent = message;
    popupMessage.classList.add('show');
    popupMessage.classList.remove('hidden');
    setTimeout(() => {
        popupMessage.classList.remove('show');
        popupMessage.classList.add('hidden');
    }, 1000);
}

function updateIcon() {
    const icon = document.getElementById('dm-icon');
    icon.setAttribute('data-feather', document.body.classList.contains('dark-mode') ? 'moon' : 'sun');
    feather.replace(); 
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

// Slider Infinite Loop
const sliderWrapper = document.querySelector('.slider-wrapper');
const images = sliderWrapper.querySelectorAll('img');

images.forEach(img => {
    const clone = img.cloneNode(true);
    sliderWrapper.appendChild(clone);
});

// Modal for Images
function openImageModal(imgElement) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImg");
    modal.style.display = "block";
    modalImg.src = imgElement.src;
}

function closeImageModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}


// Accordion for Sea-Based Section
document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        const isActive = content.style.display === 'block';

        document.querySelectorAll('.accordion-content').forEach(c => {
            c.style.display = 'none';
        });

        if (!isActive) {
            content.style.display = 'block';
        }
    });
});

// Modal for Licenses
var licenseModal = document.getElementById("licenseModal");
var licenseModalClose = document.getElementsByClassName("close")[0];

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
        document.getElementById("download-link").href = file;
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
