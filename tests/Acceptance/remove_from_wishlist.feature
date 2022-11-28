Feature: remove from wishlist
	In order to remove a product from the wishlist
	As a user
	I need to select a product to remove from my wishlist

Scenario:
	Given I am logged into my account
	And I am on "/Profile/index"
	And I click "Wishlist"
	And I click "delete from wishlist"
	Then I dont't see the product in the wishlist