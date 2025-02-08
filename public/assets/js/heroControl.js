document.addEventListener("DOMContentLoaded", function () {
    const section = document.getElementById("secundario");
    const history = document.getElementById("historia");
    const backToTop = document.getElementById("volverArriba");

    if (history) {
        history.addEventListener("click", function () {
            section.classList.add("visible");
            section.scrollIntoView({ behavior: "smooth" });
            footerControl();
        })
    }

    if (backToTop) {
        backToTop.addEventListener("click", function () {
            document.getElementById("hero").scrollIntoView({ behavior: "smooth" });
            section.classList.remove("visible");
            footerControl();
        });
    }

    function footerControl() {
        let footer = document.getElementById("footer");
        if (!section.classList.contains("visible")) {
            footer.classList.remove("visible");
        } else {
            footer.classList.add("visible");
        }
    }

    if (document.title !== "QiGong Sasuke Iván") {
        const f = document.querySelector("#footer");
        f.classList.add("visible");
    }
});