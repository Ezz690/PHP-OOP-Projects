<?php


class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    // TODO Generate constructor with all properties of the class
    public function __construct($id, $title, $price, $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }
    // TODO Generate getters and setters of properties
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }
    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     */
    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        return $cart->addProduct($this, $quantity);
    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        $cart->removeProduct($this);
    }
}
