Feature: modify cart
	In order to modify a product from the cart
	As a user
	I need to select a product in my cart

Scenario:
	Given I am logged into my account
	And I click on the "My Cart" icon
	And I click "+" or "-"
	Then I see quantity of the item increase or decrease in the cart