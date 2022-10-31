Feature: specials
  In order to attract more customers
  As a page administrator and company
  I need to be able to create specials

  Scenario: A company adds a new special
  Given I came up with the special by one get one free
  When I update my page with the new special
  Then Special is now displayed on page