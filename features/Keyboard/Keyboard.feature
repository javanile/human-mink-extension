
  Feature: Keyboard

    Scenario: As a not registered user
              I want success visualize the login page

      Given I am on "https://www.mytextarea.com/"
      And I type "Ciao"
      And I press enter
      And I type "Ciao"
      Then I look for results
