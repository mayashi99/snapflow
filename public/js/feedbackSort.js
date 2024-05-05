function sortTestimonials() {
    var sortSelect = document.getElementById("sort");
    var sortBy = sortSelect.value; // Get the selected sorting option

    var testimonialsContainer = document.querySelector(".testimonial-box-container");
    var testimonials = Array.from(testimonialsContainer.querySelectorAll(".testimonial-box"));

    if (sortBy === "date") {
        testimonials.sort(function(a, b) {
            var dateA = new Date(a.getAttribute("data-date"));
            var dateB = new Date(b.getAttribute("data-date"));
            return dateB - dateA; // Sort by descending date
        });
    } else if (sortBy === "rating") {
        testimonials.sort(function(a, b) {
            var ratingA = parseInt(a.getAttribute("data-rating"));
            var ratingB = parseInt(b.getAttribute("data-rating"));
            return ratingB - ratingA; // Sort by descending rating
        });
    }

    // Append sorted testimonials back to the container
    testimonials.forEach(function(testimonial) {
        testimonialsContainer.appendChild(testimonial);
    });
}
