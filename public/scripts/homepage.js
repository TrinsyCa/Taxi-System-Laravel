const headerVideo = document.getElementById("header-bg-video");
headerVideo.playbackRate = 0.8;

const featuresCol = document.querySelectorAll(".features-col");
featuresCol.forEach((fetureCol) => {
    const productContainer = fetureCol.querySelectorAll(".feature-card-container");
    productContainer.forEach((product) => {
        const productList = product.querySelectorAll(".feature-card-list");
        productList.forEach((list) => {
            featuresStart(fetureCol, product, list);
            product.addEventListener("mouseenter", () => {
                    if(innerWidth > 768) {
                        list.style.height = list.scrollHeight + 5 + "px";
                        list.style.paddingBottom = "15px";
                        fetureCol.style.height = product.scrollHeight + list.scrollHeight + 5 + "px";
                    }
            });
            product.addEventListener("mouseleave", () => {
                productMouseLeave();
            });
        });
    });
});

function featuresStart(fetureCol, product, list, liststatus) {
    const productCount = fetureCol.querySelectorAll(".feature-card-container").length;
    if(liststatus === false) {
        if(innerWidth > 768) {
            fetureCol.style.height = product.scrollHeight + 30 + "px";
            fetureCol.style.marginBottom = "0";
        }
        else if(innerWidth <= 768 && innerWidth > 500) {
            // Tablet Responsive
            if(productCount > 2) {
                fetureCol.style.height = product.scrollHeight * 2 + 30 + "px";
                fetureCol.style.marginBottom = "20px";
            }
            else {
                fetureCol.style.height = product.scrollHeight + 30 + "px";
                fetureCol.style.marginBottom = "0";
            }
        }
        else {
            // Mobile Responsive
            fetureCol.style.height = product.scrollHeight * productCount + 30 + "px";
            if(productCount > 2) {
                fetureCol.style.marginBottom = "35px";
            }
            else {
                fetureCol.style.marginBottom = "20px";
            }
        }
    }
    else {
        if(innerWidth > 768) {
            fetureCol.style.height = (product.scrollHeight - list.scrollHeight) + 30 + "px";
            fetureCol.style.marginBottom = "0";
        }
        else if(innerWidth <= 768 && innerWidth > 500) {
            // Tablet Responsive
            if(productCount > 3) {
                fetureCol.style.height = (product.scrollHeight - list.scrollHeight) * 2 + 30 + "px";
                fetureCol.style.marginBottom = "20px";
            }
            else {
                fetureCol.style.height = (product.scrollHeight - list.scrollHeight) + 30 + "px";
                fetureCol.style.marginBottom = "0";
            }
        }
        else {
            // Mobile Responsive
            fetureCol.style.height = (product.scrollHeight - list.scrollHeight) * productCount + 30 + "px";
            if(productCount > 3) {
                fetureCol.style.marginBottom = "35px";
            }
            else {
                fetureCol.style.marginBottom = "20px";
            }
        }
    }
}

function productMouseLeave() {
    featuresCol.forEach((fetureCol) => {
        const productContainer = fetureCol.querySelectorAll(".feature-card-container");
        productContainer.forEach((product) => {
            const productList = product.querySelectorAll(".feature-card-list");
            productList.forEach((list) => {
                list.style.height = "0px";
                list.style.paddingBottom = "0px";
                featuresStart(fetureCol, product, list, false);
            });
        });
    });
}

window.addEventListener("resize", productMouseLeave);
window.addEventListener("DOMContentLoaded", productMouseLeave);
window.addEventListener("DOMContentLoaded", () => {
    featuresCol.forEach((fetureCol) => {
        const productContainer = fetureCol.querySelectorAll(".feature-card-container");
        productContainer.forEach((product) => {
            const productList = product.querySelectorAll(".feature-card-list");
            productList.forEach((list) => {
                featuresStart(fetureCol, product, list);
            });
        });
    });
});


// Swiper Slider
let swiperInstance;

window.addEventListener("resize", swiperSlider);
window.addEventListener("DOMContentLoaded", swiperSlider);
function swiperSlider() {
    if (innerWidth <= 660) {
        if (!swiperInstance) {
            swiperInstance = new Swiper(".mySwiper", {
                slidesPerView: 1,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                    clickable: true,
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
            });
        }
    } else {
        if (swiperInstance) {
            swiperInstance.destroy(true, true);
            swiperInstance = null;
        }
    }
}