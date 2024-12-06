import { intersect } from "@alpinejs/intersect";
import "flowbite";
import { initFlowbite } from "flowbite";
import Swiper from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Navigation, Pagination } from "swiper/modules";
import "./bootstrap";

// init Swiper:
const swiper = new Swiper(".swiper", {
    modules: [Navigation, Pagination],

    loop: true,

    pagination: {
        el: ".swiper-pagination",
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    scrollbar: {
        el: ".swiper-scrollbar",
    },
});
const init = () => {
    initFlowbite();
    Alpine.plugin(intersect);
    swiper = new Swiper(".swiper", {
        modules: [Navigation, Pagination],
        // direction: "vertical",
        loop: true,

        pagination: {
            el: ".swiper-pagination",
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        scrollbar: {
            el: ".swiper-scrollbar",
        },
    });
};
document.addEventListener("livewire:load", init);
document.addEventListener("livewire:updated", init);
