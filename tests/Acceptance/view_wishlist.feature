Feature: view wishlist
	In order to view a wishlist
	As a user
	I need to click a button to view the list of products

Scenario:
	Given I am logged into my account
	And I click on my profile
	Then I am on "/Profile/index"
	And I click on "Wishlist"
	Then I am on "/Wishlist/index"
	Then I see the wishlist