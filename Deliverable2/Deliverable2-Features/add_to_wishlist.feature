Feature: add to wishlist
	In order to add a product to the wishlist
	As a user
	I need to select a product to add to my wishlist

Scenario:
	Given I am logged into my account
	And I am on "Product/index/"
	And I click "Add to Wishlist"
	And I click on the profile icon
	And I click on the "Wishlist" 
	Then I am on "/Wishlist/index/"