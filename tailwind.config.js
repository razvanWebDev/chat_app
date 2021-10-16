module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    debugScreens: {
      position: ["top", "left"],
    },
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
      maxWidth: {
        "1/4": "25%",
        "1/2": "50%",
        "3/4": "75%",
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
    require("tailwindcss-debug-screens"),
    require("tailwind-scrollbar-hide"),
    require("tailwind-scrollbar"),
    require("@tailwindcss/forms"),
  ],
};
