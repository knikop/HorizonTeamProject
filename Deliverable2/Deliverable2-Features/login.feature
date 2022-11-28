Feature: login
    In order to login into the website
    As a user
    I need to provide a username and password to login

 Scenario: 
    Given I am on "/User/index"
    And I input "admin@email.com" for "email"
    And I input "1" for "password"
    And i click "Login"
    Then I am on "/Product/index"