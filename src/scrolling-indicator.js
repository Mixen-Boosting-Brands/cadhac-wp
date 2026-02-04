const section = document.querySelector("#timeline");

if (section) {
    const verticalLine = section.querySelector(".vertical-line");
    const contentContainer = section.querySelectorAll(".container")[1];

    const mediaQuery = window.matchMedia("(min-width: 768px)");

    const rows = Array.from(
        contentContainer.querySelectorAll(".row[id^='row-']")
    );

    let sectionInView = false;

    // --- RED INDICATOR ---
    function updateIndicator() {
        if (!mediaQuery.matches) return;
        if (!sectionInView) return;

        const contentRect = contentContainer.getBoundingClientRect();
        const windowCenter = window.innerHeight / 2;

        // posición relativa del centro de la ventana respecto al contentContainer
        let indicatorTop = windowCenter - contentRect.top;

        const indicatorHeight = 200;
        const maxIndicatorTop = contentContainer.offsetHeight - indicatorHeight;

        // Limitar valores para no salirse del contenedor
        if (indicatorTop < 0) indicatorTop = 0;
        if (indicatorTop > maxIndicatorTop) indicatorTop = maxIndicatorTop;

        verticalLine.style.setProperty("--indicator-top", `${indicatorTop}px`);
    }

    // --- H2 HIGHLIGHT ---
    function updateActiveTitle() {
        if (!mediaQuery.matches) return;
        if (!sectionInView) return;

        const windowCenter = window.innerHeight / 2;

        let closestRow = null;
        let closestDistance = Infinity;

        rows.forEach((row) => {
            const rect = row.getBoundingClientRect();
            const rowCenter = rect.top + rect.height / 2;
            const distance = Math.abs(windowCenter - rowCenter);

            if (distance < closestDistance) {
                closestDistance = distance;
                closestRow = row;
            }
        });

        // Remove highlight from all h2s
        rows.forEach((row) => {
            const h2 = row.querySelector("h2");
            if (h2) h2.classList.remove("highlighted-amores");
        });

        // Highlight closest row h2
        if (closestRow) {
            const h2 = closestRow.querySelector("h2");
            if (h2) h2.classList.add("highlighted-amores");
        }
    }

    function cleanup() {
        // remove indicator variable
        verticalLine.style.removeProperty("--indicator-top");

        // remove h2 highlight
        rows.forEach((row) => {
            const h2 = row.querySelector("h2");
            if (h2) h2.classList.remove("highlighted-amores");
        });
    }

    // RAF throttle for scroll
    let ticking = false;

    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                if (mediaQuery.matches && sectionInView) {
                    updateIndicator();
                    updateActiveTitle();
                }
                ticking = false;
            });
            ticking = true;
        }
    }

    // --- OBSERVER (detect when section is in view) ---
    const observer = new IntersectionObserver(
        (entries) => {
            const entry = entries[0];
            sectionInView = entry.isIntersecting;

            if (sectionInView && mediaQuery.matches) {
                // entering section -> paint immediately
                updateIndicator();
                updateActiveTitle();
            } else {
                // leaving section -> cleanup
                cleanup();
            }
        },
        {
            // section considered "in view" when at least 10% is visible
            threshold: 0.1,
        }
    );

    observer.observe(section);

    function toggleListener(e) {
        if (e.matches) {
            window.addEventListener("scroll", onScroll);

            // if already in view, paint right away
            if (sectionInView) {
                updateIndicator();
                updateActiveTitle();
            }
        } else {
            window.removeEventListener("scroll", onScroll);
            cleanup();
        }
    }

    mediaQuery.addEventListener("change", toggleListener);

    // Init
    if (mediaQuery.matches) {
        window.addEventListener("scroll", onScroll);

        window.addEventListener("DOMContentLoaded", () => {
            // If section is already in view (like a reload mid-page)
            const rect = section.getBoundingClientRect();
            sectionInView = rect.top < window.innerHeight && rect.bottom > 0;

            if (sectionInView) {
                updateIndicator();
                updateActiveTitle();
            } else {
                cleanup();
            }
        });
    } else {
        cleanup();
    }
}
