document.addEventListener("DOMContentLoaded", () => {
    const successMsg = document.querySelector(".success");

    if (successMsg) {
        setTimeout(() => {
            successMsg.style.opacity = "0";
            successMsg.style.transform = "translateY(-10px)";
            successMsg.style.transition = "0.5s ease";

            setTimeout(() => {
                successMsg.remove();
            }, 500);
        }, 2000); // show for 2 seconds
    }
});


document.addEventListener("DOMContentLoaded", () => {
    // Success message auto hide
    const successMsg = document.querySelector(".success");
    if (successMsg) {
        setTimeout(() => {
            successMsg.style.opacity = "0";
            successMsg.style.transform = "translateY(-10px)";
            successMsg.style.transition = "0.5s ease";
            setTimeout(() => successMsg.remove(), 500);
        }, 2000);
    }

    // Delete confirmation modal
    const deleteButtons = document.querySelectorAll(".delete");

    deleteButtons.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault(); // prevent immediate delete

            const overlay = document.createElement("div");
            overlay.classList.add("modal-overlay");

            const modal = document.createElement("div");
            modal.classList.add("modal-box");
            modal.innerHTML = `
                <h3>Are you sure you want to delete this post?</h3>
                <button class="btn cancel">Cancel</button>
                <button class="btn confirm">Delete</button>
            `;

            overlay.appendChild(modal);
            document.body.appendChild(overlay);

            // Cancel button
            modal.querySelector(".cancel").addEventListener("click", () => {
                overlay.remove();
            });

            // Confirm button
            modal.querySelector(".confirm").addEventListener("click", () => {
                // Redirect to the actual delete URL
                window.location.href = btn.href;
            });
        });
    });
});

