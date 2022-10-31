Feature: customizeItem
  In order customize food items
  As a customer
  I need to be able to alter the selected food items

  Scenario: Alter a food items
  Given I would like no peanuts because of allergies
  When I make a note of the customized items
  Then The customized item is sent on the receipt