Feature: add to cart
	In order to add a product to the cart
	As a user
	I need to add a product to my cart

Scenario:
	Given I am logged into my account
	And I click on a product
	And I click 'Add to Cart'
	And I click on the 'Cart'
	Then I see the product in the cart