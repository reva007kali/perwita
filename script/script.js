document.addEventListener('DOMContentLoaded', function () {
    // Navbar Scroll Effect
    var navbar = document.getElementById('header');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Hamburger Menu
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const menu = document.querySelector('.menu');
    const closeButton = document.querySelector('.close-button');
    const content = document.querySelector('.content');

    hamburgerMenu.addEventListener('click', function () {
        menu.classList.add('open');
    });

    closeButton.addEventListener('click', function () {
        menu.classList.remove('open');
    });

    document.addEventListener('click', function (event) {
        if (!menu.contains(event.target) && !hamburgerMenu.contains(event.target)) {
            menu.classList.remove('open');
        }
    });

    // Dark Mode
    const darkModeToggle = document.getElementById('dm-btn');
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
        }, 1000); // Increased to 1000ms for better readability
    }

    function updateIcon() {
        const icon = document.getElementById('dm-icon');
        if (document.body.classList.contains('dark-mode')) {
            icon.setAttribute('data-feather', 'moon');
        } else {
            icon.setAttribute('data-feather', 'sun');
        }
        feather.replace(); // Ensure Feather icons are loaded before this call
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
        const increment = target / 100; // Adjusted speed for faster animation

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                element.textContent = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        };

        updateCounter();
    }

    const sliderWrapper = document.querySelector('.slider-wrapper');
    const images = sliderWrapper.querySelectorAll('img');

    // Clone images to create an infinite loop
    images.forEach(img => {
        const clone = img.cloneNode(true);
        sliderWrapper.appendChild(clone);
    });
});

// modal late post
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

document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.appear-on-scroll'); // Change this to your specific class or ID

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
});
// document.addEventListener("DOMContentLoaded", function () {
//     const totalDeployElement = document.querySelector('.total-deploy');

//     const observer = new IntersectionObserver(entries => {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 totalDeployElement.classList.add('flip-in');
//                 observer.unobserve(totalDeployElement); // Stop observing after the animation is applied
//             }
//         });
//     });

//     observer.observe(totalDeployElement);
// });

