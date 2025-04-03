document.addEventListener("DOMContentLoaded", function () {
  const monthlyButton = document.getElementById("monthly");
  const quarterlyButton = document.getElementById("quarterly");
  const yearlyButton = document.getElementById("yearly");

  const DISCOUNTS = {
    monthly: 0,
    quarterly: 0.2,
    yearly: 0.5,
  };

  const MONTHS = {
    monthly: 1,
    quarterly: 3,
    yearly: 12,
  };

  function convert_numbers_to_persian(num) {
    return num.toString().replace(/\d/g, (d) => "۰۱۲۳۴۵۶۷۸۹"[d]);
  }

  function calculateDiscountedPrice(basePrice, type) {
    const months = MONTHS[type];
    const discount = DISCOUNTS[type];
    const total = basePrice * months;
    const discounted = total - total * discount;
    return {
      original: Math.round(total / months),
      discounted: Math.round(discounted / months),
    };
  }

  function calculateDiscountPercentage(originalPrice, newPrice) {
    return Math.round(((originalPrice - newPrice) / originalPrice) * 100);
  }

  function updatePrices(type) {
    const priceElements = document.querySelectorAll("._base-price");

    priceElements.forEach((priceElement) => {
      const basePrice = parseInt(
        priceElement.querySelector(".discounted-price").dataset.basePrice
      );

      const { original, discounted } = calculateDiscountedPrice(
        basePrice,
        type
      );
      const discountPercentage = calculateDiscountPercentage(
        original,
        discounted
      );

      priceElement.querySelector(".discounted-price").textContent =
        convert_numbers_to_persian(discounted.toLocaleString("fa-IR"));

      if (DISCOUNTS[type] > 0) {
        priceElement.querySelector(".original-price").textContent =
          convert_numbers_to_persian(original.toLocaleString("fa-IR"));
        priceElement.querySelector(
          ".saved-amount"
        ).textContent = `${convert_numbers_to_persian(
          discountPercentage
        )}% کمتر`;
        priceElement
          .querySelector(".discount-badge")
          .classList.remove("hidden");
        priceElement.querySelector(".discount-badge").classList.add("flex");
        priceElement.querySelector(".price-details").classList.remove("flex-1");
      } else {
        priceElement.querySelector(".original-price").textContent = "";
        priceElement.querySelector(".saved-amount").textContent = "";
        priceElement.querySelector(".discount-badge").classList.add("hidden");
        priceElement.querySelector(".discount-badge").classList.remove("flex");
        priceElement.querySelector(".price-details").classList.add("flex-1");
      }
    });
  }

  function handleButtonClick(type) {
    updatePrices(type);
    [monthlyButton, quarterlyButton, yearlyButton].forEach((btn) => {
      btn.classList.toggle("active", btn.id === type);
    });
  }

  monthlyButton.addEventListener("click", () => handleButtonClick("monthly"));
  quarterlyButton.addEventListener("click", () =>
    handleButtonClick("quarterly")
  );
  yearlyButton.addEventListener("click", () => handleButtonClick("yearly"));

  handleButtonClick("monthly");
});
