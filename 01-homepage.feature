@homepage
Feature:
  As a website user
  I want the home page to aid me in navigation of all the various spots in the site.

  Scenario: HomePage
    When I go to "home"
    Then I should see "Welcome to SilverStripe"

  Scenario: Footer
    When I go to "home"
    Then I should see "Sara" in the ".footer " element