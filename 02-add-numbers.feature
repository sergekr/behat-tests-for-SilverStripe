@add-numbers
Feature:
  As a website user
  I want the ensure that the add numbers page is accessible from navigation and functions as intended

  Scenario: Add numbers page
    When I go to "home"
    Then I should see "Add Numbers" in the ".header " element
    When I follow "Add Numbers"
    Then I should see "Add two numbers"

  Scenario: Add numbers functionality
    When I go to "add-numbers"
    And I fill in "numOne" with "3"
    And I fill in "numTwo" with "4"
    And I press the "Add the numbers" button
    Then I should see "Your result"
    And I should see "3 + 4 = 7"