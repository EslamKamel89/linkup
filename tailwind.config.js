import forms from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                logo: ["Pacifico"],
            },
            colors: {
                primary: "#1DA1F2", // Vibrant blue for primary actions (e.g., buttons, links)
                secondary: "#17A2B8", // Calm teal for secondary actions or highlights
                success: "#28A745", // Positive feedback (e.g., success messages)
                info: "#117A8B", // Information highlights
                warning: "#FFC107", // Warnings or attention-grabbing areas
                danger: "#DC3545", // Errors or negative actions
                light: "#F8F9FA", // Backgrounds or subtle highlights
                dark: "#343A40", // Text and prominent headings

                // Custom Accent Colors
                accent_1: "#FF4500", // Bright orange for calls to action or notifications
                accent_2: "#FF69B4", // Pink for creative, user_friendly highlights
                accent_3: "#8A2BE2", // Purple for premium or special features

                // Text Colors
                text_primary: "#212529", // Main text color
                text_secondary: "#6C757D", // Secondary or muted text
                text_light: "#FFFFFF", // For text on dark backgrounds

                // Background Colors
                background_default: "#FFFFFF", // Main background
                background_light: "#F7FAFC", // Subtle sections
                background_dark: "#1A202C", // Dark mode background
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
