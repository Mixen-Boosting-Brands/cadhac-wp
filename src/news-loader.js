document.addEventListener("shown.bs.tab", function (e) {
    const btn = e.target;
    const target = document.querySelector(btn.dataset.bsTarget);

    if (!target || target.dataset.loaded) return;

    const cat = target.dataset.cat;

    fetch("/wp-admin/admin-ajax.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `action=load_news_tab&cat=${cat}`,
    })
        .then((r) => r.text())
        .then((html) => {
            target.innerHTML =
                html + target.querySelector(".row:last-child")?.outerHTML || "";

            target.dataset.loaded = true;

            if (window.AOS) AOS.refresh();
        });
});
