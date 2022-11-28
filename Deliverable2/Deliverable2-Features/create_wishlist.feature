Feature: create wishlist
	In order to make a wishlist
	As a user
	I need to create my wishlist

Scenario:
	Given I am logged into my account
	And I click on my profile
	Then I am on "/Profile/index"
	And I click on "Create Wishlist"
	Then I am on "/Wishlist/profileWishlist"
	Then I see the wishlist 