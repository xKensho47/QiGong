document.addEventListener("DOMContentLoaded", function () {
    const section = document.getElementById("secundario");
    const history = document.getElementById("historia");
    const backToTop = document.getElementById("volverArriba");

    if (history) {
        history.addEventListener("click", function () {
            section.classList.add("visible");
            section.scrollIntoView({ behavior: "smooth" });
            templatesControl();
        })
    }

    if (backToTop) {
        backToTop.addEventListener("click", function () {
            document.getElementById("hero").scrollIntoView({ behavior: "smooth" });
            section.classList.remove("visible");
            templatesControl();
        });
    }

    function templatesControl() {
        let header = document.getElementById("header");
        let footer = document.getElementById("footer");

        if (!section.classList.contains("visible")) {
            header.classList.remove("visible");
            footer.classList.remove("visible");
        } else {
            header.classList.add("visible");
            footer.classList.add("visible");
        }
    }

    if (document.title !== "QiGong Sasuke Iván") {
        const h = document.querySelector("#header");
        const f = document.querySelector("#footer");
        h.classList.add("visible");
        f.classList.add("visible");
    }
});