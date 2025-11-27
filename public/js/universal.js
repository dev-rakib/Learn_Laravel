const orb = document.querySelector(".orb");

    document.addEventListener("mousemove", (e) => {
        orb.style.left = e.clientX + "px";
        orb.style.top = e.clientY + "px";

        const spark = document.createElement("div");
        spark.classList.add("spark");
        spark.style.left = e.clientX + "px";
        spark.style.top = e.clientY + "px";
        document.body.appendChild(spark);

        setTimeout(() => spark.remove(), 400);
    });