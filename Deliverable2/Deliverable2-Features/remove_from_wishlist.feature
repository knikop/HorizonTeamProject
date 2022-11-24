Feature: remove from wishlist
	In order to remove a product from the wishlist
	As a user
	I need to select a product to remove from my wishlist

Scenario:
	Given I am logged into my account
	And I click on my profile
	And I click on the view wishlist
	And a click on the wishlist I want
	And I click 'Remove from Wishlist'
	And I click back on the wishlist a want
	Then I dont't see the product in the wishlist