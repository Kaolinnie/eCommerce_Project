Feature: checkout
  In order to order food
  As a customer
  I need to be able to checkout with the selected food items

  Scenario: order food from pizza pizza
    Given I have "medium pepperoni pizza" with $12 price in my cart
    And I have "small fries" with $4 price in my cart
    When I go to checkout process
    Then I should see that total number of products is 2
    And my order amount is $16
