  function showTab(index) {
    const tabs = document.querySelectorAll('#PricingSelector .btn-tab');
    const panelsDesktop = document.querySelectorAll('#tab-content-wrapper-desktop .tab-panel');
    const panelsMobile = document.querySelectorAll('#tab-content-wrapper-mobile .tab-panel');

    // فعال‌سازی تب‌ها
    tabs.forEach((tab, i) => {
      tab.classList.toggle('active', i === index);
    });

    // نمایش تب در دسکتاپ
    panelsDesktop.forEach((panel, i) => {
      panel.classList.toggle('hidden', i !== index);
    });

    // نمایش تب در موبایل
    panelsMobile.forEach((panel, i) => {
      panel.classList.toggle('hidden', i !== index);
    });
  }

showTab(1);