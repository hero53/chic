const ratio = 1;
const options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio,
};

const handleIntersect = function (enties, observer) {
    enties.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add(".revel-visible");
            observer.unobserve(entry.target);
        }
    });
    // console.log("handleIntersection");
};

const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll(".revel").forEach(function (r) {
    observer.observe(r);
});
