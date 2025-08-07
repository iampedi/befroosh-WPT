/** @type {import("prettier").Config} */
module.exports = {
  plugins: [require("prettier-plugin-tailwindcss")],
  tailwindFunctions: ["clsx", "cva", "tw"], // اختیاریه، اگه از توابع سفارشی استفاده می‌کنی
  semi: false,
  singleQuote: true,
  tabWidth: 2,
  printWidth: 100,
};
