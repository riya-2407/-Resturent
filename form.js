document.getElementById('orderForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    // Fetch form values
    const itemName = document.getElementById('itemName').value;
    const quantity = parseInt(document.getElementById('quantity').value);
    const date = document.getElementById('date').value;
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const additionalItem = document.getElementById('additionalItem').value;
  
    // Calculate total amount (for demo purpose)
    const totalAmount = calculateTotalAmount(quantity);
  
    // Display order details
    document.getElementById('displayItemName').textContent = itemName;
    document.getElementById('displayQuantity').textContent = quantity;
    document.getElementById('displayDate').textContent = date;
    document.getElementById('displayName').textContent = name;
    document.getElementById('displayPhone').textContent = phone;
    document.getElementById('displayAdditionalItem').textContent = additionalItem || 'N/A';
    document.getElementById('displayTotalAmount').textContent = totalAmount.toFixed(2);
  
    // Show order details and confirmation message
    document.getElementById('orderDetails').style.display = 'block';
    document.getElementById('orderConfirmation').style.display = 'block';
  });
  
  // Function to calculate total amount (for demo purpose)
  function calculateTotalAmount(quantity) {
    const basePrice = 10; // Base price per item
    return basePrice * quantity;
  }