Feature: add to cart
	In order to add a product to the cart
	As a user
	I need to add a product to my cart

Scenario:
	Given I am logged into my account
	And I am on "Product/index/"
	And I click "Add to Cart"
	And I click on the "My Cart" icon
	Then I am on "/Cart/index/"