import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import { resolve } from "path";

export default defineConfig({
  plugins: [
    tailwindcss(),
  ],
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, "index.html"),
        changePassword: resolve(__dirname, "change_password.html"),
        courses: resolve(__dirname, "courses.html"),
        curricula: resolve(__dirname, "curricula.html"),
        profile: resolve(__dirname, "profile.html"),
      },
    },
  },
})