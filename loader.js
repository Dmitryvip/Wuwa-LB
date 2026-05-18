document.addEventListener("DOMContentLoaded", () => {
    const loader = document.getElementById("wuwa-loader");
    document.body.classList.add("loading");

    function hideLoader() {
        if (loader && !loader.classList.contains("fade-out")) {
            loader.classList.add("fade-out");

            setTimeout(() => {
                loader.remove();
                document.body.classList.remove("loading");
            }, 600);
        }
    }



    setTimeout(hideLoader, 400);
});