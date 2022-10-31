Feature: register
  In order to order food
  As a user
  I need to create an account

  Scenario: register as user
    Given I don't have an account
    When I make an account
    Then I can order pizzapizza