/** @type {import('tailwindcss').Config} */
import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      './app/Filament/**/*.php',
      './resources/views/filament/**/*.blade.php',
      './vendor/filament/**/*.blade.php',
    ],
    theme: {
      extend: {
        boxShadow: {
            smooth: "0px 1px 5px rgba(0, 0, 0, 0.3)",
        },
      },
    },
    plugins: [],
  }
