Feature: findPageByUrl
  In order to view a page using its url
  As anyone wishing to view the page
  I need to be directed to the right page

  Scenario: find pizzapizza
    Given I would like to order from pizzapizza
    When I type in the url localhost/Page/view/pizzapizza
    Then I should be directed to the pizzapizza page