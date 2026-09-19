/**
 * ==========================================================================
 * FARMLINK — LOCAL FARMER MARKETPLACE
 * Frontend Interactions & UI Logic (Vanilla JavaScript)
 * ==========================================================================
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // --------------------------------------------------------------------------
  // 1. Mobile Menu Toggle
  // --------------------------------------------------------------------------
  const mobileToggle = document.getElementById('mobileToggle');
  const navMenu = document.getElementById('navMenu');

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      const isOpen = navMenu.classList.toggle('is-open');
      mobileToggle.classList.toggle('is-active');
      mobileToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    // Close menu when clicking any nav link
    const navLinks = navMenu.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('is-open');
        mobileToggle.classList.remove('is-active');
        mobileToggle.setAttribute('aria-expanded', 'false');
      });
    });

    // Close on click outside
    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
        navMenu.classList.remove('is-open');
        mobileToggle.classList.remove('is-active');
        mobileToggle.setAttribute('aria-expanded', 'false');
      }
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('is-open')) {
        navMenu.classList.remove('is-open');
        mobileToggle.classList.remove('is-active');
        mobileToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // --------------------------------------------------------------------------
  // 2. Sticky Header Elevation on Scroll
  // --------------------------------------------------------------------------
  const siteHeader = document.querySelector('.site-header');

  const handleHeaderScroll = () => {
    if (!siteHeader) return;
    if (window.scrollY > 20) {
      siteHeader.classList.add('scrolled');
    } else {
      siteHeader.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleHeaderScroll, { passive: true });
  handleHeaderScroll();

  // --------------------------------------------------------------------------
  // 3. Product Category Filtering (Tabs)
  // --------------------------------------------------------------------------
  const filterTabs = document.querySelectorAll('.tab-btn');
  const productCards = document.querySelectorAll('.product-card');

  if (filterTabs.length > 0 && productCards.length > 0) {
    filterTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        // Remove active class from all tabs
        filterTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const selectedFilter = tab.getAttribute('data-filter');

        productCards.forEach(card => {
          const cardCategory = card.getAttribute('data-category');

          if (selectedFilter === 'all' || cardCategory === selectedFilter) {
            card.style.display = 'flex';
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, 30);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'translateY(10px)';
            setTimeout(() => {
              card.style.display = 'none';
            }, 200);
          }
        });
      });
    });
  }

  // --------------------------------------------------------------------------
  // 4. Interactive "Add to Cart" Simulation
  // --------------------------------------------------------------------------
  let cartCount = 0;
  const cartBadge = document.querySelector('.cart-badge');
  const addCartButtons = document.querySelectorAll('.btn-add-cart');

  // Create Toast Container
  let toastContainer = document.querySelector('.toast-container');
  if (!toastContainer) {
    toastContainer = document.createElement('div');
    toastContainer.className = 'toast-container';
    document.body.appendChild(toastContainer);
  }

  const showToast = (title, message) => {
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.innerHTML = `
      <div class="toast-icon">
        <i class="fa-solid fa-check"></i>
      </div>
      <div class="toast-content">
        <div class="toast-title">${title}</div>
        <div class="toast-msg">${message}</div>
      </div>
    `;

    toastContainer.appendChild(toast);

    // Trigger animation
    requestAnimationFrame(() => {
      toast.classList.add('show');
    });

    // Auto remove after 3.5s
    setTimeout(() => {
      toast.classList.remove('show');
      setTimeout(() => {
        if (toast.parentNode) {
          toast.parentNode.removeChild(toast);
        }
      }, 300);
    }, 3200);
  };

  addCartButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      
      const card = btn.closest('.product-card');
      const productName = card ? card.querySelector('.product-title').innerText.trim() : 'Product';
      const priceText = card ? card.querySelector('.price-val').innerText.trim() : '';

      // Increment cart count
      cartCount += 1;
      if (cartBadge) {
        cartBadge.innerText = cartCount;
        cartBadge.classList.add('bump');
        setTimeout(() => cartBadge.classList.remove('bump'), 300);
      }

      // Temporarily show success state on button
      const originalHtml = btn.innerHTML;
      btn.innerHTML = `<i class="fa-solid fa-check"></i> Added`;
      btn.classList.add('added');
      btn.disabled = true;

      showToast('Added to Cart', `${productName} (${priceText}) added.`);

      setTimeout(() => {
        btn.innerHTML = originalHtml;
        btn.classList.remove('added');
        btn.disabled = false;
      }, 1500);
    });
  });

  // --------------------------------------------------------------------------
  // 5. Active Section Scrollspy for Navigation
  // --------------------------------------------------------------------------
  const sections = document.querySelectorAll('section[id], footer[id]');
  const navItems = document.querySelectorAll('.nav-link[href^="#"]');

  const onScrollSpy = () => {
    // When near the top of page, always mark Home as active
    if (window.scrollY < 200) {
      navItems.forEach(link => {
        link.classList.toggle('active', link.getAttribute('href') === '#home');
      });
      return;
    }

    const scrollPos = window.scrollY + 140;
    let currentId = null;

    sections.forEach(section => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      const id = section.getAttribute('id');

      if (scrollPos >= top && scrollPos < top + height) {
        currentId = id;
      }
    });

    if (currentId) {
      navItems.forEach(link => {
        link.classList.toggle('active', link.getAttribute('href') === `#${currentId}`);
      });
    }
  };

  window.addEventListener('scroll', onScrollSpy, { passive: true });
  onScrollSpy();

  // --------------------------------------------------------------------------
  // 6. Password Visibility Toggle
  // --------------------------------------------------------------------------
  const passwordToggles = document.querySelectorAll('.btn-toggle-password');
  passwordToggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
      const input = toggle.closest('.input-icon-wrap').querySelector('input');
      if (input) {
        const isPassword = input.getAttribute('type') === 'password';
        input.setAttribute('type', isPassword ? 'text' : 'password');
        const icon = toggle.querySelector('i');
        if (icon) {
          icon.classList.toggle('fa-eye', !isPassword);
          icon.classList.toggle('fa-eye-slash', isPassword);
        }
      }
    });
  });

  // --------------------------------------------------------------------------
  // 7. Role Selection Tabs (Login & Signup)
  // --------------------------------------------------------------------------
  const roleTabs = document.querySelectorAll('.role-tab-btn');
  const roleInput = document.getElementById('selectedRole');
  const customerFields = document.querySelectorAll('.customer-only-field');
  const farmerFields = document.querySelectorAll('.farmer-only-field');
  const roleTitleSpan = document.getElementById('authRoleTitle');

  roleTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      roleTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      const role = tab.getAttribute('data-role');
      if (roleInput) roleInput.value = role;

      if (roleTitleSpan) {
        roleTitleSpan.textContent = role === 'farmer' ? 'Farmer' : 'Customer';
      }

      if (customerFields.length > 0 && farmerFields.length > 0) {
        if (role === 'farmer') {
          customerFields.forEach(f => f.style.display = 'none');
          farmerFields.forEach(f => {
            f.style.display = f.classList.contains('fields-grid') ? 'grid' : 'block';
          });
        } else {
          customerFields.forEach(f => {
            f.style.display = f.classList.contains('fields-grid') ? 'grid' : 'block';
          });
          farmerFields.forEach(f => f.style.display = 'none');
        }
      }
    });
  });

  // --------------------------------------------------------------------------
  // 8. Demo Credentials Quick-Fill (For Easy Presentation Testing)
  // --------------------------------------------------------------------------
  const btnDemoCustomer = document.getElementById('btnDemoCustomer');
  const btnDemoFarmer = document.getElementById('btnDemoFarmer');
  const loginEmailInput = document.getElementById('loginEmail');
  const loginPasswordInput = document.getElementById('loginPassword');

  if (btnDemoCustomer && loginEmailInput && loginPasswordInput) {
    btnDemoCustomer.addEventListener('click', () => {
      loginEmailInput.value = 'customer@farmlink.np';
      loginPasswordInput.value = 'farmerpass123';
      const customerTab = document.querySelector('.role-tab-btn[data-role="customer"]');
      if (customerTab) customerTab.click();
      showToast('Demo Account Selected', 'Customer credentials pre-filled.');
    });
  }

  if (btnDemoFarmer && loginEmailInput && loginPasswordInput) {
    btnDemoFarmer.addEventListener('click', () => {
      loginEmailInput.value = 'farmer.ram@farmlink.np';
      loginPasswordInput.value = 'farmerpass123';
      const farmerTab = document.querySelector('.role-tab-btn[data-role="farmer"]');
      if (farmerTab) farmerTab.click();
      showToast('Demo Account Selected', 'Farmer credentials pre-filled.');
    });
  }

  // --------------------------------------------------------------------------
  // 9. Interactive Shopping Cart Page Calculations
  // --------------------------------------------------------------------------
  const cartTable = document.getElementById('cartItemList');
  const summarySubtotal = document.getElementById('summarySubtotal');
  const summaryDelivery = document.getElementById('summaryDelivery');
  const summaryTotal = document.getElementById('summaryTotal');
  const cartCardCount = document.querySelector('.cart-card-count');
  const emptyCartState = document.getElementById('emptyCartState');
  const cartContentGrid = document.getElementById('cartContentGrid');

  const recalculateCart = () => {
    if (!cartTable) return;

    let subtotal = 0;
    const itemRows = cartTable.querySelectorAll('.cart-item-row');

    if (itemRows.length === 0) {
      if (cartContentGrid) cartContentGrid.style.display = 'none';
      if (emptyCartState) emptyCartState.style.display = 'block';
      if (cartCardCount) cartCardCount.textContent = '0 items';
      if (cartBadge) cartBadge.textContent = '0';
      return;
    }

    itemRows.forEach(row => {
      const price = parseFloat(row.getAttribute('data-price')) || 0;
      const qtyInput = row.querySelector('.qty-val');
      const qty = parseInt(qtyInput ? qtyInput.value : '1', 10) || 1;
      const itemTotal = price * qty;

      const subtotalEl = row.querySelector('.cart-item-subtotal');
      if (subtotalEl) {
        subtotalEl.textContent = `Rs. ${itemTotal.toLocaleString()}`;
      }

      subtotal += itemTotal;
    });

    // Delivery fee logic: Free if subtotal >= 1000, else Rs. 60
    const deliveryFee = subtotal >= 1000 ? 0 : 60;
    const grandTotal = subtotal + deliveryFee;

    if (summarySubtotal) summarySubtotal.textContent = `Rs. ${subtotal.toLocaleString()}`;
    if (summaryDelivery) {
      summaryDelivery.textContent = deliveryFee === 0 ? 'FREE' : `Rs. ${deliveryFee}`;
    }
    if (summaryTotal) summaryTotal.textContent = `Rs. ${grandTotal.toLocaleString()}`;
    if (cartCardCount) cartCardCount.textContent = `${itemRows.length} items`;
    if (cartBadge) cartBadge.textContent = itemRows.length;
  };

  // Stepper handlers
  if (cartTable) {
    cartTable.addEventListener('click', (e) => {
      const target = e.target.closest('button');
      if (!target) return;

      const row = target.closest('.cart-item-row');
      if (!row) return;

      const qtyInput = row.querySelector('.qty-val');
      let currentQty = parseInt(qtyInput.value, 10) || 1;

      if (target.classList.contains('qty-btn-plus')) {
        currentQty += 1;
        qtyInput.value = currentQty;
        recalculateCart();
      } else if (target.classList.contains('qty-btn-minus')) {
        if (currentQty > 1) {
          currentQty -= 1;
          qtyInput.value = currentQty;
          recalculateCart();
        }
      } else if (target.classList.contains('btn-remove-item')) {
        row.style.opacity = '0';
        row.style.transform = 'translateX(20px)';
        row.style.transition = 'all 0.25s ease';
        setTimeout(() => {
          row.remove();
          recalculateCart();
          showToast('Item Removed', 'Product was removed from your cart.');
        }, 250);
      }
    });

    // Clear cart button
    const btnClearCart = document.getElementById('btnClearCart');
    if (btnClearCart) {
      btnClearCart.addEventListener('click', (e) => {
        e.preventDefault();
        if (confirm('Are you sure you want to clear all items from your cart?')) {
          cartTable.innerHTML = '';
          recalculateCart();
          showToast('Cart Cleared', 'All items have been removed.');
        }
      });
    }

    // Coupon demo button
    const btnApplyCoupon = document.getElementById('btnApplyCoupon');
    const couponInput = document.getElementById('couponInput');
    if (btnApplyCoupon && couponInput) {
      btnApplyCoupon.addEventListener('click', () => {
        const code = couponInput.value.trim().toUpperCase();
        if (code === 'FARMFRESH' || code === 'DIRECT10') {
          showToast('Coupon Applied!', '10% discount promo code applied.');
          couponInput.disabled = true;
          btnApplyCoupon.textContent = 'Applied';
          btnApplyCoupon.disabled = true;
        } else if (code.length > 0) {
          alert('Invalid promo code. Try "FARMFRESH" for the demo discount.');
        } else {
          alert('Please enter a coupon code.');
        }
      });
    }

    // Initial calculation on load
    recalculateCart();
  }
});

