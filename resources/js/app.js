import { intersect } from "@alpinejs/intersect";
import "flowbite";
import { initFlowbite } from "flowbite";
import "./bootstrap";

const init = () => {
    initFlowbite();
    Alpine.plugin(intersect);
};
document.addEventListener("livewire:load", init);
document.addEventListener("livewire:updated", init);
