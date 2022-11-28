Feature: register
    In order to register an account on the website
    As a user
    I need to provide an email, password, and confirm password to create an account

 Scenario: Register an account
    Given I am on "/User/register"
    And I input an email
    And I input a password
    And I input a confirm password
    When I click "Register"
    Then I am on "/Profile/create"