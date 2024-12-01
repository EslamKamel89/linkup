import "flowbite";
import { initFlowbite } from "flowbite";
import "./bootstrap";
document.addEventListener("livewire:load", initFlowbite);
document.addEventListener("livewire:updated", initFlowbite);
