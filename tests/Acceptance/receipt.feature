Feature: receipt
  In order to keep better track of everything that I buy
  As a user
  I need to be able to receive an email of my receipt

  Scenario: After ordering from pizzapizza
  Given I have placed an order at pizzapizza
  When Order is confirmed by pizzapizza
  Then Receipt is emailed to me
