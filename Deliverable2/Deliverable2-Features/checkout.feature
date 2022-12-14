Feature: checkout process
    In order to buy products
    As a customer
    I want to be able to buy several products
    
 Scenario:
    Given I have product with $800 price in my cart
    And I have product with $900 price
    When I go to checkout process
    Then I should see that total number of products is 2
    And my order amount is $1700