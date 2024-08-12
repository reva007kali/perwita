document.addEventListener('DOMContentLoaded', function () {
    // Navbar Scroll Effect
    var navbar = document.getElementById('menu');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Hamburger Menu
    function updatemenu() {
        var menu = document.getElementById('menu');
        if (document.getElementById('responsive-menu').checked) {
            menu.style.borderBottomRightRadius = '0';
            menu.style.borderBottomLeftRadius = '0';
        } else {
            menu.style.borderRadius = '10px';
        }
    }

    // Dark Mode
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
        setTimeout(() => {
            popupMessage.classList.remove('show');
        }, 1000); // Adjusted to 1000ms for better readability
    }

    function updateIcon() {
        const icon = document.getElementById('dm-icon');
        icon.setAttribute('data-feather', document.body.classList.contains('dark-mode') ? 'moon' : 'sun');
        feather.replace(); // Ensure Feather icons are loaded before this call
    }

    // Deploy Number Animation with Thousands Separator
    const counters = document.querySelectorAll('.count-up');

    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute('data-target');
                animateCounter(counter, target);
                observer.unobserve(counter);
            }
        });
    }, options);

    counters.forEach(counter => {
        observer.observe(counter);
    });

    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 100; // Adjusted speed for faster animation

        function updateCounter() {
            current += increment;
            if (current < target) {
                element.textContent = Math.ceil(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target.toLocaleString();
            }
        }

        updateCounter();
    }

    // Image Slider (if needed)
    const sliderWrapper = document.querySelector('.slider-wrapper');
    if (sliderWrapper) {
        const images = sliderWrapper.querySelectorAll('img');
        images.forEach(img => {
            const clone = img.cloneNode(true);
            sliderWrapper.appendChild(clone);
        });
    }

    // Modal Image Viewer
    function openModal(imgElement) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("modalImg");
        modal.style.display = "block";
        modalImg.src = imgElement.src;
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

    // Scroll Appear on Scroll
    const elements = document.querySelectorAll('.appear-on-scroll');

    function checkVisibility() {
        const triggerBottom = window.innerHeight / 1.2;
        elements.forEach(element => {
            const boxTop = element.getBoundingClientRect().top;
            if (boxTop < triggerBottom) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Initial check on page load

    // Slide-up Animation
    const slideUpElements = document.querySelectorAll('.slide-up');
    const slideUpOptions = {
        root: null, // Use the viewport as the root
        rootMargin: '0px',
        threshold: 0.1 // Trigger when 10% of the element is in view
    };

    const slideUpObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Stop observing once the animation is applied
            }
        });
    }, slideUpOptions);

    slideUpElements.forEach(element => {
        slideUpObserver.observe(element);
    });

    // Accordion Functionality
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

    // License Modal Functionality
    var licenseModal = document.getElementById("licenseModal");
    var span = licenseModal.querySelector(".close");

    span.onclick = function() {
        licenseModal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == licenseModal) {
            licenseModal.style.display = "none";
        }
    }

    document.querySelectorAll('.licenses-card').forEach(card => {
        card.addEventListener('click', function() {
            var license = this.getAttribute("data-license");
            var description = this.getAttribute("data-description");
            var file = this.getAttribute("data-file");
            var image = this.getAttribute("data-image");

            document.getElementById("modal-title").innerText = license;
            document.getElementById("modal-description").innerText = description;
            document.getElementById("download-link").href = file;
            document.getElementById("modal-image").src = image;

            licenseModal.style.display = "block";
        });
    });

    // Sea-Based Service Modal
    function openServiceModal(modalId) {
        document.getElementById(modalId).style.display = "block";
    }

    function closeServiceModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }

    window.onclick = function(event) {
        const modals = document.querySelectorAll('.sb-modal');
        modals.forEach(modal => {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    }

    // Go Back Functionality

    // Land-Based Service Modal
    document.querySelectorAll('.lb-card').forEach(card => {
        card.addEventListener('click', () => {
            const modalId = card.getAttribute('data-modal');
            document.getElementById(modalId).style.display = 'flex';
        });
    });

    document.querySelectorAll('.close').forEach(closeBtn => {
        closeBtn.addEventListener('click', () => {
            const modalId = closeBtn.getAttribute('data-close');
            document.getElementById(modalId).style.display = 'none';
        });
    });

    window.addEventListener('click', (event) => {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
        }
    });
});
