document.addEventListener("DOMContentLoaded", function() {
    const editButtons = document.querySelectorAll(".edit-button");
    const saveButton = document.getElementById("save-button");
    const cancelButton = document.getElementById("cancel-button");
    const editForm = document.querySelector(".edit-form");
    const editItemName = document.getElementById("edit-item-name");

    let currentIndex = -1;

    editButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
            showEditForm(index);
        });
    });

    saveButton.addEventListener("click", () => {
        saveEditedItem(currentIndex);
    });

    cancelButton.addEventListener("click", () => {
        hideEditForm();
    });

    function showEditForm(index) {
        currentIndex = index;
        editForm.style.display = "block";
    }

    function hideEditForm() {
        editForm.style.display = "none";
    }

    function saveEditedItem(index) {
        // Lakukan perubahan data yang sesungguhnya di sini (misalnya, update data di database atau array).
        // Setelah selesai, Anda dapat menyembunyikan form edit.
        hideEditForm();
    }
});


function confirmDelete(id) {
    if (confirm("Apakah Anda yakin ingin menghapus item ini?")) {
        window.location.href = "sistem/delete.php?id=" + id;
    }
}