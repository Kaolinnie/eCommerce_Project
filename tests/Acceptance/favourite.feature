Feature: favourite.feature
  In order to keep track of my favourite stores
  As a user
  I need to be able to add stores to my list of favourites

  Scenario: favourite pizzapizza
    Given I really enjoy pizza from pizzapizza
    When I would like to order from them in the future
    Then I should favourite their store page