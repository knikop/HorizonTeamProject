Feature: add product
	In order to add a product
	As a user
	I need to be able to input a nmae, the quantity, price, and description

Scenario:
	Given I am logged into my account
	And I click on the seller's profile
	And I click on 'Add Product'
	And I input a name
	And I input the quantity
	And I input the price
	And I input the descrition on a product
	And I click 'Create'
	Then I see the product available for purchase