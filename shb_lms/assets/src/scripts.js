// Add any custom JS here if needed
// Example: Smooth scroll for Explore button

document.addEventListener('DOMContentLoaded', function() {
  const exploreBtn = document.querySelector('.btn-outline-dark');
  if (exploreBtn) {
    exploreBtn.addEventListener('click', function(e) {
      e.preventDefault();
      const coursesSection = document.querySelector('.course-card');
      if (coursesSection) {
        coursesSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  }
});
