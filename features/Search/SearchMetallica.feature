Feature: Search
  In order to see a word definition
  As a website user
  I need to be able to search for a word

  Scenario: Searching for a page that does exist
    Given I am on "http://google.com"
    When I fill in "q" with "Behavior Driven Development"
    #And I press "Cerca con Google"
    #Then I should see "agile software development"

