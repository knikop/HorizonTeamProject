Feature: sort price
	In order to sort the price of the products
	As a user
	I can sort the price in ascending or decscending order

Scenario:
	Given I am logged into my account
	And I am on "/Product/index"
	And I click "Sort Price"
	And I click "asc"
	Then I see everthing in ascending order