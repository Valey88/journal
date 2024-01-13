const seltheme = document.getElementById(“Attendance”).value;
function myapp() {
    const buttons = document.querySelectorAll(".filter_button");
    const tables = document.querySelectorAll(".table");

    function filter(category, items) {
        items.forEach((item) => {
            const isItemFiltered = !item.classList.contains(category);
            if (isItemFiltered) {
                item.classList.remove("hide");
                item.classList.add("hide");
            } else {
                item.classList.remove("hide");
            }
        });
    }

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            const currentCategory = button.dataset.filter;
            console.log(currentCategory);
            filter(currentCategory, tables);
        });
    });
}

myapp();

function filterContentClose() {
    const content = document.querySelectorAll('.dropdown-content');
    content.forEach((item) => {
        if (item.classList.contains('hide')) {
            item.classList.remove('hide')
        }else {
            item.classList.add("hide");
        }
    })
}
