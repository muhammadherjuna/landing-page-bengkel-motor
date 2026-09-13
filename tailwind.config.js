/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./config.php",
    "./includes/**/*.php",
    "./partials/**/*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
      },
      colors: {
        brand: {
          50: '#EFF6FF',
          100: '#DBEAFE',
          200: '#BFDBFE',
          500: '#3B82F6',
          600: '#2563EB',
          700: '#1D4ED8',
          800: '#1E40AF',
          900: '#1E3A8A',
          950: '#0F172A',
        },
        racing: {
          red: '#EF4444',
          redDark: '#DC2626',
          yellow: '#F59E0B',
        }
      },
      boxShadow: {
        'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05), 0 2px 6px -1px rgba(0, 0, 0, 0.03)',
        'card': '0 10px 30px -5px rgba(15, 23, 42, 0.06), 0 4px 10px -2px rgba(15, 23, 42, 0.03)',
        'glow': '0 0 25px -5px rgba(37, 99, 235, 0.35)',
      }
    },
  },
  plugins: [],
}
