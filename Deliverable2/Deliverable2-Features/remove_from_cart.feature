Feature: remove from cart
	In order to remove a product from the cart
	As a user
	I need to select a product in my cart

Scenario:
	Given I am logged into my account
	And I click on the "Cart"
	And I click "Remove from Cart"
	And I click on the 'Cart'
	Then I don't see the product in the cart