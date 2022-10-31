Feature: review
  In order to give feedback to other people about the store
  As a user
  I need to be able to leave a review and/or rating

  Scenario: review pizzapizza
    Given I ordered pizza 
    When I finished eating my pizza
    Then I decide to write a review 
