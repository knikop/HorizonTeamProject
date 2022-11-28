Feature: search other users
	In order to search for other users
	As a user
	I need to select a user to view

Scenario:
	Given I am logged into my account
	And I click the search users icon
	Then I am on "/Profile/allProfile"
	And I click "view this profile's wishlist"
	Then I am on "/Wishlist/getProfileWishlist/"
	And I see that user's wishlist