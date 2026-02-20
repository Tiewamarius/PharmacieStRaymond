// Real-time clock display
function updateTime() {
    const now = new Date();
    const timeElement = document.getElementById('currentTime');
    
    if (timeElement) {
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        
        timeElement.textContent = `${hours}:${minutes}:${seconds}`;
    }
}

// Update time every second
setInterval(updateTime, 1000);
updateTime(); // Initial call

// Animate medicament categories
const medicamentCategories = document.querySelectorAll('.medicament-category');

const observerOptions = {
    threshold: 0.2,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }, index * 100);
        }
    });
}, observerOptions);

medicamentCategories.forEach(category => {
    category.style.opacity = '0';
    category.style.transform = 'translateY(30px)';
    category.style.transition = 'all 0.6s ease';
    observer.observe(category);
});

// Animate conseil cards
const conseilCardsGarde = document.querySelectorAll('.conseil-card-garde');

conseilCardsGarde.forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'scale(0.9)';
    card.style.transition = `all 0.5s ease ${index * 0.1}s`;
    observer.observe(card);
});

// Animate pharmacie cards
const pharmacieCards = document.querySelectorAll('.pharmacie-garde-card');

pharmacieCards.forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'translateX(-30px)';
    card.style.transition = `all 0.6s ease ${index * 0.15}s`;
    observer.observe(card);
});

// Add pulse effect to call buttons
const callButtons = document.querySelectorAll('.garde-action-buttons .btn-primary');

callButtons.forEach(button => {
    setInterval(() => {
        button.style.animation = 'pulse 1.5s ease';
        setTimeout(() => {
            button.style.animation = '';
        }, 1500);
    }, 5000);
});

// Highlight current day in calendar
function highlightToday() {
    const today = new Date();
    const currentDay = today.getDate();
    const calendarCells = document.querySelectorAll('.calendar-table td');
    
    calendarCells.forEach(cell => {
        if (cell.textContent == currentDay && !cell.classList.contains('garde-day')) {
            cell.style.border = '2px solid var(--primary-color)';
            cell.style.fontWeight = '700';
        }
    });
}

highlightToday();

console.log('Garde page loaded successfully! 🚑');
