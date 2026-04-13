import defaultTheme from 'tailwindcss/defaultTheme'
/** @type {import('tailwindcss').Config} */
export default {
content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
   darkMode: 'class',
  theme: {

    extend: {

      colors: {
        primary: '#10b981', // Emerald 500
        secondary: '#0ea5e9',
        
        dark: {
            bg: '#0f172a', // Slate 900
            card: '#1e293b', // Slate 800
            text: '#f1f5f9', // Slate 100
            muted: '#94a3b8' // Slate 400
        },
         light: {
                            bg: '#f8fafc',
                            card: '#ffffff',
                            text: '#0f172a',
                            muted: '#64748b'
                        },
        teal: {
          bg: '#f8fafc', // Slate 50
          card: '#ffffff',
          text: '#0f172a',
          muted: '#64748b'
        },
         emerald: {
          500: '#10b981',
          600: '#059669',
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      }
    },
  },
  plugins: [],
}


