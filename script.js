// Open the Cart Sidebar
document.getElementById("cart-icon").onclick = function () {
  document.getElementById("cart-sidebar").classList.add("open");
};

// Close the Cart Sidebar
document.getElementById("close-cart").onclick = function () {
  document.getElementById("cart-sidebar").classList.remove("open");
};

// Add to Cart Logic
const addToCartButtons = document.querySelectorAll(".btn");
const cartItemsContainer = document.getElementById("cart-items");

addToCartButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const product = this.closest(".card");
    const productName = product.querySelector("h2").textContent;
    const productPrice = product
      .querySelector("h3")
      .textContent.replace("$", "")
      .trim();
    const productImage = product.querySelector(".image img").src;

    const cartItem = document.createElement("div");
    cartItem.classList.add("cart-item");
    cartItem.innerHTML = `
            <img src="${productImage}" alt="${productName}" style="width: 50px; height: auto;">
            <span>${productName}</span>
            <span class="cart-item-price">${productPrice}</span>
        `;

    cartItemsContainer.appendChild(cartItem);
  });
});

// Checkout Logic
document.getElementById("checkout-btn").onclick = function () {
  const cartItemPrices = document.querySelectorAll(".cart-item-price");
  let total = 0;

  cartItemPrices.forEach((priceElement) => {
    const price = parseFloat(priceElement.textContent);
    total += price;
  });

  // Display the total amount in the sidebar
  const totalAmountElement = document.createElement("div");
  totalAmountElement.classList.add("total-amount");
  totalAmountElement.textContent = `Total: $${total.toFixed(2)}`;

  const footer = document.querySelector(".cart-sidebar .sidebar-footer");
  footer.appendChild(totalAmountElement);

  // Confirm checkout and clear cart
  const confirmCheckout = confirm(
    `Your total is $${total.toFixed(
      2
    )}. Do you want to proceed with the checkout?`
  );

  if (confirmCheckout) {
    // Clear the cart items after confirmation
    cartItemsContainer.innerHTML = "";

    // Remove the total amount element from the footer
    const totalAmountElement = document.querySelector(".total-amount");
    if (totalAmountElement) {
      totalAmountElement.remove();
    }

    alert("Thank you for your purchase!");
  }
};
