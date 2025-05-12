# coupon-system
```markdown

A flexible e-commerce discount system built with PHP, leveraging the **Factory Method** design pattern to dynamically apply coupons and promotions.

---

## 🚀 Features

- **Three Discount Types**:
  - **Percentage Discount**: Apply percentage-based discounts (e.g., 10% off).
  - **Fixed Amount Discount**: Deduct a fixed amount from the total price (e.g., $5 off).
  - **Free Shipping Discount**: Promotional offers that allow customers to receive their orders without incurring shipping costs.
  
- **Design Patterns**:
  - **Factory Method**: Creates discount objects without exposing instantiation logic.

---

## 📦 Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/mostafaamahmoudd/coupon-system.git
   cd coupon-system
   ```

2. **Ensure PHP 8.0+** is installed:
   ```bash
   php -v
   ```

---

## 📂 File Structure

```
src/
├── Coupons/
│   ├── DiscountStrategy.php          # Strategy interface
│   ├── PercentageDiscount.php        # 10% off logic
│   ├── FixedAmountDiscount.php       # $5 off logic
│   └── SeasonalDiscount.php          # Seasonal discounts
├── Factories/
│   ├── DiscountFactory.php           # Factory interface
│   ├── PercentageDiscountFactory.php
│   ├── FixedAmountDiscountFactory.php
│   └── SeasonalDiscountFactory.php
└── Director.php               # Applies discounts
```