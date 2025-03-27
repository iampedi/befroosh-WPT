module.exports = {
  content: ["./**/*.php", "./**/*.html", "./**/*.js", "./**/*.css"], // تمام فایل‌هایی که کلاس‌ها توش استفاده می‌شن
  theme: {
    extend: {
      fontFamily: {
        anjoman: ['AnjomanMaxVF', 'sans-serif'],
      },
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    rtl: true,
  },
};
