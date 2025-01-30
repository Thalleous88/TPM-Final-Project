document.addEventListener("DOMContentLoaded", function () {
    // FAQ
    const faqItems = document.querySelectorAll(".faq-item");
    const faqMoreBtn = document.querySelector(".faq-more");
    const hiddenFaqs = document.querySelector(".faq-hidden");
    const faqContainer = document.querySelector(".faq-container");
    let isExpanded = false;

    // Toggle dropdown
    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");

        question.addEventListener("click", () => {
            item.classList.toggle("active");

            setTimeout(() => {
                item.scrollIntoView({ behavior: "smooth", block: "nearest" });
            }, 100);
        });
    });

    // Show More / Show Less
    if (faqMoreBtn) {
        faqMoreBtn.addEventListener("click", () => {
            isExpanded = !isExpanded;

            if (isExpanded) {
                hiddenFaqs.style.display = "block";
                faqMoreBtn.textContent = "Show Less";
            } else {
                hiddenFaqs.style.display = "none";
                faqMoreBtn.textContent = "Show More";
            }

            faqContainer.scrollTop = faqContainer.scrollHeight;
        });
    }

    // CONTACT US
    const contactForm = document.getElementById("contactForm");

    contactForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Mencegah reload halaman

        // Ambil data dari form
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let subject = document.getElementById("subject").value;
        let message = document.getElementById("message").value;

        // Kirim data ke email
        sendEmail(name, email, subject, message);

        // Show pop up
        showPopup();

        // Reset form
        contactForm.reset();
    });

    // Function show pop-up
    function showPopup() {
        const popup = document.getElementById("popup");

        popup.style.display = "block";
        setTimeout(() => {
            popup.style.opacity = "1";
        }, 10);

        setTimeout(() => {
            popup.style.opacity = "0";
            setTimeout(() => {
                popup.style.display = "none";
            }, 500);
        }, 3000);
    }

    // Function kirim email (EmailJS)
    function sendEmail(name, email, subject, message) {
        emailjs.send("service_xxxx", "template_xxxx", {
            user_name: name,
            user_email: email,
            subject: subject,
            message: message,
        }).then(
            function (response) {
                console.log("SUCCESS!", response.status, response.text);
            },
            function (error) {
                console.log("FAILED...", error);
            }
        );
    }
});
