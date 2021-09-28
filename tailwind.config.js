module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "#176083",
          transparent: "#176083f2",
        },
      },
      height: {
        "chat-panel-height": "calc(100vh - 11rem)",
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ["active"],
      opacity: ["active"],
    },
  },
  plugins: [
    require("tailwind-scrollbar-hide"),
    require("tailwind-scrollbar"),
    require("@tailwindcss/forms"),
  ],
};
