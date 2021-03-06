@solar-cashback
Feature:
  As a website user
  I want the ensure that the solar cahsback page is accessible from navigation and functions as intended

  Scenario: Solar panel cashback page
    When I go to "home"
    Then I should see "Solar panel cashback" in the ".header " element
    When I follow "Solar panel cashback"
    Then I should see "Calculate solar panel cashback"

  Scenario: Add numbers functionality
    And I fill in "income" with "70000"
    And I fill in "bill" with "1001"
    And I fill in "solarPanels" with "5"
    And I press the "Get my cashback amount" button
    And I press the "Get my cashback amount" button
    Then I should see "Your cashback"
    And I should see "334.00"
    And I wait 3 seconds
