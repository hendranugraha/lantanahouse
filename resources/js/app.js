let videoPlaying = false;
let mobileMenuOpen = false;

function setMobileMenuOpen(open) {
    mobileMenuOpen = open;
    const menu = document.getElementById('mobile-menu');
    const menuOpen = document.getElementById('menu-icon-open');
    const menuClose = document.getElementById('menu-icon-close');
    const btn = document.getElementById('mobile-menu-btn');
    if (menu) menu.classList.toggle('hidden', !mobileMenuOpen);
    if (menuOpen) menuOpen.classList.toggle('hidden', mobileMenuOpen);
    if (menuClose) menuClose.classList.toggle('hidden', !mobileMenuOpen);
    if (btn) {
        btn.setAttribute('aria-expanded', mobileMenuOpen ? 'true' : 'false');
        btn.setAttribute('aria-label', mobileMenuOpen
            ? (window.LANTANA_I18N?.nav_menu_close || 'Close menu')
            : (window.LANTANA_I18N?.nav_menu_open || 'Open menu'));
    }
}

window.toggleMobileMenu = function() {
    setMobileMenuOpen(!mobileMenuOpen);
};

function toggleVideo() {
    const slides = document.getElementById('hero-slides');
    const video = document.getElementById('hero-video');
    const closeBtn = document.getElementById('hero-close');
    const content = document.getElementById('hero-content');
    const nav = document.getElementById('main-nav');
    const headerImg = document.querySelector('.relative.h-\\[80vh\\] img');

    if (!video) return;

    videoPlaying = !videoPlaying;

    if (videoPlaying) {
        if (slides) slides.classList.add('opacity-0');
        if (headerImg) headerImg.classList.add('opacity-0');
        video.classList.remove('hidden');
        video.classList.remove('opacity-0');
        const overlay = document.getElementById('hero-overlay');
        if (overlay) overlay.classList.add('hidden');
        if (closeBtn) closeBtn.classList.remove('hidden');
        if (content) content.classList.add('hidden');
        if (nav) {
            nav.classList.add('-translate-y-full', 'opacity-0');
        }
        video.currentTime = 0;
        const p = video.play();
        if (p !== undefined) {
            p.catch(() => {});
        }
    } else {
        video.pause();
        video.currentTime = 0;
        video.classList.add('hidden');
        if (slides) slides.classList.remove('opacity-0');
        if (headerImg) headerImg.classList.remove('opacity-0');
        const overlay = document.getElementById('hero-overlay');
        if (overlay) overlay.classList.remove('hidden');
        if (closeBtn) closeBtn.classList.add('hidden');
        if (content) content.classList.remove('hidden');
        if (nav) {
            nav.classList.remove('-translate-y-full', 'opacity-0');
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const mobileBtn = document.getElementById('mobile-menu-btn');
    if (mobileBtn) {
        mobileBtn.addEventListener('click', function() {
            window.toggleMobileMenu();
        });
    }

    const playBtn = document.getElementById('play-btn');
    const closeBtn = document.getElementById('hero-close');
    const video = document.getElementById('hero-video');

    if (playBtn) {
        playBtn.addEventListener('click', toggleVideo);
    }
    if (closeBtn) {
        closeBtn.addEventListener('click', toggleVideo);
    }
    if (video) {
        video.addEventListener('ended', toggleVideo);
    }

    const slides = document.querySelectorAll('#hero-slides .slide');
    if (slides && slides.length > 1) {
        let current = 0;
        slides.forEach((slide) => {
            slide.style.transition = 'opacity 1.5s ease-in-out';
        });
        slides[0].style.opacity = '1';
        setInterval(() => {
            const vid = document.getElementById('hero-video');
            if (!vid || vid.classList.contains('hidden')) {
                slides[current].style.opacity = '0';
                current = (current + 1) % slides.length;
                slides[current].style.opacity = '1';
            }
        }, 5000);
    }

    const aboutSlides = document.querySelectorAll('#about-slide-0, #about-slide-1, #about-slide-2');
    if (aboutSlides && aboutSlides.length > 1) {
        let currentAbout = 0;
        aboutSlides.forEach((slide) => {
            slide.style.transition = 'opacity 1.5s ease-in-out';
        });
        setInterval(() => {
            aboutSlides[currentAbout].style.opacity = '0';
            currentAbout = (currentAbout + 1) % aboutSlides.length;
            aboutSlides[currentAbout].style.opacity = '1';
        }, 5000);
    }

    const facilityCarousels = document.querySelectorAll('.facility-carousel');
    facilityCarousels.forEach((car) => {
        const imgs = car.querySelectorAll('.facility-img');
        const dots = car.querySelectorAll('.facility-dot');
        const prevBtn = car.querySelector('.facility-prev');
        const nextBtn = car.querySelector('.facility-next');

        if (!imgs || imgs.length <= 1) return;

        let idx = 0;

        imgs.forEach((img, i) => {
            img.style.transition = 'opacity 1s ease-in-out';
            img.style.opacity = i === 0 ? '1' : '0';
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle('bg-white/60', i === 0);
            dot.classList.toggle('bg-white/30', i !== 0);
        });

        const showSlide = (newIdx) => {
            imgs[idx].style.opacity = '0';
            dots[idx].classList.remove('bg-white/60');
            dots[idx].classList.add('bg-white/30');
            idx = newIdx;
            imgs[idx].style.opacity = '1';
            dots[idx].classList.remove('bg-white/30');
            dots[idx].classList.add('bg-white/60');
        };

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                let newIdx = idx - 1;
                if (newIdx < 0) newIdx = imgs.length - 1;
                showSlide(newIdx);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                let newIdx = (idx + 1) % imgs.length;
                showSlide(newIdx);
            });
        }

        setInterval(() => {
            let newIdx = (idx + 1) % imgs.length;
            showSlide(newIdx);
        }, 5000);
    });
});
