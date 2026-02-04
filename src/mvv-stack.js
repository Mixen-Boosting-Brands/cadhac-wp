(() => {
    const stack = document.querySelector("#mvvStack");
    if (!stack) return;

    let cards = Array.from(stack.querySelectorAll(".cards-stack__card"));

    const applyIndexes = () => {
        cards.forEach((card, i) => {
            card.style.setProperty("--i", i);
            card.dataset.index = i;
        });
    };

    const setActive = (activeCard) => {
        // mueve la card activa al inicio del array
        cards = [activeCard, ...cards.filter((c) => c !== activeCard)];

        cards.forEach((card) =>
            card.classList.toggle("is-active", card === activeCard)
        );

        applyIndexes();
    };

    // init
    setActive(cards[0]);

    stack.addEventListener("click", (e) => {
        const card = e.target.closest(".cards-stack__card");
        if (!card) return;
        setActive(card);
    });

    stack.addEventListener("keydown", (e) => {
        if (e.key !== "Enter" && e.key !== " ") return;
        const card = e.target.closest(".cards-stack__card");
        if (!card) return;

        e.preventDefault();
        setActive(card);
    });
})();
