Feature: searchStore
  In order to find what kind of food I would like to order
  As a customer
  I need to be able to search for a store

  Scenario: search for pizzapizza
    Given I wish to order from pizzapizza
    When I go to the search bar and enter pizzapizza
    Then the pizzapizza page should open