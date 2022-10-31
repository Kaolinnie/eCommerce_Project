Feature: storeFilters
  In order to find a store through keywords
  As a user
  I need to be able to search for stores with filters

  Scenario: filter stores by low price
    Given I would like to order out at some restaurant
    And I have a budget of $20
    Then I could search for stores with lower price ranges

  Scenario: filter stores by high price
    Given I would like to order out at some restaurant
    And I have a budget of $100
    Then I could search for stores with higher price ranges

  Scenario: filter stores by luxury price
    Given I would like to order out at some restaurant
    And I have a budget of $1000
    Then I could search for stores with luxury price ranges