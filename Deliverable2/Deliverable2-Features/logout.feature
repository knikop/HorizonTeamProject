Feature: logout
    In order to logout of my account
    As a user
    I need to click on a button to logout
 Scenario:
    Given I am logged in as a user with a password
    And I am on the main store page
    And i click "Logout"
    Then I am redirected to the main page